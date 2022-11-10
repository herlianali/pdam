@extends('layout.app')
@section('title', 'BA Mutasi Pelanggan')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Master')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">BA Mutasi Pelanggan</a></li>
        <li class="breadcrumb-item active">Histori Mutasi</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Histori Mutasi</h3>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-8">
                                    <form class="form-horizontal" action="" method="post" id="formHistori">
                                        @csrf
                                        <div class="form-group row mt-2 ">
                                            <label for="no_pelanggan" class="col-md-3 col-form-label">No Pelanggan</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="no_plg" name="no_plg"
                                                onkeydown="javascript: return ['Backspace','Delete','ArrowLeft','ArrowRight', 'Enter'].includes(event.code) ? true : !isNaN(Number(event.key)) && event.code!=='Space'">
                                            </div>
                                            <button type="reset" class="btn btn-danger btn-mt-2" id="clear">
                                                <i class="fa fa-trash"></i>
                                                Reset
                                            </button>
                                        </div>
                                        <div class="form-group row mt-2 ">
                                            <label for="nama" class="col-md-3 col-form-label">Nama</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="nama" id="nama" readonly value="{{ count($data) ? $data['formHistory']['nama'] : ''}}" >
                                            </div>
                                            
                                        </div>

                                        <div class="form-group row mt-2 ">
                                            <label for="alamat" class="col-md-3 col-form-label">Alamat </label>
                                            <div class="col-md-6">
                                                <textarea class="form-control" id="alamat" name="alamat" readonly>{{ count($data) ? $data['formHistory']['alamat'] : ''}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2 ">
                                            <label for="tarif" class="col-md-3 col-form-label">Tarif</label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" name="kd_tarif" id="kd_tarif" readonly value="{{ count($data) ? $data['formHistory']['tarif'] : ''}}">
                                            </div>
                                            <label for="jns_pelanggan" class="col-form-label">Jenis Pelanggan</label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" name="jns_pelanggan" id="jns_pelanggan" readonly value="{{ count($data) ? $data['formHistory']['jns_pelanggan'] : ''}}" >
                                            </div>
                                            <label for="subzona" class="col-form-label">Subzona</label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" name="zona" id="zona" readonly value="{{ count($data) ? $data['formHistory']['zona'] : ''}}">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <table class="table table-bordered table-responsive">
                                <thead>
                                    <tr>
                                        <th>No_Bamutasi</th>
                                        <th width="50%">Tgl_Bamutasi</th>
                                        <th>Jns_Mutasi</th>
                                        <th>No_BonC</th>
                                        <th>No_Plg</th>
                                        <th>Guna_Persil</th>
                                        <th>Zona</th>
                                        <th>Ukuran_Meter</th>
                                        <th>Retribusi</th>
                                        <th>Nama</th>
                                        <th>Jalan</th>
                                        <th>Gang</th>
                                        <th>Nomor</th>
                                        <th>No_Tambahan</th>
                                        <th>DA</th>
                                        <th>No_PA</th>
                                        <th>Jns_Pel</th>
                                        <th>KD_Retribusi</th>
                                        <th>No_Bundel</th>
                                        <th>TGL_KABAG</th>
                                        <th>TGL_KIRIMREKENING</th>
                                        <th>TGL_PEREMAJAAN</th>
                                        <th>BLNTERBIT</th>
                                        <th>MUTASI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($data) > 0)
                                        @foreach ($data['tablehistory'] as $item)
                                            <tr>
                                                <td>{{$item->no_bamutasi}}</td>
                                                <td width="50%">{{$item->tgl_bamutasi}}</td>
                                                <td>{{$item->jns_mutasi}}</td>
                                                <td>{{$item->no_bonc}}</td>
                                                <td>{{$item->no_plg}}</td>
                                                <td>{{$item->gunapersil}}</td>
                                                <td>{{$item->zona}}</td>
                                                <td>{{$item->ukuranmtr}}</td>
                                                <td>{{$item->retribusi}}</td>
                                                <td>{{$item->nama}}</td>
                                                <td>{{$item->jalan}}</td>
                                                <td>{{$item->gang}}</td>
                                                <td>{{$item->nomor}}</td>
                                                <td>{{$item->notamb}}</td>
                                                <td>{{$item->da}}</td>
                                                <td>{{$item->no_pa}}</td>
                                                <td>{{$item->jns_pel}}</td>
                                                <td>{{$item->kd_retribusi}}</td>
                                                <td>{{$item->no_bundel}}</td>
                                                <td>{{$item->tgl_kabag}}</td>
                                                <td>{{$item->tgl_kirimrekening}}</td>
                                                <td>{{$item->tgl_peremajaan}}</td>
                                                <td>{{$item->blnterbit}}</td>
                                                <td>{{$item->mutasi}}</td>
                                            </tr>
                                        @endforeach
                                    @endif
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
                "scrollX": true,
                "oLanguage": {
                    "sSearch": "No Pelanggan : "
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

   
      
        $('body').keypress(function(e){
        if (e.keyCode == 13)
        {
            $('#formHistori').submit();
        }
        });

    </script>
@endpush
