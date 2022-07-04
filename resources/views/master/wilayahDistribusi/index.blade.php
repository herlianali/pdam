@extends('layout.app')
@section('title', 'Wilayah Distribusi')

@section('namaHal', 'Master')
@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Master</a></li>
    <li class="breadcrumb-item active">Wilayah Distribusi</li>
</ol>
@endsection

@section('content')
<section class="content">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Wilayah Distribusi</h3>

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
                                <label for="kode" class="col-md-2 col-form-label">Kode </label>
                                <div class="col-md-8">
                                    <input type="kode" class="form-control" id="kode" onkeyup="valueing()">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label for="nama" class="col-md-2 col-form-label">Nama </label>
                                <div class="col-md-8">
                                    <input type="nama" class="form-control" id="nama" onkeyup="valueing()">
                                </div>
                            </div>

                        <button type="submit" class="btn btn-info btn-sm mt-3" id="baru"><i class="fas fa-print"></i> Cetak</button>
                        <button type="submit" class="btn btn-success btn-sm mt-3" id="simpan" disabled><i class="far fa-save"></i> Simpan</button>
                        <button type="reset" class="btn btn-danger btn-sm mt-3" id="batal" disabled><i class="far fa-times-circle"></i> Batal</button>
                    </form>
                </div>
                <div class="col-md-2">
                    <img src="{{ asset('assets/img/logo.png') }}" class="mx-auto d-block mt-3" alt="" style="width: 90%">
                </div>
                <div class="col-md-1"></div>
            </div>
            <table id="example2" class="table table-bordered table-responsive-md table-condensed" style="width: 100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Wilayah</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>B</td>
                        <td>Barat</td>
                        <td>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="deleteJenisPelanggan()"><i class="fas fa-trash-alt"></i> Hapus</button>
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#form"><i class="fas fa-edit"></i> Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>T</td>
                        <td>Timur</td>
                        <td>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="deleteJenisPelanggan()"><i class="fas fa-trash-alt"></i> Hapus</button>
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#form"><i class="fas fa-edit"></i> Edit</button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        @include('master.wilayahDistribusi.form')
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
            if(document.getElementById('kode').value==="" || document.getElementById('nama').value==="") {
                document.getElementById('batal').disabled = true
                document.getElementById('simpan').disabled = true
            }else{
                document.getElementById('batal').disabled = false
                document.getElementById('simpan').disabled = false
            }
        }
    </script>
@endpush
