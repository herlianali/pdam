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

@section('title', 'Tampil Laporan')

@section('namaHal', 'Master')

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Petugas Korektor</li>
        <li class="breadcrumb-item active">Tampil Laporan</li>
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
                            <h3 class="card-title">Tampil Laporan </h3>

                        </div>
                        <div class="card-body priview">
                            <div class="row">
                                <div class="col" style="text-align: center;">
                                    <div style="font-size:15px">LAPORAN BUNDEL PETUGAS ANALISA DATA</div>
                                    <div style="font-size:15px">Periode : </div>
                                    <div style="font-size:15px">Tgl Penugasan : </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col" style="text-align: left;">
                                    <table>
                                        <tr>
                                            <td>PETUGAS</td>
                                            <td>: </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Sub Zona</th>
                                        <th>Bundel</th>
                                        <th>Jumlah Pelanggan</th>
                                        <th>Jumlah Anomali</th>
                                        <th>Jumlah Pelanggan Koreksi</th>
                                        <th>Hasil Tidar Ada</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tampil as $data)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $data->zona }}</td>
                                        <td>{{ $data->no_bundel }}</td>
                                        <td>{{ $data->jml_no_plg }}</td>
                                        <td>{{ $data->potensial }}</td>
                                        <td>{{ $data->koreksi }}</td>
                                        <td>{{ $data->potensial - $data->koreksi }}</td>
                                        <td></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="atasan" >
                            <table class="table" >
                                <tr>
                                    <td></td>
                                    <td>TOTAL</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table>
                            </div>
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
                                            <p class="mb-n3"> Ismu Bagjo</p>
                                            <hr style="width: 50%">
                                            <p class="mt-n3"> 1.95.00884 </p>
                                        </div>
                                        <div class="col">
                                            <p>Dibuat Oleh</p>
                                            <p class="mb-5">Petugas Analisa Data</p>
                                            <p class="mb-n3"> Sururi </p>
                                            <hr style="width: 50%">
                                            <p class="mt-n3"> 12345 </p>
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
