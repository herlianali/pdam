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
                            <a href="{{ route('printgunaPersil') }}" class="btn btn-xs btn-success float-right"><i class="fas fa-print"></i> Cetak Tabel</a>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-8">
                                    <form class="form-horizontal">
                                        <div class="form-group row mt-2">
                                            <label for="kode_merek" class="col-md-2 col-form-label">Kode Merek </label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control" id="kode_merek" name="kode_merek" onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="keterangan" class="col-md-2 col-form-label">Keterangan</label>
                                            <div class="col-md-7">
                                                <textarea class="form-control" id="keterangan" name="keterangan" onkeyup="valueing()"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="induk" class="col-md-2 col-form-label">Induk</label>
                                            <div class="col-md-7">
                                                <select class="form-control" id="induk"  name="induk" onkeyup="valueing()">
                                                    <option value=""> </option>
                                                    <option value=""> </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="kode_tarif" class="col-md-2 col-form-label">Kode Tarif</label>
                                            <div class="col-md-7">
                                                <select class="form-control" id="kode_tarif" name="kode_tarif" onkeyup="valueing()">
                                                    <option value=""> </option>
                                                    <option value=""> </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <label for="" class="col-md-6 col-form-label"></label>
                                            <div class="col-md-6">
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
                                        <th>ID</th>
                                        <th>Kode Guna Pensil</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($gnPersil as $gunaPersil)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $gunaPersil->kd_gunapersil }}</td>
                                            <td>{{ $gunaPersil->keterangan }}</td>
                                            <td>
                                                <button type="submit" class="btn btn-xs btn-danger "
                                                    onclick="deletegunaPersil({{ $gunaPersil->id }})"><i
                                                        class="fas fa-trash-alt"></i> Hapus</button>
                                                <button type="button" class="btn btn-xs btn-success " data-toggle="modal"
                                                    data-target="#form"><i class="fas fa-edit"></i> Edit</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
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
                    "sSearch": "Kode/Keterangan : "
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

        function deletegunaPersil(id) {
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
                    let _url = `/master/deletegunaPersil/${id}`
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
