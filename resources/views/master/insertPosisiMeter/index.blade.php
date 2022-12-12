@extends('layout.app')
@section('title', 'Insert Posisi Meter')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Master')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Insert Posisi Meter</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Import Data</h3>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-9">
                                    <form method="POST" action="{{ route('insertPosisiMeter.post') }}" class="form-horizontal" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="jmlhdokumen" class="col-md-3 col-form-label">Jumlah Dokumen</label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" name="jmlhdokumen" id="jmlhdokumen">
                                            </div>
                                            <div class="col-md-4 custom-file">
                                                <input type="file" class="custom-file-input" name="dokumen" id="dokumen">
                                                <label class="custom-file-label" for="customeFile">
                                                    Choose File
                                                </label>
                                            </div>&nbsp;
                                            <button class="btn btn-success" type="submit">Kirim</button>&nbsp;
                                            <a class="btn btn-info btn-mt-2" id="download" title="Download Format File Excel" href="{{ asset("format_data.xlsx") }}">
                                                <i class="fas fa-file-excel"></i>
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <table id="example" class="table table-bordered table-responsive-md table-condensed" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th width="10%">No</th>
                                        <th>No Pelanggan</th>
                                        <th>Posisi Meter</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>3140319</td>
                                        <td>12</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>3140320</td>
                                        <td>50</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>3143021</td>
                                        <td>20</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>3143022</td>
                                        <td>200</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>3043023</td>
                                        <td>600</td>
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
    <script>
        $(function() {
            $(function() {
                $('#example').DataTable({
                "oLanguage": {
                    "sSearch": "Search : "
                },
                "pageLength": 5
                }).buttons().container().appendTo('#table_wrapper .col-md-6:eq(0)');
                $('#example2').DataTable({
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
        });


    </script>
@endpush
