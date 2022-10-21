@extends('layout.app')
@section('title', 'Cek Survey Tarif')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Master')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Survey Pelanggan</li>
    </ol>
@endsection


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Cek Survey Tarif</h3>
                        </div>
                        <div class="card-body">
                            <div class="row mb-5">
                                <div class="col-md-9">
                                  
                                        <div class="form-group row mt-2 ">
                                            <label for="no_plg" class="col-md-3 col-form-label"> Nomor Pelanggan</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control" id="no_plg" name="no_plg" onkeyup="valueing()" placeholder="Ketik Nomor Pelanggan Lalu Tekan Enter">
                                            </div>
                                        </div>
                                        <form class="form-horizontal">
                                        <div class="form-group row mt-2">
                                            <label for="njop" class="col-md-3 col-form-label"> NJOP</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control" id="njop" name="njop" onkeyup="valueing()"  readonly value="">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <label for="listrik" class="col-md-3 col-form-label">Listrik</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control" id="listrik" name="listrik" onkeyup="valueing()" readonly value="">
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="lebarjalan" class="col-md-3 col-form-label">Lebar Jalan</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control" id="jalan" name="jalan" onkeyup="valueing()" readonly value="">
                                            </div>
                                        </div>
                                </div>
                            </div>
                            </form>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
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
        var showLoading = function() {
            swal.fire({
                title: "Mohon Tunggu !",
                html: "Sedang Memproses...",
                allowOutsideClick: false,
                showConfirmButton: false,
                willOpen: () => {
                    swal.showLoading()
                },
            })
        }

        $(document).keyup('enter',function(e) {
            e.preventDefault();
            let no_plg = $('#no_plg').val();
            $.ajax({
                type: "GET",
                url: `{{ url('master/cekSurveyTarif') }}/`+no_plg,
                data: {
                    id: no_plg,
                    _token: '{{ csrf_token() }}'
                },
                // beforeSend: function() {
                //     showLoading()
                // },
            
                success: function(response) {
                    console.log(response,'ini responnya')
                    $('#njop').val(response.njop)
                    $('#listrik').val(response.listrik)
                    $('#jalan').val(response.jalan)
                    swal.close();
                }
            })
        })

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
