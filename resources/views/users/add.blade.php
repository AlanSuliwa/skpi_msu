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
                        <h3 class="card-title">Tambah Pengguna</h3>
                    </div>
                    <!-- /.card-header -->

                    {{-- Error Message --}}
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{ route('user.store') }}" method="post">

                        <div class="card-body">

                            @csrf
                            <div class="form-group">
                                <label for="name">Nama Pengguna </label>
                                <input type="text" name="name" class="form-control" id="name"
                                    value="{{ old('name') }}" placeholder="Nama Pengguna..." required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email </label>
                                <input type="email" name="email" class="form-control" id="email"
                                    value="{{ old('email') }}" placeholder="Email..." required>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="password">Password </label>
                                <input type="password" name="password" class="form-control" id="password"
                                    value="{{ old('password') }}" placeholder="Password..." required>
                            </div>
                            <div class="form-group">
                                <label for="confirm-password">Konfirmasi Password </label>
                                <input type="password" name="confirm-password" class="form-control" id="confirm-password"
                                    value="{{ old('confirm-password') }}" placeholder="Konfirmasi Password..." required>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>Role </label>
                                <select name="roles" class="form-control mb-3 select_role" required>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role }}">{{ $role }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <a href="{{ route('user.index') }}" class="btn btn-warning">Kembali</a>
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
            $(".select_role").select2({
                width: '100%',
                theme: 'classic'
            });
        });
    </script>
@endsection
