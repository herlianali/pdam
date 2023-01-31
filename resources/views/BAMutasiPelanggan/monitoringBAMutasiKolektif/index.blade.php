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
        <li class="breadcrumb-item active">Monitoring BA Mutasi Kolektif</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row mx-n3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Monitoring BA Mutasi Kolektif</h3>
                            <a href="{{ route('createmonitoringBAMutasiKolektif') }}"class="btn btn-xs btn-info float-right"><i class="fas fa-plus"></i> Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="radio" name="pilihan" id="belumdisahkan" value="">
                                                                <label for="belumdisahkan">Belum disahkan sampai tanggal</label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="date" class="form-control" id="belumdisahkan" name="pilihan" value="{{ $date }}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="radio" name="pilihan" id="telahdisahkan" value="">
                                                                <label for="telahdisahkan">Telah disahkan tanggal</label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="date" class="form-control" id="telahdisahkan" name="pilihan" value="">
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="radio" name="pilihan" id="belumdikirimkebagrek"value="">
                                                                <label for="">Belum dikirim ke Bag.Rekening tgl</label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="date" class="form-control" id="belumdikirimkebagrek" name="pilihan" value="{{ $date }}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                        <div class="col">
                                                            <input type="radio" name="pilihan" id="telahdikirimkebagrek"value="">
                                                            <label for=""> Telah dikirim ke Bag.Rekening tgl</label>
                                                        </div>
                                                            <div class="col-md-4">
                                                            <input class="form-control" type="date" name="pilihan"id="telahdikirimkebagrek" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="radio" name="pilihan" id="belumdiremajakan"
                                                                    value="">
                                                                <label for="">Belum diremajakan sampai tgl</label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="date" class="form-control" id="belumdiremajakan" name="pilihan" value="{{ $date }}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="radio" name="pilihan" id="telahdiremajakan"
                                                                    value="">
                                                                <label for="">Telah diremajakan tgl</label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input class="form-control" type="date" name="pilihan" id="telahdiremajakan" value="">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="radio" name="pilihan" id="telahdiremajakanbulan"
                                                                    value="">
                                                                <label for="">Telah diremajakan bulan</label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input class="form-control" type="text" name="pilihan"id="telahdiremajakanbulan" value="">
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="radio" name="pilihan" id="dibuat_tgl"value="">
                                                                <label for="">Dibuat tanggal</label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input class="form-control" type="date" name="pilihan"id="dibuat_tgl" value="09/11/2022">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="radio" name="pilihan" id="dibuat_bln"value="">
                                                                <label for="">Dibuat bulan</label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input class="form-control" type="text" name="pilihan" id="dibuat_bln" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="form-group row">
                                                <label for="no_bamutkol" class="col-md-2 col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No. BA </label>
                                                <div class="col-md-2">
                                                    <input type="text" class="form-control" id="no_bamutkol" name="no_bamutkol">
                                                </div>
                                                <button class="btn btn-success float-right"><i
                                                    class="fa fa-search"></i>Cari BA</button>&nbsp;
                                                <button type="submit" class="btn btn-success btn-sm float-right"><i class="fa fa-filter"></i> Filter</button>
                                            </div>
                                            <br>
                                            <a href="{{ route('preview') }}"class="btn btn-sm btn-info float-right"><i class="fas fa-print"></i> Preview</a>
                                        </div>
                                    </form>
                                    
                                    <table id="table" class="table table-bordered table-responsive table-condensed">
                                        <thead>
                                            <tr>
                                                <th>NO_BAMUTKOL</th>
                                                <th>TGL_BAMUTASI</th>
                                                <th>JNS_MUTASI</th>
                                                <th>NO_BONC</th>
                                                <th>RP_RETRIBUSI_L</th>
                                                <th>RP_RETRIBUSI_B</th>
                                                <th>TERHITUNG_TGL</th>
                                                <th>BLN_TERBIT</th>
                                                <th>DASAR</th>
                                                <th>TGL_KASI</th>
                                                <th>TGL_KABAG</th>
                                                <th>TGL_KIRIMREKENING</th>
                                                <th>TGL_PEREMAJAAN</th>
                                                <th>KD_RETRIBUSIL</th>
                                                <th>KD_RETRIBUSIB</th>
                                                <th>BATAL</th>
                                                <th>TGL_BATAL</th>
                                                <th>NO_PENGADUAN</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @if (count($data) > 0)
                                        @foreach ($data as $row)
                                            <tr>
                                                <td>{{ $row->no_bamutkol }}</td>
                                                <td>{{ $row->tgl_bamutasi }}</td>
                                                <td>{{ $row->jns_mutasi }}</td>
                                                <td>{{ $row->no_bonc }}</td>
                                                <td>{{ $row->rp_retribusi_l }}</td>
                                                <td>{{ $row->rp_retribusi_b }}</td>
                                                <td>{{ $row->terhitung_tgl }}</td>
                                                <td>{{ $row->blnterbit }}</td>
                                                <td>{{ $row->dasar }}</td>
                                                <td>{{ $row->tgl_kasi }}</td>
                                                <td>{{ $row->tgl_kabag }}</td>
                                                <td>{{ $row->tgl_kirimrekening }}</td>
                                                <td>{{ $row->tgl_peremajaan }}</td>
                                                <td>{{ $row->kd_retribusil }}</td>
                                                <td>{{ $row->kd_retribusib }}</td>
                                                <td>{{ $row->batal }}</td>
                                                <td>{{ $row->tgl_batal }}</td>
                                                <td>{{ $row->no_pengaduan }}</td>
                                            </tr>
                                        @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                    <table id="table2" class="table table-bordered table-responsive table-condensed">
                                        <thead>
                                            <tr>
                                                <th>No Pelanggan</th>
                                                <th>Nama</th>
                                                <th>Jalan</th>
                                                <th>Wilayah</th>
                                                <th>Kecamatan</th>
                                                <th>Kelurahan</th>
                                                <th>Jns Pelanggan</th>
                                                <th>Zona</th>
                                                <th>Kd GunaPersil</th>
                                                <th>Kd Tarif</th>
                                                <th>No Meter</th>
                                                <th>Ukuran Meter</th>
                                                <th>Kd Retribusi</th>
                                                <th>Rp Retribusi</th>
                                                <th>No Pa</th>
                                                <th>No Bundel</th>
                                                <th>Register</th>
                                                <th>Tgl Pasang</th>
                                                <th>Tgl Tutup</th>
                                                <th>Tgl Buka</th>
                                                <th>Bln Terbit</th>
                                                <th>Status</th>
                                                <th>Bulan Akhir</th>
                                                <th>Meter Akhir</th>
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
            </div>
        </div>

    </section>




@endsection

@push('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script>
        $(function() {
            $('#table').DataTable({

                //  "lengthChange": false,
                //   "autoWidth": false,
                //   "responsive": true,
                "oLanguage": {
                    "sSearch": "No Pelanggan : "
                },
                "pageLength": 5
            }).buttons().container().appendTo('#table_wrapper .col-md-6:eq(0)');
            $('#table1').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                "pageLength": 5

            });
        });
    </script>
@endpush
