@extends('layout.app')
@section('title', 'Petugas Korektor')

@section('namaHal', 'Master')
@section('breadcrumb')

@endsection

@section('content')

    <section class="content">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('petugasKorektor.index') }}">Master Petugas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('laporanpetugasKorektor') }}">Laporan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('randompetugasKorektor') }}">Random Penugasan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('viewptspetugasKorektor') }}">View Penugasan</a>
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
                <div class="container">
                    <div class="row mb-4">
                        <div class="col-md-12 mt-2 mb-4">
                            <form class="form-horizontal row">
                                <div class="form-group col-md-6">
                                    <label for="thbl" class="col-form-label">THBL</label>
                                    <input type="month" class="form-control" id="thbl" name="thbl">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="date" class="col-form-label">Tgl.Penugasan</label>
                                    <input type="date" class="form-control" id="date" name="date" value="{{ $date }}">
                                </div>
                            </form>
                        </div>
                        <div class="col-md">
                            <table id="example2" class="table table-bordered table-responsive-md table-condensed">
                                <thead>
                                    <tr>
                                        <th width="20%">NIP </th>
                                        <th width="20%">Nama</th>
                                        <th width="40%">Userakses</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($random as $row)
                                        <tr>
                                            <td><input type="checkbox" name="nip[]"> {{ $row->nip }}</td>
                                            <td>{{ $row->nama }}</td>
                                            <td>{{ $row->userakses }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="" class="checkbox-inline mt-2">
                                        <input type="checkbox" name="potensial"> Potensial</label>
                                </div>
                                <div class="col-md-6 text-right">
                                    <button type="button" class="btn btn-danger font-weight-bold"> <i class="fas fa-sync-alt fa-sm"></i> Bersihkan </button>
                                    <button type="button" class="btn btn-info ml-2 font-weight-bold" id="simpan"> <i class="fas fa-save"></i> Simpan </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <form class="form-horizontal row">
                                <div class="form-group col-md-4">
                                    <label for="jml_ptgs_korektor" class="col-form-label">Jumlah Petugas Korektor</label>
                                    <input type="text" class="form-control" id="jml_ptgs_korektor" name="jml_ptgs_korektor">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="jml_ptgs_anomali" class="col-form-label">Jumlah Petugas Anomali</label>
                                    <input type="text" class="form-control" id="jml_ptgs-anomali" name="jml_ptgs-anomali">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="rt_pelanggan_petugas" class="col-form-label">Rata2 Pelangan Petugas</label>
                                    <input type="text" class="form-control" id="rt_pelanggan_petugas" name="rt_pelanggan_petugas" >
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <button type="submit" class="btn btn-success btn-lg mt-6 btn-block" id="simpan"> Proses Random</button> &nbsp;
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
            $('#example2').DataTable({
                "paging": false,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": false,
                "autoWidth": false,
                "responsive": true,
                "pageLength": 5
            });
        });

        function clear() {
            document.getElementById('noPelanggan').value = ''
        }
        document.getElementById("clear").addEventListener("click", clear);
    </script>
@endpush
