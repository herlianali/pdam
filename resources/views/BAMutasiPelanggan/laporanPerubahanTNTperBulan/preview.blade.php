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

@section('title', 'Laporan Mutasi Tarif Naik/Turun')

@section('namaHal', 'BA Mutasi Pelanggan')

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Laporan Rekapitulasi Mutasi Tarif Naik/Turun</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class=" col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Preview Laporan Rekapitulasi Mutasi Tarif Naik/Turun</h3>
                            <a href="" class="btn btn-sm btn-success float-right">Print</a>
                        </div>
                        <div class="card-body priview">

                            <div style="margin-left: 5px">
                                <div style="font-size:15px">PEMERINTAH KOTA SURABAYA</div>
                                <div style="font-size:15px">PERUSAHAAN DAERAH AIR MINUM</div>
                            </div>

                            <div style="text-align: center">
                                <div style="font-size:15px">LAPORAN MUTASI TARIF {{-- sesuai filter --}}</div>
                                <div style="font-size:15px">BAGIAN HUBUNGAN LANGGANAN TIMUR</div>
                                <div style="font-size:15px">Periode Pengesahan : {{-- sesuai filter --}}</div>
                            </div>
                            <div class="mx-auto mb-3" style="width: 250px;">
                                <span></span> <br>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Zona</th>
                                        <th>No P.A</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Tarif Lama</th>
                                        <th>Tarif Baru</th>
                                        <th>No B</th>
                                        <th>Tanggal B</th>
                                        <th>Nama Pen</th>
                                        <th>Bundel</th>
                                        <th>Nama Con</th>
                                        <th>Asal Pen</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>10</td>
                                            <td>10107</td>
                                            <td>Drs. SUHARTO (RW.2)</td>
                                            <td>KARANGREJO 10/9 AFT</td>
                                            <td>4B</td>
                                            <td>3B</td>
                                            <td>TD21002</td>
                                            <td>04/01/20</td>
                                            <td>ALFIAN MALAKA</td>
                                            <td>48</td>
                                            <td>AGUS PRIYANTO</td>
                                            <td>Lain-lain</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>10</td>
                                            <td>10117</td>
                                            <td>NV KUNARTO</td>
                                            <td>KENTINTANG BARU 3/20 22</td>
                                            <td>4B</td>
                                            <td>3C</td>
                                            <td>TD21009</td>
                                            <td>03/01/20</td>
                                            <td>SUCI KURNIAWAN</td>
                                            <td>23</td>
                                            <td>BAGIJO WINARDI</td>
                                            <td>Lain-lain</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>10</td>
                                            <td>10117</td>
                                            <td>DJORO AWIE SOEBANDH</td>
                                            <td>KENTINTANG BARU 6/5</td>
                                            <td>4B</td>
                                            <td>3C</td>
                                            <td>TD21009</td>
                                            <td>03/01/20</td>
                                            <td>SUCI KURNIAWAN</td>
                                            <td>23</td>
                                            <td>BAGIJO WINARDI</td>
                                            <td>Lain-lain</td>
                                            
                                        </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
