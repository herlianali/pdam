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
        <li class="breadcrumb-item"><a href="#">Riwayat Pemakaian</a></li>
        <li class="breadcrumb-item active">Info Pelanggaran</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Info Pelanggaran</h3>
                            <a href="{{ route('pelanggaran') }}" class="btn btn-xs btn-warning float-right"><i
                                    class="fas fa-print"></i> Cetak</a>
                        </div>
                        <div class="card-body">
                            <div class="row mb-5">
                                <div class="col-md-1"></div>
                                <div class="col-md-12">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="nama_pengadu" class="col-md-2 col-form-label">No Pelanggan</label>
                                            <div class="col-md-5">
                                                <input type="text" class="form-control" id="nama_pengadu"
                                                    name="nama_pengadu" onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="alamat_pengadu" class="col-md-2 col-form-label"> Nama Pelanggan
                                            </label>
                                            <div class="col-md-5">
                                                <input type="text" class="form-control" id="alamat_pengadu"
                                                    name="alamat_pengadu" onkeyup="valueing()">
                                            </div>
                                        </div>
                                    </form>


                                    <p>Data Pelanggan</p>
                                    <table id="table" class="table table-bordered table-responsive-md table-condensed">
                                        <thead>
                                            <tr>
                                                <th width="5%">No </th>
                                                <th width="10%">No Pelanggan</th>
                                                <th width="15%">Tgl Entri</th>
                                                <th width="15%">Keterangan</th>
                                                <th width="10%">Pemakaian</th>
                                                <th width="10%">Total Bayar</th>
                                                <th width="10%">Denda</th>


                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                    <br>
                                    <p>Data Pelanggan Tutupan Sementara</p>
                                    <table id="table1" class="table table-bordered table-responsive-md table-condensed">
                                        <thead>
                                            <tr>
                                                <th>No </th>
                                                <th>No BonTS</th>
                                                <th>Tgl BonTS</th>
                                                <th>Tgl Realisasi TS</th>
                                                <th>Stand Angkat Meter</th>
                                                <th>Jenis Pelanggaran</th>
                                                <th>Keterangan</th>
                                                <th>Rupiah Tagihan</th>
                                                <th>Rupiah Denda</th>



                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                    <br>
                                    <p>Data Pelanggan Tutupan Dinas</p>
                                    <table id="table2" class="table table-bordered table-responsive-md table-condensed">
                                        <thead>
                                            <tr>
                                                <th>No </th>
                                                <th>No BATD</th>
                                                <th>Tgl BATD</th>
                                                <th>Tgl Realisasi BATD</th>
                                                <th>Stand Angkat Meter</th>
                                                <th>Jenis Pelanggaran</th>
                                                <th>Keterangan</th>
                                                <th>Catatan Pelanggaran</th>




                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
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

                // "lengthChange": false,
                 "autoWidth": true,
                 "paging" :true,
                //   "responsive": true,
                "scrollX": true,
                "oLanguage": {
                    "sSearch": "Keterangan : "
                },
                //  "pageLength": 3
            }).buttons().container().appendTo('#table_wrapper .col-md-1:eq(0)');
            $('#table1').DataTable({
                "paging": true,
                //  "lengthChange": false,
                "scrollX": true,
                "searching": false,
                "ordering": true,
                "info": true,
                //  "autoWidth": false,
                // "responsive": true,
                // "pageLength": 3
            }).buttons().container().appendTo('#table_wrapper .col-md-1:eq(0)');
            $('#table2').DataTable({
                "paging": true,
                //  "lengthChange": false,
                "scrollX": true,
                "searching": false,
                "ordering": true,
                "info": true,
                //  "autoWidth": false,
                // "responsive": true,
                // "pageLength": 3

            });
            });
      
    </script>
@endpush
