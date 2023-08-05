<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SkillCertificateFile;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Carbon;


class SkillCertificateController extends Controller
{

    public function index()
    {
        // Confirm Delete Alert
        $title = 'Hapus Data!';
        $text = "Apakah yakin ingin menghapus data? Data yang dihapus tidak dapat dikembalikan";
        confirmDelete($title, $text);

        return view('skill_certificate.index');
    }

    public function datatable()
    {
        $model = SkillCertificateFile::query();

        return DataTables::of($model)
            ->editColumn('created_at', function ($data) {
                $formatedDate = Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->translatedFormat('d F Y - H:i');
                return $formatedDate;
            })
            ->addColumn('student_name', function ($data) {
                $student = Student::where('user_id', $data->user_id)->first();
                $student_name = $student->name;
                return $student_name;
            })
            ->addColumn('action', function ($data) {
                $url_verification = route('skill_certificate.verification  ', Crypt::encrypt($data->id));

                $btn = "<div class='btn-group'>";
                $btn .= "<a href='$url_verification' class = 'btn btn-outline-info btn-sm text-nowrap'><i class='fas fa-edit mr-2'></i> Edit</a>";

                $btn .= "</div>";
                return $btn;
            })
            ->toJson();
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            // Validate Data
            $request->validate([
                'indonesian_title' => 'required',
                'english_title' => 'required',
                'institution' => 'required',
                'file' => 'mimes:pdf|max:1024',
            ]);

            // Create Data
            $input = $request->all();

            // Save Image
            if ($file = $request->file('file')) {
                $destinationPath = 'assets/files/';
                $fileName = "Prestasi Penghargaan" . "_" . date('YmdHis') . "." . $file->getClientOriginalExtension();
                $file->move($destinationPath, $fileName);
                $input['file'] = $fileName;
            }

            $input['status'] = SkillCertificateFile::STATUS_NOT_VALIDATE;
            $input['user_id'] = Auth::user()->id;
            SkillCertificateFile::create($input);

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Disimpan', 'success');
            return redirect()->back();
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

            $SkillCertificateFile = SkillCertificateFile::find($id);

            $SkillCertificateFile->update($input);

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Diperbarui', 'success');
            return redirect()->back();
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
            $SkillCertificateFile = SkillCertificateFile::find($id);
            $SkillCertificateFile->delete();

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Dihapus', 'success');
            return redirect()->back();
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Gagal Dihapus', 'error');
            return redirect()->back()->with('error', 'Data Tidak Berhasil Dihapus' . $e->getMessage());
        }
    }
}
