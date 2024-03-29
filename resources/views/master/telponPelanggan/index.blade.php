@extends('layout.app')
@section('title', 'Telpon Pelanggan')

@section('namaHal', 'Master')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Telpon Pelanggan</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Telepon Pelanggan</h3>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-1"></div>
                                <div class="col-md-12">
                                <form class="form-horizontal" action="{{ route('telponPelanggan.index') }}" method="POST">
                                @csrf
                                    <div class="form-group row mt-2">
                                        <label for="nomor" class="col-md-2 col-form-label">No Pelanggan</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="no_plg" name="no_plg">
                                        </div>

                                        <button class="btn btn-info btn-mt-2" id="cari" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                        &nbsp;

                                        <button type="reset" class="btn btn-danger btn-mt-2">
                                            <i class="fa fa-undo"></i>
                                            Reset
                                        </button>
                                    </div>

                                </div>
                            </div>
                            
                                <div class="form-group row ">
                                    <label for="nama" class="col-md-2 col-form-label">Nama</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" id="nama" name="nama"
                                            onkeyup="valueing()" readonly value="">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="alamat" class="col-md-2 col-form-label">Alamat</label>
                                    <div class="col-md-4">
                                        <textarea class="form-control" id="alamat" name="alamat" onkeyup="valueing()" readonly value=""></textarea>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="nomor" class="col-md-2 col-form-label">No Telepon</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" id="telp_1" name="telp_1"
                                            onkeyup="valueing()">
                                    </div>

                                    <button type="button" class="btn btn-xs btn-success edit" data-toggle="modal"
                                        data-target="#edit">
                                        <i class="fas fa-edit"></i>
                                        Edit
                                    </button>


                                </div>
                            </form>
                        </div>
                        @include('master.telponPelanggan.form')
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

        function valueing() {
            // if(document.getElementById('kode').value==="" || document.getElementById('keterangan').value==="") {
            //     document.getElementById('batal').disabled = true
            //     document.getElementById('simpan').disabled = true
            // }else{
            //     document.getElementById('batal').disabled = false
            //     document.getElementById('simpan').disabled = false
            // }
        }

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

        $(document).on('click', '#cari', function(e) {
            e.preventDefault();
            let no_plg = $('#no_plg').val();
            $.ajax({
                type: "GET",
                url: `{{ url('master/telponPelanggan') }}/` + no_plg,
                data: {
                    id: no_plg,
                    _token: '{{ csrf_token() }}'
                },
                beforeSend: function() {
                    showLoading()
                },
                success: function(response) {
                    console.log('resp');
                    $('#nama').val(response.nama)
                    $('#alamat').val(response.alamat)
                    $('#telp_1').val(response.telp_1)
                    swal.close();
                }
            })
        })

        $(document).on('click', '.edit', function(e) {
            e.preventDefault();
            let no_plg = $('#no_plg').val()
            $.ajax({
                type: "GET",
                url: `{{ url('master/telponPelanggan') }}/` + no_plg,
                data: {
                    id: no_plg,
                    _token: '{{ csrf_token() }}'
                },
                beforeSend: function() {
                    showLoading()
                },
                success: function(response) {
                    $('#form-edit').attr('action', "{{ url('master/telponPelanggan') }}/" + no_plg)
                    $('#nama1').val(response.nama)
                    $('#alamat1').val(response.alamat)
                    $('#telp_1_i').val(response.telp_1)
                    swal.close();
                }
            })
        })
    </script>
@endpush
