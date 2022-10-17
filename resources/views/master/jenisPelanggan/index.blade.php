@extends('layout.app')

@section('title', 'Jenis Pelanggan')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Pelanggan')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Jenis Pelanggan</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Jenis Pelanggan</h3>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-9">
                                    <form class="form-horizontal" action="{{ route('jenisPelanggan.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="jns_pelanggan" class="col-md-2 col-form-label">Jenis Pelanggan</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="jns_pelanggan" onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="keterangan" class="col-md-2 col-form-label">Keterangan</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="keterangan" onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2 ">
                                            <label for="" class="col-md-7 col-form-label"></label>
                                            <div class="col-md-5">
                                                <button class="btn btn-success btn-sm" type="submit"><i
                                                        class="far fa-save"></i> Simpan</button>
                                                <button type="submit" class="btn btn-danger btn-sm"><i
                                                        class="fas fa-undo"></i> Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                            <table id="table" class="table table-bordered table-responsive-md table-condensed"
                                style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis Pelanggan</th>
                                        <th>Keterangan</th>
                                        <th>JNS_REKSWASTA</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jenisPelanggans as $jenisPelanggan)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $jenisPelanggan->jns_pelanggan }}</td>
                                            <td>{{ $jenisPelanggan->keterangan }}</td>
                                            <td>{{ $jenisPelanggan->jns_rekswasta }}</td>
                                            <td>
                                                <button type="button"
                                                        class="btn btn-danger btn-sm hapus"
                                                        data-id="{{ $jenisPelanggan->jns_pelanggan }}">
                                                        <i class="fas fa-trash-alt"></i>
                                                        Hapus
                                                </button>
                                                <button type="button"
                                                        class="btn btn-success btn-sm edit"
                                                        data-id="{{ $jenisPelanggan->jns_pelanggan }}"
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
            </div>
        </div>
    </section>

    @include('master.jenisPelanggan.form')
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
                    "sSearch": "Keterangan : "
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
            let jns_pelanggan = $(this).data('id')
            $.ajax({
                type: "GET",
                url: `{{ url('master/jenisPelanggan') }}/`+jns_pelanggan,
                data: {
                    id: jns_pelanggan,
                    _token: '{{ csrf_token() }}'
                },
                beforeSend: function() {
                    showLoading()
                },
                success: function(response) {
                    $('#form-edit').attr('action', "{{ url('master/jenisPelanggan') }}/"+jns_pelanggan)
                    $('#jns_pelanggan').val(response.jns_pelanggan)
                    $('#keterangan').val(response.keterangan)
                    $('#jns_rekswasta').val(response.jns_rekswasta)
                    swal.close();
                }
            })
        })

        $(document).on('click', '.hapus', function(e) {
            e.preventDefault();
            let jns_pelanggan = $(this).data('id');
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
                        url: `{{ url('master/jenisPelanggan') }}/`+jns_pelanggan,
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
