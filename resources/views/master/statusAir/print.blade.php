@extends('layout.app')

@push('css')
    <link href="http://fonts.cdnfonts.com/css/dot-matrix" rel="stylesheet">
    <style>
        .priview {
            font-family: 'Dot Matrix', sans-serif;
        }

        table thead tr {
            border-bottom: 3px dashed rgb(102, 102, 102);
            border-top: 3px dashed rgb(102, 102, 102);
        }
    </style>
@endpush

@section('title', 'Print Status Air')

@section('namaHal', 'Master')

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Status Air</li>
        <li class="breadcrumb-item active">Print Status Air</li>
    </ol>
    <br>
    <br>
    <a href="{{ route('printstatusAir') }}" class="btn btn-sm btn-success float-right"><i class="fas fa-download"></i>
        Download</a>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Preview Status Air</h3>
                            {{-- <a href="{{ route('statusAir.index') }}" class="btn btn-sm btn-success float-right"><i class="fas fa-backward"></i> Kembali</a> --}}
                        </div>
                        <div class="card-body priview">
                            <p>
                                <center> Pemerintah Kota Surabaya <br>
                                    PERUSAHAAN DAERAH AIR MINUM </center>
                            </p>
                            <br>
                            <div class="mx-auto mb-3" style="width: 250px;">
                                <span>
                                    <center> TABEL MASTER STATUS AIR </center>
                                </span>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                   
                                        <th width="30%">Kode</th>
                                        <th width="30%">Keterangan</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($stAir as $statusAir)
                                    <tr>
                                    
                                        <td>{{ $statusAir->kd_statusair }}</td>
                                        <td>{{ $statusAir->keterangan }}</td>
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


