@extends('layouts.app')

@section('css_after')
    {{-- Select 2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
    <div class="container-fluid">
        @if (Auth::user()->hasRole('Mahasiswa'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">A. BIODATA/IDENTITAS : </h4>
                        </div>
                        <div class="card-body">
                            @if (session('error'))
                                <span class="text-danger">{{ session('error') }}</span>
                            @endif
                            <form action="{{ route('student.update_data', Crypt::encrypt($data->id)) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-8">
                                        <input type="text" disabled class="form-control" id="staticEmail"
                                            value="{{ $data->name }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">NPM</label>
                                    <div class="col-sm-8">
                                        <input type="text" disabled class="form-control" id="staticEmail"
                                            value="{{ $data->nim }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">No KTP/NIK</label>
                                    <div class="col-sm-8">
                                        <input type="number" name="nik" class="form-control" id="staticEmail"
                                            value="{{ old('nik', $data->nik) }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-8">
                                        <input type="text" disabled class="form-control" id="staticEmail"
                                            value="{{ $data->birth_place }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-8">
                                        <input type="text" disabled class="form-control" id="staticEmail"
                                            value="{{ $data->birth_date }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" name="gender" selected>
                                            <option value="" selected>Pilih Jenis Kelamin</option>
                                            @foreach (App\Models\Student::GENDER_CHOICE as $key => $value)
                                                <option value="{{ $key }}"
                                                    {{ $key == $data->gender ? 'selected' : '' }}>{{ $value }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Agama</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" name="religion" selected>
                                            <option value="" selected>Pilih Agama</option>
                                            @foreach (App\Models\Student::RELIGION_CHOICE as $key => $value)
                                                <option value="{{ $key }}"
                                                    {{ $key == $data->religion ? 'selected' : '' }}>{{ $value }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Jurusan</label>
                                    <div class="col-sm-8">
                                        <input type="text" disabled class="form-control" id="staticEmail"
                                            value="{{ $data->department }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Program Studi</label>
                                    <div class="col-sm-8">
                                        <input type="text" disabled class="form-control" id="staticEmail"
                                            value="{{ $data->study_program }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Jenjang</label>
                                    <div class="col-sm-8">
                                        <input type="text" disabled class="form-control" id="staticEmail"
                                            value="{{ $data->degree }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Nama Ayah</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="father_name" class="form-control" id="staticEmail"
                                            value="{{ old('father_name', $data->father_name) }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Nama Ibu</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="mother_name" class="form-control" id="staticEmail"
                                            value="{{ old('mother_name', $data->mother_name) }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Alamat Siswa</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="student_address" class="form-control"
                                            id="staticEmail"
                                            value="{{ old('student_address', $data->student_address) }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Alamat Orang Tua</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="parent_address" class="form-control"
                                            id="staticEmail" value="{{ old('parent_address', $data->parent_address) }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Kode Pos</label>
                                    <div class="col-sm-4">
                                        <input type="number" name="post_code" class="form-control" id="staticEmail"
                                            value="{{ old('post_code', $data->post_code) }}">
                                    </div>
                                    <label for="staticEmail" class="col-sm-1 col-form-label">No.telp</label>
                                    <div class="col-sm-3">
                                        <input type="number" name="phone_number" class="form-control" id="staticEmail"
                                            value="{{ old('phone_number', $data->phone_number) }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-4">
                                        <input type="text" enable class="form-control" id="staticEmail"
                                            value="{{ Auth::user()->email }}">
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Tahun Masuk</label>
                                    <div class="col-sm-4">
                                        <input type="text" disabled class="form-control" id="staticEmail"
                                            value="{{ old('entry_year', $data->entry_year) }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Ijazah (SLTA/D3)</label>
                                    <div class="col-sm-8">
                                        <input type="file" name="certificate_file" class="form-control"
                                            id="staticEmail">
                                    </div>
                                </div>
                                <hr>
                                <h5>JUDUL LAPORAN DALAM BAHASA:</h5>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Indonesia</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" name="indonesian_title" rows="3" enable>  {{ $data->indonesian_title }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Inggris</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" name="english_title" rows="3" enable> {{ $data->english_title }}</textarea>
                                    </div>
                                </div>
                                <hr>
                                <h5>Dosen Pembimbing:</h5>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Pembimbing I</label>
                                    <div class="col-sm-10">
                                        <select name="lecturer1" class="form-control select2">
                                            <option value="">Pembimbing I</option>
                                            @foreach ($supervisors as $item)
                                                <option value="{{ $item->name }}"
                                                    {{ $item->name == $data->lecturer1 ? 'selected' : '' }}>
                                                    {{ $item->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Pembimbing II</label>
                                    <div class="col-sm-10">
                                        <select name="lecturer2" class="form-control select2">
                                            <option value="">Pembimbing II</option>
                                            @foreach ($supervisors as $item)
                                                <option value="{{ $item->name }}"
                                                    {{ $item->name == $data->lecturer2 ? 'selected' : '' }}>
                                                    {{ $item->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <h5>Dosen Penguji:</h5>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Penguji 1</label>
                                    <div class="col-sm-10">
                                        <select name="inspector1" class="form-control select2">
                                            <option value="">Penguji 1</option>
                                            @foreach ($supervisors as $item)
                                                <option value="{{ $item->name }}"
                                                    {{ $item->name == $data->inspector1 ? 'selected' : '' }}>
                                                    {{ $item->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Penguji 2</label>
                                    <div class="col-sm-10">
                                        <select name="inspector2" class="form-control select2">
                                            <option value="">Penguji 2</option>
                                            @foreach ($supervisors as $item)
                                                <option value="{{ $item->name }}"
                                                    {{ $item->name == $data->inspector2 ? 'selected' : '' }}>
                                                    {{ $item->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Penguji 3</label>
                                    <div class="col-sm-10">
                                        <select name="inspector3" class="form-control select2">
                                            <option value="">Penguji 3</option>
                                            @foreach ($supervisors as $item)
                                                <option value="{{ $item->name }}"
                                                    {{ $item->name == $data->inspector3 ? 'selected' : '' }}>
                                                    {{ $item->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Penguji 4</label>
                                    <div class="col-sm-10">
                                        <select name="inspector4" class="form-control select2">
                                            <option value="">Penguji 4</option>
                                            @foreach ($supervisors as $item)
                                                <option value="{{ $item->name }}"
                                                    {{ $item->name == $data->inspector4 ? 'selected' : '' }}>
                                                    {{ $item->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Penguji 5</label>
                                    <div class="col-sm-10">
                                        <select name="inspector5" class="form-control select2">
                                            <option value="">Penguji 5</option>
                                            @foreach ($supervisors as $item)
                                                <option value="{{ $item->name }}"
                                                    {{ $item->name == $data->inspector5 ? 'selected' : '' }}>
                                                    {{ $item->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <a href="{{ route('student.index', Crypt::encrypt($data->id)) }}"
                                        class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
                                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>
                                        Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Mahasiswa</h3>
                        </div>
                        <!-- /.card-header -->

                        {{-- Error Message --}}
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="{{ route('student.update', Crypt::encrypt($data->id)) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Akun Mahasiswa</label>
                                            <input type="text" class="form-control" value="{{ $data->user->name }}"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" name="name"
                                                value="{{ old('name', $data->name) }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>NPM</label>
                                            <input type="number" class="form-control" name="nim"
                                                value="{{ old('nim', $data->nim) }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Jurusan</label>
                                            <select name="department" class="form-control mb-3 select2">
                                                @foreach (\App\Models\Supervisor::DEPARTMENT_CHOICE as $key => $value)
                                                    <option value="{{ $key }}"
                                                        {{ $key == $data->name ? 'selected' : '' }}>{{ $value }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Program Studi</label>
                                            <select name="study_program" class="form-control mb-3 select2">
                                                @foreach (\App\Models\Supervisor::STUDY_PROGRAM_CHOICE as $key => $value)
                                                    <option value="{{ $key }}"
                                                        {{ $key == $data->study_program ? 'selected' : '' }}>
                                                        {{ $value }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Jenjang</label>
                                            <select name="degree" class="form-control mb-3 select2" required>
                                                <option selected value="">Pilih Program Studi</option>
                                                @foreach (\App\Models\Supervisor::DEGREE_CHOICE as $key => $value)
                                                    <option value="{{ $key }}"
                                                        {{ $key == $data->degree ? 'selected' : '' }}>{{ $value }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tahun Masuk</label>
                                            <input type="number" class="form-control" name="entry_year"
                                                value="{{ old('entry_year', $data->entry_year) }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input type="text" class="form-control" name="birth_place"
                                                value="{{ old('birth_place', $data->birth_place) }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="date" class="form-control" name="birth_date"
                                                value="{{ old('birth_date', $data->birth_date) }}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <a href="{{ route('student.index') }}" class="btn btn-warning">Kembali</a>
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        @endif
    </div>
@endsection

@section('js_after')
    {{-- Select 2 --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $(".select2").select2({
                width: '100%',
                theme: 'classic'
            });
        });
    </script>
@endsection
