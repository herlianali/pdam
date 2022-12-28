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
    <title>Informasi Pelunasan Rekening</title>
</head>
<body>
    <div class="card-body priview">
        <div style="margin-left: 5px">
            <div style="font-size:15px">PEMERINTAH KOTA SURABAYA</div>
            <div style="font-size:15px">PERUSAHAAN DAERAH AIR MINUM</div>
            <div style="font-size:15px">#Wilayah</div>
        </div>
        <table>
            <p align="center">Daftar Rekening Pelanggan</p>
            <p align="center">BULAN : {{$data['monthName']}} {{$awal[0]}} S/D {{$data['monthName1']}} {{$akhir[0]}}</p>
        </table>
        <table>
            <tr>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <p>No Langganan </p>
                        </div>
                        <div class="col">
                            <p>: {{ $data['formHistory']['no_plg'] }}</p>
                        </div>
                        <div class="col"></div>
                        <div class="col"></div>
                    </div>
                </div>
            </tr>
            <tr>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <p>Nama </p>
                        </div>
                        <div class="col">
                            <p>: {{ $data['tablePlg'][0]->nama }}</p>
                        </div>
                        <div class="col"></div>
                        <div class="col"></div>
                    </div>
                </div>
            </tr>
            <tr>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <p>Alamat </p>
                        </div>
                        <div class="col">
                            <p>: {{ $data['tablePlg'][0]->jalan }} {{ $data['tablePlg'][0]->gang }} {{ $data['tablePlg'][0]->nomor }} {{ $data['tablePlg'][0]->notamb }}</p>
                        </div>
                        <div class="col">
                            <p></p>
                        </div>
                        <div class="col"></div>
                    </div>
                </div>
            </tr>
            <tr>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <p>Periode Tagih </p>
                        </div>
                        <div class="col">
                            <p>: Periode Tagih : {{ $data['tablePlg'][0]->periode }}</p>
                        </div>
                        <div class="col"></div>
                        <div class="col"></div>
                    </div>
                </div>
            </tr>
            <tr>
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col">
                            <p>Tanggal Tutu </p>
                        </div>
                        <div class="col">
                            <p>: {{ $data['tablePlg'][0]->tgl_tutup }}</p>
                        </div>
                        <div class="col"></div>
                        <div class="col">
                            <p>Tanggal Cetak : {{ $date }} </p>
                        </div>
                    </div>
                </div>
            </tr>

        </table>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Status</th>
                    <th>Tanggal Lunas</th>
                    <th>Bln-Thn</th>
                    <th>Tari</th>
                    <th>Jn</th>
                    <th>Rekening</th>
                    <th>Restitus</th>
                    <th>Denda</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                @if (count($data) > 0)
                <div style="display: none">{{ $totalrekening = 0 }}</div>
                <div style="display: none">{{ $totalrestitusi = 0 }}</div>
                <div style="display: none">{{ $totaldenda = 0 }}</div>
                <div style="display: none">{{ $totalbayar = 0 }}</div>
                @foreach ($data['tableHistory'] as $item)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{$item->status}}</td>
                        <td>{{$item->tgl_lunas}}</td>
                        <td>{{$item->periode}}</td>
                        <td>{{$item->kd_tarif}}</td>
                        <td>{{$item->jenis}}</td>
                        <td>{{$item->rp_rekening}}</td>
                        <td>{{$item->rp_restitusi}}</td>
                        <td>{{$item->rp_denda}}</td>
                        <td>{{$item->rp_bayar}}</td>
                        <div style="display: none">{{$totalrekening += $item->rp_rekening }}</div>
                        <div style="display: none">{{$totalrestitusi += $item->rp_restitusi }}</div>
                        <div style="display: none">{{$totaldenda += $item->rp_denda }}</div>
                        <div style="display: none">{{$totalbayar += $item->rp_bayar }}</div>
                    </tr>
                @endforeach
                @endif
                <thead>
                <tr>
                    <td>Jumlah Total</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{$totalrekening}}</td>
                    <td>{{$totalrestitusi}}</td>
                    <td>{{$totaldenda}}</td>
                    <td>{{$totalbayar}}</td>
                </tr>
                </thead>
                <thead>
                    <tr>
                        <td>Total rekening yang belum</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>{{$totalbayar}}</td>
                    </tr>
                </thead>
                <thead>
                    <tr>
                        <td>Total rekening yang telah t</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>{{$totalbayar}}</td>
                    </tr>
                </thead>
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
