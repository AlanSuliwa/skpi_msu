<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supervisor;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Carbon;
use Yajra\DataTables\DataTables;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class SupervisorController extends Controller
{
    public function index()
    {
        // Confirm Delete Alert
        $title = 'Hapus Data!';
        $text = "Apakah yakin ingin menghapus data? Data yang dihapus tidak dapat dikembalikan";
        confirmDelete($title, $text);

        return view('supervisors.index');
    }

    public function datatable()
    {
        $model = Supervisor::query()
            ->orderBy('name', 'asc');

        return DataTables::of($model)
            ->addColumn('action', function ($data) {
                $url_edit = route('supervisor.edit', Crypt::encrypt($data->id));
                $url_delete = route('supervisor.destroy', Crypt::encrypt($data->id));

                $btn = "<div class='btn-group'>";
                $btn .= "<a href='$url_edit' class = 'btn btn-outline-info btn-sm text-nowrap'><i class='fas fa-edit mr-2'></i> Edit</a>";
                $btn .= "<a href='$url_delete' class = 'btn btn-outline-danger btn-sm text-nowrap' data-confirm-delete='true'><i class='fas fa-trash mr-2'></i> Hapus</a>";

                $btn .= "</div>";
                return $btn;
            })
            ->toJson();
    }

    public function create()
    {
        return view('supervisors.add');
    }

    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        $data = Supervisor::find($id);

        return view('supervisors.edit', compact('data'));
    }

    public function show($id)
    {
        $id = Crypt::decrypt($id);
        $data = Supervisor::find($id);

        return view('supervisors.show', compact('data'));
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            // Validate Data
            $request->validate([
                'name' => 'required',
                'department' => 'required',
                'study_program' => 'required',
                'degree' => 'required',
            ]);

            // Create Data
            $input = $request->all();

            Supervisor::create($input);

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Disimpan', 'success');
            return redirect()->route('supervisor.index');
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
                'department' => 'required',
                'study_program' => 'required',
                'degree' => 'required',
            ]);

            // Update Data
            $input = $request->all();

            $supervisor = Supervisor::find($id);

            $supervisor->update($input);

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Diperbarui', 'success');
            return redirect()->route('supervisor.index');
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
            $supervisor = Supervisor::find($id);

            $supervisor->delete();

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Dihapus', 'success');
            return redirect()->route('supervisor.index');
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Gagal Dihapus', 'error');
            return redirect()->back()->with('error', 'Data Tidak Berhasil Dihapus' . $e->getMessage());
        }
    }
}
