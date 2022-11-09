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
                                    <form class="form-horizontal" action="" method="post">
                                        @csrf
                                        <div class="form-group row mt-2 ">
                                            <label for="no_pelanggan" class="col-md-3 col-form-label">No Pelanggan</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="no_plg" name="no_plg"
                                                onkeydown="javascript: return ['Backspace','Delete','ArrowLeft','ArrowRight', 'Enter'].includes(event.code) ? true : !isNaN(Number(event.key)) && event.code!=='Space'">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2 ">
                                            <label for="nama" class="col-md-3 col-form-label">Nama</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="nama" id="nama"  >
                                            </div>
                                        </div>

                                        <div class="form-group row mt-2 ">
                                            <label for="alamat" class="col-md-3 col-form-label">Alamat </label>
                                            <div class="col-md-6">
                                                <textarea class="form-control" id="alamat" name="alamat" readonly value=""></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2 ">
                                            <label for="tarif" class="col-md-3 col-form-label">Tarif</label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" name="kd_tarif" id="kd_tarif" readonly value="">
                                            </div>
                                            <label for="jns_pelanggan" class="col-form-label">Jenis Pelanggan</label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" name="jns_pelanggan" id="jns_pelanggan" readonly value="" >
                                            </div>
                                            <label for="subzona" class="col-form-label">Subzona</label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" name="zona" id="zona" readonly value="">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <table class="table table-bordered table-responsive">
                                <thead>
                                    <tr>
                                        <th>No_Bamutasi</th>
                                        <th>Tgl_Bamutasi</th>
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
                                    <tr>
                                        <td>No Bamutasi</td>
                                        <td>Tgl Bamutasi</td>
                                        <td>Jns Mutasi</td>
                                        <td>No BonC</td>
                                        <td>No_Plg</td>
                                        <td>Guna Persil</td>
                                        <td>Zona</td>
                                        <td>Ukuran Meter</td>
                                        <td>Retribusi</td>
                                        <td>Nama</td>
                                        <td>Jalan</td>
                                        <td>Gang</td>
                                        <td>Nomor</td>
                                        <td>No Tambahan</td>
                                        <td>DA</td>
                                        <td>No PA</td>
                                        <td>Jns Plg</td>
                                        <td>KD Retribusi</td>
                                        <td>No Bundel</td>
                                        <td>TGL_KABAG</td>
                                        <td>TGL_KIRIMREKENING</td>
                                        <td>TGL_PEREMAJAAN</td>
                                        <td>BLNTERBIT</td>
                                        <td>MUTASI</td>
                                    </tr>

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

        $('#no_plg').keypress(function(e) {
            var key = e.which
            let no_plg = $('#no_plg').val();
            if (key == 13) {
                $.ajax({
                    type: "GET",
                    url: `{{ url('mutasipelanggan/historiMutasi') }}/`+no_plg,
                    data: {
                        id: no_plg,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        // console.log(response);
                        $('#nama').val(response.nama)
                        $('#alamat').val(response.jalan.trim()+' '+response.gang.trim()+' '+response.nomor.trim()+' '+response.notamb)
                        $('#kd_tarif').val(response.kd_tarif)
                        $('#jns_pelanggan').val(response.jns_pelanggan)
                        $('#zona').val(response.zona)
                        swal.close();
                    }
                })
            }
        })

      


    </script>
@endpush
