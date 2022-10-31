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

@section('title', 'Print Kondisi Tutupan')

@section('namaHal', 'Master')

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Kondisi Tutupan</li>
        <li class="breadcrumb-item active">Print Kondisi Tutupan</li>
    </ol>
    <br>
    <br>
    {{-- <a href="{{ route('printkondisiTutupan') }}" class="btn btn-sm btn-success float-right"><i class="fas fa-download"></i> --}}
        Download</a>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Print preview Tabel Kondisi Tutupan</h3>
                            {{-- <a href="{{ route('kondisiTutupan') }}" class="btn btn-sm btn-success float-right"><i class="fas fa-backward"></i> Kembali</a> --}}
                        </div>
                        <div class="card-body priview">
                            <p>
                                <center> Pemerintah Kota Surabaya <br>
                                    PERUSAHAAN DAERAH AIR MINUM </center>
                            </p>
                            <br>
                            <div class="mx-auto mb-3" style="width: 250px;">
                                <span>
                                    <center> TABEL MASTER KONDISI TUTUPAN </center>
                                </span>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th width="20%">No</th>
                                        <th width="20%">Kode</th>
                                        <th width="60%">Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kondTutupan as $KT)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $KT->kd_kondisi }}</td>
                                        <td>{{ $KT->keterangan }}</td>
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
