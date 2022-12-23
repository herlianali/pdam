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
        table thead tr {
            border-bottom: 2px dashed rgb(102, 102, 102);
            border-top: 2px dashed rgb(102, 102, 102);
        }
      
    </style>
@endpush

@section('title', 'Print Penetapan Tera Meter')

@section('namaHal', 'Master')

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Penetapan Tera Meter</li>
        <li class="breadcrumb-item active">Print Penetapan Tera Meter</li>
    </ol>
    <br>
    <br>
    <!-- <a href="{{ route('printpanggilanDinas') }}" class="btn btn-sm btn-success float-right"><i class=" fa fa-download"></i>
        Download</a> -->
    <button type="submit"
        class="btn btn-sm float-right btn-success print">
        Print
    </button>
@endsection



@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- <div class="col-md-4 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Filter Penetapan Tera Meter</h3>
                        </div>
                        <div class="card-body">
                            <form action="">
                                <label for="nopenetapan" class="col-form-label"> Nomor Penetapan :</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="nomor" onkeyup="valueing()">
                                </div>
                                <label for="wilayah" class="col-form-label"> Petugas</label>
                                <div class="col-md-10">
                                    <select class="form-control" id="wilayah" onkeyup="valueing()">
                                        <option value="wilayah T"> Wilayah T </option>
                                        <option value="wilayah B"> Wilayah B </option>
                                    </select>
                                </div>
                                <br>

                                <button type="submit" class="btn btn-info btn-sm">Preview</button>
                                <button class="btn btn-danger btn-sm">Batal</button>
                            </form>
                        </div>
                    </div>
                </div> -->
                <div class="col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Print preview Penetapan Tera Meter</h3>

                        </div>
                        <div class="card-body priview">
                            <div class="row">
                                <div class="col">
                                    <div style="font-size:15px">Pemerintah Kota Surabaya</div>
                                    <div style="font-size:15px">Perusahaan Daerah Air Minum</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col"></div>
                                <div class="col"> 
                                    <table >
                                        <tr>
                                            <td><b>Bagian Langganan Wilayah Timur</b></td>
                                        </tr>
                                        <tr>
                                            <td>Nomor</td>
                                            <td>: TTRA190395</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal</td>
                                            <td>: 02-Oct-2019</td>
                                        </tr>
                                        <tr>
                                            <td>Nomor Bon</td>
                                            <td>: TCL1916666</td>
                                        </tr>
                                        <tr></tr>
                                        
                                    </table>

                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col"></div>
                                <div class="col">
                                    <tr>
                                        <td> 
                                            Berdasarkan SK Direksi 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>No 37, Tanggal 27 Februari 2022</td>
                                    </tr>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="mx-auto mb-3" style="width: 300px;">
                                <span>
                                    <center><b>SURAT PENETAPAN PEMBAYARAN
                                </span> <br>
                                <span>TERA METER AIR </b></center></span> <br>
                            </div>
                            <div class="atasan" >
                            <div class="row justify-content-between">
                                <div class="col-md-9">
                                    <table >
                                        <tr>
                                            <td> Nama</td>
                                            <td>: SUKONO</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>: BULAK BANTENG MADYA 5/14A</td>
                                        </tr>
                                        <tr>
                                            <td>Tarif</td>
                                            <td>: 4A</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col">
                                    <table>
                                        <tr>
                                            <td>PA</td>
                                            <td>: 338931</td>
                                        </tr>
                                        <tr>
                                            <td>Nopel</td>
                                            <td>: 3148160</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                           <br>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th width="15%">Ukuran Meter Ai (Inci)</th>
                                    <th width="15%">Biaya Tera (Rp)</th>
                                    <th width="15%">Jumlah yang harus dibayar + Ppn 10% (Rp)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>0.5</td>
                                    <td>45000</td>
                                    <td>49500</td>
                                </tr>
                            </tbody>
                        </table>
                       <br>
                       <br>
                        <div class="ttd">
                            <div class="row text-center">
                                <div class="col justify-content-between">
                                    <p>Diketahui / disetujui</p>
                                    <p class="mb-5">Manajer Pemakaian Air</p>
                                    <p class="mb-n3">Nurlillah Satria Prat</p>
                                    <hr style="width: 50%">
                                    <p class="mt-n3">1.08.01499</p>
                                </div>
                                <div class="col ">
                                    <p>Diteliti Oleh</p>
                                    <p class="mb-5">Supervisor Kontrol</p>
                                    <p class="mb-n3">Minarnik, S.Si</p>
                                    <hr style="width: 50%">
                                    <p class="mt-n3">1.09.01504</p>
                                </div>
                                <div class="col">
                                    <p>Dibuat Oleh</p>
                                    <p class="mb-5">Petugas Pengaduan</p>
                                    <p class="mb-n3">Anugrah Santoso</p>
                                    <hr style="width: 50%">
                                    <p class="mt-n3">1.83.00551</p>
                                </div>
                            </div>
                        </div>
                        <div class="atasan">
                        <table class="table">
                        <div class="mx-auto mb-3" style="width: 300px;">
                                <span>
                                    <center><b>SURAT PERNYATAAN</b></center>
                                </span>
                        </div>
                        
<div class="row">
<div class="col">
    <div style="font-size:15px">Yang bertanda tangan dibawah ini, </div>
    <div style="font-size:15px">Nama            : ABC</div>
    <div style="font-size:15px">Alamat & Telp	: 123</div>
    <div style="font-size:15px">Sebagaai pelanggan / kuasa pelanggan PDAM Surabaya</div>
    <div style="font-size:15px">Atas Nama	    : SUKONO</div>
    <div style="font-size:15px">Alamat		    : BULAK BANTENG MADYA 5/14A</div>
    <div style="font-size:15px">Nopel		    : 3148160</div>
    <div style="font-size:15px">Tarif		    : 4A</div>
    <div style="font-size:15px">Dengan ini menyatakan dengan sebenarnya bahwa :</div>
    <div style="font-size:15px">1. Kami mematuhi segala peraturan yang berlaku bagi pelanggan</div>
    <div style="font-size:15px">2. Kami bersedia menyaksikan pelaksanaaan Tera Meter Air PDAM Surabaya, di Jl. Prof. Dr. Moesto</div>
    <div style="font-size:15px">Tera Meter Air blok A Lantai I pukul 08.00 s/d 13.00 BBWI, selambat-lambatnya 3-7 hari sete</div>
    <div style="font-size:15px;">PDAM Surabaya.</div>
    <div style="font-size:15px;">(Setelah lewat 7 hari, pelaksanaan tera meter air akan dilakukan pihak PDAM tanpa menunggu p</div>
    <div style="font-size:15px;">3. Karena sesuatu hal kami tidak dapat menyaksikan pelaksanaan Tera Meter Air yang dilaksanakan</div>
    <div style="font-size:15px;">kami menyatakan menerima sepenuhnya Hasil Tera Meter Air yang telah dilaksanakan PDAM Surabaya</div>
    <div style="font-size:15px;">4. Apabila ternyata hasil tera meter air BAIR, maka kami bersedia membayar pemakaian air yang B</div>
    <div style="font-size:15px;">5. Untuk meter air a" keatas tera dilaksanakan di Bengkel Meter ( Komplek Intalasi Penjernihan</div>
    <div style="font-size:15px;">berkoordinasi dengan loker 25 / Tlp 5039373 pesawat 3111 / 3105)</div>
</div>
</div>
<div class="ttd">
                            <div class="row text-center">
                                <div class="col justify-content-between">
                                    <p>Surabaya, 10 November 2022</p>
                                    <p class="mb-5">Kami yang membuat pernyataan</p>
                                </div>
                            </div>
                        </div>
<div class="col">
    <div style="font-size:15px">No. TP      : ....................... </div>
    <div style="font-size:15px">No. KAS     : ....................... </div>
    <div style="font-size:15px">No. Bon P   : ....................... </div>
    <div style="font-size:15px">Tanggal     : ....................... </div>
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
