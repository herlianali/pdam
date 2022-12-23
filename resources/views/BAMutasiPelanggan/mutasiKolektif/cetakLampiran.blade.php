<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('assets/plugins/font/dot-matrix.css') }}" rel="stylesheet">
    <style type="text/css">
        p, span , .priview{
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
    <title>Monitoring Guna Persil</title>
</head>
<body>
    <div class="card-body priview">
        <div class="row">
            <div class="col ">
                <div style="font-size:15px">PEMERINTAH KOTA SURABAYA</div>
                <div style="font-size:15px">PERUSAHAAN DAERAH AIR MINUM</div>
            </div>
            <table>
                <tr>
                    <div class="container" style="margin-left: 10rem">
                        <div class="row justify-content-between">
                            <div class="col">
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                                Hal :
                            </div>
                        </div>
                        <br>
                    </div>
                </tr>
            </table>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Pelanggan</th>
                        <th>Alamat Pelanggan</th>
                        <th>Gang</th>
                        <th>Nomor</th>
                        <th>Untuk Di</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>10111</td>
                        <td>Jl Kenangan</td>
                        <td>1</td>
                        <td>14</td>
                        <td>Status</td>
                        <td>Aktif</td>
                    </tr>
                </tbody>
            </table>
            <table>
                <tr>
                    <div class="container" style="margin-left: 10rem">
                        <div class="row justify-content-between">
                            <div class="col">
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                                Surabaya, 16-09-2022
                            </div>
                        </div>
                        <br>
                    </div>
                </tr>
            </table>
            <div class="container">
                <div class="row text-center">
                    <div class="col justify-content-between">
                        <p>Diketahui Oleh:</p>
                        <p class="mb-5">Kabag. Langganan Timur</p>
                        <p class="mb-n3">Nurlilah Satria Pratama, S.T</p>
                        <hr style="width: 50%">
                        <p class="mt-n3">1 08 0149</p>
                    </div>
                    <div class="col">
                        <p>Diteliti Oleh:</p>
                        <p class="mb-5">Kasie Peneliti Pelanggan</p>
                        <p class="mb-n3">Drs. Ec Agustinus R</p>
                        <hr style="width: 50%">
                        <p class="mt-n3"> 130 022 001</p>
                    </div>
                    <div class="col">
                        <p></p>
                        <p class="mb-2" underline>harus ditanyakan</p>
                        <p class="mb-5">Yang Membuat</p>
                        <p class="mb-n3">H Achmad Syamsul Arifin</p>
                        <hr style="width: 50%">
                        <p class="mt-n3"> 122 967 332</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
</body>
</html>

@push('js')
    <script src="{{ asset('assets/jquery.printPage.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".print").printPage();
        });
    </script>
@endpush