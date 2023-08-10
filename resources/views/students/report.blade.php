<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <style>
        @page {
            size: 8in 7.5in;
        }

        #judul {
            text-align: center;
        }

        #halaman {
            width: auto;
            height: auto;
            position: absolute;
            border: 1px solid;
            padding-top: 30px;
            padding-left: 30px;
            padding-right: 30px;
            padding-bottom: 30px;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SKPI</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <h5 class="text-center">IDENTITAS MAHASISWA</h5>
        <h5 class="text-center">POLITEKNIK NEGERI SRIWIJAYA</h5>
        <br>
        <table>
            <tr>
                <td>NAMA</td>
                <td>:</td>
                <td>{{ $data->name }}</td>
            </tr>
            <tr>
                <td>NPM/KTP</td>
                <td>:</td>
                <td>{{ $data->nim }}/{{ $data->ktp }}</td>
            </tr>
            <tr>
                <td>TEMPAT LAHIR</td>
                <td>:</td>
                <td>{{ $data->birth_place }}</td>
            </tr>
            <tr>
                <td>TANGGAL LAHIR</td>
                <td>:</td>
                <td>{{ $data->birth_date }}</td>
            </tr>
            <tr>
                <td>AGAMA</td>
                <td>:</td>
                <td>{{ $data->religion }}</td>
            </tr>
            <tr>
                <td>JURUSAN</td>
                <td>:</td>
                <td>{{ $data->department }}</td>
            </tr>
            <tr>
                <td>PROGRAM STUDI</td>
                <td>:</td>
                <td>{{ $data->study_program }}</td>
            </tr>
            <tr>
                <td>ALAMAT LENGKAP</td>
                <td>:</td>
                <td>{{ $data->address }}</td>
            </tr>
            <tr>
                <td>JUDUL LAPORAN AKHIR DALAM BAHASA :</td>
                <td>:</td>
            </tr>
            <tr>
                <td>- INDONESIA</td>
                <td>:</td>
                <td>{{ $data->indonesian_title }}</td>
            </tr>
            <tr>
                <td>- INGGRIS</td>
                <td>:</td>
                <td>{{ $data->english_title }}</td>
            </tr>
        </table>
    </div>
</body>

</html>
