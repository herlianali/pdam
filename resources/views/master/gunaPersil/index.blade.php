@extends('layout.app')
@section('title', 'Guna Pensil')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Master')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Guna Pensil</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Guna Persil</h3>
                            <button type="button"
                                class="btn btn-xs btn-success float-right"
                                data-toggle="modal"
                                data-target="#filter">
                                <i class="fas fa-print"></i> Cetak
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-8">
                                    <form class="form-horizontal" action="{{ route('gunaPersil.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group row mt-2">
                                            <label for="kd_gunapersil" class="col-md-2 col-form-label">Kode Merek </label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control" name="kd_gunapersil" onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="keterangan" class="col-md-2 col-form-label">Keterangan</label>
                                            <div class="col-md-7">
                                                <textarea class="form-control" name="keterangan" onkeyup="valueing()"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="kd_gunapersil_i" class="col-md-2 col-form-label">Induk</label>
                                            <div class="col-md-7">
                                                <select class="form-control" onkeyup="valueing()" name="kd_gunapersil_i">
                                                    <option value="1 "> 1 - Kelompok I </option>
                                                    <option value="2 "> 2 - Kelompok II </option>
                                                    <option value="3 "> 3 - Kelompok III </option>
                                                    <option value="4 "> 4 - Kelompok IV </option>
                                                    <option value="5 "> 5 - Kelompok V </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="kd_tarif" class="col-md-2 col-form-label">Kode Tarif</label>
                                            <div class="col-md-7">
                                                <select class="custom-select" onkeyup="valueing()" name="kd_tarif">
                                                    @foreach ($kd_tarif as $kode)
                                                        <option value="{{ $kode->kd_tarif }}">{{ $kode->kd_tarif }} - {{ $kode->jns_tarif }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <label for="" class="col-md-6 col-form-label"></label>
                                            <div class="col-md-5">
                                                <button class="btn btn-success btn-sm" type="submit"><i
                                                        class="far fa-save"></i> Simpan</button>
                                                <button type="reset" class="btn btn-danger btn-sm"><i
                                                        class="fas fa-undo"></i> Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <table id="example" class="table table-bordered table-responsive-md table-condensed" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th width="15%">Kode Guna Persil</th>
                                        <th width="50%">Keterangan</th>
                                        <th width="10%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kd_gunapersil as $gunaPersil)
                                        <tr>
                                            <td>{{ $gunaPersil->kd_gunapersil }}</td>
                                            <td>{{ $gunaPersil->keterangan }}</td>
                                            <td>
                                                <button type="submit"
                                                        class="btn btn-xs btn-danger hapus"
                                                        data-id="{{ $gunaPersil->kd_gunapersil }}">
                                                        <i class="fas fa-trash-alt"></i>
                                                        Hapus
                                                </button>
                                                <button type="button"
                                                        class="btn btn-xs btn-success edit"
                                                        data-id="{{ $gunaPersil->kd_gunapersil }}"
                                                        data-toggle="modal"
                                                        data-target="#form">
                                                        <i class="fas fa-edit"></i>
                                                        Edit
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @include('master.gunaPersil.form')
                        @include('master.gunaPersil.filter')
                    </div>
                </div>
    </section>
@endsection

@push('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script>
        $(function() {
            $('#example').DataTable({

                //  "lengthChange": false,
                //   "autoWidth": false,
                //   "responsive": true,
                "oLanguage": {
                    "sSearch": "Search : "
                },
                "pageLength": 5
            }).buttons().container().appendTo('#table_wrapper .col-md-6:eq(0)');
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

        $(document).on('click', '.edit', function(e) {
            e.preventDefault();
            let kd_gunapersil = $(this).data('id')
            $.ajax({
                type: "GET",
                url: `{{ url('master/gunaPersil') }}/`+kd_gunapersil,
                data: {
                    id: kd_gunapersil,
                    _token: '{{ csrf_token() }}'
                },
                beforeSend: function() {
                    showLoading()
                },
                success: function(response) {
                    $('#form-edit').attr('action', "{{ url('master/gunaPersil') }}/"+kd_gunapersil)
                    $('#kd_gunapersil').val(response.kd_gunapersil)
                    $('#keterangan').val(response.keterangan)
                    $('#kd_gunapersil_i').val(response.kd_gunapersil_i.trim()).change()
                    $('#kd_tarif').val(response.kd_tarif)
                    swal.close();
                }
            })
        })

        var showLoading = function() {
            swal.fire({
                title: "Mohon Tunggu !",
                html: "Sedang Memproses...",
                allowOutsideClick: false,
                showConfirmButton: false,
                willOpen: () => {
                    swal.showLoading()
                },
            })
        }

        $(document).on('click', '.hapus', function(e) {
            e.preventDefault();
            // console.log();
            let kd_gunapersil = $(this).data('id');
            let token = "{{ csrf_token() }}";
            swal.fire({
                title: "Apakah Anda Yakin ?",
                icon: 'warning',
                text: "Anda Tidak Akan Bisa Mengembalikan Data Ini",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Iya, Hapus!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "DELETE",
                        url: `{{ url('master/gunaPersil') }}/`+kd_gunapersil,
                        data: {
                                _token: token
                            },
                            beforeSend: function() {
                                showLoading()
                            },
                            success: function(resp) {
                                swal.fire(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success'
                                )
                                location.reload();
                            }
                    });
                }
            });
        });
    </script>
@endpush
