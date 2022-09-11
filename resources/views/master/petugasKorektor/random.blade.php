@extends('layout.app')
@section('title', 'Petugas Korektor')

@section('namaHal', 'Master')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('petugasKorektor') }}">Master Petugas</a></li>
        <li class="breadcrumb-item"><a href="{{ route('laporanpetugasKorektor') }}">Laporan</a></li>
        <li class="breadcrumb-item active">Random Penugasan</li>
        <li class="breadcrumb-item"><a href="{{ route('viewsisapetugasKorektor') }}">View Sisa Random Penugasan</a></li>
        <li class="breadcrumb-item"><a href="{{ route('viewptspetugasKorektor') }}">View Penugasan</a></li>
        <li class="breadcrumb-item"><a href="{{ route('monitoringpetugasKorektor') }}">Monitoring Petugas</a></li>
        <li class="breadcrumb-item"><a href="{{ route('koreksipetugasKorektor') }}">Koreksi Penugasan</a></li>
    </ol>
@endsection

@section('content')

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Random Penugasan</h3>

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
                                <label for="thbl" class="col-md-2 col-form-label">THBL</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="thbl" name="thbl" onkeyup="valueing()"  placeholder="/">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label for="tgl" class="col-md-2 col-form-label">Tgl.Penugasan</label>
                                <div class="col-md-3">
                                    <input type="date" class="form-control" id="tgl_penugasan" name="tgl_penugasan" onkeyup="valueing()">
                                </div>
                            </div>
                        </form>
                    </div>
                    <table id="table" class="table table-bordered table-responsive-md table-condensed">
                        <thead>
                            <tr>
                                <th width="20%">Filter</th>
                                <th width="20%">NIP </th>
                                <th width="20%">Nama</th>
                                <th width="40%">Userakses</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-info btn-sm mt-6  " id="simpan"> Clear Petugas</button> &nbsp;
                    <button type="submit" class="btn btn-info btn-sm mt-6  ">Simpan Petugas</button> &nbsp;
                    <div class="col-md-12">
                        <form class="form-horizontal">
                            <div class="form-group row mt-2">
                                <label for="jml_ptgs_korektor" class="col-form-label">Jmlh Petugas Korektor</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" id="jml_ptgs_korektor" name="jml_ptgs_korektor" onkeyup="valueing()">
                                </div>
                                <label for="jml_ptgs_anomali" class="col-form-label">Jmlh Petugas Anomali</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" id="jml_ptgs-anomali" name="jml_ptgs-anomali" onkeyup="valueing()">
                                </div>
                                <label for="rt_pelanggan_petugas" class="col-form-label">Rata2 Pelangan Petugas</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" id="rt_pelanggan_petugas" name="rt_pelanggan_petugas" onkeyup="valueing()">
                                </div>
                            </div>
                        </form>
                    </div>
                    <button type="submit" class="btn btn-info btn-sm mt-6  " id="simpan"> Proses Random</button> &nbsp;
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
