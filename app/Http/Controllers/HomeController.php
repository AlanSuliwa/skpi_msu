<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AwardCertificateFile;
use App\Models\IntershipCertificateFile;
use App\Models\OrganizationalExperinceCertificateFile;
use App\Models\SkillCertificateFile;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->hasRole('Mahasiswa')) {
            $user_id = Auth::user()->id;
            // Total Data
            $totalAwardCertificateFile = AwardCertificateFile::all()->where('user_id', $user_id)->count();
            $totalIntershipCertificateFile = IntershipCertificateFile::all()->where('user_id', $user_id)->count();
            $totalOrganizationalExperinceCertificateFile = OrganizationalExperinceCertificateFile::all()->where('user_id', $user_id)->count();
            $totalSkillCertificateFile = SkillCertificateFile::all()->where('user_id', $user_id)->count();
            $totalAllSertificate = $totalAwardCertificateFile + $totalIntershipCertificateFile + $totalOrganizationalExperinceCertificateFile + $totalSkillCertificateFile;

            // Total Tervalidasi
            $totalValidateAwardCertificateFile = AwardCertificateFile::where('status', AwardCertificateFile::STATUS_VALIDATE)->where('user_id', $user_id)->get()->count();
            $totalValidateIntershipCertificateFile = IntershipCertificateFile::where('status', IntershipCertificateFile::STATUS_VALIDATE)->where('user_id', $user_id)->get()->count();
            $totalValidateOrganizationalExperinceCertificateFile = OrganizationalExperinceCertificateFile::where('status', OrganizationalExperinceCertificateFile::STATUS_VALIDATE)->where('user_id', $user_id)->get()->count();
            $totalValidateSkillCertificateFile = SkillCertificateFile::where('status', SkillCertificateFile::STATUS_VALIDATE)->where('user_id', $user_id)->get()->count();
            $totalValidateSertficate = $totalValidateAwardCertificateFile + $totalValidateIntershipCertificateFile + $totalValidateOrganizationalExperinceCertificateFile + $totalValidateSkillCertificateFile;

            // Total Belum Validasi
            $totalNotValidateAwardCertificateFile = AwardCertificateFile::where('status', AwardCertificateFile::STATUS_NOT_VALIDATE)->where('user_id', $user_id)->get()->count();
            $totalNotValidateIntershipCertificateFile = IntershipCertificateFile::where('status', IntershipCertificateFile::STATUS_NOT_VALIDATE)->where('user_id', $user_id)->get()->count();
            $totalNotValidateOrganizationalExperinceCertificateFile = OrganizationalExperinceCertificateFile::where('status', OrganizationalExperinceCertificateFile::STATUS_NOT_VALIDATE)->where('user_id', $user_id)->get()->count();
            $totalNotValidateSkillCertificateFile = SkillCertificateFile::where('status', SkillCertificateFile::STATUS_NOT_VALIDATE)->where('user_id', $user_id)->get()->count();
            $totalNotValidateSertficate = $totalNotValidateAwardCertificateFile + $totalNotValidateIntershipCertificateFile + $totalNotValidateOrganizationalExperinceCertificateFile + $totalNotValidateSkillCertificateFile;
        } else {
            // Total Data
            $totalAwardCertificateFile = AwardCertificateFile::all()->count();
            $totalIntershipCertificateFile = IntershipCertificateFile::all()->count();
            $totalOrganizationalExperinceCertificateFile = OrganizationalExperinceCertificateFile::all()->count();
            $totalSkillCertificateFile = SkillCertificateFile::all()->count();
            $totalAllSertificate = $totalAwardCertificateFile + $totalIntershipCertificateFile + $totalOrganizationalExperinceCertificateFile + $totalSkillCertificateFile;

            // Total Tervalidasi
            $totalValidateAwardCertificateFile = AwardCertificateFile::where('status', AwardCertificateFile::STATUS_VALIDATE)->get()->count();
            $totalValidateIntershipCertificateFile = IntershipCertificateFile::where('status', IntershipCertificateFile::STATUS_VALIDATE)->get()->count();
            $totalValidateOrganizationalExperinceCertificateFile = OrganizationalExperinceCertificateFile::where('status', OrganizationalExperinceCertificateFile::STATUS_VALIDATE)->get()->count();
            $totalValidateSkillCertificateFile = SkillCertificateFile::where('status', SkillCertificateFile::STATUS_VALIDATE)->get()->count();
            $totalValidateSertficate = $totalValidateAwardCertificateFile + $totalValidateIntershipCertificateFile + $totalValidateOrganizationalExperinceCertificateFile + $totalValidateSkillCertificateFile;

            // Total Belum Validasi
            $totalNotValidateAwardCertificateFile = AwardCertificateFile::where('status', AwardCertificateFile::STATUS_NOT_VALIDATE)->get()->count();
            $totalNotValidateIntershipCertificateFile = IntershipCertificateFile::where('status', IntershipCertificateFile::STATUS_NOT_VALIDATE)->get()->count();
            $totalNotValidateOrganizationalExperinceCertificateFile = OrganizationalExperinceCertificateFile::where('status', OrganizationalExperinceCertificateFile::STATUS_NOT_VALIDATE)->get()->count();
            $totalNotValidateSkillCertificateFile = SkillCertificateFile::where('status', SkillCertificateFile::STATUS_NOT_VALIDATE)->get()->count();
            $totalNotValidateSertficate = $totalNotValidateAwardCertificateFile + $totalNotValidateIntershipCertificateFile + $totalNotValidateOrganizationalExperinceCertificateFile + $totalNotValidateSkillCertificateFile;
        }

        return view('home', compact('totalAllSertificate', 'totalValidateSertficate', 'totalNotValidateSertficate'));
    }

    public function institution()
    {
        return view('institutionalprofiles.index');
    }
}
