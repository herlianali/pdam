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
        <div class="row">
            <div class="col">
                <div style="font-size:15px">PEMERINTAH KOTA SURABAYA</div>
                <div style="font-size:15px">PERUSAHAAN DAERAH AIR MINUM</div>
                <div style="font-size:15px">#wilayah</div>
            </div>
        </div>
        <h4>
            <center><p> Laporan Monitoring Guna Persil </p></center>
        </h4>
        <div class="col">
            <span>{{$apa}},{{$apa}}</span>
        </div>
        <table class="table table-border">
            <thead>
                <tr>
                    <th>No PLG</th>
                    <th>NAMA</th>
                    <th>JALAN</th>
                    <th>GANG</th>
                    <th>NO</th>
                    <th>NO TAMB</th>
                    <th>DA</th>
                    <th>KD TARIF</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($monitoring as $mgunapersil)
                <tr>
                    <td>{{ $mgunapersil->no_plg }}</td>
                    <td>{{ $mgunapersil->nama }}</td>
                    <td>{{ $mgunapersil->jalan }}</td>
                    <td>{{ $mgunapersil->gang }}</td>
                    <td>{{ $mgunapersil->no }}</td>
                    <td>{{ $mgunapersil->no_tambahan }}</td>
                    <td>{{ $mgunapersil->no_tambahan }}</td>
                    <td>{{ $mgunapersil->kd_tarif }}</td>
                </tr>
                @endforeach
            
            </tbody>
        </table>
</body>
</html>
