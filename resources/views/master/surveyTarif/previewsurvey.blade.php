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

@section('title', 'Print Survey Tarif')

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
                <div class="col-sm-12">
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
