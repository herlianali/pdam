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
        <li class="breadcrumb-item active"> Laporan Rekapitulasi Naik Turun</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Laporan Rekapitulasi Naik Turun</h3>
                            <a href="{{ route('cetak') }}"class="btn btn-xs btn-success float-right"><i class="fas fa-print"></i> Cetak</a>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-8">
                                    <form action="{{ route('laporanRekapitulasiNaikTurun') }}" class="form-horizontal" method="POST">
                                        @csrf
                                        <div class="form-group row mt-2 ">
                                            <label for="periode" class="col-md-2 col-form-label">Periode
                                            </label>
                                            <div class="col-md-3">
                                                <input type="date" class="form-control" name="periode"id="periode"onkeyup="valueing()">
                                            </div>
                                            <label for="sd" class="col-form-label">S.D </label>
                                            <div class="col-md-3">
                                                <input type="date" class="form-control" name="periode1" id="periode1"onkeyup="valueing()">
                                            </div>
                                           
                                        </div>
                                        
                                        <div class="form-group row">
                                        <div class="col-md-2">
                                            <label class="col-form-label col-form-label-sm"></label>
                                        </div>
                                        <div class="card col-md-6">
                                            <div class="card-body">
                                                <div class="col-md-1">
                                                <label class="col-form-label col-form-label-sm" for="nama">Dasar</label>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" id="penerbitan" name="dasar" value="penerbitan">
                                                        <label class="form-check-label">Penerbitan</label>
                                                    </div>
                                                    &nbsp;
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" id="pengesahan" name="dasar" value="pengesahan">
                                                        <label class="form-check-label">Pengesahan</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                        <div class="form-group row">
                                            <label for="" class="col-md-2 col-form-label"></label>
                                            <div class="col-md-2">
                                                <div class="form-group row">
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" id="naik" name="level" value="N">
                                                        <label class="form-check-label">Naik</label>
                                                    </div>
                                                    &nbsp;
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" id="turun" name="level" value="R">
                                                        <label class="form-check-label">Turun</label>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="form-group row mt-2 ">
                                            <label for="button" class="col-md-6 col-form-label"></label>
                                            <div class="col-md-5">
                                                <button class="btn btn-success btn-sm" ></i>Filter</button>
                                                <button type="reset" class="btn btn-danger btn-sm"><i class="fa fa-undo"></i> Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                            
                            <table id="table" class="table table-bordered table-responsive-md table-condensed">
                                <thead>
                                    <tr>
                                        <th width="20%">Kode Tarif L </th>
                                        <th width="20%">Kode Tarif B</th>
                                        <th width="30%">Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach ($data as $row)
                                        <tr>
                                            <td>{{ $row->kd_tarif_l }}</td>
                                            <td>{{ $row->kd_tarif_b }}</td>
                                            <td>{{ $row->jumlah }}</td>
                                        </tr>
                                        @endforeach
                                </tbody>
                            </table>
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
                    "sSearch": "Kode Tarif Lama/Baru : "
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