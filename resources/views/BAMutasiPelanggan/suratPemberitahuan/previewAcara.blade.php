@extends('layout.app')

@push('css')
    <link href="http://fonts.cdnfonts.com/css/dot-matrix" rel="stylesheet">
    <style>
        .priview {
            font-family: 'Dot Matrix', sans-serif;
        }

        table thead tr {
            border-bottom: 3px solid rgb(102, 102, 102);
            border-top: 3px solid rgb(102, 102, 102);
        }
    </style>
@endpush

@section('title', 'BA Mutasi Pelanggan')

@section('namaHal', 'BA Mutasi Pelanggan')

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">BA Mutasi Pelanggan</a></li>
        <li class="breadcrumb-item active">Cetak Acara</li>
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
                            <h3 class="card-title">Print preview Cetak Acara</h3>
                        </div>
                        <div class="card-body priview">
                            <div class="row">
                                <div class="col ml-2">
                                    <div style="font-size:15px" align="center">PERUSAHAAN DAERAH AIR MINUM SURYA SEMBADA KOTA SURABAYA</div>
                                    <div style="font-size:15px" align="center">Jl.Mayjen Prof.Moestopo No.2 Surabaya,
                                        Telp.(031)509, Fax (031)509, Surabaya, 60131</div>
                                    <div style="font-size:15px"align="center">Website www.pdam.go.id</div>
                                    <hr>
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
                                                <div class="col"></div>
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
                                                <div class="col"></div>
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
                                                <div class="col"> </div>
                                                <div class="col"></div>
                                                <div class="col"></div>
                                                <div class="col">
                                                    SURABAYA
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                                </table>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col ml-5">
                                        <div class="col ml-3">
                                            <div class="col">
                                                <div class="col ml-3">
                                                    <div class="col ">
                                                        <div class="col">
                                                            <div class="col ml-5">
                                                                <p>Sesuai hasil pemeriksaan di lapangan untuk alamat di
                                                                    bawah ini, </p>
                                                            </div>
                                                        </div>
                                                        <table>
                                                            <tr>
                                                                <div class="container">
                                                                    <div class="row justify-content-between">
                                                                        <div class="col">
                                                                            <p>Nopel : </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="container">
                                                                    <div class="row justify-content-between">
                                                                        <div class="col">
                                                                            <p>Nama : </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="container">
                                                                    <div class="row justify-content-between">
                                                                        <div class="col">
                                                                            <p>Alamat : </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="container">
                                                                    <div class="row justify-content-between">
                                                                        <div class="col">
                                                                            <p>Hasil Pemeriksaan :</p>
                                                                        </div>
                                                                        <div class="col">
                                                                            <p>Tanggal</p>
                                                                        </div>
                                                                        <div class="col">
                                                                            <p>, Menyatakan bahwa situasi </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </tr>
                                                            <div class="col">
                                                                <p> keadaan persil</p>
                                                                <p>Berkaitan dengan hal tersebut maka untuk kategori
                                                                    kelompok pelanggan diatas akan disesuaikan</p>
                                                            </div>
                                                            <table>
                                                                <tr>
                                                                    <div class="container">
                                                                        <div class="row justify-content-between">
                                                                            <div class="col">
                                                                                <p>dari </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </tr>
                                                                <tr>
                                                                    <div class="container">
                                                                        <div class="row justify-content-between">
                                                                            <div class="col">
                                                                                <p>Menjadi </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </tr>
                                                            </table>
                                                            <div class="col">
                                                                <div class="col ml-5">
                                                                    <p>Demikian atas perhatiannya dan kerjasamanya
                                                                        disampaikan terimakasih</p>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="container">
                                                        <div class="row text-center">
                                                            <div class="col justify-content-between"></div>
                                                            <div class="col">
                                                                <p>Mengetahui</p>
                                                                <p class="mb-5">Kepala Bagian Langganan</p>
                                                                <p class="mb-n3">Nurlillah Satria Pratama</p>
                                                                <hr style="width: 50%">
                                                                <p class="mt-n3">NIP: 1.08.01499</p>
                                                            </div>
                                                        </div>
                                                        <p>Tembusan Yth:</p>
                                                        <p class="ml-5"> 1. Direktur Pelayanan (sebagai laporan)</p>
                                                        <p class="ml-5"> 2. Ra Unit Humas</p>
                                                        <p class="ml-5"> 3. Arsip</p>
                                                        <p class="ml-5"><b> PDAM SURYA SEMBADA SURABAYA</b></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
