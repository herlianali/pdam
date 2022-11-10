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

@section('title', 'Print Retribusi')

@section('namaHal', 'Master')

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Retribusi</li>
        <li class="breadcrumb-item active">Print Retribusi</li>
    </ol>
    
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Preview Retribusi</h3>
                            <button type="submit"
                            class="btn btn-xs float-right btn-success print">
                            Print
                            </button>
                        </div>
                        <div class="card-body priview">
                            <p>
                                <center> Pemerintah Kota Surabaya <br>
                                    PERUSAHAAN DAERAH AIR MINUM </center>
                            </p>
                            <br>
                            <div class="mx-auto mb-3" style="width: 250px;">
                                <span>
                                    <center> TABEL MASTER RETRIBUSI </center>
                                </span>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th width="30%">No</th>
                                        <th width="40%">Kode Retribusi</th>
                                        <th width="30%">Nilai Retribusi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($retribus as $retribusi)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $retribusi->kd_retribusi }}</td>
                                            <td>{{ $retribusi->rp_retribusi }}</td>
                                        </tr>
                                        @endforeach
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
