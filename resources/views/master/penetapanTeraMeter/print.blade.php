@extends('layout.app')

@push('css')
    <link href="http://fonts.cdnfonts.com/css/dot-matrix" rel="stylesheet">
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
                <div class="col-md-4 col-sm-12">
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
                </div>
                <div class="col-md-8 col-sm-12">
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
                                            <td>Bagian Langganan Wilayah Timur</td>
                                        </tr>
                                        <tr>
                                            <td>Nomor</td>
                                            <td>:</td>
                                        </tr>
                                        <tr>
                                            <td>Nama</td>
                                            <td>:</td>
                                        </tr>
                                        <tr>
                                            <td>Nomor Bon</td>
                                            <td>:</td>
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
                            <div class="mx-auto mb-3" style="width: 250px;">
                                <span>
                                    <center>SURAT PENETAPAN PEMBAYARAN
                                </span> <br>
                                <span>TERA METER AIR </center></span> <br>
                            </div>
                            <div class="atasan" >
                            <div class="row justify-content-between">
                                <div class="col-md-9">
                                    <table >
                                        <tr>
                                            <td> Nama</td>
                                            <td>:</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                        </tr>
                                        <tr>
                                            <td>Tarif</td>
                                            <td>:</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col">
                                    <table>
                                        <tr>
                                            <td>PA</td>
                                            <td>:</td>
                                        </tr>
                                        <tr>
                                            <td>Nopel</td>
                                            <td>:</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                           <br>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Ukuran Meter Ai </th>
                                    <th>Biaya Tera (Rp)</th>
                                    <th>Bayar+ Ppn 10%</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>METER. TIDAK ADA</td>
                                    <td>T</td>
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
