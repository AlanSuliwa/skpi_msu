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
            <div class="row mb-3">
                <div class="col-xs-6 col-md-12">
                    <div class="bcard bg-danger">
                        <div class="card-header text-center">
                            <h3 class="card-title text-center">PERHATIAN !!</h3>
                        </div>
                        <div class="card-body">
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
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" disabled class="form-control" id="staticEmail"
                                        value="{{ $data->name }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">NPM</label>
                                <div class="col-sm-10">
                                    <input type="text" disabled class="form-control" id="staticEmail"
                                        value="{{ $data->nim }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">No KTP/NIK</label>
                                <div class="col-sm-10">
                                    <input type="text" disabled class="form-control" id="staticEmail"
                                        value="{{ $data->nik }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" disabled class="form-control" id="staticEmail"
                                        value="{{ $data->birth_place }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" disabled class="form-control" id="staticEmail"
                                        value="{{ $data->birth_date }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <input type="text" disabled class="form-control" id="staticEmail"
                                        value="{{ $data->gender }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Agama</label>
                                <div class="col-sm-10">
                                    <input type="text" disabled class="form-control" id="staticEmail"
                                        value="{{ $data->religion }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Jurusan</label>
                                <div class="col-sm-10">
                                    <input type="text" disabled class="form-control" id="staticEmail"
                                        value="{{ $data->department }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Program Studi</label>
                                <div class="col-sm-10">
                                    <input type="text" disabled class="form-control" id="staticEmail"
                                        value="{{ $data->study_program }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Jenjang</label>
                                <div class="col-sm-10">
                                    <input type="text" disabled class="form-control" id="staticEmail"
                                        value="{{ $data->degree }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Nama Ayah</label>
                                <div class="col-sm-10">
                                    <input type="text" disabled class="form-control" id="staticEmail"
                                        value="{{ $data->father_name }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Nama Ibu</label>
                                <div class="col-sm-10">
                                    <input type="text" disabled class="form-control" id="staticEmail"
                                        value="{{ $data->mother_name }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Alamat Siswa</label>
                                <div class="col-sm-10">
                                    <input type="text" disabled class="form-control" id="staticEmail"
                                        value="{{ $data->student_address }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Alamat Orang Tua</label>
                                <div class="col-sm-10">
                                    <input type="text" disabled class="form-control" id="staticEmail"
                                        value="{{ $data->parent_address }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Kode Pos</label>
                                <div class="col-sm-4">
                                    <input type="text" disabled class="form-control" id="staticEmail"
                                        value="{{ $data->post_code }}">
                                </div>
                                <label for="staticEmail" class="col-sm-2 col-form-label">No.Telp</label>
                                <div class="col-sm-4">
                                    <input type="text" disabled class="form-control" id="staticEmail"
                                        value="{{ $data->phone_number }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" disabled class="form-control" id="staticEmail"
                                        value="{{ Auth::user()->email }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Tahun Masuk</label>
                                <div class="col-sm-10">
                                    <input type="text" disabled class="form-control" id="staticEmail"
                                        value="{{ $data->entry_year }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Ijazah (SLTA/D3)</label>
                                <div class="col-sm-10">
                                    @if (!empty($data->certificate_file))
                                        <a href="{{ asset('assets/files/' . $data->certificate_file) }}"
                                            class="btn btn-primary"><i class="fa fa-eye"></i> Lihat File</a>
                                    @endif
                                </div>
                            </div>
                            <hr>
                            <h5>JUDUL LAPORAN DALAM BAHASA:</h5>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Indonesia</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="indonesian_title" id="" rows="3" disabled>  {{ $data->indonesian_title }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Inggris</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="indonesian_title" id="" rows="3" disabled>{{ $data->english_title }}</textarea>
                                </div>
                            </div>
                            <hr>
                            <h5>Dosen Pembimbing:</h5>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Pembimbing I</label>
                                <div class="col-sm-10">
                                    <input type="text" disabled class="form-control" id="staticEmail"
                                        value="{{ $data->lecturer1 }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Pembimbing II</label>
                                <div class="col-sm-10">
                                    <input type="text" disabled class="form-control" id="staticEmail"
                                        value="{{ $data->lecturer2 }}">
                                </div>
                            </div>
                            <hr>
                            <h5>Dosen Penguji:</h5>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Penguji 1</label>
                                <div class="col-sm-10">
                                    <input type="text" disabled class="form-control" id="staticEmail"
                                        value="{{ $data->inspector1 }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Penguji 2</label>
                                <div class="col-sm-10">
                                    <input type="text" disabled class="form-control" id="staticEmail"
                                        value="{{ $data->inspector2 }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Penguji 3</label>
                                <div class="col-sm-10">
                                    <input type="text" disabled class="form-control" id="staticEmail"
                                        value="{{ $data->inspector3 }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Penguji 4</label>
                                <div class="col-sm-10">
                                    <input type="text" disabled class="form-control" id="staticEmail"
                                        value="{{ $data->inspector4 }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Penguji 5</label>
                                <div class="col-sm-10">
                                    <input type="text" disabled class="form-control" id="staticEmail"
                                        value="{{ $data->inspector5 }}">
                                </div>
                            </div>
                            <div class="text-center">
                                <a href="{{ route('student.edit', Crypt::encrypt($data->id)) }}" class="btn btn-info"><i
                                        class="fa fa-edit"></i> Ubah Data</a>
                                <a href="" class="btn btn-danger"><i class="fa fa-file-pdf"></i> Cetak Identitas</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    @if (!empty(Auth::user()->photo))
                        <img src="{{ asset('assets/images/' . Auth::user()->photo) }}" alt="userImage" class="img-thumbnail"
                            width="250">
                    @else
                        <img src="{{ asset('assets/images/user.png') }}" alt="userImage" class="img-thumbnail"
                            width="250">
                    @endif
                    <br><br>
                    @if (session('error'))
                        <span class="text-danger">{{ session('error') }}</span>
                    @endif
                    <form action="{{ route('user.update_photo', Crypt::encrypt(Auth::user()->id)) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <input type="file" name="photo" class="form-control">
                        <P>Foto harus format jpg atau jpeg maks 500kb</P>
                        <button type="submit" class="btn btn-success"><i class="fa fa-upload"></i>Upload</button>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">B. AKTIVITAS, PRESTASI, DAN PENGHARGAAN</h4>
                        </div>
                        <div class="card-body">
                            <div class="card">
                                <div class="card-header border-0 ui-sortable-handle bg-gradient-primary">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>Kerja Praktek (Magang)</h5>
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-end">
                                            <button type="button" class="btn btn-primary ml-3 mb-3" data-toggle="modal"
                                                data-target="#magangModal">
                                                <i class="fa fa-plus"></i> Tambah
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body border-0 ui-sortable-handle bg-gradient-warning">
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-nowrap bg-gradient-yellow">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>Aksi</th>
                                                    <th>No</th>
                                                    <th>Judul Sertifikat</th>
                                                    <th>Lembaga</th>
                                                    <th>Durasi Magang</th>
                                                    <th>Tanggal</th>
                                                    <th>File</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($IntershipCertificateFiles as $item)
                                                    <tr class="text-center">
                                                        <td>
                                                            <form
                                                                action="{{ route('internship_certificate.destroy', Crypt::encrypt($item->id)) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <button onclick="return confirm('Hapus Data?')" type="submit"
                                                                    class="btn btn-danger"><i class="fa fa-trash"></i>
                                                                    Hapus</button>
                                                            </form>
                                                        </td>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>
                                                            <b>{{ $item->indonesian_title }}</b>
                                                            <br>
                                                            <i>{{ $item->english_title }}</i>
                                                        </td>
                                                        <td>{{ $item->institution }}</td>
                                                        <td>{{ $item->internship_period }}</td>
                                                        <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d m Y') }}
                                                        </td>
                                                        <td> <a href="{{ asset('assets/files/' . $item->file) }}"
                                                                class="btn btn-primary">Lihat File</a> </td>
                                                        <td>{{ $item->status }}</td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="8">
                                                            <p class="text-center">Data Belum Ada</p>
                                                        </td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card">
                                <div class="card-header border-0 ui-sortable-handle bg-gradient-primary">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>Pengalaman Organisasi</h5>
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-end">
                                            <button type="button" class="btn btn-primary ml-3 mb-3" data-toggle="modal"
                                                data-target="#pengalamanModal">
                                                <i class="fa fa-plus"></i> Tambah
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body border-0 ui-sortable-handle bg-gradient-warning">
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-nowrap bg-gradient-yellow">
                                            <thead>
                                                <tr>
                                                    <th>Aksi</th>
                                                    <th>No</th>
                                                    <th>Judul Sertifikat</th>
                                                    <th>Lembaga</th>
                                                    <th>Tanggal</th>
                                                    <th>File</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($OrganizationalExperinceCertificateFiles as $item)
                                                    <tr class="text-center">
                                                        <td>
                                                            <form
                                                                action="{{ route('organizationalexperince_certificate.destroy', Crypt::encrypt($item->id)) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <button onclick="return confirm('Hapus Data?')" type="submit"
                                                                    class="btn btn-danger"><i class="fa fa-trash"></i>
                                                                    Hapus</button>
                                                            </form>
                                                        </td>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>
                                                            <b>{{ $item->indonesian_title }}</b>
                                                            <br>
                                                            <i>{{ $item->english_title }}</i>
                                                        </td>
                                                        <td>{{ $item->institution }}</td>
                                                        <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d m Y') }}
                                                        </td>
                                                        <td> <a href="{{ asset('assets/files/' . $item->file) }}"
                                                                class="btn btn-primary">Lihat File</a> </td>
                                                        <td>{{ $item->status }}</td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="8">
                                                            <p class="text-center">Data Belum Ada</p>
                                                        </td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card">
                                <div class="card-header border-0 ui-sortable-handle bg-gradient-primary">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>Prestasi dan Penghargaan</h5>
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-end">
                                            <button type="button" class="btn btn-primary ml-3 mb-3" data-toggle="modal"
                                                data-target="#prestasiModal">
                                                <i class="fa fa-plus"></i> Tambah
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body border-0 ui-sortable-handle bg-gradient-warning">
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-nowrap bg-gradient-yellow">
                                            <thead>
                                                <tr>
                                                    <th>Aksi</th>
                                                    <th>No</th>
                                                    <th>Judul Sertifikat</th>
                                                    <th>Lembaga</th>
                                                    <th>Tanggal</th>
                                                    <th>File</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($AwardCertificateFiles as $item)
                                                    <tr class="text-center">
                                                        <td>
                                                            <form
                                                                action="{{ route('award_certificate.destroy', Crypt::encrypt($item->id)) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <button onclick="return confirm('Hapus Data?')" type="submit"
                                                                    class="btn btn-danger"><i class="fa fa-trash"></i>
                                                                    Hapus</button>
                                                            </form>
                                                        </td>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>
                                                            <b>{{ $item->indonesian_title }}</b>
                                                            <br>
                                                            <i>{{ $item->english_title }}</i>
                                                        </td>
                                                        <td>{{ $item->institution }}</td>
                                                        <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d m Y') }}
                                                        </td>
                                                        <td> <a href="{{ asset('assets/files/' . $item->file) }}"
                                                                class="btn btn-primary">Lihat File</a> </td>
                                                        <td>{{ $item->status }}</td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="8">
                                                            <p class="text-center">Data Belum Ada</p>
                                                        </td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card">
                                <div class="card-header border-0 ui-sortable-handle bg-gradient-primary">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>Sertifikat Keahlian/Seminar</h5>
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-end">
                                            <button type="button" class="btn btn-primary ml-3 mb-3" data-toggle="modal"
                                                data-target="#sertifikatModal">
                                                <i class="fa fa-plus"></i> Tambah
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body border-0 ui-sortable-handle bg-gradient-warning">
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-nowrap bg-gradient-yellow">
                                            <thead>
                                                <tr>
                                                    <th>Aksi</th>
                                                    <th>No</th>
                                                    <th>Judul Sertifikat</th>
                                                    <th>Lembaga</th>
                                                    <th>Tanggal</th>
                                                    <th>File</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($SkillCertificateFiles as $item)
                                                    <tr class="text-center">
                                                        <td>
                                                            <form
                                                                action="{{ route('skill_certificate.destroy', Crypt::encrypt($item->id)) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <button onclick="return confirm('Hapus Data?')" type="submit"
                                                                    class="btn btn-danger"><i class="fa fa-trash"></i>
                                                                    Hapus</button>
                                                            </form>
                                                        </td>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>
                                                            <b>{{ $item->indonesian_title }}</b>
                                                            <br>
                                                            <i>{{ $item->english_title }}</i>
                                                        </td>
                                                        <td>{{ $item->institution }}</td>
                                                        <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d m Y') }}
                                                        </td>
                                                        <td> <a href="{{ asset('assets/files/' . $item->file) }}"
                                                                class="btn btn-primary">Lihat File</a> </td>
                                                        <td>{{ $item->status }}</td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="8">
                                                            <p class="text-center">Data Belum Ada</p>
                                                        </td>
                                                    </tr>
                                                @endforelse
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

        <!-- Modal Create Magang -->
        <div class="modal fade" id="magangModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="magangModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="magangModalLabel">Kerja Praktek (Magang)</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('internship_certificate.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Judul (Indonesia)</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="indonesian_title" id="" rows="3"> </textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Judul (Inggris)</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="english_title" id="" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Lembaga</label>
                                <div class="col-sm-10">
                                    <input type="text" name="institution" class="form-control" id="staticEmail">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Durasi Magang (Jam)</label>
                                <div class="col-sm-10">
                                    <input type="number" name="internship_period" class="form-control" id="staticEmail">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Upload File</label>
                                <div class="col-sm-10">
                                    <input type="file" name="file" class="form-control" id="staticEmail">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal create pengalaman organisasi -->
        <div class="modal fade" id="pengalamanModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="pengalamanModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="pengalamanModalLabel">Pengalaman Organisasi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('organizationalexperince_certificate.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Judul (Indonesia)</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="indonesian_title" id="" rows="3"> </textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Judul (Inggris)</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="english_title" id="" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Lembaga</label>
                                <div class="col-sm-10">
                                    <input type="text" name="institution" class="form-control" id="staticEmail">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Upload File</label>
                                <div class="col-sm-10">
                                    <input type="file" name="file" class="form-control" id="staticEmail">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="prestasiModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="prestasiModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="prestasiModalLabel">Prestasi dan Penghargaan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('award_certificate.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Judul (Indonesia)</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="indonesian_title" id="" rows="3"> </textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Judul (Inggris)</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="english_title" id="" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Lembaga</label>
                                <div class="col-sm-10">
                                    <input type="text" name="institution" class="form-control" id="staticEmail">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Upload File</label>
                                <div class="col-sm-10">
                                    <input type="file" name="file" class="form-control" id="staticEmail">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="sertifikatModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="sertifikatModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="sertifikatModalLabel">Sertifikat Keahlian/Seminar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('skill_certificate.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Judul (Indonesia)</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="indonesian_title" id="" rows="3"> </textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Judul (Inggris)</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="english_title" id="" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Lembaga</label>
                                <div class="col-sm-10">
                                    <input type="text" name="institution" class="form-control" id="staticEmail">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Upload File</label>
                                <div class="col-sm-10">
                                    <input type="file" name="file" class="form-control" id="staticEmail">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
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
