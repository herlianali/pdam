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
                                    <div class="form-group row mt-2">
                                        <label for="nomor" class="col-md-2 col-form-label">No Pelanggan</label>
                                        <div class="col-md-4">
                                            <input type="text" value="" class="form-control" id="noPelanggan" name="noPelanggan">
                                        </div>

                                        <button class="btn btn-info  btn-mt-2" type="button" data-toggle="modal"
                                            data-target="#search"><i class="fa fa-search"></i></button>
                                        &nbsp;

                                        <button class="btn btn-danger btn-mt-2" id="clear">
                                            <i class="fa fa-trash"></i>
                                            Bersihkan
                                        </button>
                                    </div>

                                </div>
                            </div>
                            <form class="form-horizontal">
                                <div class="form-group row ">
                                    <label for="nama" class="col-md-2 col-form-label">Nama</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" id="nama" name="nama" onkeyup="valueing()"
                                            readonly value="">
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
                                        <input type="text" class="form-control" id="notlp" name="notlp" onkeyup="valueing()">
                                    </div>
                                    <button type="button" class="btn btn-success btn-sm mt-6 " data-toggle="modal"
                                        data-target="#form"><i class="fas fa-edit"></i> Edit</button>
                                    &nbsp;
                                    <button type="submit" class="btn btn-info btn-sm mt-6  " id="simpan"><i
                                            class="far fa-save"></i> Simpan</button>
                                </div>
                            </form>
                        </div>
                        @include('master.telponPelanggan.form')
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
