@extends('layout.app')

@push('css')
    <link href="{{ asset('assets/plugins/font/dot-matrix.css') }}" rel="stylesheet">
    <style>
        .priview {
            font-family: 'Dot Matrix', sans-serif;
        
        }
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }

    </style>
@endpush

@section('title', 'Riwayat Pemakaian')

@section('namaHal', 'Riwayat Pemakaian')

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Riwayat Pemakaian</a></li>
        <li class="breadcrumb-item active">Kartu Pelanggan</li>
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

                          
                               
                            <table  >
                                <thead>
                                    
                                       <tr>

                                        <th rowspan="2">Tgl</th>
                                        <th rowspan="2">Npl</th>
                                        <th rowspan="2">Tarif No BA</th>
                                        <th rowspan="2">BAPM3 Air No BA</th>
                                        <th rowspan="2">Plgn</th>
                                        <th rowspan="2">Nomor Buka</th>
                                        <th rowspan="2">Nomor Tutup</th>
                                        <th rowspan="2">PDinas</th>
                                        <th rowspan="2">P</th>
                                        <th rowspan="2">Nomor S.P.R.K</th>
                                        <th rowspan="2">Kode</th>
                                        <th rowspan="2">Nmr</th>
                                        <th rowspan="2">Nmr Kontrol</th>
                                        <th rowspan="2">Ptgs</th>
                                        <th rowspan="2">Stand Meter</th>
                                        <th rowspan="2">Sts Air</th>
                                        <th rowspan="2">Tgl Realisasi</th>
                                       </tr>
                                   
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> 1 </td>
                                         <td> 1 </td> <td> 1 </td> <td> 1 </td> <td> 1 </td> <td> 1 </td> <td> 1 </td> <td> 1 </td> <td> 1 </td> <td> 1 </td> <td> 1 </td> <td> 1 </td>  <td> 1 </td>  <td> 1 </td> <td> 1 </td>  <td> 1 </td>  <td> 1 </td>
                                        </tr>
                                </tbody>
                            </table>
                            <br>
                            <table>
                                <thead>
                                    <tr>
                                   <th rowspan="2">Periode Rek</th>
                                                                      <th rowspan="2">Tgl Catat</th>
                                                                         <th colspan="3">Pemakaian Air Sesuai</th>
                                                                      <th colspan="3">Mutasi Pemakaian Air</th>
                                                                      <th colspan="3">Pemakaian Air DR Pencatat Mtr</th>
                                                                      <th rowspan="2">Mt. Sts</th>
                                                                      <th rowspan="2">Air Sts</th>
                                                                      <th rowspan="2">Ptgs Cs</th>
                                                                      <th rowspan="2">Tgl</th>
                                                                      <th rowspan="2">Stand</th>
                                                                      <th rowspan="2">Status</th>
                                                                      </tr>
                                    </tr>
                                    <tr>
                                      <th>MTRLALU</th>
                                      <th>MTRKINI</th>
                                      <th>MTR3AIR</th>
                                       <th>MTRLALU</th>
                                      <th>MTRKINI</th>
                                      <th>MTR3AIR</th>
                                       <th>MTRLALU</th>
                                      <th>MTRKINI</th>
                                      <th>MTR3AIR</th>
                                   
                                      
                                    </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <tr>
                                    <td> 1 </td>
                                     <td> 1 </td> <td> 1 </td> <td> 1 </td> <td> 1 </td> <td> 1 </td> <td> 1 </td> <td> 1 </td> <td> 1 </td> <td> 1 </td> <td> 1 </td> <td> 1 </td>  <td> 1 </td>  <td> 1 </td> <td> 1 </td>  <td> 1 </td>  <td> 1 </td>
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

