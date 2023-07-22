<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Yajra\DataTables\DataTables;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;


class DepartmentController extends Controller
{
    public function index()
    {
        if (Auth::user()->hasRole('Mahasiswa')) {

        } else {
            // Confirm Delete Alert
            $title = 'Hapus Data!';
            $text = "Apakah yakin ingin menghapus data? Data yang dihapus tidak dapat dikembalikan";
            confirmDelete($title, $text);

            return view('departments.index');
        }
    }

    public function datatable()
    {
        $model = Department::query();

        return DataTables::of($model)
            ->editColumn('created_at', function ($data) {
                $formatedDate = Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->translatedFormat('d F Y - H:i');
                return $formatedDate;
            })
            ->addColumn('action', function ($data) {
                $url_edit = route('department.edit', Crypt::encrypt($data->id));
                $url_show = route('department.show', Crypt::encrypt($data->id));
                $url_delete = route('department.destroy', Crypt::encrypt($data->id));

                $btn = "<div class='btn-group'>";
                $btn .= "<a href='$url_show' class = 'btn btn-outline-primary btn-sm text-nowrap'><i class='fas fa-eye mr-2'></i> Lihat</a>";
                $btn .= "<a href='$url_edit' class = 'btn btn-outline-info btn-sm text-nowrap'><i class='fas fa-edit mr-2'></i> Edit</a>";
                $btn .= "<a href='$url_delete' class = 'btn btn-outline-danger btn-sm text-nowrap' data-confirm-delete='true'><i class='fas fa-trash mr-2'></i> Hapus</a>";

                $btn .= "</div>";
                return $btn;
            })
            ->toJson();
    }

    public function create()
    {
        return view('departments.add');
    }

    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        $data = Department::find($id);

        return view('departments.edit', compact('data'));
    }

    public function show($id)
    {
        $id = Crypt::decrypt($id);
        $data = Department::find($id);

        return view('departments.show', compact('data'));
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            // Validate Data
            $request->validate([
                'name' => 'required',
                'study_program' => 'required',
                'department_head' => 'required',
                'department_secretary' => 'required',
            ]);

            // Create Data
            $input = $request->all();

            Department::create($input);

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Disimpan', 'success');
            return redirect()->route('department.index');
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Tidak Tersimpan', 'error');
            return redirect()->back()->with('error', 'Data Tidak Berhasil Disimpan' . $e->getMessage());
        }
    }

    public function update($id, Request $request)
    {
        try {
            DB::beginTransaction();

            $id = Crypt::decrypt($id);

            // Validate Data
            $request->validate([
                'name' => 'required',
                'study_program' => 'required',
                'department_head' => 'required',
                'department_secretary' => 'required',
            ]);

            // Update Data
            $input = $request->all();

            $department = Department::find($id);

            $department->update($input);

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Diperbarui', 'success');
            return redirect()->route('department.index');
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Gagal Diperbarui', 'error');
            return redirect()->back()->with('error', 'Data Tidak Berhasil Diperbarui' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            // Delete Data
            $id = Crypt::decrypt($id);
            $Department = Department::find($id);

            $Department->delete();

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Dihapus', 'success');
            return redirect()->route('department.index');
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Gagal Dihapus', 'error');
            return redirect()->back()->with('error', 'Data Tidak Berhasil Dihapus' . $e->getMessage());
        }
    }
}
