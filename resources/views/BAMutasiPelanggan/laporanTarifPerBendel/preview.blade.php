@extends('layout.app')
@section('title', 'BA Mutasi Pelanggan')

@push('css')
    <link href="http://fonts.cdnfonts.com/css/dot-matrix" rel="stylesheet">
    <style>
        .priview {
            font-family: 'Dot Matrix', sans-serif;
        }

        table thead tr {
            border-bottom: 3px dotted rgb(102, 102, 102);
            border-top: 3px dotted rgb(102, 102, 102);
        }
    </style>

    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'BA Mutasi Pelanggan')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">BA Mutasi Pelanggan</a></li>
        <li class="breadcrumb-item active">Laporan Tarif Per Bendel</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="alert alert-primary text-center" role="alert">
                        {{ $hasil }}
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Print Preview Tarif per Bendel</h3>
                            <a href="" class="btn btn-xs btn-success float-right"> Print</a>
                        </div>
                        <div class="card-body priview">
                            <p> Pemerintah Kota <br>
                                Surabaya <br>
                                PERUSAHAAN DAERAH AIR <br>
                            </p>
                            <div class="mx-auto mb-3" style="width: 250px;">
                                <span>Laporan Tarif Per Bendel</span> <br>
                                <div class="row">
                                    <div class="col">
                                        Zona :  {{ $data[0]->zona }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        No Bundel : {{ $data[0]->no_bundel }}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        Tanggal Cetak : {{ date('Y-m-d') }}
                                    </div>

                                    <div class="col-mr-1 float-right">
                                        Hal :
                                    </div>
                                </div>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Pelanggan</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Tarif Retribusi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($data)
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $item->no_plg }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->jalan }}{{ $item->gang}}{{ $item->nomor}}{{$item->notamb}}</td>
                                                <td>{{ $item->rp_retribusi }}</td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
