<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\Supervisor;
use App\Models\Student;
use App\Models\User;
use App\Models\IntershipCertificateFile;
use App\Models\OrganizationalExperinceCertificateFile;
use App\Models\AwardCertificateFile;
use App\Models\SkillCertificateFile;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class StudentController extends Controller
{
    public function index()
    {
        if (Auth::user()->hasRole('Mahasiswa')) {
            $user_id = Auth::user()->id;
            $user = User::where('id', $user_id)->first();

            $data = Student::where('user_id', $user_id)->first();

            // IntershipCertificateFile
            $IntershipCertificateFiles = IntershipCertificateFile::where('user_id', $user_id)->get();

            //OrganizationalExperinceCertificateFile
            $OrganizationalExperinceCertificateFiles = OrganizationalExperinceCertificateFile::where('user_id', $user_id)->get();

            //AwardCertificateFile
            $AwardCertificateFiles = AwardCertificateFile::where('user_id', $user_id)->get();

            //SkillCertificateFile
            $SkillCertificateFiles = SkillCertificateFile::where('user_id', $user_id)->get();


            return view('students.index', compact('data', 'IntershipCertificateFiles', 'OrganizationalExperinceCertificateFiles', 'AwardCertificateFiles', 'SkillCertificateFiles'));
        } else {
            // Confirm Delete Alert
            $title = 'Hapus Data!';
            $text = "Apakah yakin ingin menghapus data? Data yang dihapus tidak dapat dikembalikan";
            confirmDelete($title, $text);

            return view('students.index');
        }
    }

    public function datatable()
    {
        $model = Student::query()
            ->orderBy('name', 'asc');

        return DataTables::of($model)
            ->addColumn('action', function ($data) {
                $url_edit = route('student.edit', Crypt::encrypt($data->id));
                $url_show = route('student.show', Crypt::encrypt($data->id));
                $url_delete = route('student.destroy', Crypt::encrypt($data->id));

                $btn = "<div class='btn-group'>";
                $btn .= "<a href='$url_show' class = 'btn btn-outline-primary btn-sm text-nowrap'><i class='fas fa-eye mr-2'></i> Lihat</a>";
                $btn .= "<a href='$url_edit' class = 'btn btn-outline-info btn-sm text-nowrap'><i class='fas fa-edit mr-2'></i> Edit</a>";
                $btn .= "<a href='$url_delete' class = 'btn btn-outline-danger btn-sm text-nowrap' data-confirm-delete='true'><i class='fas fa-trash mr-2'></i> Hapus</a>";

                $btn .= "</div>";
                return $btn;
            })
            ->toJson();
    }

    public function index_msu()
    {

            // Confirm Delete Alert
            $title = 'Hapus Data!';
            $text = "Apakah yakin ingin menghapus data? Data yang dihapus tidak dapat dikembalikan";
            confirmDelete($title, $text);

            return view('students.index_msu');

    }

    public function datatable_msu()
    {
        $model = Student::query()
             ->where('degree', 'msu')
            ->orderBy('name', 'asc');

        return DataTables::of($model)
            ->addColumn('action', function ($data) {
                $url_edit = route('student.edit', Crypt::encrypt($data->id));
                $url_show = route('student.show', Crypt::encrypt($data->id));
                $url_delete = route('student.destroy', Crypt::encrypt($data->id));

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
        $students = User::role('Mahasiswa')->get();
        $departments = Department::select('id', 'name', 'study_program')->get();

        return view('students.add', compact('students', 'departments'));
    }

    public function edit($id)
    {
        $id = Crypt::decrypt($id);

        $data = Student::find($id);

        $supervisors = Supervisor::all();

        return view('students.edit', compact('data', 'supervisors'));
    }

    public function show($id)
    {
        $id = Crypt::decrypt($id);

        $data = Student::find($id);

        return view('students.show', compact('data'));
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            // Validate Data
            $request->validate([
                'user_id' => 'required',
                'department' => 'required',
                'study_program' => 'required',
                'nim' => 'required',
                'degree' => 'required',
            ]);

            // Create Data
            $input = $request->all();
            $user_id =  Crypt::decrypt($request->user_id);
            $input['user_id'] = $user_id;

            $student = Student::where('user_id', $user_id)->first();

            if ($student) {
                DB::rollBack();

                Alert::toast('Akun sudah terpakai!', 'error');
                return redirect()->back()->withInput();
            }

            $student = Student::create($input);

            $user = User::where('id', $user_id)->first();
            $user->update([
                'department' => $student->department,
                'study_program' => $student->study_program,
            ]);

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Disimpan', 'success');
            return redirect()->route('student.index');
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
            $student = Student::find($id);

            // Validate Data
            $request->validate([
                'department' => 'required',
                'study_program' => 'required',
                'nim' => 'required',
                'degree' => 'required',
                'birth_place' => 'required',
                'birth_date' => 'required'
            ]);

            // Create Data
            $input = $request->all();

            $student->update($input);

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Disimpan', 'success');
            return redirect()->route('student.index');
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Tidak Tersimpan', 'error');
            return redirect()->back()->with('error', 'Data Tidak Berhasil Disimpan' . $e->getMessage());
        }
    }

    public function update_data($id, Request $request)
    {
        try {
            DB::beginTransaction();

            $id = Crypt::decrypt($id);
            $student = Student::find($id);

            // Create Data
            $input = $request->all();

            // Save File
            if ($file = $request->file('certificate_file')) {
                $destinationPath = 'assets/files/';
                $fileName = "Ijazah" . "_" . date('YmdHis') . "." . $file->getClientOriginalExtension();
                $file->move($destinationPath, $fileName);
                $input['certificate_file'] = $fileName;
            }

            $student->update($input);

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Disimpan', 'success');
            return redirect()->route('student.index');
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Tidak Tersimpan', 'error');
            return redirect()->back()->withInput()->with('error', 'Data Tidak Berhasil Disimpan' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            // Delete Data
            $id = Crypt::decrypt($id);
            $student = Student::find($id);

            $student->delete();

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Dihapus', 'success');
            return redirect()->route('student.index');
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Gagal Dihapus', 'error');
            return redirect()->back()->with('error', 'Data Tidak Berhasil Dihapus' . $e->getMessage());
        }
    }

    public function report($id)
    {
        $id = Crypt::decrypt($id);
        $data = Student::find($id);

        $pdf = PDF::loadview('students.report', ['data' => $data]);

        return $pdf->stream('Surat Keterangan Pendamping Ijazah.pdf');
    }
}
