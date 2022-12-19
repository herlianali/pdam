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

        <div style="margin-left: 5px">
            <div style="font-size:15px">PEMERINTAH KOTA SURABAYA</div>
            <div style="font-size:15px">PERUSAHAAN DAERAH AIR MINUM</div>
        </div>

        <div style="text-align: center">
            <div style="font-size:15px">LAPORAN MUTASI TARIF 
                @if($data['level'] == 'N')
                    TARIF NAIK
                @else
                    TARIF TURUN
                @endif
            </div>
            <div style="font-size:15px">BAGIAN HUBUNGAN LANGGANAN TIMUR</div>
            <div style="font-size:15px">PERIODE
                @if($data['dasar'] == 'sah')
                    PENGESAHAN
                @else
                    PENERBITAN REKENING
                @endif
                : {{$data['periode']}}</div>
        </div>
        <div class="mx-auto mb-3" style="width: 250px;">
            <span></span> <br>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Zona</th>
                    <th>No P.A</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tarif Lama</th>
                    <th>Tarif Baru</th>
                    <th>No B</th>
                    <th>Tanggal B</th>
                    <th>Nama Pen</th>
                    <th>Bundel</th>
                    <th>Nama Con</th>
                    <th>Asal Pen</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($data['filter'] as $row)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $row->zona }}</td>
                        <td>{{ $row->no_plg }}</td>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->jalan }} {{ $row->gang }} {{ $row->nomor }} {{ $row->notamb }}</td>
                        <td>{{ $row->kd_tarif_l }}</td>
                        <td>{{ $row->kd_tarif_b }}</td>
                        <td>{{ $row->no_ba }}</td>
                        <td>{{ $row->tgl_bamutasi }}</td>
                        <td>{{ $row->nama_pengadu }}</td>
                        <td>{{ $row->no_bundel }}</td>
                        <td>{{ $row->namapetugas }}</td>
                        <td>@if(trim($row->asal_pengaduan) == "L")
                            Lain-lain
                            @endif
                        </td>
                    </tr>
                    @endforeach

            </tbody>
        </table>
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