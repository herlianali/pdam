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
                                    <form class="form-horizontal">
                                        <div class="form-group row mt-2 ">
                                            <label for="no_plg" class="col-md-3 col-form-label"> Nomor Pelanggan</label>
                                            <div class="col-md-5">
                                                <input type="text" class="form-control" id="nopel" name="nopel" onkeyup="valueing()" placeholder="Ketik Nomor Pelanggan">
                                            </div>
                                            <button class="btn btn-info btn-mt-2"
                                            id="cari"
                                            type="button">
                                            <i class="fa fa-search"></i>
                                    </button>
                                    &nbsp;
                                    <button class="btn btn-danger btn-mt-2" id="clear">
                                        <i class="fa fa-trash"></i>
                                        Clear
                                    </button>
                                        </div>
                                      
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
                                                <input type="text" class="form-control" id="lebarjalan" name="lebarjalan" onkeyup="valueing()" readonly value="">
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

        
        $(document).on('click', '#clear', function(e) {
            e.preventDefault();
            $('#njop').val()
            $('#listrik').val()
            $('#lebarjalan').val()
        })

        $(document).on('click','#cari',function(e) {
            e.preventDefault();
            let nopel = $('#nopel').val();
            $.ajax({
                type: "GET",
                url: `{{ url('master/cekSurveyTarif') }}/`+nopel,
                data: {
                    id: nopel,
                    _token: '{{ csrf_token() }}'
                },
                beforeSend: function() {
                    showLoading()
                },
            
                success: function(response) {
                  console.log(response,'ini responnya')
                    $('#njop').val(response.njop)
                    $('#listrik').val(response.listrik)
                    $('#lebarjalan').val(response.lebarjalan)
                    swal.close();
                }
            })
        })


        
        // function clear() {
        //     document.getElementById('nopel').value = ''
        // }
        // document.getElementById("clear").addEventListener("click", clear);

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
