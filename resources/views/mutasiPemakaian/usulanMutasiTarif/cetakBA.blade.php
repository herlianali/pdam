@extends('layout.app')
@section('title', 'Usulan Mutasi Pemakaian')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <style>
        .container {
            border: 2px solid;
        }
        tr,td,th{
           border-top: 1px solid black;
                            border: 1px solid black;
                            border-collapse: collapse;
        }

    </style>
@endpush

@section('namaHal', 'Usulan Mutasi Pemakaian')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Usulan Mutasi Pemakaian</a></li>
        <li class="breadcrumb-item active">Cetak BA Usulan Tarif</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-9">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Print preview Cetak BA</h3>
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
                                <center><b>BERITA ACARA<br>
                                        PENETAPAN/PERUBAHAN PEMAKAIAN AIR MINUM</b></center>
                            </h6>
                            <br>
                            <table width="100%" class="tableutama">
                                <tr>
                                  <td colspan="2">
                                  <span> Nomor Pelanggan </span> <br>
                                  <span> Diameter Meter </span> <br>
                                  <span> Tarif </span>
                                  </td>
                                  <td colspan="2"></td>
                                  <td colspan="2">
                                  <span> Nama </span> <br>
                                  <span> Alamat </span></td>
                                  <td colspan="2"></td>
                                </tr>
                                <tr>
                                 <td colspan="8">
                                 <p> Kami yang bertandatangan dibawah ini menyatakan bahwa terhadap pelanggan air minum PDAM Surabaya atas nama tersebut diatas, perlu diadakan penetapan / perubahan pemakaian airnya dengan perincian sebagai berikut : </p></td>
                                </tr>
                                <tr>
                                  <td colspan="4" align="center">Data Pencatat Angka Meter</td>
                                  <td colspan="4" align="center">Penetapan/Perubahan</td>
                                  
                                </tr>
                                 <tr>
                                  <td >BULAN</td>
                                  <td>MTR-LALU</td>
                                   <td>MTR-KINI</td>
                                    <td>M3 AIR</td>
                                     <td >MTR-LALU</td>
                                  <td>MTR-KINI</td>
                                   <td>M3 AIR</td>
                                    <td>LEBIH(+) KURANG (-)</td>
                                </tr>
                                 <tr>
                                  <td > 03-03
                                  </td>
                                  <td>1496</td>
                                   <td>1583</td>
                                    <td>87</td>
                                     <td >1496</td>
                                  <td>1583</td>
                                   <td>87</td>
                                    <td>0</td>
                                </tr>
                                  </tr>
                                 <tr>
                                  <td > Jumlah
                                  </td>
                                  <td></td>
                                   <td></td>
                                    <td></td>
                                     <td ></td>
                                  <td></td>
                                   <td></td>
                                    <td></td>
                                </tr>
                                  </tr>
                                 <tr>
                                  <td colspan="8" > </td>
                                </tr>
                                <tr>
                                  <td colspan="8" > Merujuk SK. Direksi Nomor 163 Tahun 1991 Tgl. 18 Desember 1991 Sanksi denda keterlambatan pembayaran rekening dinyatakan : <b> Batal </b></td>
                                </tr>
                                <tr>
                                  <td colspan="8" > PERTIMBANGAN
                                  <br>
                                  <br>
                                  <br></td>
                                </tr>
                                <tr>
                                  <td colspan="8" >
                                  Demikian Berita Acara ini dibuat dengan sesungguhnya untuk dapat digunakan sebagaimana  mestinya. 
                                  <br>
                                  <br>
                                  <div class="ttd">
                                    <div class="row text-center">
                                        <div class="col justify-content-between">
                                            
                                        </div>
                                        <div class="col">
                                            <p>Mengetahui/Menyetujui</p>
                                            <p class="mb-5">Kabag 1</p>
                                            <p class="mb-n3">Nurlillah Satria Pratama</p>
                                            <hr style="width: 50%">
                                            <p class="mt-n3">NIP: 1.08.01499</p>
                                        </div>
                                        <div class="col">
                                            <p>Telah diteliti Oleh</p>
                                            <p class="mb-5">Kasie Pemakaian 1</p>
                                            <p class="mb-n3">Ir. Dian R.H</p>
                                            <hr style="width: 50%">
                                            <p class="mt-n3">NIP: 1.91. 00789</p>
                                        </div>
                                        <div class="col">
                                            <p>Dibuat Oleh</p>
                                            <p class="mb-5">{{-- comment --}}</p>
                                            <br>
                                            <p></p>
                                            <p></p>
                                            <p class="mb-n3">Sugiarti Arifiani</p>
                                            <hr style="width: 50%">
                                            <p class="mt-n3">NIP: 1.83.00550</p>
                                        </div>
                                    </div>
                                    <span>Dibuat Rangkap 3 :</span> 
                                 
                                                <table >
                                                
                                                    <tr>
                                                        <td>Lembar Ke :</td>
                                                        
                                                        <td> 1. Bagian Rekening PDAM-KMS</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                     
                                                        <td> 2. Arsip</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                     
                                                        <td> 3. Pelanggan</td>
                                                    </tr>
                                                </table>
                                          
                                    </div>
                                </div>
                                  </td>
                                </tr>
                              </table>
                           
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
