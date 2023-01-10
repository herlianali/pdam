<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('assets/plugins/font/dot-matrix.css') }}" rel="stylesheet">
    <style type="text/css">
        p  {
            font-family: 'Dot Matrix', sans-serif;
        }

        table{
            font-family: 'Dot Matrix', sans-serif;
        }

        table thead tr {
            border-bottom: 3px dotted rgb(102, 102, 102);
            border-top: 3px dotted rgb(102, 102, 102);
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bon P</title>
</head>
<body>
    <div class="card-body priview">
        <div class="row">
            <div class="col ml-3">
                <p style="font-size:15px">PEMERINTAH KOTAMADYA DAERAH TK.II SURABAYA</p>
                <p style="font-size:15px">PERUSAHAAN DAERAH AIR MINUM</p>
                <p style="font-size:15px">Jl.Mayjen Prof.Moestopo No.2 Surabaya</p>
                <p style="font-size:15px">Telp.(031)509</p>
            </div>
            <div class="col"></div>

            <div class="col">
                <div class="border pl-2 w-100">
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <p class="col justify-content-between">
                                    BAGIAN LANGGANAN WILAYAH
                                </p>
                                <p class="col">
                                    TTMTTR
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <p class="row">
                            NOMOR :
                        </p>
                        <p class="row">
                            TANGGAL :
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <table>
            <p align="center">PERINTAH PEMERIKSAAN</p>
        </table>

        <table>
            <tr>
                <div class="container" style="margin-left: 2rem">
                    <div class="row justify-content-between">
                        <div class="col">
                            <p>Nomor Pelanggan : </p>
                        </div>
                        <div class="col">
                            <p>Kode Tarif : </p>
                        </div>
                    </div>
                </div>
            </tr>
            <tr>
                <div class="container" style="margin-left: 10rem">
                    <div class="row justify-content-between">
                        <div class="col">
                            <p>Nama Pelanggan : </p>
                        </div>
                        <div class="col">
                            <p>Nomor P.A : </p>
                        </div>
                    </div>
                </div>
            </tr>
            <tr>
                <div class="container" style="margin-left: 10rem">
                    <div class="row justify-content-between">
                        <div class="col">
                            <p>Alamat Pelanggan : </p>
                        </div>
                        <div class="col">
                            <p>Data Meter : </p>
                        </div>
                    </div>
                </div>
            </tr>
            <tr>
                <div class="container" style="margin-left: 10rem">
                    <div class="row justify-content-between">
                        <div class="col">
                            <p>Dengan Alamat : </p>
                        </div>
                        <div class="col">
                            <p>Permasalahan : </p>
                        </div>
                    </div>
                </div>
            </tr>

        </table>

        <table class="table table-bordered">
            <thead>
                <tr align="center">
                    <td rowspan="2">Tanggal</td>
                    <td rowspan="2">Uraian Pekerjaan</td>
                    <td rowspan="2">Bahan Yang Digunakan</td>
                    <td rowspan="2">Jumlah</td>
                    <td colspan="2">Yang Mengerjakan</td>

                </tr>
                <tr>
                    <td>Nama</td>
                    <td>T.Tangan</td>
                </tr>

            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>4</td>
                    <td>3</td>
                    <td>5</td>
                    <td>6</td>
                </tr>
            </tbody>
        </table>
        <br>
        <br>

        <div class="container">
            <div class="row text-center">
                <div class="col justify-content-between">
                    <p>Petugas</p>
                    <p class="mb-5">Bagian Langganan</p>
                    <p class="mb-n3">Moch. Soejanto</p>
                    <hr style="width: 50%">
                    <p class="mt-n3">NIP: 1.96.01018</p>
                </div>
                <div class="col">
                    <p>Mengetahui</p>
                    <p class="mb-5">Kepala Bagian Langganan</p>
                    <p class="mb-n3">Nurlillah Satria Pratama</p>
                    <hr style="width: 50%">
                    <p class="mt-n3">NIP: 1.08.01499</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>