@extends('layouts.app')

@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active"><a href="#">Dashboard</a></li>
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
                    <div class="card-header border-0 ui-sortable-handle bg-gradient-primary" style="cursor: move;">
                        <h3 class="card-title">
                            <i class="fas fa-calculator"></i>
                            Status Surat Keterangan Pendamping Ijazah Anda
                        </h3>

                        <div class="card-tools">
                            <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <!-- Small boxes (Stat box) -->
                            <div class="row">
                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-info">
                                        <div class="inner">
                                            <h3>150</h3>

                                            <p>Total Sertifikat</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-filing"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">More info <i
                                                class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-success">
                                        <div class="inner">
                                            <h3>53<sup style="font-size: 20px">%</sup></h3>

                                            <p>Sertifikat Tervalidasi</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-checkmark"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">More info <i
                                                class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-warning">
                                        <div class="inner">
                                            <h3>44</h3>

                                            <p>Belum Tervalidasi</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-close"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">More info <i
                                                class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-danger">
                                        <div class="inner">
                                            <h3>65</h3>

                                            <p>Total Ukuran Sertifikat</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-database"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">More info <i
                                                class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
            </section>
            <section class="col-lg-6">
                <!-- solid sales graph -->
                <div class="card">
                    <div class="card-header border-0 ui-sortable-handle bg-gradient-warning" style="cursor: move;">
                        <h3 class="card-title">
                            <i class="fa fa-file"></i>
                            Apa itu SKPI ?
                        </h3>

                        <div class="card-tools">
                            <button type="button" class="btn bg-warning btn-sm" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn bg-warning btn-sm" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>
                            <b>Surat Keterangan Pendamping Ijazah (SKPI)</b> atau <b>Diploma Supplement</b> adalah surat
                            pernyataan resmi yang dikeluarkan oleh Perguruan Tinggi, berisi informasi tentang pencapaian
                            akademik atau kualifikasi dari lulusan pendidikan tinggi bergelar.
                        </p>
                        <p>
                            Kualifikasi lulusan diuraikan dalam bentuk narasi deskriptif yang menyatakan capaian
                            pembelajaran
                            lulusan pada jenjang KKNI yang relevan, dalam suatu format standar yang mudah dipahami oleh
                            masyarakat umum.
                        </p>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </section>
            <section class="col-lg-6">
                <!-- solid sales graph -->
                <div class="card">
                    <div class="card-header border-0 ui-sortable-handle bg-gradient-success" style="cursor: move;">
                        <h3 class="card-title">
                            <i class="fa fa-list"></i>
                            Apa manfaat SKPI ?
                        </h3>

                        <div class="card-tools">
                            <button type="button" class="btn bg-success btn-sm" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn bg-success btn-sm" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <ol style="text-align:justify;margin-left:-20px;">
                            <li>Merupakan dokumen tambahan yang menyatakan kemampuan kerja, penguasaan pengetahuan, dan
                                sikap/moral seorang lulusan yang lebih mudah dimengerti oleh pihak pengguna di dalam maupun
                                luar
                                negri dibandingkan dengan membaca transkrip.
                            </li>
                            <li>
                                Merupakan penjelasan yang obyektif dari prestasi dan kompetensi pemegangnya.
                            </li>
                            <li>
                                Meningkatkan kelayakan kerja (employability) terlepas dari kekakuan jenis dan jenjang
                                program
                                studi.
                            </li>
                        </ol>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </section>
            <section class="col-lg-12">
                <!-- solid sales graph -->
                <div class="card">
                    <div class="card-header border-0 ui-sortable-handle bg-gradient-info" style="cursor: move;">
                        <h3 class="card-title">
                            <i class="fa fa-book"></i>
                            Standar Operasi Prosedur (SOP)
                        </h3>

                        <div class="card-tools">
                            <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Untuk mengisi data <b>Surat Keterangan Pendamping Ijazah (SKPI). Langkah-langkah yang harus anda
                                lakukan adalah :</b> </p>
                        <ol style="text-align:justify;margin-left:-15px;">
                            <li>
                                Klik menu <b>Profil Mahasiswa</b>, maka akan muncul halaman <b>Profil Mahasiswa</b>.
                            </li>
                            <li>
                                Silahkan cek data profil anda. Jika ada data yang salah atau pun kurang, silahkan diperbaiki
                                dengan mengklik tombol <b>Ubah</b> untuk mengaktifkan formulir profil. Kemudian ketiklah
                                data
                                yang benar atau pun kurang lalu klik tombol <b>Perbarui</b> untuk memperbarui data.
                            </li>
                            <li>
                                Jika anda ingin mengganti foto profil anda. Klik tombol <b>Pilih File</b>, maka akan muncul
                                kotak dialog <b><i>Window Explorer</i></b>. Kemudian pilih file foto yang ingin digunakan
                                sebagai foto profil, lalu klik tombol <b>Open</b>.
                            </li>
                            <li>
                                Setelah membuka file foto yang digunakan, klik tombol <b>upload</b>. Jika upload anda
                                berhasil
                                maka foto profl anda akan langsung terganti. Namun, jika gagal, maka file yang anda upload
                                <b>bukan file format jpg atau jpeg</b> atau <b>ukuran file foto melebihi batas maksimal,
                                    yaitu
                                    500KB</b>.
                            </li>
                            <li>
                                Jika profil anda telah lengkap, langkah selanjutnya adalah mengisi data sertifikat yang
                                anda.
                                Data sertifikat yang digunakan dalam SKPI dibagi berdasarkan 4 (empat) kategori, yaitu
                                <b>Kerja
                                    Praktek (Magang), Pengalaman Organinasi, Prestasi dan Penghargaan dan Sertifikat
                                    Keahlian/Seminar.</b>
                            </li>
                            <li>
                                Untuk mengisi data sertifikat, klik tombol <b>Tambah</b> yang berada di atas tabel lalu akan
                                muncul formulir sertifikat.
                            </li>
                            <li>
                                Kemudian isi data sertifikat anda dengan benar dan pilih file sertifikat yang telah anda
                                scan
                                dengan mengklik tombol <b>Pilih File</b>, lalu klik tombol <b>Simpan</b> untuk menyimpan
                                data
                                sertifikat dan klik tombol <b>Batal</b> untuk membatalkan penyimpanan data.</li>
                            <li>Jika penyimpanan data sertifikat gagal, berarti data yang anda masukkan belum lengkap atau
                                file
                                scan sertifikat yang anda upload <b>bukan format pdf</b> dan <b>ukuran file pdf yang
                                    diupload
                                    melebihi batas maksimal, yaitu 1MB</b>
                            </li>
                            <li>
                                Jika anda ingin mengubah data sertifikat, klik tombol berbentuk ikon pencil <b><i
                                        class="fa fa-pencil"></i></b> yang berada di dalam tabel lalu akan muncul formulir
                                sertifikat yang berisi data sertifikat yang pilih. Ketikkan data yang ingin anda rubah, lalu
                                klik <b>Simpan</b> untuk menyimpan perubahan data sertifikat dan klik tombol <b>Batal</b>
                                untuk
                                membatalkan perubahan data.
                            </li>
                            <li>
                                Jika anda ingin menghapus data sertifkat, <b>klik kotak cek (<i>Check Box</i>)</b> pada
                                baris
                                data sertifikat yang ingin anda hapus. Setelah itu klik tombol hapus, makan akan muncul
                                kotak
                                dialog konfirmasi lalu klik tombol <b>OK</b> untuk lanjut menghapus data dan klik tombol
                                <b>Cancel</b> untuk membatalkan penghapusan data.
                            </li>
                            <li>
                                Jika anda ingin mendownload file sertifikat yang sudah anda upload, klik teks
                                <b>Download</b>
                                yang ada di dalam tabel.
                            </li>
                            <li>
                                Jika anda ingin mengetahui status data <b>Surat Keterangan Pendamping Ijazah (SKPI)</b>
                                anda,
                                anda dapat melihatnya di halaman <b>Dashboard</b>.
                            </li>
                        </ol>
                    </div>
                    <!-- /.card -->
            </section>
            <!-- right col -->
        </div>
    </div>
    <!-- /.row -->
    <!-- Main row -->

    <!-- /.row (main row) -->
@endsection
