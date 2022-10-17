@extends('layout.app')
@section('title', 'Materai')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Master')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Materai</li>
    </ol>
@endsection


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Materai</h3>
                            <a href="{{ route('printmaterai') }}" class="btn btn-xs btn-success float-right"><i class="fas fa-print"></i> Cetak Tabel</a>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-8">
                                    <form class="form-horizontal" action="{{ route('materai.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group row mt-2">
                                            <label for="nominal" class="col-md-2 col-form-label">Rp. Nominal </label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="nominal" onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <label for="materai" class="col-md-2 col-form-label">Rp. Materai </label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="rp_materai" onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <label for="" class="col-md-6 col-form-label"></label>
                                            <div class="col-md-5">
                                                <button type="submit" class="btn btn-success btn-sm mt-3" id="simpan"><i
                                                        class="far fa-save"></i> Simpan</button>
                                                <button type="reset" class="btn btn-danger btn-sm mt-3" id="batal"><i
                                                        class="far fa-times-circle"></i> Batal</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <table id="example" class="table table-bordered table-responsive-md table-condensed" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nominal</th>
                                        <th>Rp Materai</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($matrai as $materai)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $materai->nominal }}</td>
                                            <td>{{ $materai->rp_materai }}</td>
                                            <td>
                                                <button type="button"
                                                        class="btn btn-xs btn-danger hapus"
                                                        data-id="{{ $materai->nominal }}">
                                                        <i class="fas fa-trash-alt"></i>
                                                        Hapus
                                                </button>
                                                <button type="button"
                                                        class="btn btn-xs btn-success edit"
                                                        data-id="{{ $materai->nominal }}"
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
                        @include('master.materai.form')
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
                    "sSearch": "Rp : "
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
            let nominal = $(this).data('id')
            $.ajax({
                type: "GET",
                url: `{{ url('master/materai') }}/`+nominal,
                data: {
                    id: nominal,
                    _token: '{{ csrf_token() }}'
                },
                beforeSend: function() {
                    showLoading()
                },
                success: function(response) {
                    $('#form-edit').attr('action', "{{ url('master/materai') }}/"+nominal)
                    $('#nominal').val(response.nominal)
                    $('#rp_materai').val(response.rp_materai)
                    swal.close();
                }
            })
        })

        $(document).on('click', '.hapus', function(e) {
            e.preventDefault();
            // console.log();
            let nominal = $(this).data('id');
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
                        url: `{{ url('master/materai') }}/`+nominal,
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

        function valueing() {
            if (document.getElementById('kode').value === "" || document.getElementById('keterangan').value === "") {
                document.getElementById('batal').disabled = true
                document.getElementById('simpan').disabled = true
            } else {
                document.getElementById('batal').disabled = false
                document.getElementById('simpan').disabled = false
            }
        }
    </script>
@endpush
