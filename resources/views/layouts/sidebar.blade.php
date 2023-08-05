<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link bg-primary">
        <img src="{{ asset('assets/images/logo_skpi.png') }}" alt="polsri" width="200" />
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if (!empty(Auth::user()->photo))
                    <img src="{{ asset('assets/images/' . Auth::user()->photo) }}" class="img-circle elevation-2"
                        alt="User Image" />
                @else
                    <img src="{{ asset('assets/images/user.png') }}" class="img-circle elevation-2" alt="User Image" />
                @endif

            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item none">
                    <a href="{{ route('home') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                @hasanyrole('Super Admin|Akademik')
                    <li class="nav-item">
                        <a href="{{ route('user.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>Kelola Pengguna</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('supervisor.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-user-plus"></i>
                            <p>Kelola Dosen</p>
                        </a>
                    </li>
                @endhasanyrole

                <li class="nav-item">
                    <a href="{{ route('student.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>Profil Mahasiswa</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>Profil Mahasiswa MSU</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('department.index') }}" class="nav-link">
                        <i class="nav-icon far fa-building"></i>
                        <p>Profil Progam Studi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('institution') }}" class="nav-link">
                        <i class="nav-icon fas fa-university"></i>
                        <p>Profil Institusi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Verifikasi
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="{{ route('internship_certificate.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sertifikat Magang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('organizationalexperince_certificate.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sertfikat Organisasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{  route('award_certificate.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sertifikat Prestasi dan Penghargaan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route ('skill_certificate.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sertifikat Keahlian dan Seminar</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
