@extends('layout.app')
@section('title', 'Monitoring Pelanggan')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Master')
@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Master</a></li>
    <li class="breadcrumb-item active">Monitoring Pelanggan</li>
</ol>
@endsection

@section('content')
<section class="content">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Monitoring Pelanggan</h3>

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
                            <label for="wilayah" class="col-md-3 col-form-label"> Wilayah </label>
                            <div class="col-md-7">
                            <select class="form-control" id="wilayah" onkeyup="valueing()">
                            
                            <option value = "wilayah T"> Wilayah T </option>
                            <option value = "wilayah B"> Wilayah B </option>
                            
                            </select>
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="status" class="col-md-3 col-form-label"> Status </label>
                            <div class="col-md-7">
                            <div class="form-check">
                                    <input type="radio" class="form-check-input" id="Buka" name="code">
                                    <label class="form-check-label">Buka</label>
                                </div>
                                <div class="form-check">
                                <input type="radio" class="form-check-input" id="Tutup Dinas" name="code">
                                    <label class="form-check-label">Telah Tutup Dinas</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="nopelanggan" class="col-md-3 col-form-label"> No Pelanggan </label>
                            <div class="col-md-7">
                                <input type="text" class="form-control" id="nomorpelanggan" onkeyup="valueing()">
                            </div>
                            <div class="col-md-2 bottom-2"> <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i>&nbsp; Cari </button> </div>
                            </div>
                     
                    </form>
                </div>

                <div class="col-md-1"></div>
            </div>
           
        </div>
        @include('master.panggilanDinas.form')
    </div>
</div>
<section class="content">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Filter</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                  
                </div>
            </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-md-1"></div>
                <div class="col-md-12">
                    <form class="form-horizontal">
                     
                        <div class="form-group row mt-2">
                            <label for="nama" class="col-md-3 col-form-label"> Nama </label>
                            <div class="col-md-5">
                            <input type="text" class="form-control" id="nama" onkeyup="valueing()">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="alamat" class="col-md-3 col-form-label"> Alamat </label>
                            <div class="col-md-2">
                            <input type="text" class="form-control" id="alamat" onkeyup="valueing()" placeholder="Jalan">
                            </div>
                         
                            <div class="col-md-2">
                            <input type="text" class="form-control" id="gang" onkeyup="valueing" placeholder="Gang">
                            </div>
                           
                            <div class="col-md-2">
                            <input type="text" class="form-control" id="no" onkeyup="valueing()" placeholder="Nomor">
                            </div>
                            <label for="notambahan" class="col-form-label"> No Tambahan</label>
                            <div class="col-md">
                            <input type="text" class="form-control" id="notambahan" onkeyup="valueing()">
                            </div>
                          
                        </div>
                        &nbsp;
                            <button type="button" class="btn btn-success float-right" id="simpan"><i class=" fa-filter"></i>Filter</button>
                        
                        
                     
                       
                    </form>
                </div>
                </div>
                </div>
                </div>
        @include('master.panggilanDinas.form')
    </div>
    <section class="content">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Monitoring Pelanggan</h3>

               
            </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-md-1"></div>
            
                     
                    <div class="col-md-1"></div>
            </div>
            <table id="example2" class="table table-bordered table-responsive-md table-condensed" style="width: 100%">
                <thead>
                    <tr>
                        <th>No Pelanggan</th>
                        <th>Nama</th>
                        <th>Jalan</th>
                        <th>Gang</th>
                        <th>Nomor</th>
                        <th>Nomor Tambahan</th>
                        <th>KD Tarif</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>1010013</td>
                        <td>Rihana</td>
                        <td>Jl.Kenanga</td>
                        <td>Gang II</td>
                        <td>10</td>
                        <td>E</td>
                        <td>194E</td>
                        <td>
                            <button type="submit" class="btn btn-info btn-sm" onclick="deletePanggilanDinas()"><i class="fas fa-eye"></i> Info</button>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="deletePanggilanDinas()"><i class="fas fa-trash-alt"></i> Hapus</button>
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#form"><i class="fas fa-edit"></i> Edit</button>
                        </td>
                    </tr>
                </tbody>
            </table>
                    
                </div>
                </div>
                </div>
                </div>
        @include('master.panggilanDinas.form')
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
