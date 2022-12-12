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
    <title>Laporan Rekapitulasi Naik Turun</title>
</head>
<body>
    <div class="card-body priview">
        <div class="row">
            <div class="col" style="text-align: left;">
                <div style="font-size:15px">PDAM Kota Surabaya</div>
                <div style="font-size:15px">Rekapitulasi Perubahan Tarif .... Wilayah Timur</div><br>
                <div style="font-size:15px">Periode : </div>
            </div>
        </div>
        <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Tarif Lama</th>
                <th>Tarif Baru</th>
                <th>Jumlah</th>
            </tr>
        </thead>
    </table>
    <table>
        <tbody>
            <tr>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
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