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
    <li class="breadcrumb-item">Monitoring Surat Pemberitahuan</li>
    <li class="breadcrumb-item active">Entri Surat Pemberitahuan</li>
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
    <div class="form-group row  ">
        <label for="periode" class="col-md-3 col-form-label">Asal Surat Pemberitahuan</label>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio"  id="laporan_bulanan_per_pertugas"
                    name="lapora_bulanan_per_petugas">
                <label class="form-check-label">Pemberitahuan Awal</label>
            <br>
                <input type="radio" id="laporan_bulanan_semua_petugas"
                    name="laporan_bulanan_semua-petugas">
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
                            <h3 class="card-title">Dari Berita Acara</h3>
                        </div>
                        <div class="card-body">
<form action="">
    
    <div class="form-group row mt-2 ">
        <label for="periode" class="col-md-3 col-form-label">Jenis Berita Acara Mutasi</label>
        <div class="col-md-2">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="laporan_bulanan_per_pertugas"
                    name="lapora_bulanan_per_petugas">
                <label class="form-check-label">Perorangan</label>
            <br>
                <input type="radio" class="form-check-input" id="laporan_bulanan_semua_petugas"
                    name="laporan_bulanan_semua-petugas">
             <label class="form-check-label">Kolektif</label>        
                </div>
            </div>
    </div>
    <div class="form-group row mt-2 ">
            <label for="no_pelanggan" class="col-md-3 col-form-label">Tgl Entry</label>
                            <div class="col-md-2">
                                <input type="date" class="form-control" id="no_pelanggan" name="no_pelanggan" onkeyup="valueing()">
                            </div>
            </div>
            <div class="form-group row mt-2 ">
                <label for="no_pelanggan" class="col-md-3 col-form-label">NO BA Mutasi</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" id="no_pelanggan" name="no_pelanggan" onkeyup="valueing()">
                                </div>
                                <label for="no_pelanggan" class="col-form-label">Tgl Mutasi</label>
                                <div class="col-md-2">
                                    <input type="date" class="form-control" id="no_pelanggan" name="no_pelanggan" onkeyup="valueing()">
                                </div>
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
        <label for="periode" class="col-md-3 col-form-label">Nama</label>
        <div class="col-md-2">
            <input type="text" disabled class="form-control" id="no_pelanggan" name="no_pelanggan" onkeyup="valueing()">
            </div>
    </div>
    <div class="form-group row mt-2 ">
        <label for="periode" class="col-md-3 col-form-label">Alamat</label>
        <div class="col-md-1">
            <input type="text" disabled class="form-control" id="no_pelanggan" name="no_pelanggan" onkeyup="valueing()">
            </div>
            <label for="periode" class="col-form-label">Jalan</label>
            <div class="col-md-1">
                <input type="text" disabled class="form-control" id="no_pelanggan" name="no_pelanggan" onkeyup="valueing()">
                </div>
                <label for="periode" class="col-form-label">Gang</label>
                <div class="col-md-1">
                    <input type="text" disabled class="form-control" id="no_pelanggan" name="no_pelanggan" onkeyup="valueing()">
                    </div>
                    <label for="periode" class="col-form-label">Nomor</label>
                    <div class="col-md-1">
                        <input type="text" disabled class="form-control" id="no_pelanggan" name="no_pelanggan" onkeyup="valueing()">
                        </div>
                        <label for="periode" class="col-form-label">No Tambahan</label>
                        <div class="col-md-1">
                            <input type="text" disabled class="form-control" id="no_pelanggan" name="no_pelanggan" onkeyup="valueing()">
                            </div>
    </div>
    <div class="form-group row mt-2 ">
        <label for="periode" class="col-md-3 col-form-label">No Bon C</label>
        <div class="col-md-2">
            <input type="text" disabled class="form-control" id="no_pelanggan" name="no_pelanggan" onkeyup="valueing()">
            </div>
            <label for="periode" class="col-form-label">Tanggal Bon C</label>
            <div class="col-md-2">
                <input type="date" disabled class="form-control" id="no_pelanggan" name="no_pelanggan" onkeyup="valueing()">
                </div>
    </div>
    <div class="form-group row mt-2 ">
        <label for="periode" class="col-md-3 col-form-label">Kode Tarif Lama</label>
        <div class="col-md-2">
            <input type="text" disabled class="form-control" id="no_pelanggan" name="no_pelanggan" onkeyup="valueing()">
            </div>
    </div>
    <div class="form-group row mt-2 ">
        <label for="periode" class="col-md-3 col-form-label">Kode Tarif Baru</label>
        <div class="col-md-2">
            <input type="text" disabled class="form-control" id="no_pelanggan" name="no_pelanggan" onkeyup="valueing()">
            </div>
    </div>
    <div class="form-group row mt-2 ">
        <label for="periode" class="col-md-3 col-form-label">Alasan</label>
        <div class="col-md-6">
            <input type="text"  class="form-control" id="no_pelanggan" name="no_pelanggan" onkeyup="valueing()">
            </div>
    </div>
    <div class="form-group row mt-2 ">
        <label for="periode" class="col-md-3 col-form-label">No Surat</label>
        <div class="col-md-6">
            <input type="text"  class="form-control" id="no_pelanggan" name="no_pelanggan" onkeyup="valueing()">
            </div>
    </div>
                        </form>
                        
                
                
               
    </section>

@endsection
