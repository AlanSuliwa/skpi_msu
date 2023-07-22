@extends('layouts.app')

@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Pengguna</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="">Pengguna</a></li>
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
                                    <h4 class="card-title">Manajemen User</h4>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <a class="btn btn-sm btn-outline-info" href="{{ route('user.create') }}"><i
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
                                                <th>Nama User</th>
                                                <th>Email</th>
                                                <th>Role</th>
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
@endsection

@section('js_after')
    <script>
        $(document).ready(function() {
            getDatatable();
        });

        let data_table = "";

        function getDatatable() {
            data_table = $("#data-table").DataTable({
                ajax: "{{ route('user.datatable') }}",
                serverSide: true,
                processing: true,
                destroy: true,
                order: [
                    [5, 'desc']
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
                        name: 'email',
                        data: 'email'
                    },
                    {
                        name: 'role',
                        data: 'role'
                    },
                    {
                        name: 'created_at',
                        data: 'created_at'
                    },
                ],
            });
        }
    </script>
@endsection
