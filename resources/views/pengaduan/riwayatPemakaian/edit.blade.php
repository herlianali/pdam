@extends('layout.app')
@section('title', 'Riwayat Pemakaian')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Pengaduan')
@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Pengaduan</a></li>
    <li class="breadcrumb-item active">Riwayat Pemakaian</li>
</ol>
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"> EditRiwayat Pemakaian</h3>
                        <a href="" class="btn btn-sm btn-success float-right"><i class="fas fa-backward"></i> Kembali </a>
                    </div>
               
        <div class="card-body">
            <div class="row mb-2">
          
                <div class="col-md-1"></div>
                <div class="col-md-12">
                
                <form class="form-horizontal">
                     
                     <div class="form-group row mt-2 ">
                         <label for="nopelanggan" class="col-md-3 col-form-label"> Dari Periode </label>
                         <div class="col-md-2">
                         <input type="text" class="form-control" id="nopelanggan" onkeyup="valueing()">
                         </div>
                         <label for="nopelanggan" class="col-form-label"> s.d. </label>
                         <div class="col-md-2">
                         <input type="text" class="form-control" id="nopelanggan" onkeyup="valueing()">
                         </div>
                         </div>
                         <div class="form-group row">
                         <label for="njop" class="col-md-3 col-form-label"> No Pelanggan </label>
                         <div class="col-md-2">
                         <input type="text" class="form-control" id="njop" onkeyup="valueing()">
                         </div>
                         </div>
                     <div class="form-group row mt-2">
                         <label for="listrik" class="col-md-3 col-form-label">Nama</label>
                         <div class="col-md-7">
                             <input type="text" class="form-control" id="listrik" onkeyup="valueing()">
                         </div>
                     </div>
                    
                     <div class="form-group row ">
                         <label for="lebarjalan" class="col-md-3 col-form-label">Alamat</label>
                         <div class="col-md-2">
                         <input type="text" class="form-control" id="lebarjln" placeholder="Jalan" onkeyup="valueing()">
                         </div>
                         <label for="lebarjalan" class="col-form-label">Gang</label>
                         <div class="col-md-1">
                         <input type="text" class="form-control" id="lebarjln" onkeyup="valueing()">
                         </div>
                         <label for="lebarjalan" class="col-form-label">No</label>
                         <div class="col-md-1">
                         <input type="text" class="form-control" id="lebarjln" onkeyup="valueing()">
                         </div>
                         <label for="lebarjalan" class="col-form-label">No Tambahan</label>
                         <div class="col-md-2">
                         <input type="text" class="form-control" id="lebarjln" onkeyup="valueing()">
                         </div>
                     </div>
                     <div class="form-group row ">
                         <label for="lebarjalan" class="col-md-3 col-form-label">Tarif</label>
                         <div class="col-md-3">
                         <input type="text" class="form-control" id="lebarjln" onkeyup="valueing()">
                         </div>
                     </div>
                     <div class="form-group row ">
                         <label for="lebarjalan" class="col-md-3 col-form-label">Ukuran Meter</label>
                         <div class="col-md-2">
                         <input type="text" class="form-control" id="lebarjln" onkeyup="valueing()">
                         </div>
                         <label for="lebarjalan" class="col-form-label">No Meter</label>
                         <div class="col-md-2">
                         <input type="text" class="form-control" id="lebarjln" onkeyup="valueing()">
                         </div>
                     </div>
                     <div class="form-group row ">
                         <label for="lebarjalan" class="col-md-3 col-form-label">No Bundel</label>
                         <div class="col-md-2">
                         <input type="text" class="form-control" id="lebarjln" onkeyup="valueing()">
                         </div>
                         <label for="lebarjalan" class="col-form-label">No Telepon</label>
                         <div class="col-md-3">
                         <input type="text" class="form-control" id="lebarjln" onkeyup="valueing()">
                         </div>
                     </div>
                     <div class="form-group row ">
                         <label for="lebarjalan" class="col-md-3 col-form-label">Nopel</label>
                         <div class="col-md-2">
                         <input type="text" class="form-control" id="lebarjln" onkeyup="valueing()">
                         </div>
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
