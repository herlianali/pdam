@extends('layout.app')
@section('title', 'Pengaduan')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Pengaduan')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Pengaduan</a></li>
        <li class="breadcrumb-item active"> Detail Data Pengaduan</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Detail Pengaduan</h3>
                            <a href="{{ route('pengaduan') }}" class="btn btn-xs btn-warning float-right"><i
                                    class="fas fa-backward"></i> Kembali</a>
                        </div>
                        <div class="card-body">
                            <div class="row mb-5">
                                <div class="col-md-1"></div>
                                <div class="col-md-12">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="nama_pengadu" class="col-md-2 col-form-label">Nama Pengadu</label>
                                            <div class="col-md-5">
                                                <input type="text" class="form-control" id="nama_pengadu"
                                                    name="nama_pengadu" onkeyup="valueing()" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="alamat_pengadu" class="col-md-2 col-form-label"> Alamat Pengadu
                                            </label>
                                            <div class="col-md-5">
                                                <input type="text" class="form-control" id="alamat_pengadu"
                                                    name="alamat_pengadu" onkeyup="valueing()" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="tlp_pengadu" class="col-md-2 col-form-label">Telepon Pengadu</label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" id="tlp_pengadu"
                                                    name="tlp_pengadu" onkeyup="valueing()" disabled>
                                            </div>
                                            <label for="periode" class="col-form-label">Periode/Rek</label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" id="periode" name="periode"
                                                    onkeyup="valueing()" disabled>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-12">
                                <form class="form-horizontal">
                                    <div class="form-group row mt-2">
                                        <label for="no_pengaduan" class="col-md-2 col-form-label">No Pengaduan</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="no_pengaduan" name="no_pengaduan"
                                                onkeyup="valueing()" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label for="tgl_pengaduan" class="col-md-2 col-form-label">Tgl Pengaduan</label>
                                        <div class="col-md-4">
                                            <input type="date" class="form-control" id="tgl_pengaduan"
                                                name="tgl_pengaduan" onkeyup="valueing()" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label for="asal_pengaduan" class="col-md-2 col-form-label">Asal Pengaduan</label>
                                        <div class="col-md-5">
                                            <select class="form-control" id="asal_pengaduan" name="asal_pengaduan"
                                                onkeyup="valueing()" disabled>
                                                <option value=""> </option>
                                                <option value=""> </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label for="jns_pengaduan" class="col-md-2 col-form-label">Jenis Pengaduan</label>
                                        <div class="col-md-5">
                                            <select class="form-control" id="jns_pengaduan" name="jns_pengaduan"
                                                onkeyup="valueing()" disabled>
                                                <option value=""> </option>
                                                <option value=""> </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label for="uraian" class="col-md-2 col-form-label">Uraian</label>
                                        <div class="col-md-5">
                                            <textarea class="form-control" id="uraian" onkeyup="valueing()" name="uraian" disabled></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label for="usulan_no_bonc" class="col-md-2 col-form-label">Usulan No BonC</label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" id="usulan_no_bonc"
                                                name="usulan_no_bonc" onkeyup="valueing()" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label for="usulan_bonc_mtr" class="col-md-2 col-form-label">No BonC Mtr
                                            Garansi</label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" id="usulan_bonc_mtr"
                                                name="usulan_bonc_mtr" onkeyup="valueing()" disabled>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-12">
                            <form class="form-horizontal">
                                <div class="form-group row mt-2">
                                   
                                    &nbsp; &nbsp;<input type="checkbox">
                                    <label for="bonc" class="col-md-2 col-form-label">Buat Bon C Tanggal</label>
                                    <div class="col-md-2">
                                        <input type="date" class="form-control" id="bonc_tanggl" name="bonc_tanggal"
                                            onkeyup="valueing()">
                                    </div>
                                    &nbsp;
                                    <div class="col-md-2">
                                        <input type="text" class="form-control" id="bonc" name="bonc"
                                            onkeyup="valueing()">
                                    </div>
                                    
                                </div>
                                <div class="form-group row mt ">
                                    <label for="sumber_bonc" class="col-md-2 col-form-label">Sumber Bon C </label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" id="sumber_bonc" name="sumber_bonc"
                                            onkeyup="valueing()">
                                    </div>
                                    <a href="{{ route('printbonc') }}" class="btn btn-sm btn-success"><i
                                            class="fas fa-print"></i> Cetak Bon C</a>
                                </div>
                                <div class="form-group row ">
                                    &nbsp; &nbsp;<input type="checkbox">
                                    <label for="bonP" class="col-md-2 col-form-label">Buat Bon P Tanggal</label>
                                    <div class="col-md-2">
                                        <input type="date" class="form-control" id="bonP_tanggl" name="bonP_tanggal"
                                            onkeyup="valueing()">
                                    </div>
                                    &nbsp;
                                    <div class="col-md-2">
                                        <input type="text" class="form-control" id="bonP" name="bonP"
                                            onkeyup="valueing()">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="jns_pekerjaan" class="col-md-2 col-form-label">Jenis Pekerjaan </label>
                                    <div class="col-md-4">
                                        <select class="form-control" id="jns_pekerjaan" name="jns_pekerjaan"
                                            onkeyup="valueing()">
                                            <option value=""> </option>
                                            <option value=""> </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="status_meter" class="col-md-2 col-form-label">Status Meter </label>
                                    <div class="col-md-1">
                                        <input type="text" class="form-control" id="status_meter" name="status_meter"
                                            onkeyup="valueing()">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" id="st_meter" name="st_meter"
                                            onkeyup="valueing()">
                                    </div>
                                    <a href="{{ route('printbonp') }}" class="btn btn-sm btn-success"><i
                                            class="fas fa-print"></i> Cetak Bon P</a>
                                </div>
                            </form>
                        </div>
                    </div>
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
