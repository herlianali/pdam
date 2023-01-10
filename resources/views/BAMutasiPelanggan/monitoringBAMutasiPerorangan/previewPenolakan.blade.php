@extends('layout.app')
@section('title', 'BA Mutasi Pelanggan')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <link href="{{ asset('assets/plugins/font/dot-matrix.css') }}" rel="stylesheet">
    <style>

    </style>
@endpush

@section('namaHal', 'BA Mutasi Pelanggan')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">BA Mutasi Pelanggan</a></li>
        <li class="breadcrumb-item active">Cetak Penolakan Usulan</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-10">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Print preview Cetak Penolakan Usulan</h3>
                            <a href="" class="btn btn-sm btn-success float-right"><i class="fas fa-print"></i>Cetak</a>
                        </div>
                        <div class="card-body priview">
                            <div class="row">
                                <div class="col">
                                    <center>
                                        <div style="font-size:15px">PEMERINTAH KOTAMADYA DARRA II SURABAYA</div>
                                        <div style="font-size:15px">PERUSAHAAN DAERAH AIR MINUM</div>
                                        <div style="font-size:13px">Jl.Mayjen Prof Moestopo 2 </div>
                                        <div style="font-size:13px">Tlp.(031)5039373,5039392,5039676</div>
                                        <div style="font-size:13px">Surabaya</div>
                                    </center>
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
                                                    <p>Kepada </p>
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
                                                    <p> Yth </p>
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

                                            </div>
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="container" style="margin-left: 5rem">
                                            <div class="row justify-content-between">
                                                <div class="col ml-5">
                                                    <p><u>Klasifikasi Air Minum</u></p>
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
                                                    <p>Dengan hormat,</p>
                                                    <div class="col ml-3">
                                                        <p>Sehubungan dengan surat permohonan/laporan saudara </p>
                                                    </div>
                                                    <table>
                                                        <tr>
                                                            <td>Nomor</td>
                                                            <td>:</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tanggal</td>
                                                            <td>:</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tentang</td>
                                                            <td>:</td>
                                                        </tr>
                                                    </table>
                                                    <br>
                                                    <br>
                                                    <div class="col">
                                                        <p>Dengan berat hati diberitahukan bahwa permohonan saudara ditolak
                                                            karena berdasarkan
                                                            penelitian setempat maupun <br> secara administratif, kode tarif
                                                            pada rekening air minum saudara
                                                            sudah sesuai dengan penggunaan perilnya yaitu :</p>
                                                    </div>
                                                    <table>
                                                        <tr>
                                                            <td>Kode Tarif</td>
                                                            <td>:</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nomor Pelanggan</td>
                                                            <td>:</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Keterangan</td>
                                                            <td>:</td>
                                                        </tr>
                                                    </table>
                                                    <br>
                                                    <br>
                                                    <div class="col">
                                                        <div class="col ml-5">
                                                            <p>Demikian atas perhatiannya disampaikan terimakasih dan
                                                                hendaknya dimaklumi</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container">
                                                    <div class="row text-center">
                                                        <div class="col justify-content-between">
                                                        </div>
                                                        <div class="col">
                                                            <p>Mengetahui</p>
                                                            <p class="mb-5">Kepala Bagian Langganan</p>
                                                            <p class="mb-n3">Nurlillah Satria Pratama</p>
                                                            <hr style="width: 50%">
                                                            <p class="mt-n3">NIP: 1.08.01499</p>
                                                        </div>
                                                    </div>
                                                    <p>Tembusan :</p>
                                                    <p class="ml-5"> Arsip</p>
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
