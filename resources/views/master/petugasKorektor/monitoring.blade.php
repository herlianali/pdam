@extends('layout.app')
@section('title', 'Petugas Korektor')

@section('namaHal', 'Master')
@section('breadcrumb')
@endsection

@section('content')
    <section class="content">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link " href="{{ route('petugasKorektor') }}">Master Petugas</a>
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
                        <form class="form-horizontal">
                            <div class="form-group row mt-2">
                                <label for="periode" class="col-md-2 col-form-label">Periode</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="periode" name="periode"
                                        onkeyup="valueing()"placeholder="/" value="2016/10">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label for="zona" class="col-md-2 col-form-label">Zona</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="zona" name="zona"
                                        onkeyup="valueing()" value="000">
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
                        </form>
                    </div>
                    <div class="col-md-12">
                        <table id="example2" class="table table-bordered table-responsive-md table-condensed">
                            <thead>
                                <tr>
                                    <th >THBL </th>
                                    <th >ZONA</th>
                                    <th >NO BUNDEL</th>
                                    <th >TGL CATAT</th>
                                    <th >TGL UPLOAD</th>
                                    <th >TGL RANDOM</th>
                                    <th >TGL ASSIGN</th>
                                    <th >USER AKSES</th>
                                    <th >POTENSIAL</th>
                                    <th >NAMA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>201610</td>
                                    <td>000</td>
                                    <td>02</td>
                                    <td>14/09/2016</td>
                                    <td>14/09/2016</td>
                                    <td>14/09/2016 2:50:22 PM</td>
                                    <td>14/09/2016</td>
                                    <td>10701467</td>
                                    <td>02</td>
                                    <td>Bhirowo Agung Subroto</td>
                                </tr>
                                <tr>
                                    <td>201610</td>
                                    <td>000</td>
                                    <td>02</td>
                                    <td>14/09/2016</td>
                                    <td>14/09/2016</td>
                                    <td>14/09/2016 2:50:22 PM</td>
                                    <td>14/09/2016</td>
                                    <td>19500849</td>
                                    <td>01</td>
                                    <td>Sururi</td>
                                </tr>
                                <tr>
                                    <td>201610</td>
                                    <td>000</td>
                                    <td>03</td>
                                    <td>14/09/2016</td>
                                    <td>14/09/2016</td>
                                    <td>14/09/2016 2:50:22 PM</td>
                                    <td>14/09/2016</td>
                                    <td>10601407</td>
                                    <td>02</td>
                                    <td>Bambang Budiono</td>
                                </tr>
                                <tr>
                                    <td>201610</td>
                                    <td>000</td>
                                    <td>03</td>
                                    <td>14/09/2016</td>
                                    <td>14/09/2016</td>
                                    <td>14/09/2016 2:50:22 PM</td>
                                    <td>14/09/2016</td>
                                    <td>10701467</td>
                                    <td>01</td>
                                    <td>Bhirowo Agung Subroto</td>
                                </tr>
                                <tr>
                                    <td>201610</td>
                                    <td>000</td>
                                    <td>04</td>
                                    <td>14/09/2016</td>
                                    <td>14/09/2016</td>
                                    <td>14/09/2016 2:50:22 PM</td>
                                    <td>14/09/2016</td>
                                    <td>10601407</td>
                                    <td>02</td>
                                    <td>Bambang Budiono</td>
                                </tr>
                                <tr>
                                    <td>201610</td>
                                    <td>000</td>
                                    <td>05</td>
                                    <td>14/09/2016</td>
                                    <td>14/09/2016</td>
                                    <td>14/09/2016 2:50:22 PM</td>
                                    <td>14/09/2016</td>
                                    <td>10701467</td>
                                    <td>01</td>
                                    <td>Bhirowo Agung Subroto</td>
                                </tr>
                                <tr>
                                    <td>201610</td>
                                    <td>000</td>
                                    <td>05</td>
                                    <td>14/09/2016</td>
                                    <td>14/09/2016</td>
                                    <td>14/09/2016 2:50:22 PM</td>
                                    <td>14/09/2016</td>
                                    <td>19500849</td>
                                    <td>02</td>
                                    <td>Sururi</td>
                                </tr>
                                <tr>
                                    <td>201610</td>
                                    <td>000</td>
                                    <td>06</td>
                                    <td>14/09/2016</td>
                                    <td>14/09/2016</td>
                                    <td>14/09/2016 2:50:22 PM</td>
                                    <td>14/09/2016</td>
                                    <td>01812</td>
                                    <td>01</td>
                                    <td>Noval Yudha Baruna</td>
                                </tr>
                                <tr>
                                    <td>201610</td>
                                    <td>000</td>
                                    <td>06</td>
                                    <td>14/09/2016</td>
                                    <td>14/09/2016</td>
                                    <td>14/09/2016 2:50:22 PM</td>
                                    <td>14/09/2016</td>
                                    <td>10601411</td>
                                    <td>02</td>
                                    <td>Dadang Ariyanto</td>
                                </tr>
                                <tr>
                                    <td>201610</td>
                                    <td>000</td>
                                    <td>07</td>
                                    <td>14/09/2016</td>
                                    <td>14/09/2016</td>
                                    <td>14/09/2016 2:50:22 PM</td>
                                    <td>14/09/2016</td>
                                    <td>10601426</td>
                                    <td>01</td>
                                    <td>Khoirul Anwar</td>
                                </tr>
                                <tr>
                                    <td>201610</td>
                                    <td>000</td>
                                    <td>07</td>
                                    <td>14/09/2016</td>
                                    <td>14/09/2016</td>
                                    <td>14/09/2016 2:50:22 PM</td>
                                    <td>14/09/2016</td>
                                    <td>10601411</td>
                                    <td>02</td>
                                    <td>Dadang Ariyanto</td>
                                </tr>
                                <tr>
                                    <td>201610</td>
                                    <td>000</td>
                                    <td>08</td>
                                    <td>14/09/2016</td>
                                    <td>14/09/2016</td>
                                    <td>14/09/2016 2:50:22 PM</td>
                                    <td>14/09/2016</td>
                                    <td>01704</td>
                                    <td>01</td>
                                    <td>Agus Sofyan</td>
                                </tr>
                                <tr>
                                    <td>201610</td>
                                    <td>000</td>
                                    <td>08</td>
                                    <td>14/09/2016</td>
                                    <td>14/09/2016</td>
                                    <td>14/09/2016 2:50:22 PM</td>
                                    <td>14/09/2016</td>
                                    <td>10701467</td>
                                    <td>02</td>
                                    <td>Bhirowo Agung Subroto</td>
                                </tr>
                                <tr>
                                    <td>201610</td>
                                    <td>000</td>
                                    <td>09</td>
                                    <td>14/09/2016</td>
                                    <td>14/09/2016</td>
                                    <td>14/09/2016 2:50:22 PM</td>
                                    <td>14/09/2016</td>
                                    <td>19500849</td>
                                    <td>01</td>
                                    <td>Sururi</td>
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
