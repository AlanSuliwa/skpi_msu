@extends('layouts.app')

@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Jurusan</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="">Jurusan & Program Studi</a></li>
                </ol>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
@endsection

@section('content')
    @hasanyrole('Super Admin|Akademik')
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="header-title">
                                        <h4 class="card-title">Manajemen Jurusan & Program Studi</h4>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <a class="btn btn-sm btn-outline-info" href="{{ route('department.create') }}"><i
                                                class="fa fa-plus"></i> Tambah Data</a>
                                    </div>

                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="data-table" class="table table-striped table-bordered" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Aksi</th>
                                                    <th>Jurusan</th>
                                                    <th>Program Studi</th>
                                                    <th>Diinput pada</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endhasanyrole

    @role('Mahasiswa')
        @if (!empty($data))
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-1 ui-sortable-handle" style="cursor: move;">
                                <h3 class="text-center"><i class="fa fa-building"></i> Profil Program Studi
                                    {{ $data->study_program }}
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
                                            <td style="width:200px;padding-bottom:10px;vertical-align:top;">Nama Program Studi
                                            </td>
                                            <td style="width:10px;padding-bottom:10px;vertical-align:top;">:</td>
                                            <td style="padding-bottom:10px;vertical-align:top;">{{ $data->study_program }}</td>
                                        </tr>
                                        <tr>
                                            <td style="width:200px;padding-bottom:10px;vertical-align:top;">Ketua Jurusan</td>
                                            <td style="width:10px;padding-bottom:10px;vertical-align:top;">:</td>
                                            <td style="padding-bottom:10px;vertical-align:top;">{{ $data->department_head }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width:200px;padding-bottom:10px;vertical-align:top;">Sekretaris Jurusan
                                            </td>
                                            <td style="width:10px;padding-bottom:10px;vertical-align:top;">:</td>
                                            <td style="padding-bottom:10px;vertical-align:top;">
                                                {{ $data->department_secretary }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width:200px;padding-bottom:10px;vertical-align:top;">Deskripsi Singkat
                                            </td>
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
                                            <td style="width:200px;padding-bottom:10px;vertical-align:top;">Kompetisi Pendukung
                                            </td>
                                            <td style="width:10px;padding-bottom:10px;vertical-align:top;">:</td>
                                            <td style="padding-bottom:10px;vertical-align:top;vertical-align:top;">
                                                <p>{{ $data->support_competency }}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width:200px;padding-bottom:10px;vertical-align:top;">Kompetisi Lainnya
                                            </td>
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
        @else
            <h5 class="text-center">Data Belum Tersedia</h5>
        @endif
    @endrole
@endsection

@section('js_after')
    @hasanyrole('Super Admin|Akademik')
        <script>
            $(document).ready(function() {
                getDatatable();
            });

            let data_table = "";

            function getDatatable() {
                data_table = $("#data-table").DataTable({
                    ajax: "{{ route('department.datatable') }}",
                    serverSide: true,
                    processing: true,
                    destroy: true,
                    order: [
                        [4, 'desc']
                    ],
                    columns: [{
                            "data": null,
                            "sortable": false,
                            searchable: false,
                            render: function(data, type, row, meta) {
                                return meta.row + meta.settings._iDisplayStart + 1;
                            }
                        },
                        {
                            name: 'action',
                            data: 'action'
                        },
                        {
                            name: 'name',
                            data: 'name'
                        },
                        {
                            name: 'study_program',
                            data: 'study_program'
                        },
                        {
                            name: 'created_at',
                            data: 'created_at'
                        },
                    ],
                });
            }
        </script>
    @endhasanyrole

    @role('Mahasiswa')
    @endrole
@endsection
