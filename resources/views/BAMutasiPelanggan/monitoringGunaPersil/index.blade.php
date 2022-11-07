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
        <li class="breadcrumb-item active">Monitoring Guna Persil</li>
    </ol>
@endsection


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Monitoring Guna Persil</h3>
                            <a href="{{ route('preview') }}" class="btn btn-xs btn-info float-right"><i class="fas fa-print"></i> Cetak</a>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <form class="form-horizontal" action="" method="post">
                                        @csrf
                                        <div class="form-group row ">
                                            <label for="thbl" class="col-md-2 col-form-label">THBL</label>
                                            <div class="col-md-4">
                                                <input type="date" class="form-control" name="thbl" id="thbl"onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="periode" class="col-md-2 col-form-label">Periode</label>
                                            <div class="col-md-4">
                                                <select class="form-control" id="periode" onkeyup="valueing()">
                                                    <option value=""> </option>
                                                    <option value=""> </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="" class="col-md-2 col-form-label"></label>
                                            <div class="col-md-4">
                                                <div class="form-check">
                                                    <div class="row">
                                                        <div class="col-ml-1">
                                                            <input type="radio" name="stansesuai_persilsesuai" id="stansesuai_persilsesuai" value="stansesuai_persilsesuai">
                                                            <label for="">STAN Sesuai GUNA PERSIL Sesuai</label>
                                                        </div>
                                                        <div class="col-ml-1">
                                                            <input type="radio" name="stansesuai_persiltidak" id="stansesuai_persiltidak" value="stansesuai_persiltidak">
                                                            <label for="">STAN Sesuai GUNA PERSIL Tidak Sesuai</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-sm float-right"> <i class="fa fa-filter"></i> Filter</button>
                                        <br>
                                        <br>
                                    </form>
                                </div>
                            </div>
                            <table id="table" class="table table-bordered table-responsive-md table-condensed">
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
                                    </tr>
                                </thead>
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
