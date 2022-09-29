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
        <li class="breadcrumb-item">Monitoring Surat Pemberitahuan</li>
        <li class="breadcrumb-item active">Entri Surat Pemberitahuan Awal</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Entri Surat Pemberitahuan</h3>
                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="form-group row ">
                                    <label for="periode" class="col-md-3 col-form-label">Asal Surat Pemberitahuan</label>
                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="radio" id="pemberitahuan_awal"name="pemberitahuan_awal" checked>
                                            <label class="form-check-label">Pemberitahuan Awal</label>
                                            <br>
                                            <input type="radio"id="dari_berita_acara"name="dari_berita_acara" disabled>
                                            <label class="form-check-label">Dari Berita Acara</label>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Pemberitahuan Awal</h3>
                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="form-group row mt-2 ">
                                    <label for="periode" class="col-md-3 col-form-label">Jenis Berita Acara Mutasi</label>
                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" id="perorangan"name="kolektif">
                                            <label class="form-check-label">Perorangan</label>
                                            <br>
                                            <input type="radio" class="form-check-input"id="kolektif"name="koletif">
                                            <label class="form-check-label">Kolektif</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mt-2 ">
                                    <label for="tgl_entry" class="col-md-3 col-form-label">Tgl Entry</label>
                                    <div class="col-md-2">
                                        <input type="date" class="form-control" id="tgl_entry" name="tgl_entry" onkeyup="valueing()">
                                    </div>
                                    <input type="checkbox">
                                    <label for="cetak_rekap" class="col-md-2 col-form-label">Cetak Rekap</label>
                                    <br>
                                </div>
                                <div class="form-group row mt-2 ">
                                    <label for="no_pelanggan" class="col-md-3 col-form-label">No Pelanggan</label>
                                    <div class="col-md-2">
                                        <input type="text" class="form-control" id="no_pelanggan" name="no_pelanggan"onkeyup="valueing()">
                                    </div>
                                    <label for="tgl_surat" class="col-form-label">Tgl Surat</label>
                                    <div class="col-md-2">
                                        <input type="text" class="form-control" id="tgl_surat"name="tgl_surat"onkeyup="valueing()">
                                    </div>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"data-target="#pelanggan" disabled><i class=""></i> Pembatalan BA </button>
                                    &nbsp;
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#pelanggan"><i class="fas fa-search"></i> Cari</button>
                                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Informasi Pelanggan</h3>
                                </div>
                                <div class="card-body">
                                    <form action="">
                                        <div class="form-group row mt-2 ">
                                            <label for="periode" class="col-md-3 col-form-label">No Pelanggan</label>
                                            <div class="col-md-2">
                                                <input type="text" disabled class="form-control" id="no_pelanggan" name="no_pelanggan" onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2 ">
                                            <label for="nama" class="col-md-3 col-form-label">Nama</label>
                                            <div class="col-md-2">
                                                <input type="text" disabled class="form-control" id="nama" name="nama" onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2 ">
                                            <label for="alamat" class="col-md-3 col-form-label">Alamat</label>
                                            <div class="col-md-1">
                                                <input type="text" disabled class="form-control" id="alamat"name="alamat" onkeyup="valueing()">
                                            </div>
                                            <label for="jln" class="col-form-label">Jalan</label>
                                            <div class="col-md-1">
                                                <input type="text" disabled class="form-control" id="jln" name="jln" onkeyup="valueing()">
                                            </div>
                                            <label for="gang" class="col-form-label">Gang</label>
                                            <div class="col-md-1">
                                                <input type="text" disabled class="form-control" id="gang"name="gang" onkeyup="valueing()">
                                            </div>
                                            <label for="nomor" class="col-form-label">Nomor</label>
                                            <div class="col-md-1">
                                                <input type="text" disabled class="form-control" id="nomor"name="nomor" onkeyup="valueing()">
                                            </div>
                                            <label for="no_tambahan" class="col-form-label">No Tambahan</label>
                                            <div class="col-md-1">
                                                <input type="text" disabled class="form-control" id="no_tambahan" name="no_tambahan" onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2 ">
                                            <label for="no_bonc" class="col-md-3 col-form-label">No Bon C</label>
                                            <div class="col-md-2">
                                                <input type="text" disabled class="form-control" id="no_bonc"name="no_bonc" onkeyup="valueing()">
                                            </div>
                                            <label for="tgl_bonc" class="col-form-label">Tanggal Bon C</label>
                                            <div class="col-md-2">
                                                <input type="date" disabled class="form-control" id="tgl_bonc"name="tgl_bonc" onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2 ">
                                            <label for="kode_tarif_lama" class="col-md-3 col-form-label">Kode Tarif Lama</label>
                                            <div class="col-md-2">
                                                <input type="text" disabled class="form-control" id="kode_tarif_lama"name="kode_tarif_lama" onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2 ">
                                            <label for="kode_tarif_baru" class="col-md-3 col-form-label">Kode Tarif Baru</label>
                                            <div class="col-md-2">
                                                <select class="form-control" id="kode_baru" onkeyup="valueing()">
                                                    <option value=""> </option>
                                                    <option value=""> </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2 ">
                                            <label for="alasan" class="col-md-3 col-form-label">Alasan</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="alasan" name="alasan" onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2 ">
                                            <label for="no_surat" class="col-md-3 col-form-label">No Surat</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="no_surat"name="no_surat" onkeyup="valueing()">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
