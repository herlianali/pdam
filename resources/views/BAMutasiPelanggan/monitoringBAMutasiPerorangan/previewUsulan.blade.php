@extends('layout.app')
@section('title', 'BA Mutasi Pelanggan')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <link href="{{ asset('assets/plugins/font/dot-matrix.css') }}" rel="stylesheet">
    <style>
        .table {
            border: 3px solid rgb(102, 102, 102);
        }
    </style>
@endpush

@section('namaHal', 'BA Mutasi Pelanggan')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">BA Mutasi Pelanggan</a></li>
        <li class="breadcrumb-item active">Cetak Usulan</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-11">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Print preview Cetak Usulan</h3>
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
                                                    <p><u>Surabaya,</u></p>
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
                                                    <p><u>Tarif Air Minum</u></p>
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
                                                    <p>Berdasarkan surat permohonan/laporan terkait untuk penyesuaian tarif
                                                        air minum</p>
                                                    <table>
                                                        <tr>
                                                            <td>Dari</td>
                                                            <td>:</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nomor</td>
                                                            <td>:</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tanggal</td>
                                                            <td>:</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Perihal</td>
                                                            <td>:</td>
                                                        </tr>
                                                    </table>

                                                    <div class="col">
                                                        <p>Telah diadakan penelitian secara phisik dan atau admnistratif
                                                            pada persil pelanggan atas :</p>
                                                    </div>
                                                    <table>
                                                        <tr>
                                                            <td>Nama</td>
                                                            <td>:</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Alamat</td>
                                                            <td>:</td>
                                                        </tr>
                                                        <tr>
                                                            <td>No.PA</td>
                                                            <td>:</td>
                                                        </tr>
                                                        <tr>
                                                            <td>No.Pelanggan</td>
                                                            <td>:</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Kode Tarif</td>
                                                            <td>:</td>
                                                        </tr>
                                                        <tr>
                                                            <td>No & Tgl.Kontrol</td>
                                                            <td>:</td>
                                                        </tr>
                                                    </table>
                                                    <div class="col">
                                                        <p>Dari hasil penelitian dan evaluasi, kode tarif pelanggan tersebut
                                                            di atas tidak sesuai dengan penggunaan persil maka diusulkan
                                                            perubahan kode tarif bagi pelanggan tersebut diatas sbb:</p>
                                                    </div>
                                                    <table>
                                                        <tr>
                                                            <td>Kode Tarif</td>
                                                            <td>:</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jenis Pelanggan</td>
                                                            <td>:</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Alasan</td>
                                                            <td>:</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="col ml-5">
                                                    <p>Demikian usulan kami untuk menjadikan bahan pertimbangan</p>
                                                </div>
                                            </div>
                                            <div class="container">
                                                <div class="row text-center">
                                                    <div class="col justify-content-between">
                                                        <p>Mengetahui</p>
                                                        <p class="mb-5">Kepala Bagian Langganan</p>
                                                        <p class="mb-n3">Nurlillah Satria Pratama</p>
                                                        <hr style="width: 50%">
                                                        <p class="mt-n3">NIP: 1.08.01499</p>
                                                    </div>

                                                    <div class="col">
                                                        <p>Mengetahui</p>
                                                        <p class="mb-5">Kepala Bagian Langganan</p>
                                                        <p class="mb-n3">Nurlillah Satria Pratama</p>
                                                        <hr style="width: 50%">
                                                        <p class="mt-n3">NIP: 1.08.01499</p>
                                                    </div>
                                                    <div class="col">
                                                        <p>Mengetahui</p>
                                                        <p class="mb-5">Kepala Bagian Langganan</p>
                                                        <p class="mb-n3">Nurlillah Satria Pratama</p>
                                                        <hr style="width: 50%">
                                                        <p class="mt-n3">NIP: 1.08.01499</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <table class="table" rules="all">
                                                <thead>
                                                    <tr>
                                                        <td align="center" colspan="2">DISPOSISI DIREKSI PDAM KOTA
                                                            SURABAYA</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <input type="checkbox" name="" id="">
                                                                    Ditolak "(jadi tetap menjadi pelanggan sesuai dengan
                                                                    kode tarif)"
                                                                </div>
                                                            </div>
                                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <input type="checkbox" name="disetujuimenjaditarif" id="disetujuimenjaditarif">
                                                Disetujui menjadi Tarif
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="col">
                                                    menjadi rekening bulan
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <input type="checkbox" name="catatan" id="catatan">
                                                Catatan
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col"></div>
                                            <div class="col"></div>
                                            <div class="col">
                                                <p class="mb-1">Direktur Administrasi & Keuangan</p>
                                                <br>
                                                <br>
                                                <p class="mb-n3"></p>
                                                <hr style="width: 50%">
                                                <p class="mt-n3"></p>
                                            </div>
                                        </div>
                                        </td>
                                    </div>
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
            </div>
        </div>
    </section>
@endsection
