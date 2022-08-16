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
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Telpon Pelanggan</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-md-1"></div>
                <div class="col-md-8">
                    <form class="form-horizontal">
                    
                        <div class="form-group row mt-2">
                            <label for="nomor" class="col-md-2 col-form-label">No Pelanggan</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="nopelanggan" onkeyup="valueing()">
                            </div>
                    
                        <div class="col-md-2">
                        <td>
                            <button class="btn btn-default btn-sm-2" type="button" data-toggle="modal" data-target="#search"><i class="fas fa-search fa-fw"></i>Cari</button>
                            <button type="reset" value="reset button" class="btn btn-success btn-sm mt-4" id="bersih"><i class="far fa-reset"></i> Bersihkan</button>
                        </td>
                        </div>
                        
                        </div>
                      
                        <div class="form-group row ">
                            <label for="nama" class="col-md-2 col-form-label">Nama</label>
                            <div class="col-md-8">
                            <input type="text" class="form-control" id="nama" onkeyup="valueing()">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="alamat" class="col-md-2 col-form-label">Alamat</label>
                            <div class="col-md-8">
                            <input type="text" class="form-control" id="alamat" onkeyup="valueing()">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="nomor" class="col-md-2 col-form-label">No Telepon</label>
                            <div class="col-md-8">
                            <input type="text" class="form-control" id="notlp" onkeyup="valueing()">
                            </div>
                        </div>

                          <td>
                          <button type="submit" class="btn btn-success btn-sm mt-6 " id="simpan"><i class="far fa-save"></i> Simpan</button>
                          <button type="button" class="btn btn-success btn-sm mt-6 " data-toggle="modal" data-target="#form"><i class="fas fa-edit"></i> Edit</button>
                        </td>
                    </form>
                </div>
                <div class="col-md-2">
                                <img src="{{ asset('assets/img/logo.png') }}" class="mx-auto d-block" alt="" style="width: 80%">
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
        $(function () {
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
            if(document.getElementById('kode').value==="" || document.getElementById('keterangan').value==="") {
                document.getElementById('batal').disabled = true
                document.getElementById('simpan').disabled = true
            }else{
                document.getElementById('batal').disabled = false
                document.getElementById('simpan').disabled = false
            }
        }
    </script>
@endpush
