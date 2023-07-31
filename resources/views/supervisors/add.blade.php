@extends('layouts.app')

@section('css_after')
    {{-- Select 2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Dosen Pembimbing dan Penguji</h3>
                    </div>
                    <!-- /.card-header -->

                    {{-- Error Message --}}
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{ route('supervisor.store') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Lengkap Dosen(beserta gelar)</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ old('name') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Jurusan</label>
                                        <select name="department" class="form-control mb-3 select2" required>
                                            <option selected value="">Pilih Jurusan</option>
                                            @foreach (\App\Models\Supervisor::DEPARTMENT_CHOICE as $key => $value)
                                                <option value="{{ $key }}">{{ $value }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Program Studi</label>
                                        <select name="study_program" class="form-control mb-3 select2" required>
                                            <option selected value="">Pilih Program Studi</option>
                                            @foreach (\App\Models\Supervisor::STUDY_PROGRAM_CHOICE as $key => $value)
                                                <option value="{{ $key }}">{{ $value }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Jenjang</label>
                                        <select name="degree" class="form-control mb-3 select2" required>
                                            <option selected value="">Pilih Jenjang</option>
                                            @foreach (\App\Models\Supervisor::DEGREE_CHOICE as $key => $value)
                                                <option value="{{ $key }}">{{ $value }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <a href="{{ route('supervisor.index') }}" class="btn btn-warning">Kembali</a>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
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
