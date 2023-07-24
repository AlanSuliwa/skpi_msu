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
                        <h5>Visi : </h5>
                        <ol>
                            <li>Menjadi lembaga pendidikan vokasi yang unggul dan terkemuka.</li>
                        </ol>
                        <br>
                        <h5>Misi : </h5>
                        <ol>
                            <li>Meningkatkan penyelenggaraan pendidikan dalam bidang rekayasa dan non rekayasayang
                                berkualitas dengan berbasis pada sistem penjaminan mutU.
                            </li>
                            <li>Mengembangkan, menyebarluaskan, dan menerapkan ilmu pengetahuan, teknologi, dan seni serta
                                hasil penelitian terapan bermutu untuk dimanfaatkan dalam kegiatan produktif dan peningkatan
                                kualitas kehidupan masyarakat.
                            </li>
                            <li>Mengembangkan organisasi dan meningkatkan mutu pengelolaan sumber daya Polsri untuk
                                mewujudkan kinerja secara efektif, efisien, dan berkelanjutan.
                            </li>
                            <li>Meningkatkan kemitraan dengan pihak lain yang saling menguntungkan dalam rangka peningkatan
                                kualitas penyelenggaraan Tri Dharma Perguruan Tinggi.
                            </li>
                        </ol>
                        <h5>Tujuan : </h5>
                        <ol>
                            <li>Meningkatnya lulusan yang berkualitas, berdisiplin, bermoral, berjiwa wirausaha,
                                berwawasan lingkungan, dan relevan dengan perkembangan industri.
                            </li>
                            <li>Mengembangkan, menyebarluaskan, dan menerapkan ilmu pengetahuan, teknologi, dan seni serta
                                hasil penelitian terapan bermutu untuk dimanfaatkan dalam kegiatan produktif dan peningkatan
                                kualitas kehidupan masyarakat.
                            </li>
                            <li>Meningkatnya penyebarluasan ilmu pengetahuan, teknologi dan seni serta hasil penelitian
                                terapan bermutu untuk dimanfaatkan dalam kegiatan produktif dan peningkatan kualitas
                                kehidupan masyarakat.
                            </li>
                            <li>Meningkatnya mutu dan efisiensi pelayanan dalam bidang penyelenggaraan pendidikan;
                            </li>
                            <li>Meningkatnya kuantitas dan kualitas penyelenggaraan kemitraan dengan pihak lain yang
                                saling menguntungkan.
                            </li>
                            <li>Meningkatnya kemitraan dengan pihak lain yang saling menguntungkan dalam rangka
                                peningkatan kualitas penyelenggaraan Tri Dharma Perguruan Tinggi.
                            </li>
                        </ol>


                    </div>
                    <!-- /.card -->
            </section>
        </div>
    </div>
    <!-- /.row -->
@endsection
