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

@section('title', 'Print Petugas Entry')

@section('namaHal', 'Master')

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Petugas Entry</li>
        <li class="breadcrumb-item active">Print Petugas Entry</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Filter Petugas Entry</h3>
                        </div>
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Print preview Petugas Entry</h3>
                                    <a href="{{ route('printpanggilanDinas') }}"
                                        class="btn btn-sm btn-success float-right"><i class="fas fa-print"></i> Cetak</a>
                                </div>
                                <div class="card-body priview">
                                    <p> Pemerintah Kota <br>
                                        Surabaya <br>
                                        PERUSAHAAN DAERAH AIR <br>
                                    </p>
                                    <div class="mx-auto mb-3" style="width: 250px;">
                                        <span>Table Master Petugas Entry</span> <br>
                                    </div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Kode Petugas</th>
                                                <th>NIP</th>
                                                <th>Nama</th>
                                                <th>Status</th>
                                                <th>ISCS</th>

                                            </tr>
                                        </thead>
                                        <tbody>

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