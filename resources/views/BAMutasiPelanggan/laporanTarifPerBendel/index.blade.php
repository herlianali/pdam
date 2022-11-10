@extends('layout.app')
@section('title', 'BA Mutasi Pelanggan')

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

    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'BA Mutasi Pelanggan')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">BA Mutasi Pelanggan</a></li>
        <li class="breadcrumb-item active">Laporan Tarif Per Bendel</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Laporan Tarif Per Bendel</h3>
                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="form-group row mt-2 ">
                                    <label for="jp_dinas" class="col-md-3 col-form-label">Zona </label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="zona" id="zona">
                                    </div>
                                    <input type="checkbox" name="zona_all" id="zona_all">
                                    <label for="all" class="col-md-3 col-form-label">All</label>
                                </div>
                                <div class="form-group row mt-2 ">
                                    <label for="bundel" class="col-md-3 col-form-label">Bundel</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="bundel" id="bundel">
                                    </div>
                                    <input type="checkbox" name="bundel_all" id="bundel_all">
                                    <label for="all" class="col-md-3 col-form-label">All</label>
                                </div>
                                <div class="form-group row mt-2 ">
                                    <label for="tarif" class="col-md-3 col-form-label">Tarif</label>
                                    <div class="col-md-4">
                                        <select class="form-control" onkeyup="valueing()" name="tarif">
                                            @foreach ($dataS as $tarif)
                                                <option value="{{ $tarif->kd_tarif }}">{{ $tarif->kd_tarif }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-3">
                                        <label class="col-form-label col-form-label-sm"></label>
                                    </div>
                                <div class="card col-md-4">
                                    <div class="card-body">
                                        <div class="col-md-5">
                                        <label class="col-form-label col-form-label-sm" for="urut">Urut berdasarkan</label>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="noplg" name="urut" value="noplg">
                                                <label class="form-check-label">No Pelanggan</label>
                                            </div>
                                            &nbsp;
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="alamat" name="urut" value="alamat">
                                                <label class="form-check-label">Alamat</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="form-group row mt-2 ">
                                    <label for="" class="col-md-3 col-form-label">
                                    </label>
                                    <div class="col-md-9">
                                        <button type="submit" class="btn btn-info btn-sm float-right">Preview</button>
                                        <button class="btn btn-danger btn-sm float-right">Batal</button>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

