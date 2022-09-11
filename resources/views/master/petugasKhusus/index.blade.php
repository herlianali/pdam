@extends('layout.app')
@section('title', 'Petugas Khusus')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Master')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Petugas Khusus</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Petugas Khusus</h3>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ url('/panggilanDinas') }}" method="post">
                                @csrf
                                <div class="form-group row mt-2 ">
                                    <label for="nip" class="col-md-2 col-form-label">NIP</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="nip" id="nip" onkeyup="valueing()">
                                    </div>
                                    <button class="btn btn-info  btn-mt-2" type="button" data-toggle="modal"
                                        data-target="#pegawai"><i class="fa fa-search"></i></button>
                                    &nbsp;
                                </div>
                                <div class="form-group row mt-2 ">
                                    <label for="nama" class="col-md-2 col-form-label">Nama </label>
                                    <div class="col-md-6">
                                        <textarea class="form-control" id="nama" onkeyup="valueing()" name="nama"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="keterangan" class="col-md-2 col-form-label">Tugas </label>
                                    &nbsp;
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="korektor" name="korektor">
                                        <label class="form-check-label">Korektor</label>
                                    </div>
                                    &nbsp;
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="pencatat_meter" name="pencatat_meter">
                                        <label class="form-check-label">Pencatat Meter</label>
                                    </div>
                                </div>
                                <div class="form-group row mt-2 ">
                                    <label for="jns_pelanggan" class="col-md-2 col-form-label">Jenis Pelanggan</label>
                                    <div class="col-md-6">
                                        <select class="custom-select" name="jenis_pelanggan" id="jenis_pelanggan">
                                            <option value="option1">option1</option>
                                            <option value="option2">option2</option>
                                            <option value="option3">option3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mt-2 ">
                                    <label for="tombol" class="col-md-6 col-form-label"></label>
                                    <div class="col-md-5">
                                        <button class="btn btn-success btn-sm" type="submit"><i class="far fa-save"></i>
                                            Simpan</button>
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-undo"></i>
                                            Reset</button>
                                    </div>
                                </div>

                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('master.petugasKhusus.petugas')
@endsection

@push('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bs-custom-file-input/bs-custom-file-input.js') }}"></script>
    <script>
        $(function() {
            $('#table').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endpush
