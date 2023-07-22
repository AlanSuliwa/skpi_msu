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
                        <h3 class="card-title">Edit User</h3>
                    </div>
                    <!-- /.card-header -->

                    {{-- Error Message --}}
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="card-body">
                        <form action="{{ route('user.update', Crypt::encrypt($user['id'])) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="name">Nama User </label>
                                <input type="text" name="name" class="form-control" id="name"
                                    value="{{ old('name', $user['name']) }}" placeholder="Nama Role..." required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email </label>
                                <input type="email" name="email" class="form-control" id="email"
                                    value="{{ old('email', $user['email']) }}" placeholder="Email..." required>
                            </div>
                            <div class="form-group">
                                <label>Jurusan</label>
                                <select name="department" class="form-control mb-3 select_role">
                                    @foreach (\App\Models\Department::DEPARTMENT_CHOICE as $key => $value)
                                        <option value="{{ $key }}"
                                            {{ $key == $data->department ? 'selected' : '' }}>{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="photo">Foto (Jpg, Jpeg, Png | Maks 1 MB)</label>
                                <input type="file" name="photo" class="form-control" id="photo">
                            </div>
                            
                            <p class="text-muted">*Isi jika ingin mengganti password</p>
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
                                        <option value="{{ $role }}"
                                            {{ in_array($role, $userRole) ? 'selected' : '' }}>
                                            {{ $role }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="{{ route('user.index') }}" class="btn btn-warning">Kembali</a>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </div>
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
            $(".select_role").select2();
        });
    </script>
@endsection
