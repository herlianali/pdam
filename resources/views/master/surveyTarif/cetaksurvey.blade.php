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

@section('title', 'Print Jenis Panggilan Dinas')

@section('namaHal', 'Master')

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Survey Tarif</li>
        <li class="breadcrumb-item active">Cetak Survey</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Form Survey Tarif</h3> <a href="{{ route('surveyTarif') }}"
                                class="btn btn-xs btn-success float-right"><i class="fas fa-backward"></i> Kembali</a>

                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="form-group row mt-2">
                                    <label for="subzona" class="col-md-3 col-form-label">Sub Zona </label>
                                    <div class="col-md-4">
                                        <input type="date" class="form-control" id="subzona" name="subzona" onkeyup="valueing()">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="bundel" class="col-md-3 col-form-label">Bundel</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" id="bundel" name="bundel" onkeyup="valueing()">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="jenis_survey" class="col-md-3 col-form-label">Jenis Survey</label>
                                    <div class="col-md-3">
                                        <input type="checkbox">
                                        <label for="plm" class="col-form-label">PLN</label>
                                        <br>
                                        <input type="checkbox">
                                        <label for="jalan" class=" col-form-label">Jalan</label>
                                        <br>
                                        <input type="checkbox">
                                        <label for="njop" class=" col-form-label">NJOP</label>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="jns_percetakan" class="col-md-3 col-form-label">Jenis Percetakan</label>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" id="semua" name="semua">
                                            <label class="form-check-label">Semua </label>
                                            <br>
                                            <input type="radio" class="form-check-input" id="data_kosong" name="data_kosong">
                                            <label class="form-check-label">Data Kosong</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class=" btn-info btn-sm float-right">Preview</button>
                                <button class=" btn-danger btn-sm float-right">Batal</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Print preview Cetak Survey</h3>
                            <a href="" class="btn btn-sm btn-success float-right"><i class="fas fa-print"></i>
                                Cetak</a>
                        </div>
                        <div class="card-body priview">
                            <p> Pemerintah Kota <br>
                                Surabaya <br>
                                PERUSAHAAN DAERAH AIR <br>
                            </p>
                            <div class="mx-auto mb-3" style="width: 250px;">
                                <span>Survey Tarif</span> <br>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Keterangan</th>
                                        <th>Sif</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>METER. TIDAK ADA</td>
                                        <td>T</td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>DAFTARR ADA METER TIDAK ADA</td>
                                        <td>A</td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>DAFTARR TIDAK ADA METER ADA</td>
                                        <td>A</td>
                                    </tr>
                                    <tr>
                                        <td>04</td>
                                        <td>METER BARU</td>
                                        <td>T</td>
                                    </tr>
                                    <tr>
                                        <td>05</td>
                                        <td>SEGEL METER TIDAK ADA</td>
                                        <td>T</td>
                                    </tr>
                                    <tr>
                                        <td>06</td>
                                        <td>SGL MTR & SGL KOPL TDK ADA</td>
                                        <td>T</td>
                                    </tr>
                                    <tr>
                                        <td>07</td>
                                        <td>SEGEL ROPLING</td>
                                        <td>T</td>
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
