@extends('layout.app')

@push('css')
    <link href="http://fonts.cdnfonts.com/css/dot-matrix" rel="stylesheet">
    <style>
        .priview {
            font-family: 'Dot Matrix', sans-serif;
        }

        table {
            border: 3px solid rgb(102, 102, 102);
        }
    </style>
@endpush

@section('title', 'Panggilan Dinas')

@section('namaHal', 'BA Mutasi Pelanggan')

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Monitoring BA Mutasi Perorangan </a></li>
        <li class="breadcrumb-item active">Panggilan Dinas</li>

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
                            <h3 class="card-title">Print preview Panggilan Dinas</h3>
                        </div>
                        <div class="card-body priview">
                            <div class="row">
                                <div class="col">
                                    <div style="font-size:15px">PEMERINTAH KOTAMADYA DAERAH TK.II SURABAYA</div>
                                    <div style="font-size:15px">PERUSAHAAN DAERAH AIR MINUM</div>
                                    <div style="font-size:15px">Jl.Mayjen Prof.Moestopo No.2 Surabaya</div>
                                    <div style="font-size:15px">Telp.(031)509</div>
                                    <div style="font-size:15px">BAGIAN LANGGANAN WILAYAH BARAT</div>
                                </div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col mr-3">
                                    <div class="border pl-3 w-60">
                                        <div class="row">
                                            <div class="col">
                                                <div class="row">
                                                    <div class="col justify-content-between">
                                                        Kepada Yth :
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kopsurat">
                                            <div class="row">
                                                MARSOWATI
                                            </div>
                                            <div class="row">
                                                WIGUNA -49
                                            </div>
                                            <div class="row">
                                                SURABAYA
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table class="table col-md-4" rules="all">
                                <thead>
                                    <tr>
                                        <td align="center">PANGGILAN DINAS</th>
                                    </tr>
                                    <tr>
                                        <td align="center">TCL0503615</th>
                                    </tr>
                                </thead>
                            </table>
                            <p class="mt-2 mb-2">Dengan hormat, <br> mengharap kedatangan Sdr. di kantor Perusahaan Daerah
                                Air Minum Kota Surabaya</p>
                            <table class="table" rules="all">
                                <tbody>
                                    <tr>
                                        <th>Hari/Tanggal</th>
                                        <td>
                                            <div class="row">
                                                <div class="col"></div>
                                                <div class="col">
                                                    <p>Pukul: 08.00 s/d 12.00 WIB</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>UNTUK MENEMU</td>
                                        <td>
                                            <div class="row">
                                                <div class="col">
                                                    <p>Sdr. Drs. Ec. Rahma Yulianto </p>
                                                </div>
                                                <div class="col">
                                                    <p>Hubungan Langganan </p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>PERIHAL</td>
                                        <td>
                                            Penyesuaian Tarif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>KETERANGAN</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>CATATAN</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <p>Demikian berita acara ini dibuat dengan sesungguhnya untuk dapat digunakan sebagaimana
                                mestinya
                            </p>
                            <br>
                            <br>
                            <div class="ttd">
                                <div class="row text-center">
                                    <div class="col justify-content-between">

                                    </div>
                                    <div class="col">

                                    </div>
                                    <div class="col">
                                        <p class="mb-1">a.n Direksi Perusahaan</p>
                                        <p class="mb-1">Daerah Air Minum</p>
                                        <p class="mb-1">Kota Surabaya</p>
                                        <p class="mb-1">Direktur Adm & Keuangan</p>
                                        <br>
                                        <br>
                                        <p class="mb-n3"></p>
                                        <hr style="width: 50%">
                                        <p class="mt-n3"></p>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
