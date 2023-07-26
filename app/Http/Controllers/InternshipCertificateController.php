<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IntershipCertificateFile;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;


class InternshipCertificateController extends Controller
{
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            // Validate Data
            $request->validate([
                'indonesian_title' => 'required',
                'english_title' => 'required',
                'institution' => 'required',
                'internship_period' => 'required',
                'file' => 'mimes:pdf|max:1024',
            ]);

            // Create Data
            $input = $request->all();

            // Save Image
            if ($file = $request->file('file')) {
                $destinationPath = 'assets/files/';
                $fileName = "Sertifikat Magang" . "_" . date('YmdHis') . "." . $file->getClientOriginalExtension();
                $file->move($destinationPath, $fileName);
                $input['file'] = $fileName;
            }

            $input['status'] = IntershipCertificateFile::STATUS_NOT_VALIDATE;
            $input['user_id'] = Auth::user()->id;
            IntershipCertificateFile::create($input);

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

            $IntershipCertificateFile = IntershipCertificateFile::find($id);

            $IntershipCertificateFile->update($input);

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
            $IntershipCertificateFile = IntershipCertificateFile::find($id);

            $IntershipCertificateFile->delete();

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
