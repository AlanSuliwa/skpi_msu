<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>AdminLTE 3 | Dashboard</title>

    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    {{-- Data Table --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css') }}" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}" />
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}" />
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('AdminLTE-3.2.0/plugins/jqvmap/jqvmap.min.css') }}" />
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('AdminLTE-3.2.0/dist/css/adminlte.min.css') }}" />
    <!-- overlayScrollbars -->
    <link rel="stylesheet"
        href="{{ asset('AdminLTE-3.2.0/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}" />
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('AdminLTE-3.2.0/plugins/daterangepicker/daterangepicker.css') }}" />
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('AdminLTE-3.2.0/plugins/summernote/summernote-bs4.min.css') }}" />



    @yield('css_after')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search" />
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle" />
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted">
                                        <i class="far fa-clock mr-1"></i> 4 Hours Ago
                                    </p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3" />
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted">
                                        <i class="far fa-clock mr-1"></i> 4 Hours Ago
                                    </p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3" />
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted">
                                        <i class="far fa-clock mr-1"></i> 4 Hours Ago
                                    </p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true"
                        href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>


        <!-- Main Sidebar Container -->
        @include('layouts.sidebar')
        <div class="content-wrapper">
        <aside class="right-side">
            <section class="content-header">
            <h1>Profil Program Studi<small>Study Program Profile</small></h1>
            <h5>Selamat Datang <b>Alan Suliwa</b> di Aplikasi <b>Surat Keterangan Pendamping Ijazah</b>.</h5>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Profil Program Studi</li>
            </ol>
        </section>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <div class="box" style="padding: 0px 20px 20px 10px;">
                                <div class="box-body">
                                    <h3><i class="fa fa-building"></i> PROFIL PROGRAM STUDI MANAJEMEN INFORMATIKA
                                        (D-III)
                                    </h3>
                                    <hr>
                                    <table border="0">
                                        <tbody>
                                            <tr>
                                                <td style="width:200px;padding-bottom:10px;vertical-align:top;">Nama
                                                    Jurusan</td>
                                                <td style="width:10px;padding-bottom:10px;vertical-align:top;">:</td>
                                                <td style="padding-bottom:10px;vertical-align:top;">MANAJEMEN
                                                    INFORMATIKA
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width:200px;padding-bottom:10px;vertical-align:top;">Nama
                                                    Program Studi</td>
                                                <td style="width:10px;padding-bottom:10px;vertical-align:top;">:</td>
                                                <td style="padding-bottom:10px;vertical-align:top;">MANAJEMEN
                                                    INFORMATIKA
                                                    (D-III)</td>
                                            </tr>
                                            <tr>
                                                <td style="width:200px;padding-bottom:10px;vertical-align:top;">Ketua
                                                    Jurusan</td>
                                                <td style="width:10px;padding-bottom:10px;vertical-align:top;">:</td>
                                                <td style="padding-bottom:10px;vertical-align:top;">Dr. Indri Aryanti,
                                                    S.E.,M.Si.</td>
                                            </tr>
                                            <tr>
                                                <td style="width:200px;padding-bottom:10px;vertical-align:top;">
                                                    Sekretaris
                                                    Jurusan</td>
                                                <td style="width:10px;padding-bottom:10px;vertical-align:top;">:</td>
                                                <td style="padding-bottom:10px;vertical-align:top;">Maivi Kusnandar,
                                                    S.Kom., M.Kom</td>
                                            </tr>
                                            <tr>
                                                <td style="width:200px;padding-bottom:10px;vertical-align:top;">
                                                    Deskripsi
                                                    Singkat</td>
                                                <td style="width:10px;padding-bottom:10px;vertical-align:top;">:</td>
                                                <td style="padding-bottom:10px;vertical-align:top;vertical-align:top;">
                                                    <p>Didirikan pada tahun 2002, dengan kompetensi utama mahasiswa
                                                        mampu
                                                        menggunakan perangkat lunakkomputer mulai dari sistem operasi,
                                                        bahasa pemrograman sampaia denga aplikasi perkantoran,
                                                        menterjemahkan urutan logika menjadi program aplikasi, merancang
                                                        transformasi data di bidang bisnis, menjadi pimpinan madya di
                                                        intansi/perusahaan atau berwirausaha di bidang Pengolahan Data
                                                        Elektronik.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width:200px;padding-bottom:10px;vertical-align:top;">Visi
                                                </td>
                                                <td style="width:10px;padding-bottom:10px;vertical-align:top;">:</td>
                                                <td style="padding-bottom:10px;vertical-align:top;vertical-align:top;">
                                                    <p>Menjadi program studi pendidikan vokasi yang unggul dalam
                                                        menyiapkan
                                                        Sumber Daya Manusia di bidang Manajemen Informatika.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width:200px;padding-bottom:10px;vertical-align:top;">Misi
                                                </td>
                                                <td style="width:10px;padding-bottom:10px;vertical-align:top;">:</td>
                                                <td style="padding-bottom:10px;vertical-align:top;vertical-align:top;">
                                                    <p>Menyiapkan Sumber Daya Manusia yang disiplin, bermoral,
                                                        berkepribadian, beretika, berjiwa bisnis dan wirausaha dalam
                                                        membangun dan mengelola sistem informasi instansi/perusahaan.
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width:200px;padding-bottom:10px;vertical-align:top;">
                                                    Kompetisi
                                                    Utama</td>
                                                <td style="width:10px;padding-bottom:10px;vertical-align:top;">:</td>
                                                <td style="padding-bottom:10px;vertical-align:top;vertical-align:top;">
                                                    <p>1. Mampu memanfaatkan dan beradaptasi dengan teknologi informasi
                                                        akuntansi<br>- Mampu menerapkan kompu-terisasi akuntansi secara
                                                        akurat dan benar<br>- Mampu menyusun laporan keuangan yang
                                                        berbasis
                                                        komputerisasi.<br>2. Mampu bertanggung jawab pada pekerjaan
                                                        sendiri
                                                        sesuai etika dan dapat diberi tanggung jawab<br>- Mampu
                                                        menggunakan
                                                        nilai etika dengan menjaga nilai integritas obyektifitas dan
                                                        profesionalisme dalam menjalankan tugasnya.<br>3. Mampu
                                                        mengambil
                                                        keputusan yang tepat berdasarkan analisis informasi dan data,
                                                        dan
                                                        mampu memberikan petunjuk dalam memilih berbagai alternatif
                                                        solusi
                                                        secara mandiri.<br>- Mampu menginterprestasikan laporan keuangan
                                                        yang berbasis komputerisasi dan mengkomunikasikannya secara baik
                                                        dan
                                                        benar kepada pengguna.<br>4. Mampu menggunakan aplikasi-aplikasi
                                                        perkantoran berbasis IT<br>- Mampu menggunakan program-program
                                                        aplikasi untuk mendukung manajemen administrrasi dalam sebuah
                                                        perusahaan;<br>- Mampu menggunakan fasilitas-fasilitas berbasis
                                                        IT
                                                        dalam mendukung kinerja proses administrasi.<br>5. Mampu
                                                        bertanggung
                                                        jawab pada pekerjaan sendiri sesuai etika dan dapat diberi
                                                        tanggung
                                                        jawab<br>- Mampu menggunakan nilai etika dengan menjaga nilai
                                                        integritas obyektifitas dan profesionalisme dalam menjalankan
                                                        tugasnya.<br>6. Mampu mengambil keputusan yang tepat berdasarkan
                                                        analisis informasi dan data, dan mampu memberikan petunjuk dalam
                                                        memilih berbagai alternatif solusi secara mandiri<br>- Mampu
                                                        mengintepretasikan laporan keuangan yang berbasis komputerisasi
                                                        dan
                                                        mengkomunikasikannya secara baik dan benar kepada
                                                        pengguna.<br>7.
                                                        Mampu menggunakan dan menerapkan aplikasi multimedia dalam
                                                        bidang
                                                        bisnis<br>- Memiliki kemampuan dalam menghasilkan karya di
                                                        bidang
                                                        multimedia dan pemrograman bagi pengembangan potensi lokal
                                                        daerah<br>- Menghasilkan luaran yang mampu menerapkan etika
                                                        profesi
                                                        dan akhlak dibidang teknologi informasi.<br>8. Mampu menganalisa
                                                        pembuatan sistem<br>- Mampu menganalisa dan merancang pembuatan
                                                        sistem aplikasi baru pada perusahaan<br>- Mampu menganalisa
                                                        perubahan-perubahan terhadap sistem aplikasi yang baru.<br>9.
                                                        Mampu
                                                        membuat program-program bisnis<br>- Mampu menerapkan
                                                        program-program
                                                        aplikasi dalam bidang bisnis<br>- Mampu membuat program-program
                                                        aplikasi perkantoran<br>- Mampu membuat program aplikasi
                                                        berbasis
                                                        Web.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width:200px;padding-bottom:10px;vertical-align:top;">
                                                    Kompetisi
                                                    Pendukung</td>
                                                <td style="width:10px;padding-bottom:10px;vertical-align:top;">:</td>
                                                <td style="padding-bottom:10px;vertical-align:top;vertical-align:top;">
                                                    <p>-</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width:200px;padding-bottom:10px;vertical-align:top;">
                                                    Kompetisi
                                                    Lainnya</td>
                                                <td style="width:10px;padding-bottom:10px;vertical-align:top;">:</td>
                                                <td style="padding-bottom:10px;vertical-align:top;vertical-align:top;">
                                                    <p>-</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>





            <!-- Content Header (Page header) -->
            @yield('content-header')
            <!-- /.content-header -->

            <!-- Main content -->
            @yield('content')
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy;
                <a href="https://adminlte.io">Polsri</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Developer</b> 12
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery UI 1.11.4 -->
    {{-- <script src="{{ asset('AdminLTE-3.2.0/plugins/jquery-ui/jquery-ui.min.js') }}"></script> --}}
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge("uibutton", $.ui.button);
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-3.2.0/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('AdminLTE-3.2.0/dist/js/adminlte.js') }}"></script>

    @yield('js_after')
</body>

</html>
