@extends('layout.app')

@push('css')
    <link href="{{ asset('assets/plugins/font/dot-matrix.css') }}" rel="stylesheet">
    <style>
        .priview {
            font-family: 'Dot Matrix', sans-serif;
        }
        .atasan{
            border-bottom: 2px dashed gray;
            border-top: 2px dashed gray;
        }
        table thead tr {
            border-bottom: 2px dashed rgb(102, 102, 102);
            border-top: 2px dashed rgb(102, 102, 102);
        }

    </style>
@endpush

@section('title', 'Laporan Bulanan Semua Petugas')

@section('namaHal', 'Master')

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Petugas Korektor</li>
        <li class="breadcrumb-item active">Laporan Bulanan Semua Petugas</li>
    </ol>
    <br>
    <br>
    <button type="submit"
        class="btn btn-sm float-right btn-success print">
        Print
    </button>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Laporan Bulanan Semua Petugas</h3>

                        </div>
                        <div class="card-body priview">
                            <div class="row">
                                <div class="col" style="text-align: center;">
                                    <div style="font-size:15px">LAPORAN BULANAN SEMUA PETUGAS KOREKTOR</div>
                                    <div style="font-size:15px">PERIODE : {{ $data['thbl'] }}</div>
                                </div>
                            </div>
                            <br>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>PETUGAS KOREKTOR</th>
                                        <th>JUMLAH PELANGGARAN</th>
                                        <th>JUMLAH ANOMALI</th>
                                        <th>JUMLAH PELANGGARAN KOREKSI</th>
                                        <th>HASIL TIDAR ADA</th>
                                        <th>KETERANGAN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tampil as $row)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $row->userakses." ".$row->nama }}</td>
                                            <td>{{ $row->jml_no_plg }}</td>
                                            <td>{{ $row->anomali }}</td>
                                            <td>{{ $row->koreksi }}</td>
                                            <td>{{ $row->anomali - $row->koreksi }}</td>
                                            <td></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot class="atasan">
                                    <tr>
                                        <td></td>
                                        <td>TOTAL</td>
                                        <td>{{ $total->tpelanggan }}</td>
                                        <td>{{ $total->tanomali }}</td>
                                        <td>{{ $total->tkoreksi }}</td>
                                        <td>{{ $total->tanomali - $total->tkoreksi }}</td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>
                            <br>
                            <div class="ttd">
                                <div class="row text-right">
                                    <div class="col justify-content-between">
                                        <p>Surabaya, {{ $dateNow }}</p>
                                    </div>
                                </div>
                            </div>
                                <div class="ttd">
                                    <div class="row text-center">
                                        <div class="col justify-content-between">
                                            <p>Mengetahui</p>
                                            <p class="mb-5"></p><br>
                                            <br>
                                            <p class="mb-n3"> Minarnik, S.Si </p>
                                            <hr style="width: 50%">
                                            <p class="mt-n3"> 10901504 </p>
                                        </div>
                                        <div class="col">
                                            <p>Senior Staf Analisa D</p>
                                            <p class="mb-5"></p><br>
                                            <br>
                                            <p class="mb-n3"> Ismu Bagjo </p>
                                            <hr style="width: 50%">
                                            <p class="mt-n3"> 1.95.00884 </p>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
            </div>
        </div>
        </div>
    </section>
@endsection

@push('js')
    <script type="text/javascript">
        const box = document.getElementById('startEnd');

        function clickRadio() {
            if (document.getElementById('semuakd').checked) {
                box.style.display = "none"
            } else {
                box.style.display = "block"
            }
        }

        const radioButtons = document.querySelectorAll('input[name="filter"]');
        radioButtons.forEach(radio => {
            radio.addEventListener('click', clickRadio)
        });
    </script>
@endpush
