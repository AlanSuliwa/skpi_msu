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
    <div class="container-fluid">
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
                                    <a target="_blank" href="{{ asset('assets/files/' . $data->certificate_file) }}"
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
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                @if (!empty($user->photo))
                    <img src="{{ asset('assets/images/' . $user->photo) }}" alt="userImage" class="img-thumbnail"
                        width="250">
                @else
                    <img src="{{ asset('assets/images/user.png') }}" alt="userImage" class="img-thumbnail"
                        width="250">
                @endif
                <br><br>
                @if (session('error'))
                    <span class="text-danger">{{ session('error') }}</span>
                @endif
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
@endsection
