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
                            <h3 class="card-title">Print preview Jenis Pekerjaan</h3>
                        </div>
                        <div class="card-body priview">
                            <div class="row">
                                <div class="col ml-5">
                                    <div style="font-size:15px">PEMERINTAH KOTAMADYA DAERAH TK.II SURABAYA</div>
                                    <div style="font-size:15px">PERUSAHAAN DAERAH AIR MINUM</div>
                                    <div style="font-size:15px">Jl.Mayjen Prof.Moestopo No.2 Surabaya</div>
                                    <div style="font-size:15px">Telp.(031)509</div>
                                </div>
                                <div class="col">
                                    <div class="border pl-2 w-100">
                                        <div class="row">
                                            <div class="col">
                                                <div class="row">
                                                    <div class="col justify-content-between">
                                                        BAGIAN LANGGANAN WILAYAH
                                                    </div>
                                                    <div class="col">
                                                        TTMTTR
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                NOMOR :
                                            </div>
                                            <div class="row">
                                                TANGGAL :
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table>
                            <p align="center">PERINTAH PEMERIKSAAN</p>
                        </table>

                        <table>
                            <tr>
                                <div class="container" style="margin-left: 10rem">
                                    <div class="row justify-content-between">
                                        <div class="col">
                                            <p>Nomor Pelanggan : </p>
                                        </div>
                                        <div class="col">
                                            <p>Kode Tarif : </p>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                            <tr>
                                <div class="container" style="margin-left: 10rem">
                                    <div class="row justify-content-between">
                                        <div class="col">
                                            <p>Nama Pelanggan : </p>
                                        </div>
                                        <div class="col">
                                            <p>Nomor P.A : </p>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                            <tr>
                                <div class="container" style="margin-left: 10rem">
                                    <div class="row justify-content-between">
                                        <div class="col">
                                            <p>Alamat Pelanggan : </p>
                                        </div>
                                        <div class="col">
                                            <p>Data Meter : </p>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                            <tr>
                                <div class="container" style="margin-left: 10rem">
                                    <div class="row justify-content-between">
                                        <div class="col">
                                            <p>Dengan Alamat : </p>
                                        </div>
                                        <div class="col">
                                            <p>Permasalahan : </p>
                                        </div>
                                    </div>
                                </div>
                            </tr>

                        </table>
                        
                        <table class="table table-bordered">
                            <thead>
                                <tr align="center">
                                    <td rowspan="2">Tanggal</td>
                                    <td rowspan="2">Uraian Pekerjaan</td>
                                    <td rowspan="2">Bahan Yang Digunakan</td>
                                    <td rowspan="2">Jumlah</td>
                                    <td colspan="2">Yang Mengerjakan</td>
                                    
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>T.Tangan</td>
                                </tr>
                              
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>4</td>
                                    <td>3</td>
                                    <td>5</td>
                                    <td>6</td>
                                </tr>
                            </tbody>
                        </table>

                            
                        <div class="container">
                            <div class="row text-center">
                                <div class="col justify-content-between">
                                    <p>Petugas</p>
                                    <p class="mb-5">Bagian Langganan</p>
                                    <p class="mb-n3">Moch. Soejanto</p>
                                    <hr style="width: 50%">
                                    <p class="mt-n3">NIP: 1.96.01018</p>
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
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection

@push('js')
    <script type="text/javascript">
        const box = document.getElementById('startEnd');

        function clickRadio() {
            if (document.getElementById('semuakd').checked) {
                box.style.display = "none"
            } else {
                box.style.display = "block"
            }
        }

        const radioButtons = document.querySelectorAll('input[name="filter"]');
        radioButtons.forEach(radio => {
            radio.addEventListener('click', clickRadio)
        });
    </script>
@endpush
