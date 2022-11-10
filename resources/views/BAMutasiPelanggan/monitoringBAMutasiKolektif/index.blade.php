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
                                    <form class="form-horizontal" action="" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <div class="form-check">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="radio" name="pilihan" id="belumdisahkan" value="">
                                                                <label for="">Belum disahkan sampai tanggal</label>
                                                            </div>
                                                            <div class="col">
                                                                <input class="ml-3" type="date" name="pilihan" id="belumdisahkan" value="" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="radio" name="pilihan" id="telahdisahkan" value="">
                                                                <label for="">Telah disahkan tanggal</label>
                                                            </div>
                                                            <div class="col">
                                                                <input class="ml-3" type="date" name="pilihan" id="telahdisahkan" value="">
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="radio" name="pilihan" id="belumdikirimkebagrek"value="">
                                                                <label for="">Belum dikirim ke Bag.Rekening tgl</label>
                                                            </div>
                                                            <div class="col">
                                                                <input class="ml-3" type="date" name="pilihan" id="belumdikirimkebagrek" value="">
                                                            </div>
                                                        </div>
                                                        <div class="col ml-n2">
                                                            <input type="radio" name="pilihan" id="telahdikirimkebagrek"value="">
                                                            <label for=""> Telah dikirim ke Bag.Rekening tgl</label>
                                                            <input class="ml-5" type="date" name="pilihan"id="telahdikirimkebagrek" value="">
                                                        </div>
                                                        <div class="col ml-n2">
                                                            <label for="">No. BA</label>
                                                            <input style="margin-left: 15.8rem; width: 10rem" type="text"name="no_ba" id="no_ba" value="">
                                                            <button>cari BA</button>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="radio" name="pilihan" id="belumdiremajakan"
                                                                    value="">
                                                                <label for="">Belum diremajakan sampai tgl</label>
                                                            </div>
                                                            <div class="col">
                                                                <input class="ml-3" type="date" name="pilihan" id="belumdiremajakan" value="">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="radio" name="pilihan" id="telahdiremajakan"
                                                                    value="">
                                                                <label for="">Telah diremajakan tgl</label>
                                                            </div>
                                                            <div class="col">
                                                                <input class="ml-3" type="date" name="pilihan" id="telahdiremajakan" value="">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="radio" name="pilihan" id="telahdiremajakanbulan"
                                                                    value="">
                                                                <label for="">Telah diremajakan bulan</label>
                                                            </div>
                                                            <div class="col">
                                                                <input class="ml-3" type="date" name="pilihan"id="telahdiremajakanbulan" value="">
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="radio" name="pilihan" id="dibuat_tgl"value="">
                                                                <label for="">Dibuat tanggal</label>
                                                            </div>
                                                            <div class="col">
                                                                <input class="ml-3" type="date" name="pilihan"id="dibuat_tgl" value="">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="radio" name="pilihan" id="dibuat_bln"value="">
                                                                <label for="">Dibuat bulan</label>
                                                            </div>
                                                            <div class="col">
                                                                <input class="ml-3" type="date" name="pilihan" id="dibuat_bln" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success btn-sm float-right"><i class="fa fa-filter"></i> Filter</button> <br>
                                            <br>
                                            <a href="{{ route('preview') }}"class="btn btn-sm btn-info float-right"><i class="fas fa-print"></i> Preview</a>
                                    </form>
                                    <table id="table"
                                        class="table table-bordered table-responsive-md table-condensed">
                                        <thead>
                                            <tr>
                                                <th>No Pelanggan</th>
                                                <th>Nama</th>
                                                <th>Jalan</th>
                                                <th>Gang</th>
                                                <th>Nomor</th>
                                                <th>No Tambahan</th>
                                                <th>DA</th>
                                                <th>KD Tarif</th>
                                                <th>Verifikator</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                    <a href="{{ route('persetujuan')}}" class="btn btn-xs btn-success ">Persetujuan</a>
                                                    <a href="" class="btn btn-xs btn-success "><i class="fas fa-edit"></i>Edit</a>
                                                </td>
                                            </tr> --}}
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
