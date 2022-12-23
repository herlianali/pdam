@extends('layout.app')

@push('css')
    <link href="{{ asset('assets/plugins/font/dot-matrix.css') }}" rel="stylesheet">
    <style>
        .priview {
            font-family: 'Dot Matrix', sans-serif;
        
        }
       
       
        .awalan {
            border: 3px solid rgb(102, 102, 102);
        }
        .akhiran {
            border: 3px solid rgb(102, 102, 102);
        }
        

    </style>
@endpush

@section('title', 'Print Informasi Pelunasan Rekening')

@section('namaHal', 'Pengaduan')

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Pengaduan</a></li>
        <li class="breadcrumb-item active">Informasi Pelunasan Rekeninng</li>
        <li class="breadcrumb-item active">Print Informasi Pelunasan Rekening</li>
    </ol>
    <br>
    <br>
    <a href="" class="btn btn-sm btn-success float-right"><i class="fas fa-download"></i>Download</a>
@endsection


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Print preview Laporan Rekapitulasi Naik Turun</h3>
                           
                        </div>
                        <div class="card-body priview">
                            
<p align="center">KARTU PELANGGAN</p>
<p align="center">Tanggal : 22/09/2022    03:41        </p>


<table>
    <tr>
        <div class="container" style="margin-left: 2rem">
            <div class="row justify-content-between">
                <div class="col">
                    <p>Nomor Pelanggan : </p>
                </div>
                <div class="col">
                    <p>Status: </p>
                </div>
                <div class="col">
                    <p>Zona :</p>
                </div>
            </div>
        </div>
    </tr>
    <tr>
        <div class="container" style="margin-left: 2rem">
            <div class="row justify-content-between">
                <div class="col">
                    <p>Nama Pelanggan : </p>
                </div>
                <div class="col">
                    <p> Kode : </p>
                </div>
                <div class="col">
                    <p>No Bundel :</p>
                </div>
            </div>
        </div>
    </tr>
    <tr>
        <div class="container" style="margin-left: 2rem">
            <div class="row justify-content-between">
                <div class="col">
                    <p>Alamat Pelanggan : </p>
                </div>
                <div class="col">
                    <p>Data Meter : </p>
                </div>
                <div class="col">
                    <p>No Bundel Lama :</p>
                </div>
            </div>
        </div>
    </tr>
    <tr>
        <div class="container" style="margin-left: 2rem">
            <div class="row justify-content-between">
                <div class="col">
                    <p>Dengan Alamat : </p>
                </div>
                <div class="col">
                    <p>Nomor PA : </p>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </tr>
    <tr>
        <div class="container" style="margin-left: 2rem">
            <div class="row justify-content-between">
                <div class="col">
                    <p>Nomor Telepon : </p>
                </div>
                <div class="col">
                    <p>Ukuran</p>
                </div>
                <div class="col">
                    <p>Periode Tagih</p>
                </div>
            </div>
        </div>
    </tr>

</table>

                          
                               
                            <table class="awalan" >
                                <thead>
                                    
                                       <tr>

                                        <th>No Pelanggaran</th>
                                        <th>Tgl Entri</th>
                                        <th>Jenis Pelanggaran</th>
                                        <th>Keterangan</th>
                                        <th>Rp Total Bayar</th>
                                        <th>Rp Denda</th>
                                       </tr>
                                   
                                </thead>
                                <tbody>
                                    <tr>
                                        
                                        </tr>
                                </tbody>
                            </table>
                            <br>
                            <table class="akhiran" rules="all" >
                                <thead>
                                    <tr>
                                   <th rowspan="2">No Usul Ts / No Bon Ts</th>
                                                                      <th rowspan="2">Tgl Bon Ts</th>
                                                                    
                                                                      <th rowspan="2">Tgl Realisasi Ts</th>
                                                                      <th rowspan="2">Angkat - Angkat</th>
                                                                      <th rowspan="2">Jns Pelanggaran</th>
                                                                      <th rowspan="2">Keterangan</th>
                                                                      <th rowspan="2">Rp Tagih</th>
                                                                      <th rowspan="2">Rp Denda</th>
                                                                      </tr>
                                    </tr>
                            
                                    </thead>
                                    
                                    <tbody>
                                    <tr>
                                  
                                    </tr>
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

