@extends('layout.app')
@section('title', 'Petugas Korektor')

@section('namaHal', 'Master')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item active">Master Petugas</li>
        <li class="breadcrumb-item"><a href="{{ route('laporanpetugasKorektor') }}">Laporan</a></li>
        <li class="breadcrumb-item"><a href="{{ route('randompetugasKorektor') }}">Random Penugasan</a></li>
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
                <h3 class="card-title">Master Petugas</h3>

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
                                <label for="nip" class="col-md-2 col-form-label">NIP</label>
                                <div class="col-md-4">
                                    <select class="form-control" id="nip" name="nip" onkeyup="valueing()">

                                        <option value=""> </option>
                                        <option value=""> </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label for="nama" class="col-md-2 col-form-label">Nama</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="nama" id="nama" onkeyup="valueing()">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label for="jabatan" class="col-md-2 col-form-label">Jabatan</label>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="konektor" name="jabatan">
                                        <label class="form-check-label">Konektor</label>
                                        <br>
                                        <input type="radio" class="form-check-input" id="senior_staf " name="jabatan">
                                        <label class="form-check-label">Senior Staf</label>
                                        <br>
                                        <input type="radio" class="form-check-input" id="supervisor " name="jabatan">
                                        <label class="form-check-label">Supervisor</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label for="status" class="col-md-2 col-form-label">Status</label>
                                <div class="col-md-4">
                                    <input type="checkbox">
                                    <label for="aktif" class="col-md-2 col-form-label">Aktif</label>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label for="" class="col-md-2 col-form-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-info btn-sm mt-6  " id="simpan"><i
                                            class="far fa-save"></i> Simpan</button> &nbsp;
                                    <button type="submit" class="btn btn-info btn-sm mt-6  " id="simpan"><i
                                            class="far fa-reload"></i> Batal</button>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
                <table id="table" class="table table-bordered table-responsive-md table-condensed">
                    <thead>
                        <tr>
                            <th width="10%">NIP </th>
                            <th width="20%">Nama</th>
                            <th width="10%">Aktif</th>
                            <th width="20%">Jabatan</th>
                            <th width="20%">Recid</th>
                            <th width="20%">UserAkses</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
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
