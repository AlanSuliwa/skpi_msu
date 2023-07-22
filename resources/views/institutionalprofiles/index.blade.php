@extends('layouts.app')

@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Profil Institusi</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="#">Profil Institusi</a></li>
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
            <!-- /.Left col -->
            <section class="col-lg-12">
                <!-- solid sales graph -->
                <div class="card">
                    <div class="card-header border-1 ui-sortable-handle" style="cursor: move;">
                        <h3 class="text-center"><i class="fa fa-university"></i> Visi, Misi & Tujuan Politeknik Negeri
                            Sriwijaya</h3>
                    </div>
                    <div class="card-body">
                        <h4>Visi : </h4>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet eius at dolore exercitationem
                            reprehenderit soluta voluptate, obcaecati consectetur, dolorem nesciunt corporis excepturi
                            ratione neque alias sunt, magni facere incidunt consequatur?</p>
                    </div>
                    <!-- /.card -->
            </section>
        </div>
    </div>
    <!-- /.row -->
    <!-- Main row -->

    <!-- /.row (main row) -->
@endsection
