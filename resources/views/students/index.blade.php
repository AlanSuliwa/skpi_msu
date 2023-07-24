@extends('layouts.app')

@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Mahasiswa</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="">Mahasiswa</a></li>
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
                                        <h4 class="card-title">Manajemen Mahasiswa</h4>
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

    @role('Mahasiswa')
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-md-12">
                    <div class="box box-solid bg-red">
                        <div class="box-header">
                            <h3 class="box-title">PERHATIAN !!</h3>
                        </div>
                        <div class="box-body">
                            <ol>
                                <li>Jika anda lupa password akun anda. Anda dapat mereset password dengan mengklik kata "Anda
                                    lupa
                                    password?" pada halaman login. Setelah mengklik kata tersebut, maka akan muncul formulir
                                    reset
                                    password. Anda diwajibkan untuk mengisikan NIM dan EMAIL yang tertera di profil anda.</li>
                                <li>Saat ingin menyimpan perubahan BIODATA, anda diharapkan terlebih dahulu mengupload IJAZAH,
                                    mengisi JUDUL LAPORAN AKHIR lengkap dengan BAHASA INGGRIS nya. Jangan hanya mengisikan
                                    BAHASA
                                    INDONESIA nya saja.</li>
                                <li>Tombol CETAK IDENTITAS dan SURAT PERNYATAAN PAS FOTO BERJILBAB akan muncul setelah BIODATA
                                    anda
                                    terisi JUDUL LAPORAN AKHIR.</li>
                                <li>Jika masih mengalami kesulitan dalam mengisi data SKPI anda. Silahkan hubungi administrator
                                    di
                                    ruang PIH.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">A. BIODATA/IDENTITAS : </h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group mb-2">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" id="name" disabled>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    @if (!empty($data->photo))
                        <img src="{{ asset('assets/images/' . $data->photo) }}" alt="userImage" class="img-thumbnail"
                            width="250">
                    @else
                        <img src="{{ asset('assets/images/user.png') }}" alt="userImage" class="img-thumbnail" width="250">
                    @endif

                </div>
            </div>
        </div>
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
                    ajax: "{{ route('student.datatable') }}",
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
