@extends('layouts.app')

@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Mahasiswa MSU</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="">Mahasiswa MSU</a></li>
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
                                        <h4 class="card-title">Manajemen Mahasiswa MSU</h4>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <a class="btn btn-sm btn-outline-info" href="{{ route('student.create') }}"><i
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
                                                    <th>Nama</th>
                                                    <th>NPM</th>
                                                    <th>Jurusan</th>
                                                    <th>Program Studi</th>
                                                    <th>Jenjang</th>
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
                    ajax: "{{ route('student.datatable_msu') }}",
                    serverSide: true,
                    processing: true,
                    destroy: true,
                    columns: [{
                            data: null,
                            sortable: false,
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
                            name: 'nim',
                            data: 'nim'
                        },
                        {
                            name: 'department',
                            data: 'department'
                        },
                        {
                            name: 'study_program',
                            data: 'study_program'
                        },
                        {
                            name: 'degree',
                            data: 'degree'
                        },
                    ],
                });
            }
        </script>
    @endhasanyrole
@endsection
