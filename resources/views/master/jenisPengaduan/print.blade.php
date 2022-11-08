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

@section('title', 'Print Jenis Pengaduan')

@section('namaHal', 'Petugas')

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Jenis Pengaduan</li>
        <li class="breadcrumb-item active">Print Jenis Pengaduan</li>
    </ol>
@endsection

@section('content')
    <section class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Preview Jenis Pengaduan</h3>
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
                                <span>Table Master Jenis Pengaduan</span> <br>
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
                                    @foreach ($jenisPengaduans as $jenis)
                                    <tr>
                                        <td>{{ $jenis->jns_pengaduan }}</td>
                                        <td>{{ $jenis->keterangan }}</td>
                                        <td>{{ $jenis->sifat }}</td>
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
