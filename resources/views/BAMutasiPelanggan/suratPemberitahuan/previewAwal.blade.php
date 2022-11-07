@extends('layout.app')

@push('css')
    <link href="http://fonts.cdnfonts.com/css/dot-matrix" rel="stylesheet">
    <style>
        .priview {
            font-family: 'Dot Matrix', sans-serif;
        }

        table thead tr {
            border-bottom: 3px ridge rgb(102, 102, 102);
            border-top: 3px ridge rgb(102, 102, 102);
        }

        hr {
            border-top: 1px solid black;
        }
    </style>
@endpush

@section('title', 'BA Mutasi Pelanggan')

@section('namaHal', 'BA Mutasi Pelanggan')

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">BA Mutasi Pelanggan</a></li>
        <li class="breadcrumb-item active">Cetak Awal</li>
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
                            <h3 class="card-title">Print preview Cetak Awal</h3>
                        </div>
                        <div class="card-body priview">
                            <div class="row">
                                <div class="col ml-5">
                                    <div style="font-size:15px" align="center">PERUSAHAAN DAERAH AIR MINUM SURYA SEMBADA
                                        KOTA SURABAYA</div>
                                    <div style="font-size:15px" align="center">Jl.Mayjen Prof.Moestopo No.2 Surabaya,
                                        Telp.(031)509, Fax (031)509, Surabaya, 60131</div>
                                    <div style="font-size:15px"align="center">Website www.pdam.go.id</div>
                                    <hr>
                                </div>
                            </div>
                            <table>
                                <tr>
                                    <div class="container" style="margin-left: 10rem">
                                        <div class="row justify-content-between">
                                            <div class="col">
                                                <p> </p>
                                            </div>
                                            <div class="col">
                                                <p>Surabaya,</p>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="container" style="margin-left: 5rem">
                                        <div class="row justify-content-between">
                                            <div class="col">
                                                <p>Nomor : </p>
                                            </div>
                                            <div class="col">
                                            </div>
                                            <div class="col">
                                                <p>Kepada Yth </p>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="container" style="margin-left: 5rem">
                                        <div class="row justify-content-between">
                                            <div class="col">
                                                <p>Lampiran : </p>
                                            </div>
                                            <div class="col"></div>
                                            <div class="col">
                                                <p>Pelanggan PDAM SURYA SEMBADA </p>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="container" style="margin-left: 5rem">
                                        <div class="row justify-content-between">
                                            <div class="col">
                                                <p>Perihal : </p>
                                            </div>
                                            <div class="col"></div>
                                            <div class="col">
                                                <p> Kota Surabaya </p>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="container" style="margin-left: 5rem">
                                        <div class="row justify-content-between">
                                            <div class="col">
                                            </div>
                                            <div class="col"></div>
                                            <div class="col">
                                                <p>An.</p>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                                <br>
                                <br>
                                <br>
                                <tr>
                                    <div class="container" style="margin-left: 5rem">
                                        <div class="row justify-content-between">
                                            <div class="col">
                                            </div>
                                            <div class="col"></div>
                                            <div class="col">
                                                <p> Di - </p>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="container" style="margin-left: 4rem">
                                        <div class="row justify-content-between">
                                            <div class="col"></div>
                                            <div class="col"></div>
                                            <div class="col"> </div>
                                            <div class="col">
                                                SURABAYA
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                                <tr>
                                    <p align="center">Sesuai hasil pemeriksaan lapangan untuk alamat dibawah ini,</p>
                                    <div class="container" style="margin-left: 4rem">
                                        <div class="row justify-content-between">
                                            <div class="col">
                                                <table>
                                                    <tr>
                                                        <td>Nopel</td>
                                                        <td>:</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama</td>
                                                        <td>:</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat</td>
                                                        <td>:</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hasil Pemeriksaan</td>
                                                        <td>:</td>
                                                        <td>Tanggal</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col"></div>
                                            <div class="col">
                                            </div>
                                            <div class="col">
                                                SURABAYA
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
