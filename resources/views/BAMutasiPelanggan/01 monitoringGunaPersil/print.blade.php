@extends('layout.app')

@push('css')
    <link href="http://fonts.cdnfonts.com/css/dot-matrix" rel="stylesheet">
    <style>
        .priview {
            font-family: 'Dot Matrix', sans-serif;
        }

    </style>
@endpush

@section('title', 'Print Monitoring Guna Persil')

@section('namaHal', 'BA Mutasi Pelanggan')

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">BA Mutasi Pelanggan</a></li>
        <li class="breadcrumb-item active">Monitoring Guna Persil</li>
        <li class="breadcrumb-item active">Print Monitoring Guna Persil</li>
    </ol>
    <br>
    <br>
    <a href="" class="btn btn-sm btn-success float-right"><i class="fas fa-download"></i> Download</a>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Print preview Monitoring Guna Persil</h3>
                        </div>
                        <div class="card-body priview">
                            <div class="row">
                                <div class="col">
                                    <div style="font-size:15px">PEMERINTAH KOTA SURABAYA</div>
                                    <div style="font-size:15px">PERUSAHAAN DAERAH AIR MINUM</div>
                                    <div style="font-size:15px">#wilayah</div>
                                </div>
                            </div>
                            <h6> <center> Laporan Monitoring Guna Persil</center></h4>

                                <div class="col">
                                    <span>Stan Sesuai;Tidak Sesuai</span>
                                </div>
                                <br>
                     

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>No PLG</th>
                                    <th>NAMA</th>
                                    <th>JALAN</th>
                                    <th>GANG</th>
                                    <th>NO</th>
                                    <th>NO TAMB</th>
                                    <th>DA</th>
                                    <th>KD TARIF</th>
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
