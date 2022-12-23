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
    <title>Jenis Pekerjaan</title>
</head>
<body>
    <div class="card-body priview">
        <p> Pemerintah Kota <br>
            Surabaya <br>
            PERUSAHAAN DAERAH AIR <br>
        </p>
        <div class="mx-auto mb-3" style="width: 250px;">
            <p>Table Master Jenis Pekerjaan</p> <br>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Jenis Pekerjaan</th>
                    <th>Keterangan</th>
                    <th>Jenis BON P</th>
                    <th>Beban</th>
                    <th>Kel BON P</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($filter as $jenis)
                <tr>
                        <td>{{ $jenis->jns_pekerjaan }}</td>
                        <td>{{ $jenis->keterangan }}</td>
                        <td>{{ $jenis->jenis_bonp }}</td>
                        <td>
                            @if ($jenis->beban_plg == "0")
                                Tidak
                            @else
                                Ya
                            @endif
                        </td>
                        <td>{{ $jenis->kel_bonp }}</td>
                </tr>
                @endforeach
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
