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
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <div class="form-group row mt-2 ">
                                                <label for="kode" class="col-md-3 col-form-label">Pilih Code</label>
                                                <div class="col-md-6">
                                                    <select class="form-control" id="kode" onkeyup="valueing()">
                                                        <option value="L"> L</option>
                                                        <option value="M"> M </option>
                                                        <option value="N"> N </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label for="nama" class="col-md-3 col-form-label">Code</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" id="nama" name="kode" onkeyup="valueing()">
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label for="keterangan" class="col-md-3 col-form-label">Keterangan </label>
                                                <div class="col-md-6">
                                                    <textarea class="form-control" id="keterangan" name="keterangan" onkeyup="valueing()"></textarea>
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
                                                <th>Kode</th>
                                                <th>Keterangan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($ml as $mln)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td>{{ $mln->code }}</td>
                                                    <td>{{ $mln->keterangan }}</td>

                                                    <td>
                                                        <button type="submit" class="btn btn-xs btn-danger "
                                                            onclick="deletemlnCode({{ $mln->id }})"><i
                                                                class="fas fa-trash-alt"></i> Hapus</button>
                                                        <button type="button" class="btn btn-xs btn-success "
                                                            data-toggle="modal" data-target="#edit"><i
                                                                class="fas fa-edit"></i> Edit</button>
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

        function deletemlnCode(id) {
            console.log(id)
            swal.fire({
                title: "Hapus Data?",
                icon: 'question',
                text: "Apakah Anda Yakin Ingin Menghapus",
                type: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#e74c3c",
                confirmButtonText: "Iya",
                cancelButtonText: "Tidak",
                reverseButtons: !0
            }).then(function(e) {
                if (e.value === true) {
                    let token = "{{ csrf_token() }}"
                    let _url = `/master/deletemlnCode/${id}`
                    console.log(_url)

                    $.ajax({
                        type: 'DELETE',
                        url: _url,
                        data: {
                            _token: token
                        },
                        success: function(resp) {
                            if (resp.success) {
                                swal.fire("Selesai!", resp.message, "success");
                                location.reload();
                            } else {
                                swal.fire("Gagal!", "Terjadi Kesalahan.", "error");
                            }
                        },
                        error: function(resp) {
                            swal.fire("Gagal!", "Terjadi Kesalahan.", "error")
                        }
                    })
                } else {
                    e.dismiss;
                }
            }, function(dismiss) {
                return false;
            });
        }
    </script>
@endpush
