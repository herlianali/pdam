@extends('layout.app')

@push('css')
    <link href="http://fonts.cdnfonts.com/css/dot-matrix" rel="stylesheet">
    <style>
        .priview {
            font-family: 'Dot Matrix', sans-serif;
        }

        table thead tr {
            border-bottom: 3px dashed rgb(102, 102, 102);
            border-top: 3px dashed rgb(102, 102, 102);
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
                            <a href="{{ route('informasiPelunasanRekening') }}"
                                class="btn btn-xs btn-warning float-right"><i class="fas fa-backward"></i> Kembali</a>
                        </div>
                        <div class="card-body priview">
                            <div style="margin-left: 5px">
                                <div style="font-size:15px">PEMERINTAH KOTA SURABAYA</div>
                                <div style="font-size:15px">PERUSAHAAN DAERAH AIR MINUM</div>
                                <div style="font-size:15px">#wilayah</div>
                            </div>
                            <table>
                                <p align="center">Daftar Rekening Pelanggan</p>
                                <p align="center">BULAN : Maret 2022 S/D April 2022</p>
                            </table>

                            <table style="ml-5">
                                <tr>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <p>No Langganan </p>
                                            </div>
                                            <div class="col">
                                                <p>: 1011101</p>
                                            </div>
                                            <div class="col"></div>
                                            <div class="col"></div>
                                        </div>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <p>Nama </p>
                                            </div>
                                            <div class="col">
                                                <p>: Rahma</p>
                                            </div>
                                            <div class="col"></div>
                                            <div class="col"></div>
                                        </div>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <p>Alamat </p>
                                            </div>
                                            <div class="col">
                                                <p>: Jl Kenangan 2/ 25</p>
                                            </div>
                                            <div class="col">
                                                <p></p>
                                            </div>
                                            <div class="col"></div>
                                        </div>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <p>Periode Tagih </p>
                                            </div>
                                            <div class="col">
                                                <p>: 2</p>
                                            </div>
                                            <div class="col"></div>
                                            <div class="col"></div>
                                        </div>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="container">
                                        <div class="row justify-content-between">
                                            <div class="col">
                                                <p>Tanggal Tutu </p>
                                            </div>
                                            <div class="col">
                                                <p>: 07-11-2020</p>
                                            </div>
                                            <div class="col"></div>
                                            <div class="col">
                                                <p>Tanggal Cetak : 17 September 2022 </p>
                                            </div>
                                        </div>
                                    </div>
                                </tr>

                            </table>
                            <br>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Status</th>
                                        <th>Tanggal Lunas</th>
                                        <th>Bln-Thn</th>
                                        <th>Tari</th>
                                        <th>Jn</th>
                                        <th>Rekening</th>
                                        <th>Restitus</th>
                                        <th>Denda</th>
                                        <th>Jumlah</th>
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
