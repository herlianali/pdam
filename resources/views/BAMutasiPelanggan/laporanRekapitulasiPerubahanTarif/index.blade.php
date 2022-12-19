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
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Laporan Rekapitulasi Perubahan Tarif</h3>
                        </div>
                        <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-md-8">
                            <form action="form-horizontal">
                                <div class="form-group row mt-2">
                                    <label for="wilayah" class="col-md-2 col-form-label">  </label>
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
                                    <label for="periode" class="col-md-2 col-form-label">Periode </label>
                                    <div class="col-md-2">
                                        <input type="date" class="form-control" name="periode" id="periode"
                                            onkeyup="valueing()">
                                    </div>
                                    <label for="s.d" class=" col-form-label">S.D </label>
                                    <div class="col-md-2">
                                        <input type="date" class="form-control" name="periode1" id="periode1" onkeyup="valueing()">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="wilayah" class="col-md-2 col-form-label"> Wilayah </label>
                                    <div class="col-md-4">
                                        <select class="form-control" disabled id="wilayah" onkeyup="valueing()">
                                            <option value="wilayah T">T - Timur </option>
                                            <option value="wilayah B" disabled> B - Barat</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class=" btn-info btn-sm">Preview</button>
                                <button type="reset" class=" btn-danger btn-sm">Batal</button>
                            </form>
                            </div>
                        </div>
                        <table id="table" class="table table-bordered table-responsive-md table-condensed">
                                <thead>
                                    <tr>
                                        <th width="30%">JNS_TARIF</th>
                                        <th width="30%">KD_TARIF</th>
                                        <th width="20%">TRA1</th>
                                        <th width="20%">TR2A</th>
                                        <th width="20%">TR2B</th>
                                        <th width="20%">TR3A</th>
                                        <th width="20%">TR3B</th>
                                        <th width="20%">TR3C</th>
                                        <th width="20%">TR4A</th>
                                        <th width="20%">TR4B</th>
                                        <th width="20%">TR4C</th>
                                        <th width="20%">TR4D</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
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
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>

@endpush