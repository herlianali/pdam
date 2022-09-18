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
        <li class="breadcrumb-item active">Laporan Mutasi Tarif Naik/Turun</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class=" col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Print preview Laporan Mutasi Tarif Naik/Turun</h3>
                            <a href="" class="btn btn-sm btn-success float-right"><i class="fas fa-print"></i> Cetak</a>
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
