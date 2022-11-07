@extends('layout.app')
@section('title', 'BA Mutasi Pelanggan')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <style>
        .container {
            border: 2px solid;
        }
    </style>
@endpush

@section('namaHal', 'BA Mutasi Pelanggan')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">BA Mutasi Pelanggan</a></li>
        <li class="breadcrumb-item active">Cetak BA Perorangan</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class=" col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Print preview BA Perorangan</h3>
                            <a href="" class="btn btn-xs btn-success float-right"><i class="fas fa-print"></i> Cetak</a>
                        </div>
                        <div class="card-body priview">
                            <div class="row">
                                <div class="col">
                                    <div style="font-size:15px">PEMERINTAH KOTAMADYA DAERAH II SURABAYA</div>
                                    <div style="font-size:15px">PERUSAHAAN DAERAH AIR MINUM</div>
                                    <div style="font-size:13px">Jl.Mayjen Prof Moestopo 2 </div>
                                    <div style="font-size:13px">Tlp.(031)5039373,5039392,5039676</div>
                                    <div style="font-size:13px">Surabaya</div>
                                </div>
                                <div class="col"></div>
                                <div class="col">
                                    <div class="border pl-2 w-80">
                                        <div class="row">
                                            <div class="col">
                                                <div class="row">
                                                    <div class="col justify-content-between">
                                                        BAGIAN LANGGANAN WILAYAH
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="atas">
                                            <div class="row"> NOMOR : </div>
                                            <div class="row"> TANGGAL :</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h6>
                                <center><b>PEMBERITAHUAN <br>
                                        PENYESUAIAN KLASIFIKASI TARIF AIR MINUM</b></center>
                            </h6>
                            <p class="font">Kepada Yth: </p>
                            <div class="container">
                                <table>
                                    <tr>
                                        <td>No Pelanggan</td>
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
                                </table>
                            </div>
                            <br>
                            <div class="d-flex justify-content-center table-left" style="text-align: justify">
                                <p> Setelah diadakan penelitian secara administrasi dan pengecekan persil Saudara, maka
                                    dengan ini dieberitahukan bahwa terhadap pelanggan air minum PDAM Koday Dati II
                                    Surabaya, atas nama dan alamat diatas perlu diadakan penyesuain dalam penetapan
                                    klasifikasi tarif air minum sebagai berikut :
                                </p>
                            </div>
                            Kode Tarif <span> :</span> <br>
                            Tabel Tarif <span>:</span>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <table>
                                        <tr>
                                            <td>Pemakaian Minumum </td>
                                            <td>:</td>
                                        </tr>
                                        <tr>
                                            <td>Berlaku mulai penerbitan rekening bulan</td>
                                            <td>:</td>
                                        </tr>
                                        <tr>
                                            <td> Yang akan ditagihkan pada bulan</td>
                                            <td>:</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <table>
                                        <h5><b>KETERANGAN</h5>
                                        <tr>
                                            <td>1. Dasar</td>
                                            <td>:</td>
                                        </tr>
                                        <tr>
                                            <td>2. Kontrol No/Tanggal</td>
                                            <td>:</td>
                                        </tr>
                                        <tr>
                                            <td>3. Penggunaan Persil</td>
                                            <td>:</td>
                                        </tr>
                                        <tr>
                                            <td>4. Jenis Pelanggan</td>
                                            <td>:</td>
                                        </tr>
                                        <tr>
                                            <td>5. Kode Tarif Lama</td>
                                            <td>:</td>
                                        </tr>
                                        <tr>
                                            <td>6. Ukuran Meter</td>
                                            <td>:</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <br>
                            <h5><b>LAIN LAIN</h5> <br>
                            <div class="row">
                                <div class="col">
                                    <div class="d-flex justify-content-center table-left" style="text-align: justify">
                                        Apabila dikemudian hari ternyata terjadi perubahan penggunaan persil, maka akan
                                        diadakan penyesuaian kode tarif secara sepihak oleh PDAM-KMS</p>
                                    </div>
                                    <center>Demikian hendaknya mendapat perhatian dan dimaklumi, terimakasih</center>
                                    </p>
                                </div>
                            </div>
                            <div class="ttd">
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
    </section>
@endsection
@push('js')
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
@endpush
