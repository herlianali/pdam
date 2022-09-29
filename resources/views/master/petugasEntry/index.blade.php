@extends('layout.app')
@section('title', 'Petugas Entry')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Master')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Petugas Entry</li>
    </ol>
@endsection


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Petugas Entry</h3>
                            <a href="{{ route('printpetugasEntry') }}" class="btn btn-xs btn-success float-right"><i
                                    class="fas fa-print"></i> Cetak</a>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-8">
                                    <form class="form-horizontal" action="{{ route('petugasEntry.store') }}" method="post">
                                        @csrf
                                        <div class="form-group row mt-2 ">
                                            <label for="kode_ptgs" class="col-md-4 col-form-label">Kode Petugas </label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="kode_ptgs" id="kode_ptgs"onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2 ">
                                            <label for="jp_dinas" class="col-md-4 col-form-label">NIP </label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="nip" id="nip" onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2 ">
                                            <label for="nama" class="col-md-4 col-form-label">Nama </label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="nama" id="nama" onkeyup="valueing()">
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

                            <table id="table" class="table table-bordered table-responsive-md table-condensed">
                                <thead>
                                    <tr>

                                        <th width="10%">Kode Petugas </th>
                                        <th width="10%">NIP</th>
                                        <th width="20%">Nama</th>
                                        <th width="10%">Status</th>
                                        <th width="10%">ISCS</th>
                                        <th width="20%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pEntry as $ptsEntry)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $ptsEntry->nip }}</td>
                                            <td>{{ $ptsEntry->nama }}</td>
                                            <td>{{ $ptsEntry->status }}</td>
                                            <td>{{ $ptsEntry->iscs }}</td>
                                            <td>
                                                <button type="submit" class="btn btn-xs btn-danger "
                                                    onclick="deletepetugasEntry({{ $ptsEntry->id }})"><i
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
    </section>

    {{-- Edit Form --}}
    @include('master.petugasEntry.form')
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

        function deletepetugasEntry(id) {
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
                    let _url = `/master/deletepetugasEntry/${id}`
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
