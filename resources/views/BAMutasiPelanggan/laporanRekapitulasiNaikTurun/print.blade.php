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

@section('title', 'Print Laporan Rekapitulasi Perubahan Naik Turun')

@section('namaHal', 'BA Mutasi Pelanggan')

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">BA Mutasi Pelanggan</a></li>
        <li class="breadcrumb-item active">Laporan Rekapitulasi Perubahan Naik Turun</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Print preview Laporan Rekapitulasi Naik Turun</h3>
                            <a href="" class="btn btn-xs btn-warning float-right"><i class="fas fa-backward"></i> Kembali</a>
                        </div>
                        <div class="card-body priview">
                            <div style="margin-left: 5px">
                                <div style="font-size:15px">PEMERINTAH KOTA SURABAYA</div>
                                <div style="font-size:15px">PERUSAHAAN DAERAH AIR MINUM</div>
                            </div>

                            <div style="margin-left: 5px">
                                <div style="font-size:15px">Laporan Rekapitulasi Perubahan Tarif {{-- manggil filter naik/turun --}} Wilayah Timur</div>
                                <table>
                                    <tr>
                                        <td>Periode</td>
                                        <td>:</td>
                                    </tr>
                                </table>
                            </div>
                            <br>
                            <br>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tarif Lama</th>
                                        <th>Tarif Baru</th>
                                        <th>Jumlah</th>
                                    </tr>
                                    <tr>
                                        <th colspan="3">Total</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                            <br>
                            <br>
                            <div class="container">
                                <div class="row text-center">
                                    <div class="col justify-content-between">
                                        <p>Mengetahui:</p>
                                        <p class="mb-5">Ms Pemakaian Air</p>
                                        <p class="mb-n3">Ari Bimo Sakti S.Kom</p>
                                        <hr style="width: 50%">
                                        <p class="mt-n3">NIP: 1.08.0149</p>
                                    </div>
                                    <div class="col">
                                        <p>Diteliti Oleh:</p>
                                        <p class="mb-5">Kasie Peneliti Pelanggan</p>
                                        <p class="mb-n3">Nurlilah Satria Pratama, S.T</p>
                                        <hr style="width: 50%">
                                        <p class="mt-n3">NIP: 130 022 001</p>
                                    </div>
                                    <div class="col">
                                        <p>Dibuat Oleh</p>
                                        <p class="mb-5">SPV Data Kepelangganan </p>
                                        <p class="mb-n3">Olive Oktavera S.T</p>
                                        <hr style="width: 50%">
                                        <p class="mt-n3">NIP: 122 967 332</p>
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
