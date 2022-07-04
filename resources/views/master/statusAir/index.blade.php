@extends('layout.app')
@section('title', 'Status Tanah')

@section('namaHal', 'Master')
@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Master</a></li>
    <li class="breadcrumb-item active">Status Tanah</li>
</ol>
@endsection

@section('content')
<section class="content">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Status Tanah</h3>

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
                            <label for="kode" class="col-md-2 col-form-label">Kode Status Air</label>
                            <div class="col-md-8">
                                <input type="kode" class="form-control" id="kode" onkeyup="valueing()">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="keterangan" class="col-md-2 col-form-label">Keterangan </label>
                            <div class="col-md-8">
                                <input type="keterangan" class="form-control" id="keterangan" onkeyup="valueing()">
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
                        <th>Kode Status Air</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Lancar</td>
                        <td>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="deleteJenisPelanggan()"><i class="fas fa-trash-alt"></i> Hapus</button>
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#form"><i class="fas fa-edit"></i> Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Sedang</td>
                        <td>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="deleteJenisPelanggan()"><i class="fas fa-trash-alt"></i> Hapus</button>
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#form"><i class="fas fa-edit"></i> Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>Kecil</td>
                        <td>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="deleteJenisPelanggan()"><i class="fas fa-trash-alt"></i> Hapus</button>
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#form"><i class="fas fa-edit"></i> Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>04</td>
                        <td>Keluar Malam</td>
                        <td>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="deleteJenisPelanggan()"><i class="fas fa-trash-alt"></i> Hapus</button>
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#form"><i class="fas fa-edit"></i> Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>05</td>
                        <td>Tidak Keluar</td>
                        <td>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="deleteJenisPelanggan()"><i class="fas fa-trash-alt"></i> Hapus</button>
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#form"><i class="fas fa-edit"></i> Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>06</td>
                        <td>Keruh</td>
                        <td>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="deleteJenisPelanggan()"><i class="fas fa-trash-alt"></i> Hapus</button>
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#form"><i class="fas fa-edit"></i> Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>07</td>
                        <td>Tidak Dapat Dicek</td>
                        <td>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="deleteJenisPelanggan()"><i class="fas fa-trash-alt"></i> Hapus</button>
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#form"><i class="fas fa-edit"></i> Edit</button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        @include('master.statusAir.form')
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
