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
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="jmlhdokumen" class="col-md-3 col-form-label">Jumlah Dokumen</label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" id="jmlhdokumen" onkeyup="valueing()">
                                            </div>
                                            <div class="col-md-4 custom-file">
                                                <input type="file" class="custom-file-input" name="dokumen"
                                                    id="custom-file">
                                                <label class="custom-file-label" for="customeFile">Choose
                                                    File
                                                </label>
                                            </div>&nbsp;
                                            <button class="btn btn-info btn-mt-2" id="download" type="button" alt title="Download Format File Excel" href="{% static 'Data Item Master.csv' %}">
                                                <i class="fas fa-file-excel"></i>
                                            </button>
                                            <div class="form-group col-xs-12 col-lg-6">
                                                <a class="btn btn-primary" href="{% storage 'app/upload.xls' %}" download>
                                                    <i class="fas fa-file-excel"></i>
                                                </a>
                                            </div>
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

            //  "lengthChange": false,
            //   "autoWidth": false,
            //   "responsive": true,
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

        function valueing() {
            if (document.getElementById('kode').value === "" || document.getElementById('keterangan').value === "") {
                document.getElementById('batal').disabled = true
                document.getElementById('simpan').disabled = true
            } else {
                document.getElementById('batal').disabled = false
                document.getElementById('simpan').disabled = false
            }
        }
    </script>
@endpush
