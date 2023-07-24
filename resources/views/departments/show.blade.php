@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-1 ui-sortable-handle" style="cursor: move;">
                        <h3 class="text-center"><i class="fa fa-building"></i> Profil Program Studi {{ $data->study_program }}
                        </h3>
                    </div>
                    <div class="card-body">
                        <table border="0">
                            <tbody>
                                <tr>
                                    <td style="width:200px;padding-bottom:10px;vertical-align:top;">Nama Jurusan</td>
                                    <td style="width:10px;padding-bottom:10px;vertical-align:top;">:</td>
                                    <td style="padding-bottom:10px;vertical-align:top;">{{ $data->name }}</td>
                                </tr>
                                <tr>
                                    <td style="width:200px;padding-bottom:10px;vertical-align:top;">Nama Program Studi</td>
                                    <td style="width:10px;padding-bottom:10px;vertical-align:top;">:</td>
                                    <td style="padding-bottom:10px;vertical-align:top;">{{ $data->study_program }}</td>
                                </tr>
                                <tr>
                                    <td style="width:200px;padding-bottom:10px;vertical-align:top;">Ketua Jurusan</td>
                                    <td style="width:10px;padding-bottom:10px;vertical-align:top;">:</td>
                                    <td style="padding-bottom:10px;vertical-align:top;">{{ $data->department_head }}</td>
                                </tr>
                                <tr>
                                    <td style="width:200px;padding-bottom:10px;vertical-align:top;">Sekretaris Jurusan</td>
                                    <td style="width:10px;padding-bottom:10px;vertical-align:top;">:</td>
                                    <td style="padding-bottom:10px;vertical-align:top;">{{ $data->department_secretary }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:200px;padding-bottom:10px;vertical-align:top;">Deskripsi Singkat</td>
                                    <td style="width:10px;padding-bottom:10px;vertical-align:top;">:</td>
                                    <td style="padding-bottom:10px;vertical-align:top;vertical-align:top;">
                                        <p>{{ $data->brief_description }}
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:200px;padding-bottom:10px;vertical-align:top;">Visi</td>
                                    <td style="width:10px;padding-bottom:10px;vertical-align:top;">:</td>
                                    <td style="padding-bottom:10px;vertical-align:top;vertical-align:top;">
                                        <p>{{ $data->vision }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:200px;padding-bottom:10px;vertical-align:top;">Misi</td>
                                    <td style="width:10px;padding-bottom:10px;vertical-align:top;">:</td>
                                    <td style="padding-bottom:10px;vertical-align:top;vertical-align:top;">
                                        <p>{{ $data->mision }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:200px;padding-bottom:10px;vertical-align:top;">Kompetisi Utama</td>
                                    <td style="width:10px;padding-bottom:10px;vertical-align:top;">:</td>
                                    <td style="padding-bottom:10px;vertical-align:top;vertical-align:top;">
                                        <p>{{ $data->main_competency }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:200px;padding-bottom:10px;vertical-align:top;">Kompetisi Pendukung</td>
                                    <td style="width:10px;padding-bottom:10px;vertical-align:top;">:</td>
                                    <td style="padding-bottom:10px;vertical-align:top;vertical-align:top;">
                                        <p>{{ $data->support_competency }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:200px;padding-bottom:10px;vertical-align:top;">Kompetisi Lainnya</td>
                                    <td style="width:10px;padding-bottom:10px;vertical-align:top;">:</td>
                                    <td style="padding-bottom:10px;vertical-align:top;vertical-align:top;">
                                        <p>{{ $data->other_competency }}</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
