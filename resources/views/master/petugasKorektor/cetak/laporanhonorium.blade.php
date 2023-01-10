@extends('layout.app')

@push('css')
    <link href="{{ asset('assets/plugins/font/dot-matrix.css') }}" rel="stylesheet">
    <style>
        .priview {
            font-family: 'Dot Matrix', sans-serif;
        }
        .atasan{
            border-bottom: 2px dashed gray;
            border-top: 2px dashed gray;
        }
        .bawah{
            border-bottom: 2px dashed gray;
        }
        table thead tr {
            border-bottom: 2px dashed rgb(102, 102, 102);
            border-top: 2px dashed rgb(102, 102, 102);
        }
      
    </style>
@endpush

@section('title', 'Laporan Honorium Kelebihan Beban Petugas Korektor')

@section('namaHal', 'Master')

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Petugas Korektor</li>
        <li class="breadcrumb-item active">Laporan Honorium Kelebihan Beban Petugas Korektor</li>
    </ol>
    <br>
    <br>
    <button type="submit"
        class="btn btn-sm float-right btn-success print">
        Print
    </button>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Laporan Honorium Kelebihan Beban Petugas Korektor</h3>

                        </div>
                        <div class="card-body priview">
                            <div class="row">
                                <div class="col">
                                    <div style="font-size:15px">PEMERINTAH KOTA SURABAYA</div>
                                    <div style="font-size:15px">PERUSAHAAN DAERAH AIR MINUM</div>
                                </div>
                                <div class="col"></div>
                            </div>
                            <h6>
                            <div class="col" style="text-align: center;">
                                <div style="font-size:15px"><b>DAFTAR RAKAPITULASI PETUGAS KOREKTOR YANG MENDAPATKAN PREMI/HONORIUM </div>
                                <div style="font-size:15px">KELEBIHAN BEBAN </div>
                                <div style="font-size:15px">BERDASARKAN PERATURAN DIREKSI PDAM SURYA SEMBADA KOTA SURABAYA </div>
                                <div style="font-size:15px">NOMOR 14 TAHUN 2016 TGL 5 OKTOBER 2016 </div>
                                <div style="font-size:15px">TENTANG PEMBERIAN PREMI/HONORIUM BAGI PETUGAS ANALISA (KOREKTOR) </div>
                                <div style="font-size:15px">PADA BAGIAN PEMAKAIAN AIR </div> 
                                <div style="font-size:15px">PERIODE / RUMAH TANGGA</div>
                            </div>
                            </h6>
                            <br>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>NAMA PETUGAS <br> NIP </th>
                                        <th>Tanggal Penugasan</th>
                                        <th>JUMLAH PELANGGARAN</th>
                                        <th>ANOMA</th>
                                        <th>JUMLAH <br> KEMAMPUAN/H</th>
                                        <th>SELISIH</th>
                                        <th>RP SATUAN</th>
                                        <th>RP JUMLAH</th>
                                        <th>PPH 5%</th>
                                        <th>RP PENERIMA</th>
                                    </tr>
                                </thead>
                            </table>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>TOTAL</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="atasan" >
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>TOTAL</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                            <br>
                            <div class="bawah" >
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>TOTAL</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                            <br>
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
