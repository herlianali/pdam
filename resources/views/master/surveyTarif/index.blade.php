@extends('layout.app')
@section('title', 'Survey Tarif')

@section('namaHal', 'Master')
@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Master</a></li>
    <li class="breadcrumb-item active">Survey Tarif</li>
</ol>
@endsection

@section('content')
<section class="content">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Survey Tarif</h3>

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
            <div class="row mb-2">
                <div class="col-md-1"></div>
                <div class="col-md-12">
                    <form class="form-horizontal">
                    
                        <div class="form-group row mt-2">
                            <label for="blnrek" class="col-md-3 col-form-label">Bulan Rekening </label>
                            <div class="col-md-5">
                                <input type="date" class="form-control" id="blnrekening" onkeyup="valueing()">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="subzona" class="col-md-3 col-form-label">Sub Zona</label>
                            <div class="col-md-5">
                            <input type="text" class="form-control" id="subzona" onkeyup="valueing()">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="jenispelanggan" class="col-md-3 col-form-label">Jenis Pelanggan</label>
                            <div class="col-md-5">
                            <input type="text" class="form-control" id="jenispelanggan" onkeyup="valueing()">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="nobundel" class="col-md-3 col-form-label">No Bundel</label>
                            <div class="col-md-5">
                            <input type="text" class="form-control" id="nobundel" onkeyup="valueing()">
                            </div>
                        </div>

                        <br>
                        <br>

                        <div class="form-group row mt-2">
                            <label for="nopelanggan" class="col-md-3 col-form-label">No Pelanggan</label>
                            <div class="col-md-5">
                                <input type="text" class="form-control" id="nopelanggan" onkeyup="valueing()">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="nama" class="col-md-3 col-form-label">Nama</label>
                            <div class="col-md-6">
                            <input type="text" class="form-control" id="nama" onkeyup="valueing()">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="alamat" class="col-md-3 col-form-label">Alamat</label>
                            <div class="col-md-6">
                            <textarea class="form-control" id="alamat" onkeyup="valueing()"></textarea>
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="nomor" class="col-md-3 col-form-label">Nomor PA</label>
                            <div class="col-md-6">
                            <input type="text" class="form-control" id="noPA" onkeyup="valueing()">
                            </div>
                        </div>

                        <div class="form-group row mt-2">
                            <label for="lebarjln" class="col-md-3 col-form-label">Lebar Jalan</label>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="lebarjln" onkeyup="valueing()">
                            </div>
                            <label for="M" class="col-md-3 col-form-label">M</label>
                            <label for="tariflama" class="col-md-2 col-form-label">Tarif Lama</label>   
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="tariflama" onkeyup="valueing()">
                            </div>  
                                             
                        </div>
                        <div class="form-group row ">
                            <label for="listrik" class="col-md-3 col-form-label">Listrik</label>
                            <div class="col-md-2">
                            <input type="text" class="form-control" id="listrik" onkeyup="valueing()">
                            </div>
                            <label for="amp" class="col-md-3 col-form-label">Amp</label>
                            <label for="kwh" class="col-md-2 col-form-label">Kwh</label>
                            <div class="col-md-2">
                            <input type="text" class="form-control" id="kwh" onkeyup="valueing()">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="njop" class="col-md-3 col-form-label">NJOP</label>
                            <div class="col-md-3">
                            <input type="text" class="form-control" id="njop" onkeyup="valueing()">
                            </div>
                            <label for="juta" class="col-md-3 col-form-label">Juta</label>
                        </div>
                       
                          <td>
                          <button type="submit" class="btn btn-warning btn-sm mt-6 " id="skip"><i class="far fa-save"></i> F-1 Skip</button>
                          <button type="button" class="btn btn-primary btn-sm mt-6 " data-toggle="modal" data-target="#form"><i class="fas fa-edit"></i> Edit</button>
                          <button type="submit" class="btn btn-success btn-sm mt-6 " id="cetaksurvey"><i class="far fa-save"></i> Cetak Survey</button>
                          <button type="button" class="btn btn-success btn-sm mt-6 " id="lebih entri"><i class="fa fa-plus"></i> Lebih Entri</button>
                          <button type="submit" class="btn btn-warning btn-sm mt-6 " id="belum entri"><i class="far fa-save"></i> Belum Entri</button>
                          <button type="button" class="btn btn-success btn-sm mt-6 " id="cetak kontrol"><i class="far fa-save"></i> Cetak Kontrol </button>
                          <button type="submit" class="btn btn-danger btn-sm mt-6 "  id="hapus"><i class="fa fa-trash"></i> Hapus</button>
                          <button type="button" class="btn btn-info btn-sm mt-6 "    id="jlnPLN"><i class="fa fa-trash"></i> Jalan PLN</button>
                          <button type="button" class="btn btn-primary btn-sm mt-6 " id="datakosong"><i class="fa fa-trash"></i> Data Kosong</button>
                        </td>
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
