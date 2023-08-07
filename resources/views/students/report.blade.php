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
                <td>1. NAMA*)</td>
            <td>:</td>
                <td>{{ $data->name }}</td>
            </tr>
        </table>
    </div>
</body>

</html>
