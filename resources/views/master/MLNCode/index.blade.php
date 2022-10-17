@extends('layout.app')
@section('title', 'MLN Code')


@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Master')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">MLN Code</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Data MLN Code</h3>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-7">
                                    <form class="form-horizontal" action="{{ route('mlnCode.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <div class="form-group row mt-2 ">
                                                <label for="code" class="col-md-3 col-form-label">Pilih Code</label>
                                                <div class="col-md-6">
                                                    <select class="form-control" name="code" onkeyup="valueing()">
                                                        <option value="L"> L</option>
                                                        <option value="M"> M </option>
                                                        <option value="N"> N </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label for="kode" class="col-md-3 col-form-label">Kode</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" name="kode" onkeyup="valueing()">
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label for="keterangan" class="col-md-3 col-form-label">Keterangan </label>
                                                <div class="col-md-6">
                                                    <textarea class="form-control" name="keterangan" onkeyup="valueing()"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label for="" class="col-md-6 col-form-label"> </label>
                                                <div class="col-md-6">
                                                    <button class="btn btn-success btn-sm" type="submit"><i
                                                            class="far fa-save"></i> Simpan</button>

                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fas fa-undo"></i> Batal</button>
                                                </div>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"> Data MLN Code</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <table id="table" class="table table-bordered table-responsive-md table-condensed"
                                        style="width: 100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode</th>
                                                <th>Keterangan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($m as $mData)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td>{{ $mData->kode }}</td>
                                                    <td>{{ $mData->keterangan }}</td>

                                                    <td>
                                                        <button type="submit"
                                                                class="btn btn-xs btn-danger hapus"
                                                                data-id="{{ $mData->kode }}">
                                                                <i class="fas fa-trash-alt"></i>
                                                                Hapus
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-xs btn-success edit"
                                                                data-id="{{ $mData->kode }}"
                                                                data-toggle="modal"
                                                                data-target="#edit">
                                                                <i class="fas fa-edit"></i>
                                                                Edit
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            @foreach ($l as $lData)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td>{{ $lData->kode }}</td>
                                                    <td>{{ $lData->keterangan }}</td>

                                                    <td>
                                                        <button type="submit"
                                                                class="btn btn-xs btn-danger hapus"
                                                                data-id="{{ $lData->kode }}">
                                                                <i class="fas fa-trash-alt"></i>
                                                                Hapus
                                                        </button>
                                                        <button type="button"
                                                                class="btn btn-xs btn-success edit"
                                                                data-id="{{ $lData->kode }}"
                                                                data-toggle="modal"
                                                                data-target="#edit">
                                                                <i class="fas fa-edit"></i>
                                                                Edit
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            @foreach ($n as $nData)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $nData->kode }}</td>
                                                <td>{{ $nData->keterangan }}</td>

                                                <td>
                                                    <button type="submit"
                                                            class="btn btn-xs btn-danger hapus"
                                                            data-id="{{ $nData->kode }}">
                                                            <i class="fas fa-trash-alt"></i>
                                                            Hapus
                                                    </button>
                                                    <button type="button"
                                                            class="btn btn-xs btn-success edit"
                                                            data-id="{{ $nData->kode }}"
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
                                &nbsp;
                            </div>
                        </div>
                    </div>
    </section>

    @include('master.MLNCode.edit')
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
                    "sSearch": "Keterangan/Kode : "
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

        function valueing() {
            if (document.getElementById('kode').value === "" || document.getElementById('keterangan').value === "") {
                document.getElementById('batal').disabled = true
                document.getElementById('simpan').disabled = true
            } else {
                document.getElementById('batal').disabled = false
                document.getElementById('simpan').disabled = false
            }
        }

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
            let code = $(this).data('id')
            $.ajax({
                type: "GET",
                url: `{{ url('master/mlnCode') }}/`+code,
                data: {
                    id: code,
                    _token: '{{ csrf_token() }}'
                },
                beforeSend: function() {
                    showLoading()
                },
                success: function(response) {
                    $('#form-edit').attr('action', "{{ url('master/mlnCode') }}/"+code)
                    $('#code').val(response.kode)
                    $('#keterangan').val(response.keterangan)
                    swal.close();
                }
            })
        })

        $(document).on('click', '.hapus', function(e) {
            e.preventDefault();
            // console.log();
            let code = $(this).data('id');
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
                        url: `{{ url('master/mlnCode') }}/`+code,
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
