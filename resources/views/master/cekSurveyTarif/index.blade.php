@extends('layout.app')
@section('title', 'Survey Pelanggan')

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
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Survey Pelanggan</h3>

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
            <div class="row mb-5">
                <div class="col-md-1"></div>
                <div class="col-md-9">
                    <form class="form-horizontal">
                     
                        <div class="form-group row mt-2 ">
                            <label for="nopelanggan" class="col-md-3 col-form-label"> Nomor Pelanggan</label>
                            <div class="col-md-7">
                            <input type="text" class="form-control" id="nopelanggan" onkeyup="valueing()">
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="njop" class="col-md-3 col-form-label"> NJOP</label>
                            <div class="col-md-7">
                            <input type="text" class="form-control" id="njop" onkeyup="valueing()">
                            </div>
                            </div>
                        <div class="form-group row mt-2">
                            <label for="listrik" class="col-md-3 col-form-label">Listrik</label>
                            <div class="col-md-7">
                                <input type="text" class="form-control" id="listrik" onkeyup="valueing()">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="lebarjalan" class="col-md-3 col-form-label">Lebar Jalan</label>
                            <div class="col-md-7">
                            <input type="text" class="form-control" id="lebarjln" onkeyup="valueing()">
                            </div>
                        </div>
                        
                        
                        </div>
                       </div> 
                      
                       
                    </form>
                </div>
               
                <div class="col-md-1"></div>
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
