@extends('layout.app')
@section('title', 'BA Mutasi Pelanggan')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'BA Mutasi Pelanggan')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">BA Mutasi Pelanggan</a></li>
        <li class="breadcrumb-item active">Laporan Rekapitulasi Perubahan Tarif</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Laporan Rekapitulasi Perubahan Tarif</h3>
                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="form-group row">
                                    <div class="form-check">
                                        <input type="radio" name="cek" id="pembuatan" value="pembuatan">
                                        <label for="">Pembuatan</label>
                                        <input type="radio" name="cek" id="pengesahan" value="pengesahan">
                                        <label for="">Pengesahan</label>
                                        <input type="radio" name="cek" id="penerbitan" value="penerbitan">
                                        <label for="">Penerbitan</label>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="periode" class="col-md-3 col-form-label">Periode </label>
                                    <div class="col-md-4">
                                        <input type="date" class="form-control" name="periode" id="periode"
                                            onkeyup="valueing()">
                                    </div>
                                    <label for="s.d" class=" col-form-label">S.D </label>
                                    <div class="col-md-4">
                                        <input type="date" class="form-control" name="periode1" id="periode1" onkeyup="valueing()">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="wilayah" class="col-md-3 col-form-label"> Wilayah </label>
                                    <div class="col-md-7">
                                        <select class="form-control" disabled id="wilayah" onkeyup="valueing()">
                                            <option value="wilayah T">T - Timur </option>
                                            <option value="wilayah B" disabled> B - Barat</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class=" btn-info btn-sm float-right">Preview</button>
                                <button class=" btn-danger btn-sm float-right">Batal</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-7 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Print preview Laporan Rekapitulasi Perubahan Tarif</h3>
                            <a href="" class="btn btn-xs btn-success float-right"><i class="fas fa-print"></i>Cetak</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    
@endpush
