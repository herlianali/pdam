@extends('layout.app')
@section('title', 'MLN Code')

@section('namaHal', 'Master')
@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Master</a></li>
    <li class="breadcrumb-item active">MLN Code</li>
</ol>
@endsection

@section('content')
<section class="content">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">MLN Code</h3>

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
                            
                        <div class="form-group">
                               
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="L Code" name="code">
                                    <label class="form-check-label">L Code</label>
                                </div>
                                <div class="form-check">
                                <input type="radio" class="form-check-input" id="M Code" name="code">
                                    <label class="form-check-label">M Code</label>
                                </div>
                                <div class="form-check">
                                <input type="radio" class="form-check-input" id="N Code" name="code">
                                    <label class="form-check-label">N Code</label>
                                </div>
                            </div>

                            
                        </div>

                        <div class="form-group row mt-2">
                            <label for="kode" class="col-md-2 col-form-label">Code </label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="kode" onkeyup="valueing()">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="keterangan" class="col-md-2 col-form-label">Keterangan </label>
                            <div class="col-md-8">
                                <textarea class="form-control" id="keterangan" onkeyup="valueing()"></textarea>
                            </div>
                        </div>
                       
                        <button type="submit" class="btn btn-success btn-sm-mt-6 float-right" id="simpan"><i class="far fa-save"></i> Simpan</button>
                            
                       
                      
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
                        <th>Kode</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>L</td>
                        <td>Dupak Masigit 6/24</td>
                        <td>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="deletemlncode()"><i class="fas fa-trash-alt"></i> Hapus</button>
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#form"><i class="fas fa-edit"></i> Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>L1</td>
                        <td>Rumah Kosong</td>
                        <td>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="deletemlncode()"><i class="fas fa-trash-alt"></i> Hapus</button>
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#form"><i class="fas fa-edit"></i> Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>L2</td>
                        <td>Pagar Kunci</td>
                        <td>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="deletemlncode()"><i class="fas fa-trash-alt"></i> Hapus</button>
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#form"><i class="fas fa-edit"></i> Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>L3</td>
                        <td>Peruntukan Persil Tidak Sesuai/Rekategori</td>
                        <td>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="deletemlncode()"><i class="fas fa-trash-alt"></i> Hapus</button>
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#form"><i class="fas fa-edit"></i> Edit</button>
                        </td>
                    </tr>
                   
                </tbody>
            </table>
        </div>
        @include('master.mlnCode.form')
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
