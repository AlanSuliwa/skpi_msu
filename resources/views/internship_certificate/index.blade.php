@extends('layouts.app')

@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Verifikasi </h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="">Verifikasi</a></li>
                </ol>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="header-title">
                                    <h4 class="card-title">Verifikasi Sertifikat Magang</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="data-table" class="table table-striped table-bordered" width="150%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Aksi</th>
                                                <th>NIM</th>
                                                <th>Nama</th>
                                                <th>Judul Bahasa Indonesia</th>
                                                <th>Judul Bahasa Inggris</th>
                                                <th>Lembaga</th>
                                                <th>Lama Magang</th>
                                                <th>File</th>
                                                <th>Status</th>
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
@endsection

@section('js_after')
    <script>
        $(document).ready(function() {
            getDatatable();
        });

        let data_table = "";

        function getDatatable() {
            data_table = $("#data-table").DataTable({
                ajax: "{{ route('internship_certificate.datatable') }}",
                serverSide: true,
                processing: true,
                destroy: true,
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
                        name: 'student_nim',
                        data: 'student_nim'
                    },
                    {
                        name: 'student_name',
                        data: 'student_name'
                    },
                    {
                        name: 'indonesian_title',
                        data: 'indonesian_title'
                    },
                    {
                        name: 'english_title',
                        data: 'english_title'
                    },
                    {
                        name: 'institution',
                        data: 'institution'
                    },
                    {
                        name: 'internship_period',
                        data: 'internship_period'
                    },
                    {
                        name: 'file',
                        data: 'file'
                    },
                    {
                        name: 'status',
                        data: 'status'
                    },
                ],
            });
        }
    </script>
@endsection
