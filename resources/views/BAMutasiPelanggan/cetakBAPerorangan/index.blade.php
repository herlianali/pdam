@extends('layout.app')
@section('title', 'BA Mutasi Pelanggan')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <style>
        .container {
            border: 2px solid;
        }
    </style>
@endpush

@section('namaHal', 'BA Mutasi Pelanggan')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">BA Mutasi Pelanggan</a></li>
        <li class="breadcrumb-item active">Cetak BA Perorangan</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Cetak BA Perorangan</h3>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('preview') }}" method="POST">
                                @csrf
                                <div class="form-group row" id="startEnd">
                                    <label for="usulan_no_bonc" class="col-md-3 col-form-label">Nomor BA</label>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" id="start" name="start" placeholder="T20020000248">
                                        </div>
                                    <span class="font-weight-bold mt-1" style="font-size: 15px;" id="startEnd">S.D</span>
                                    <div class="col-md-3" id="startEnd">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="end" name="end" placeholder="T20020000249">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn-info btn-sm">Preview</button>
                                <button type="reset" class="btn-danger btn-sm">Reset</button>
                            </form>
                        </div>
                    </div>
                </div>
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

    <script type="text/javascript">
    $(document).ready(function(){
        $('input[type="radio"]').on('click', function(){
            if($(this).attr("value") == "kode"){
                $('#start').prop('disabled',false)
                $('#end').prop('disabled',false)
            }
        })
        $('input[type="radio"]').trigger('click');
        })
    </script>
@endpush
