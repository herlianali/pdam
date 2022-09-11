@extends('layout.app')
@section('title', 'Petugas Korektor')

@section('namaHal', 'Master')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('petugasKorektor') }}">Master Petugas</a></li>
        <li class="breadcrumb-item"><a href="{{ route('laporanpetugasKorektor') }}">Laporan</a></li>
        <li class="breadcrumb-item"><a href="{{ route('randompetugasKorektor') }}">Random Penugasan</a></li>
        <li class="breadcrumb-item"><a href="{{ route('viewsisapetugasKorektor') }}">View Sisa Random Penugasan</a></li>
        <li class="breadcrumb-item"><a href="{{ route('viewptspetugasKorektor') }}">View Penugasan</a></li>
        <li class="breadcrumb-item active">Monitoring Petugas</li>
        <li class="breadcrumb-item"><a href="{{ route('koreksipetugasKorektor') }}">Koreksi Penugasan</a></li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Monitoring Petugas</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-md-1"></div>
                    <div class="col-md-12">
                        <form class="form-horizontal">
                            <div class="form-group row mt-2">
                                <label for="periode" class="col-md-2 col-form-label">Periode</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="periode" name="periode" onkeyup="valueing()"placeholder="/">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label for="zona" class="col-md-2 col-form-label">Zona</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="zona" name="zona" onkeyup="valueing()">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label for="no_bundel" class="col-md-2 col-form-label">No Bundel</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="no_bundel" name="no_bundel" onkeyup="valueing()">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label for="" class="col-md-2 col-form-label"></label>
                                <div class="col-md-7">
                                    <input type="checkbox">
                                    <label class="form-check-label">Rumah Tangga</label> &nbsp;
                                    <input type="checkbox">
                                    <label class="form-check-label">Potensial</label> &nbsp; <br>
                                    <input type="checkbox">
                                    <label class="form-check-label">Potensial Khusus/Luar Kota</label>
                                    &nbsp;
                                    <input type="checkbox">
                                    <label class="form-check-label">Data Blm Penugasan</label>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label for="" class="col-md-2 col-form-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-info btn-sm mt-6  " id="simpan"><i
                                            class=""></i> Tampil</button> &nbsp;
                                </div>
                            </div>
                    </div>
                    </form>
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
            // if(document.getElementById('kode').value==="" || document.getElementById('keterangan').value==="") {
            //     document.getElementById('batal').disabled = true
            //     document.getElementById('simpan').disabled = true
            // }else{
            //     document.getElementById('batal').disabled = false
            //     document.getElementById('simpan').disabled = false
            // }
        }

        function clear() {
            document.getElementById('noPelanggan').value = ''
        }
        document.getElementById("clear").addEventListener("click", clear);
    </script>
@endpush
