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

@section('title', 'Print Petugas Kontrol')

@section('namaHal', 'Master')

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Petugas Kontrol</li>
        <li class="breadcrumb-item active">Print Petugas</li>
    </ol>
    <br>
    <br>
    <a href="{{ route('printpetugasKontrol') }}" class="btn btn-sm btn-success float-right"><i class="fas fa-download"></i>
        Download</a>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Print preview Tabel Petugas Kontrol</h3>
                            {{-- <a href="{{ route('petugasKontrol') }}" class="btn btn-sm btn-success float-right"><i --}}
                                    class="fas fa-backward"></i> Kembali</a>
                        </div>
                        <div class="card-body priview">
                            <p>
                                <center> Pemerintah Kota Surabaya <br>
                                    PERUSAHAAN DAERAH AIR MINUM </center>
                            </p>
                            <br>
                            <div class="mx-auto mb-3" style="width: 250px;">
                                <span>
                                    <center> TABEL MASTER PETUGAS KONTROL </center>
                                </span>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th width="20%">No</th>
                                        <th width="20%">Kode</th>
                                        <th width="20%">NIP</th>
                                        <th width="20%">Nama</th>
                                        <th width="20%">Bagian</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($petugas as $ptKontrol)
                                    <tr>

                                        <td>{{ $ptKontrol->kd_ptgktrl }}</td>
                                        <td>{{ $ptKontrol->nip }}</td>
                                        <td>{{ $ptKontrol->nama }}</td>
                                        <td>{{ $ptKontrol->bagian }}</td>
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