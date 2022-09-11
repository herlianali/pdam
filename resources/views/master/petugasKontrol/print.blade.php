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

@section('title', 'Print Petugas Kontrol')

@section('namaHal', 'Master')

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Petugas Kontrol</li>
        <li class="breadcrumb-item active">Print Petugas</li>
    </ol>
    <br>
    <br>
    <a href="{{ route('printpetugasKontrol') }}" class="btn btn-sm btn-success float-right"><i class="fas fa-download"></i>
        Download</a>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Filter Petugas Kontrol</h3>
                        </div>
                        <div class="card-body">

                            <form class="form-horizontal">
                                <div class="form-group row mt-2">
                                    <label for="wilayah" class="col-md-3 col-form-label"> Wilayah </label>
                                    <div class="col-md-7">
                                        <select class="form-control" id="wilayah" onkeyup="valueing()">

                                            <option value="wilayah T"> Semua Wilayah </option>
                                            <option value="wilayah B"> Langganan Timur</option>
                                            <option value="wilayah B"> Langganan Barat</option>
                                        </select>
                                    </div>
                                </div>

                                <button type="submit" class="btn-info float-right">Preview</button>
                                &nbsp;
                                <button class="btn-danger float-right">Batal</button>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="col-md-8">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Print preview Tabel Petugas Kontrol</h3>
                            <a href="{{ route('petugasKontrol') }}" class="btn btn-sm btn-success float-right"><i
                                    class="fas fa-backward"></i> Kembali</a>
                        </div>
                        <div class="card-body priview">
                            <p>
                                <center> Pemerintah Kota Surabaya <br>
                                    PERUSAHAAN DAERAH AIR MINUM </center>
                            </p>
                            <br>
                            <div class="mx-auto mb-3" style="width: 250px;">
                                <span>
                                    <center> TABEL MASTER PETUGAS KONTROL </center>
                                </span>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th width="20%">No</th>
                                        <th width="20%">Kode</th>
                                        <th width="20%">NIP</th>
                                        <th width="20%">Nama</th>
                                        <th width="20%">Bagian</th>
                                    </tr>
                                </thead>
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
