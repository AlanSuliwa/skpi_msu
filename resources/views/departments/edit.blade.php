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
                        <h3 class="card-title">Edit Jurusan</h3>
                    </div>
                    <!-- /.card-header -->

                    {{-- Error Message --}}
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{ route('department.update', Crypt::encrypt($data->id)) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Jurusan</label>
                                        <select name="name" class="form-control mb-3 select2">
                                            @foreach (\App\Models\Department::DEPARTMENT_CHOICE as $key => $value)
                                                <option value="{{ $key }}"
                                                    {{ $key == $data->name ? 'selected' : '' }}>{{ $value }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Program Studi</label>
                                        <select name="study_program" class="form-control mb-3 select2">
                                            @foreach (\App\Models\Department::STUDY_PROGRAM_CHOICE as $key => $value)
                                                <option value="{{ $key }}"
                                                    {{ $key == $data->study_program ? 'selected' : '' }}>{{ $value }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Ketua Jurusan</label>
                                        <input type="text" class="form-control" name="department_head"
                                            value="{{ old('department_head', $data->department_head) }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Sekretaris Jurusan</label>
                                        <input type="text" class="form-control" name="department_secretary"
                                            value="{{ old('department_secretary', $data->department_secretary) }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Deskripsi Singkat</label>
                                        <textarea name="brief_description" class="form-control" cols="10" rows="5">{{ old('brief_description', $data->brief_description) }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Visi</label>
                                        <textarea name="vision" class="form-control" cols="10" rows="5">{{ old('vision', $data->vision) }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Misi</label>
                                        <textarea name="mision" class="form-control" cols="10" rows="5">{{ old('mision', $data->mision) }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Kompetensi Utama</label>
                                        <textarea name="main_competency" class="form-control" cols="10" rows="5">{{ old('main_competency', $data->main_competency) }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Kompetensi Pendukung</label>
                                        <textarea name="support_competency" class="form-control" cols="10" rows="5">{{ old('support_competency', $data->support_competency) }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Kompetensi Lainnya</label>
                                        <textarea name="other_competency" class="form-control" cols="10" rows="5">{{ old('other_competency', $data->other_competency) }}</textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <a href="{{ route('department.index') }}" class="btn btn-warning">Kembali</a>
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
