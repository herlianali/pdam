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
        <li class="breadcrumb-item active">Monitoring BA Mutasi Perorangan</li>
    </ol>
@endsection


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row mx-n3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">

                            <h3 class="card-title">Monitoring BA Mutasi Perorangan</h3>
                            <a href="{{ route('createmonitoringBAMutasiPerorangan') }}"
                                class="btn btn-xs btn-info float-right"><i class="fas fa-plus"></i> Tambah</a>
                                @if (count($data) > 0)
                                    <form action="{{ route('previewBAMutasiPerorangan') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-xs btn-info float-right"><i class="fas fa-print"></i> Preview</button>
                                    </form>
                                @endif
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-12">
                                        <div class="form-group">
                                        <form class="form-horizontal">
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
                                                <label for="no_bamutasi" class="col-md-2 col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No. BA </label>
                                                <div class="col-md-2">
                                                    <input type="text" class="form-control" id="no_bamutasi" name="no_bamutasi">
                                                </div>
                                                <button class="btn btn-success float-right"><i
                                                    class="fa fa-search"></i>Cari BA</button>&nbsp;
                                                <button type="submit" class="btn btn-success btn-sm float-right"><i class="fa fa-filter"></i> Filter</button>
                                            </div>
                                                <br>
                                                <div class="form-group row">
                                                    <div class="col-md-1">
                                                        <label class="col-form-label col-form-label-sm"></label>
                                                    </div>
                                                    <div class="card col-md-9">
                                                    <div class="card-body">
                                                        <div class="col-md-2">
                                                            <label class="" for="nama">Jenis Mutasi</label>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="" class="col-form-label"></label>
                                                            <div class="col">
                                                                <input type="checkbox">
                                                                <label for="nama" class="col-form-label">A - Nama</label>
                                                            </div>
                                                            <div class="col">
                                                                <input type="checkbox">
                                                                <label for="da" class="col-form-label">C - DA</label>
                                                            </div>
                                                            <div class="col">
                                                                <input type="checkbox">
                                                                <label for="guna_persil" class="col-form-label">E - Guna Persil</label>
                                                            </div>
                                                            <div class="col">
                                                                <input type="checkbox">
                                                                <label for="ukuran_meter" class="col-form-label">G - Ukuran Meter</label>
                                                            </div>
                                                            <div class="col">
                                                                <input type="checkbox">
                                                                <label for="jns_pelanggan" class="col-form-label">I - Jenis Plg</label>
                                                            </div>
                                                            <div class="col">
                                                                <input type="checkbox">
                                                                <label for="no_bundel" class="col-form-label">k - No Bundel</label>
                                                            </div>
                                                            <div class="col"></div>
                                                        </div>
                                                        <div class="row">
                
                                                            <label for="" class="col-form-label"></label>
                                                            <div class="col">
                                                                <input type="checkbox">
                                                                <label for="alamat" class="col-form-label">B - Alamat</label>
                                                            </div>
                                                            <div class="col">
                                                                <input type="checkbox">
                                                                <label for="kode_tarif" class="col-form-label">D - Kode Tarif</label>
                                                            </div>
                                                            <div class="col">
                                                                <input type="checkbox">
                                                                <label for="retribusi" class="col-form-label">F - Retribusi</label>
                                                            </div>
                                                            <div class="col">
                                                                <input type="checkbox">
                                                                <label for="no_pa" class="col-form-label">H - No PA</label>
                                                            </div>
                                                            <div class="col">
                                                                <input type="checkbox">
                                                                <label for="sub_zona" class="col-form-label">J - Sub Zona</label>
                                                            </div>
                                                            <div class="col">
                                                                <input type="checkbox">
                                                                <label for="no_meter" class="col-form-label">L - No Meter</label>
                                                            </div>
                                                            <div class="col"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                    </form>
                            <table id="table" class="table table-bordered table-responsive table-condensed">
                                <thead>
                                    <tr>
                                        <th>NO_BAMUTASI</th>
                                        <th>TGL_BAMUTASI</th>
                                        <th>JNS_MUTASI</th>
                                        <th>NO_BONC</th>
                                        <th>NO_PLG</th>
                                        <th>KD_GUNAPERSIL_L</th>
                                        <th>KD_GUNAPERSIL_B</th>
                                        <th>KD_TARIF_L</th>
                                        <th>KD_TARIF_B</th>
                                        <th>ZONA_L</th>
                                        <th>ZONA_B</th>
                                        <th>UKURAN_MTR_L</th>
                                        <th>UKURAN_MTR_B</th>
                                        <th>RP_RETRIBUSI_L</th>
                                        <th>RP_RETRIBUSI_B</th>
                                        <th>NM_L</th>
                                        <th>NM_B</th>
                                        <th>JALAN_L</th>
                                        <th>JALAN_B</th>
                                        <th>GANG_L</th>
                                        <th>GANG_B</th>
                                        <th>NOMOR_L</th>
                                        <th>NOMOR_B</th>
                                        <th>NOTAMB_L</th>
                                        <th>NOTAMB_B</th>
                                        <th>DA_L</th>
                                        <th>DA_B</th>
                                        <th>NO_PA_L</th>
                                        <th>NO_PA_B</th>
                                        <th>JNS_PELANGGAN_L</th>
                                        <th>JNS_PELANGGAN_B</th>
                                        <th>TERHITUNG_TGL</th>
                                        <th>BLNTERBIT</th>
                                        <th>DASAR</th>
                                        <th>TGL_KASI</th>
                                        <th>TGL_KABAG</th>
                                        <th>TGL_KIRIMREKENING</th>
                                        <th>TGL_PEREMAJAAN</th>
                                        <th>FLG_UBAHTARIF</th>
                                        <th>KD_RETRIBUSIL</th>
                                        <th>KD_RETRIBUSIB</th>
                                        <th>FLOW_BA</th>
                                        <th>TGL_BATAL</th>
                                        <th>NO_BUNDELL</th>
                                        <th>NO_BUNDELB</th>
                                        <th>JNS_PERSIL_L</th>
                                        <th>JNS_PERSIL_B</th>
                                        <th>NO_PENGADUAN</th>
                                        <th>LEBARJALAN</th>
                                        <th>NO_MTR_L</th>
                                        <th>NO_MTR_B</th>
                                        <th>KD_MERK_L</th>
                                        <th>KD_MERK_B</th>
                                        <th>LISTRIK</th>
                                        <th>NJOP</th>
                                        <th>LUAS_BANGUN</th>
                                        <th>LUAS_TANAH</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if (count($data) > 0)
                                    @foreach ($data as $row)
                                    <tr>
                                        <td>{{ $row->no_bamutasi }}</td>
                                        <td>{{ $row->tgl_bamutasi }}</td>
                                        <td>{{ $row->jns_mutasi }}</td>
                                        <td>{{ $row->no_bonc }}</td>
                                        <td>{{ $row->no_plg }}</td>
                                        <td>{{ $row->kd_gunapersil_l }}</td>
                                        <td>{{ $row->kd_gunapersil_b }}</td>
                                        <td>{{ $row->kd_tarif_l }}</td>
                                        <td>{{ $row->kd_tarif_b }}</td>
                                        <td>{{ $row->zona_l }}</td>
                                        <td>{{ $row->zona_b }}</td>
                                        <td>{{ $row->ukuran_mtr_l }}</td>
                                        <td>{{ $row->ukuran_mtr_b }}</td>
                                        <td>{{ $row->rp_retribusi_l }}</td>
                                        <td>{{ $row->rp_retribusi_b }}</td>
                                        <td>{{ $row->nm_l }}</td>
                                        <td>{{ $row->nm_b }}</td>
                                        <td>{{ $row->jalan_l }}</td>
                                        <td>{{ $row->jalan_b }}</td>
                                        <td>{{ $row->gang_l }}</td>
                                        <td>{{ $row->gang_b }}</td>
                                        <td>{{ $row->nomor_l }}</td>
                                        <td>{{ $row->nomor_b }}</td>
                                        <td>{{ $row->notamb_l }}</td>
                                        <td>{{ $row->notamb_b }}</td>
                                        <td>{{ $row->da_l }}</td>
                                        <td>{{ $row->da_b }}</td>
                                        <td>{{ $row->no_pa_l }}</td>
                                        <td>{{ $row->no_pa_b }}</td>
                                        <td>{{ $row->jns_pelanggan_l }}</td>
                                        <td>{{ $row->jns_pelanggan_b }}</td>
                                        <td>{{ $row->terhitung_tgl }}</td>
                                        <td>{{ $row->blnterbit }}</td>
                                        <td>{{ $row->dasar }}</td>
                                        <td>{{ $row->tgl_kasi }}</td>
                                        <td>{{ $row->tgl_kabag }}</td>
                                        <td>{{ $row->tgl_kirimrekening }}</td>
                                        <td>{{ $row->tgl_peremajaan }}</td>
                                        <td>{{ $row->flag_ubahtarif }}</td>
                                        <td>{{ $row->kd_retribusil }}</td>
                                        <td>{{ $row->kd_retribusib }}</td>
                                        <td>{{ $row->flow_ba }}</td>
                                        <td>{{ $row->tgl_batal }}</td>
                                        <td>{{ $row->no_bundell }}</td>
                                        <td>{{ $row->no_bundelb }}</td>
                                        <td>{{ $row->jns_persil_l }}</td>
                                        <td>{{ $row->jns_persil_b }}</td>
                                        <td>{{ $row->no_pengaduan }}</td>
                                        <td>{{ $row->lebarjalan }}</td>
                                        <td>{{ $row->no_mtr_l }}</td>
                                        <td>{{ $row->no_mtr_b }}</td>
                                        <td>{{ $row->kd_merk_l }}</td>
                                        <td>{{ $row->kd_merk_b }}</td>
                                        <td>{{ $row->listrik }}</td>
                                        <td>{{ $row->njop }}</td>
                                        <td>{{ $row->luas_bangun }}</td>
                                        <td>{{ $row->luas_tanah }}</td>
                                        <td>

                                            <a href=""
                                                class="btn btn-xs btn-info "><i class="fas fa-edit"></i> Edit</a>
                                            <a href=""
                                                class="btn btn-xs btn-info ">Persetujuan</a>

                                        </td>
                                    </tr>
                                @endforeach
                                    @endif
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
