@extends('layout.app')
@section('title', 'Petugas Korektor')

@section('namaHal', 'Master')
@section('breadcrumb')

@endsection

@section('content')

    <section class="content">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('petugasKorektor') }}">Master Petugas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('laporanpetugasKorektor') }}">Laporan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('randompetugasKorektor') }}">Random Penugasan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('viewptspetugasKorektor') }}">View Penugasan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('monitoringpetugasKorektor') }}">Monitoring Petugas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('koreksipetugasKorektor') }}">Koreksi Penugasan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('viewsisapetugasKorektor') }}">View Sisa Random Penugasan</a>
            </li>
        </ul>
        <div class="card">

            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-md-1"></div>
                    <div class="col-md-12">
                        <form class="form-horizontal">
                            <div class="form-group row mt-2">
                                <label for="periode" class="col-md-2 col-form-label">Periode</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="periode" name="periode"
                                        onkeyup="valueing()" placeholder="/" value="2016/10">
                                </div>
                                <label for="date" class="col-md-1 col-form-label">Tanggal</label>
                                <div class="col-md-3">
                                    <input type="date" class="form-control" id="date" name="date"
                                        onkeyup="valueing()" value="{{ $date }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="zona" class="col-md-2 col-form-label">Zona</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="zona" name="zona"
                                        onkeyup="valueing()" value="000">
                                </div>
                                <label for="nip" class="col-md-1 col-form-label">NIP</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="nip" name="nip"
                                        onkeyup="valueing()">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label for="no_bundel" class="col-md-2 col-form-label">No Bundel</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="no_bundel" name="no_bundel"
                                        onkeyup="valueing()" value="02">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label for="" class="col-md-2 col-form-label"></label>
                                <div class="col-md-3">
                                    <input type="checkbox">
                                    <label class="form-check-label">Potensial</label>
                                    <br>
                                    <input type="checkbox">
                                    <label class="form-check-label">Data Sudah Random Belum Petugas</label>
                                    <br>
                                    <input type="checkbox">
                                    <label class="form-check-label">Data Belum Penugasan</label>
                                    <br>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label for="nomor" class="col-md-2 col-form-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-info btn-sm mt-6  " id="simpan"><i
                                            class="fas fa-search"></i> Cari</button> &nbsp;
                                </div>
                        </form>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <table id="example2" class="table table-bordered table-responsive-md table-condensed">
                                <thead>
                                    <tr>
                                        <th >ZONA</th>
                                        <th >NO BUNDEL</th>
                                        <th >JMLPLG </th>
                                        <th >TGL ASSIGN</th>
                                        <th >NAMA</th>
                                        <th >USERAKSES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>000</td>
                                        <td>02</td>
                                        <td>45</td>
                                        <td>19/09/2016</td>
                                        <td>Sururi</td>
                                        <td>19500849</td>
                                    </tr>
                                </tbody>
                            </table>
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
