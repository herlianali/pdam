<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="http://fonts.cdnfonts.com/css/dot-matrix" rel="stylesheet">
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
    <title>Retribusi</title>
</head>
<body>
    <div class="card-body priview">
        <p> Pemerintah Kota <br>
            Surabaya <br>
            PERUSAHAAN DAERAH AIR <br>
        </p>
        <div class="mx-auto mb-3" style="width: 250px;">
            <p>Table Master Retribusi</p> <br>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th width="30%">No</th>
                    <th width="40%">Kode Retribusi</th>
                    <th width="30%">Nilai Retribusi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($retribus as $retribusi)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $retribusi->kd_retribusi }}</td>
                        <td>{{ $retribusi->rp_retribusi }}</td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
</body>
</html>
