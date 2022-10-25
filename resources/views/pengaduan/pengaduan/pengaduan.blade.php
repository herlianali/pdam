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
        <li class="breadcrumb-item active">Pengaduan</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <form action="" class="form-horizontal">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Pengadu</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="ptgs_cs" class="col-md-2 col-form-label col-form-label-sm"> Petugas CS </label>
                                    <div class="col-md-5">
                                        <select class="form-control form-control-sm" id="ptgs_cs" name="ptgs_cs">
                                            <option value=""></option>
                                            @foreach ($ptgcs as $petugas)
                                                <option value="{{ $petugas->kd_ptgcs }}">{{ $petugas->kd_ptgcs }} - {{ $petugas->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="button"
                                            class="btn btn-outline-primary btn-sm"
                                            data-toggle="modal"
                                            data-target="#pelanggan">
                                            <i class="fas fa-search"></i>
                                            Cari Pelanggan
                                    </button>
                                    &nbsp;
                                    <button type="button"
                                            class="btn btn-outline-primary btn-sm"
                                            data-toggle="modal"
                                            data-target="#pengaduan">
                                            <i class="fas fa-search"></i>
                                            Cari Pengaduan
                                    </button>
                                </div>
                                <div class="form-group row">
                                    <label for="jns_pengadu" class="col-md-2 col-form-label col-form-label-sm"> Jenis Pengadu </label>
                                    <div class="col-md-5">
                                        <select class="form-control form-control-sm" id="jns_pengadu" name="jns_pengadu">
                                            <option value="P"> P - Pelanggan </option>
                                            <option value="N"> N - Non Pelanggan </option>
                                            <option value="I"> I - Internal PDAM </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Yang Diadukan</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="no_plg" class="col-md-2 col-form-label col-form-label-sm"> No Pelanggan </label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control form-control-sm" name="no_plg">
                                    </div>
                                    <label for="nopel_zemp" class="col-md-2 col-form-label col-form-label-sm"> Nopel Zemp </label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control form-control-sm" name="nopel_zemp">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama" class="col-md-2 col-form-label col-form-label-sm"> Nama </label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control form-control-sm" name="nama">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jalan" class="col-md-2 col-form-label col-form-label-sm"> Jalan </label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control form-control-sm" name="jalan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="gang" class="col-md-2 col-form-label col-form-label-sm"> Gang </label>
                                    <div class="col-md-2">
                                        <input type="text" class="form-control form-control-sm" name="gang">
                                    </div>
                                    <label for="no_alamat" class="col-md-1 col-form-label col-form-label-sm"> No </label>
                                    <div class="col-md-2">
                                        <input type="text" class="form-control form-control-sm" name="no_alamat">
                                    </div>
                                    <label for="no_tambahan" class="col-md-2 col-form-label col-form-label-sm"> No Tambahan </label>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control form-control-sm" name="no_tambahan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_pengadu" class="col-md-2 col-form-label col-form-label-sm"> Nama </label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control form-control-sm" name="nama_pengadu">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat_pengadu" class="col-md-2 col-form-label col-form-label-sm"> Alamat </label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control form-control-sm" name="alamat_pengadu">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tlp_pengadu" class="col-md-2 col-form-label col-form-label-sm"> Telp Pengadu </label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control form-control-sm" name="tlp_pengadu">
                                    </div>
                                    <label for="periode_rek" class="col-md-2 col-form-label col-form-label-sm"> Periode Rek </label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control form-control-sm" name="periode_rek">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Pengaduan</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="no_pengaduan" class="col-md-3 col-form-label col-form-label-sm"> No Pengaduan </label>
                                    <div class="col-md-5 ml-n4">
                                        <input type="text" class="form-control form-control-sm" name="no_pengaduan">
                                    </div>
                                    {{-- <div class="col-md-4 row"> --}}
                                        <button type="button" class="btn btn-outline-primary btn-sm col-md-2 " data-toggle="modal" data-target="#baru"> Baru </button>
                                        <button type="button" class="btn btn-outline-primary btn-sm col-md-2 ml-1" data-toggle="modal" data-target="#koreksi"> Koreksi</button>
                                    {{-- </div> --}}
                                </div>
                                <div class="form-group row">
                                    <label for="tgl_pengaduan" class="col-md-3 col-form-label col-form-label-sm"> Tgl Pengaduan </label>
                                    <div class="col-md-5 ml-n4">
                                        <input type="text" class="form-control form-control-sm" name="tgl_pengaduan">
                                    </div>
                                    <button type="button" class="btn btn-outline-primary btn-sm col-md-4"> Batal Pengajuan </button>
                                </div>
                                <div class="form-group row">
                                    <label for="asal_pengaduan" class="col-md-3 col-form-label col-form-label-sm"> Asal Pengaduan </label>
                                    <div class="col-md-5 ml-n4">
                                        <select class="form-control form-control-sm" id="asal_pengaduan" name="asal_pengaduan">
                                            <option value=""> </option>
                                            <option value=""> </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jns_pengaduan" class="col-md-3 col-form-label col-form-label-sm"> Jenis Pengaduan </label>
                                    <div class="col-md-5 ml-n4">
                                        <select class="form-control form-control-sm" id="jns_pengaduan" name="jns_pengaduan">
                                            <option value=""> </option>
                                            <option value=""> </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="uraian" class="col-md-3 col-form-label col-form-label-sm"> Uraian </label>
                                    <div class="col-md-9 ml-n4">
                                        <input type="text" class="form-control form-control-sm" name="uraian">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="u_noBonC" class="col-md-3 col-form-label col-form-label-sm"> Usulan No Bon C </label>
                                    <div class="col-md-9 ml-n4">
                                        <input type="text" class="form-control form-control-sm" name="u_noBonC">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="u_noBonC" class="col-md-3 col-form-label col-form-label-sm"> No Bon C Mtr Garansi </label>
                                    <div class="col-md-9 ml-n4">
                                        <input type="text" class="form-control form-control-sm" name="u_noBonC">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Tindak Lanjut</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="status_bon_c" id="">
                                    <label class="form-check-label form-check-sm"> Buat Bon C </label>
                                </div>
                                <div class="form-group row">
                                    <label for="tgl_bon_c" class="col-md-2 col-form-label col-form-label-sm"> Tanggal </label>
                                    <div class="col-md-4">
                                        <input type="date" class="form-control form-control-sm" name="tgl_bon_c_awal">
                                    </div>
                                    <div class="col-md-5">
                                        <input type="date" class="form-control form-control-sm" name="tgl_bon_c_akhir">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="s_bon_c" class="col-md-2 col-form-label col-form-label-sm"> Sumber Bon C </label>
                                    <div class="col-md-9 ml-r3">
                                        <select name="s_bon_c" class="form-control form-control-sm" id="">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="status_bon_c" id="">
                                    <label class="form-check-label form-check-sm"> Buat Bon C </label>
                                </div>
                                <div class="form-group row">
                                    <label for="tgl_bon_p" class="col-md-2 col-form-label col-form-label-sm"> Tanggal </label>
                                    <div class="col-md-4">
                                        <input type="date" class="form-control form-control-sm" name="tgl_bon_p_awal">
                                    </div>
                                    <div class="col-md-5">
                                        <input type="date" class="form-control form-control-sm" name="tgl_bon_p_akhir">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="s_bon_p" class="col-md-2 col-form-label col-form-label-sm"> Sumber Bon P </label>
                                    <div class="col-md-9 ml-r3">
                                        <input type="text" class="form-control form-control-sm" name="s_bon_p">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jns_pekerjaan" class="col-md-2 col-form-label col-form-label-sm"> Jenis Pekerjaan </label>
                                    <div class="col-md-9 ml-r3">
                                        <input type="text" class="form-control form-control-sm mt-2" name="jns_pekerjaan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="status_meter" class="col-md-2 col-form-label col-form-label-sm"> Status Meter </label>
                                    <div class="col-md-9 ml-r3">
                                        <input type="text" class="form-control form-control-sm" name="status_meter">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="table" class="table table-bordered table-responsive-md table-condensed">
                                <thead>
                                    <tr>
                                        <th>No Pengaduan</th>
                                        <th>Status</th>
                                        <th>No Pelanggan</th>
                                        <th>Jenis Pengaduan</th>
                                        <th>Nama Pengadu</th>
                                        <th>Alamat Pendau</th>
                                        <th>Nama</th>
                                        <th>Jalan</th>
                                        <th>Gang</th>
                                        <th>Nomor</th>
                                        <th>No Tamb</th>
                                        <th>Tgl Penduanan</th>
                                        <th>Uraian</th>
                                        <th>Jenis Pengaduan</th>
                                        <th>Asal Pengaduan</th>
                                        <th>Sifat</th>
                                        <th>No BonC</th>
                                        <th>Tgl BonC</th>
                                        <th>Kelompok BonC</th>
                                        <th>Status BonC</th>
                                        <th>No BonP</th>
                                        <th>Tgl BonP</th>
                                        <th>Jenis Pekerjaan</th>
                                        <th>Status BonP</th>
                                        <th>Kd ptgkontrol</th>
                                        <th>Ptg Kontrol</th>
                                        <th>Telpon</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ( as ) --}}
                                        <tr onclick="">
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
                                            <td></td>
                                            <td>
                                                <button type="submit" class="btn btn-danger btn-xs" onclick=""><i
                                                        class="fas fa-trash-alt"></i> Hapus</button>
                                            </td>
                                        </tr>
                                    {{-- @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@include('pengaduan.pengaduan.m_c_pelanggan')
@include('pengaduan.pengaduan.m_c_pengaduan')

@push('js')
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script>
        $(function(){
            $('table.table').DataTable({
                "sScrollY":  ( 0.6 * $(window).height() ),
                "bPaginate": false,
                "bJQueryUI": true,
                "bScrollCollapse": true,
                "bAutoWidth": true,
                "sScrollX": "100%",
                "sScrollXInner": "100%"

            });
        })


        $(document).on('click', '.nama', function(e) {
            $('#no_pa').prop('disabled', true)
        })
    </script>
@endpush
