@extends('layout.app')

@push('css')
    <link href="{{ asset('assets/plugins/font/dot-matrix.css') }}" rel="stylesheet">
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
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Preview Petugas Entry</h3>
                                    <button type="submit"
                                    class="btn btn-xs float-right btn-success print">
                                    Print
                                    </button>
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
                                               

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pEntry as $ptsEntry)
                                        <tr>
                                            <td>{{ $ptsEntry->kd_ptgentry }}</td>
                                            <td>{{ $ptsEntry->nip }}</td>
                                            <td>{{ $ptsEntry->nama }}</td>
                                            <td>{{ $ptsEntry->aktif }}</td>
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
