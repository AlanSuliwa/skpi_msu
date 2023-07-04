<?php

namespace App\Http\Controllers;
use App\Models\StudyProgram;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Crypt;

class StudyProgramController extends Controller
{

    public function index (){
        // Confirm Delete Alert
        $title = 'Hapus Data!';
        $text = "Apakah yakin ingin menghapus data? Data yang dihapus tidak dapat dikembalikan";
        confirmDelete($title, $text);

        // $roles = Role::orderBy('id', 'DESC')->paginate(5);
        return view('studyprograms.index');
    }
}
