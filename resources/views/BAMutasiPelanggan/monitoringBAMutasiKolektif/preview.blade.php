@extends('layout.app')

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
@endpush

@section('title', 'BA Mutasi Pelanggan')

@section('namaHal', 'BA Mutasi Pelanggan')

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Monitoring BA Mutasi Kolektif</a></li>
        <li class="breadcrumb-item active">Preview</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class=" col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Print preview Monitoring BA Mutasi Kolektif</h3>
                            <a href="" class="btn btn-sm btn-success float-right"><i class="fas fa-print"></i>Cetak</a>
                        </div>
                        <div class="card-body priview">

                            <div class="row">
                                <div class="col">
                                    <div style="font-size:15px">PEMERINTAH KOTAMADYA DARRA II SURABAYA</div>
                                    <div style="font-size:15px">PERUSAHAAN DAERAH AIR MINUM</div>
                                    <div style="font-size:13px">Jl.Mayjen Prof Moestopo 2 </div>
                                    <div style="font-size:13px">Tlp.(031)5039373,5039392,5039676</div>
                                    <div style="font-size:13px">Surabaya</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col">Tanggal :</div>
                            </div>
                            <h4>
                                <center>DAFTAR BA MUTASI KOLEKTIF</center>
                            </h4>
                            <h5>
                                <center>Wilayah Timur
                            </h5>
                            </center>
                            <br>
                            <p>No BA Mutasi :</p>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Pelanggan</th>
                                        <th>Nama dan Alamat</th>
                                        <th>Retribusi L</th>
                                        <th>Retribusi B</th>
                                        <th>Tarif L</th>
                                        <th>Tarif B</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
