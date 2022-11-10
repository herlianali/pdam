@extends('layout.app')
@section('title', 'Jenis Panggilan Dinas')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Master')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Jenis Panggilan Dinas</li>
    </ol>
@endsection


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Jenis Panggilan Dinas</h3>
                           
                              
                            <button type="button"
                            class="btn btn-xs btn-success filter float-right"
                            data-toggle="modal"
                            data-target="#filter">
                            <i class="fas fa-print"></i>
                            Cetak
                    </button> 
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-8">
                                    <form class="form-horizontal" action="{{ route('panggilanDinas.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group row mt-2 ">
                                            <label for="jns_pdinas" class="col-md-4 col-form-label">Jenis Panggilan Dinas
                                            </label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="jns_pdinas" onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2 ">
                                            <label for="keterangan" class="col-md-4 col-form-label">Keterangan </label>
                                            <div class="col-md-6">
                                                <textarea class="form-control" onkeyup="valueing()" name="keterangan"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2 ">
                                            <label for="tombol" class="col-md-7 col-form-label"></label>
                                            <div class="col-md-5">
                                                <button class="btn btn-success btn-sm"
                                                        type="submit">
                                                        <i class="far fa-save"></i>
                                                        Simpan
                                                </button>
                                                <button type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-undo"></i>
                                                    Reset
                                                </button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>

                            <table id="table" class="table table-bordered table-responsive-md table-condensed" >
                                <thead>
                                    <tr>
                                        <th width="10%">No </th>
                                        <th width="20%">Jenis PDINAS</th>
                                        <th width="50%">Keterangan</th>
                                        <th width="20%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pDinass as $pDinas)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $pDinas->jns_pdinas }}</td>
                                            <td>{{ $pDinas->keterangan }}</td>
                                            <td>
                                                <button type="submit"
                                                        class="btn btn-xs btn-danger hapus"
                                                        data-id="{{ $pDinas->jns_pdinas }}">
                                                        <i class="fas fa-trash-alt"></i>
                                                        Hapus
                                                </button>
                                                <button type="button"
                                                        class="btn btn-xs btn-success edit"
                                                        data-id="{{ $pDinas->jns_pdinas }}"
                                                        data-toggle="modal"
                                                        data-target="#edit">
                                                        <i class="fas fa-edit"></i>
                                                        Edit
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
    </section>

    {{-- Edit Form --}}
    @include('master.panggilanDinas.form')
    
    @include('master.panggilanDinas.filter')
    

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
            $('#table').DataTable({

                //  "lengthChange": false,
                //   "autoWidth": false,
                //   "responsive": true,
                "oLanguage": {
                    "sSearch": "Search : "
                },
                "pageLength": 5
            }).buttons().container().appendTo('#table_wrapper .col-md-6:eq(0)');
            $('#table1').DataTable({
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

        $(document).on('click', '.edit', function(e) {
            e.preventDefault();
            let jns_pdinas = $(this).data('id')
            $.ajax({
                type: "GET",
                url: `{{ url('master/panggilanDinas') }}/`+jns_pdinas,
                data: {
                    id: jns_pdinas,
                    _token: '{{ csrf_token() }}'
                },
                beforeSend: function() {
                    showLoading()
                },
                success: function(response) {
                    $('#form-edit').attr('action', "{{ url('master/panggilanDinas') }}/"+jns_pdinas)
                    $('#jns_pdinas').val(response.jns_pdinas)
                    $('#keterangan').val(response.keterangan)
                    swal.close();
                }
            })
        })

        $(document).on('click', '.hapus', function(e) {
            e.preventDefault();
            // console.log();
            let jns_pdinas = $(this).data('id');
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
                        url: `{{ url('master/panggilanDinas') }}/`+jns_pdinas,
                        data: {
                                _token: token
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
