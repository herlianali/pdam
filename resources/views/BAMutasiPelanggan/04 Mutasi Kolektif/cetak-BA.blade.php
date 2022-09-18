@extends('layout.app')

@push('css')
    <link href="http://fonts.cdnfonts.com/css/dot-matrix" rel="stylesheet">
    <style>
        .priview {
            font-family: 'Dot Matrix', sans-serif;
        }

        table thead tr {
            border-bottom: 3px ridge rgb(102, 102, 102);
            border-top: 3px ridge rgb(102, 102, 102);
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
                                    <div class="border pl-2 w-80">
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
                            <h3 align="center">BERITA ACARA PERUBAHAN</h3>
                        </table>
                        <div class="col">
                            <div class="border pl-2 w-80">
                                <div class="row">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col justify-content-between">
                                                
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div><div class="container">
                                <div class="row">
                                    No Pelanggan
                                </div>
                                <div class="row">
                                    Nama :
                                </div>
                                <div class="row">
                                    Alamat :
                                </div>
                            </div>

                        </div>
                  <div class="row">
                    <p>Kami yang bertanda tangan dibawah ini menyatakan bahwa pelanggan
                        air minum PDAM - KMS Atas nama tersebut di atas perlu diadakan perubahan data pelanggan sebagai berikut :
                    </p>
                  </div>
             
                   
                            <table class="table">
                                <thead >
                                    <tr>
                                       <th>Data Pelanggan</th>
                                        <th>Lama</th>
                                        <th>Baru</th>
                                    </tr>
                                </thead>
                                <tbody >
                                        <tr>
                                            <td>Nama </td>
                                        </tr>
                                        <tr>
                                            <td>Alamat </td>
                                        </tr>
                                        <tr>
                                            <td>No Pelanggan </td>
                                        </tr>
                                        <tr>
                                            <td>Ukuran Meter</td>
                                        </tr>
                                        <tr>
                                            <td>Kode Tarif Air</td>
                                        </tr>
                                        <tr>
                                            <td>Kode Tarif Retribusi</td>
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
