@extends('layout.app')
@section('title', 'Jenis Pekerjaan')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Master')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Jenis Pekerjaan</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Jenis Pekerjaan</h3>
                            <a href="{{ route('printjenisPekerjaan') }}" class="btn btn-xs btn-success float-right"><i class="fas fa-print"></i> Cetak</a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="jns_pekerjaan" class="col-md-2 col-form-label">Jenis Pekerjaan</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="jns_pekerjaan" name="jns_pekerjaan" onkeyup="valueing()">
                                            </div>
                                            <div class="col-md-3">
                                                <button class="btn btn-default btn-mt-2" type="button" data-toggle="modal" data-target="#pegawai"><i class="fas fa-search fa-fw"></i> Pilih Pegawai</button>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="keterangan" class="col-md-2 col-form-label">Keterangan</label>
                                            <div class="col-md-8">
                                                <textarea class="form-control" id="keterangan" onkeyup="valueing()" name="keterangan"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="jenis_bonp" class="col-md-2 col-form-label">Jenis BON P </label>
                                            <div class="col-md-8">
                                                <select class="form-control" id="jenis_bonp" onkeyup="valueing()" name="jenis_bonp">
                                                    @foreach ($jnsBonp as $jb)
                                                        <option value="{{ $jb->kode }}">{{ $jb->kode }} - {{ $jb->keterangan }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="beban" class="col-md-2 col-form-label">Beban </label>
                                            <div class="col-md-8">
                                                <select class="form-control" id="beban" onkeyup="valueing()" name="beban">
                                                    <option value=""> </option>
                                                    <option value=""> </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kel_bonp" class="col-md-2 col-form-label">Kel. BON P </label>
                                            <div class="col-md-8">
                                                <select class="form-control" id="kel_bonp" onkeyup="valueing()" name="kel_bonp">
                                                    <option value=""> </option>
                                                    <option value=""> </option>
                                                </select>
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
                                        <th>Jenis Pekerjaan</th>
                                        <th>Keterangan</th>
                                        <th>Jenis BON P</th>
                                        <th>Beban</th>
                                        <th>Kel. BON P</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jnsPekerjaan as $jenisPekerjaan)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $jenisPekerjaan->jns_pekerjaan }}</td>
                                            <td>{{ $jenisPekerjaan->keterangan }}</td>
                                            <td>{{ $jenisPekerjaan->jenis_bonp }}</td>
                                            <td>{{ $jenisPekerjaan->beban_plg }}</td>
                                            <td>{{ $jenisPekerjaan->kel_bonp }}</td>
                                            <td>
                                                <button type="submit" class="btn btn-xs btn-danger "
                                                    onclick="deletejenisPekerjaan({{ $jenisPekerjaan->id }})"><i
                                                        class="fas fa-trash-alt"></i> Hapus</button>
                                                <button type="button" class="btn btn-xs btn-success " data-toggle="modal"
                                                    data-target="#edit"><i class="fas fa-edit"></i> Edit</button>
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
                    "sSearch": "Kode Petugas/ NIP : "
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

        function deletejenisPekerjaan(id) {
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
                    let _url = `/master/deletejenisPekerjaan/${id}`
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
            if (document.getElementById('kdptg').value === "" || document.getElementById('nip').value === "" || document
                .getElementById('nama').value === "") {
                document.getElementById('batal').disabled = true
                document.getElementById('simpan').disabled = true
            } else {
                document.getElementById('batal').disabled = false
                document.getElementById('simpan').disabled = false
            }
        }
    </script>
@endpush
