@extends('layout.app')
@section('title', 'Petugas Korektor')

@section('namaHal', 'Master')
@section('breadcrumb')
@endsection

@section('content')
    <section class="content">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link " href="{{ route('petugasKorektor.index') }}">Master Petugas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('laporanpetugasKorektor') }}">Laporan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('randompetugasKorektor') }}">Random Penugasan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('viewptspetugasKorektor') }}">View Penugasan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('monitoringpetugasKorektor') }}">Monitoring Petugas</a>
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
                        <form class="form-horizontal" action="{{ route('monitoringpetugasKorektor') }}" method="POST">
                            @csrf
                            <div class="form-group row mt-2">
                                <label for="periode" class="col-md-2 col-form-label">Periode</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="periode" name="periode" placeholder="/" value="2016/10">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label for="zona" class="col-md-2 col-form-label">Zona</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="zona" name="zona" value="000">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label for="no_bundel" class="col-md-2 col-form-label">No Bundel</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="no_bundel" name="no_bundel" value="02">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label for="" class="col-md-2 col-form-label"></label>
                                <div class="col-md-7" id="chkBoxAll">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="checkbox" name="chkMonitoring[]" id="chkMonitoring1" value="and potensial = '0'">
                                            <label class="form-check-label">Rumah Tangga</label> &nbsp;<br>
                                            <input type="checkbox" name="chkMonitoring[]" id="chkMonitoring3" value="and potensial = '2'">
                                            <label class="form-check-label">Potensial Khusus/Luar Kota</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="checkbox" name="chkMonitoring[]" id="chkMonitoring2" value="and potensial = '1'">
                                            <label class="form-check-label">Potensial</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-2 col-form-label"></label>
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="checkbox" name="chkPenugasan" id="chkPenugasan">
                                            <label class="form-check-label">Data Blm Penugasan</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label for="" class="col-md-2 col-form-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-info btn-sm mt-6  " id="simpan"><i class=""></i> Tampil</button> &nbsp;
                                </div>
                            </div>
                        </form>
                    </div>
                    @if ($tView == "1")
                        <div class="col-md">
                            <table id="example2" class="table table-bordered table-responsive-md table-condensed">
                                <thead>
                                    <tr>
                                        <th > NO PELANGGAN </th>
                                        <th > PREVPAKAI </th>
                                        <th > CURRPAKAI </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tampil as $row)
                                    <tr>
                                        <td>{{ $row->no_plg }}</td>
                                        <td>{{ $row->prevpakai }}</td>
                                        <td>{{ $row->currpakai }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                    <div class="col-md">
                        <table id="example2" class="table table-bordered table-responsive-md table-condensed">
                            <thead>
                                <tr>
                                    <th > THBL </th>
                                    <th > ZONA </th>
                                    <th > NO BUNDEL </th>
                                    <th > TGL CATAT </th>
                                    <th > TGL UPLOAD </th>
                                    <th > TGL RANDOM </th>
                                    <th > TGL ASSIGN </th>
                                    <th > USER AKSES </th>
                                    <th > POTENSIAL </th>
                                    <th > NAMA </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tampil as $row)
                                <tr>
                                    <td>{{ $row->thbl }}</td>
                                    <td>{{ $row->zona }}</td>
                                    <td>{{ $row->no_bundel }}</td>
                                    <td>{{ $row->tgl_catat }}</td>
                                    <td>{{ $row->tgl_upload }}</td>
                                    <td>{{ $row->tgl_random }}</td>
                                    <td>{{ $row->tglassign }}</td>
                                    <td>{{ $row->userakses }}</td>
                                    <td>{{ $row->potensial }}</td>
                                    <td>{{ $row->nama }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endif
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

        $(document).on('click', '#chkPenugasan', function(){
            if($(this).is(':checked')){
                $('#chkMonitoring1').attr("disabled", true);
                $('#chkMonitoring2').attr("disabled", true);
                $('#chkMonitoring3').attr("disabled", true);
            }else{
                $('#chkMonitoring1').removeAttr("disabled");
                $('#chkMonitoring2').removeAttr("disabled");
                $('#chkMonitoring3').removeAttr("disabled");
            }
        })

        function clear() {
            document.getElementById('noPelanggan').value = ''
        }
        document.getElementById("clear").addEventListener("click", clear);
    </script>
@endpush
