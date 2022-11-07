<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="http://fonts.cdnfonts.com/css/dot-matrix" rel="stylesheet">
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
        <p> Pemerintah Kota <br>
            Surabaya <br>
            PERUSAHAAN DAERAH AIR <br>
        </p>
        <div class="mx-auto mb-3" style="width: 250px;">
            <span>Laporan Tarif Per Bendel</span> <br>
            <div class="row">
                <div class="col">
                    No : {{$no}}
                </div>
            </div>
            <div class="row">
                <div class="col">
                    No Bundel : {{$no_bundel}}
                </div>
            </div>

            <div class="row">
                <div class="col">
                    Tanggal Cetak : {{$tgl_cetak}}
                </div>

                <div class="col-mr-1">
                    Hal : 1
                </div>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>No Pelanggan</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tarif Retribusi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tarif_bendel as $bendel)
                <tr>
                    <td>{{ $bendel->no_plg }}</td>
                    <td>{{ $bendel->nama }}</td>
                    <td>{{ $bendel->alamat }}</td>
                    <td>{{ $bendel->kd_retribusi }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

</body>
</html>
