@extends('layout.app')
@section('title', 'Jenis Pengaduan')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Petugas')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Jenis Pengaduan</li>
    </ol>
@endsection


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Jenis Pengaduan</h3>
                            <a href="{{ route('printPengaduan') }}" class="btn btn-sm btn-success float-right"><i class="fas fa-print"></i> Cetak</a>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-1"></div>
                                <div class="col-md-12">
                                    <form class="form-horizontal" action="{{ route('jenisPengaduan.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group row ">
                                            <label for="kode" class="col-md-3 col-form-label">Kode</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" id="jns_pengaduan" name="jns_pengaduan" onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="jns_keterangan" class="col-md-3 col-form-label">Jenis Keterangan</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" id="keterangan" name="keterangan" onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="sifat_pengaduan" class="col-md-3 col-form-label">Sifat Pengaduan</label>
                                            <div class="col-md-4">
                                                <select class="form-control" id="sifat" name="sifat" onkeyup="valueing()">
                                                    <option value="T"> T- Teknis </option>
                                                    <option value="A"> A- Administrasi </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="reward" class="col-md-3 col-form-label">Reward</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" id="reward" name="reward" onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="" class="col-md-5 col-form-label"></label>
                                            <div class="col-md-4">
                                                <button class="btn btn-success btn-sm" type="submit"><i
                                                        class="far fa-save"></i> Simpan</button>
                                                <button type="submit" class="btn btn-danger btn-sm"><i
                                                        class="fas fa-undo"></i> Batal</button>
                                            </div>
                                        </div>
                                    </form>
                                    <br>
                                    &nbsp;
                                    <table id="table" class="table table-bordered table-responsive-md table-condensed"
                                        style="width: 100%">
                                        <thead>
                                            <tr>
                                                <th>Kode</th>
                                                <th>Jenis Keterangan</th>
                                                <th>Sifat Pengaduan</th>
                                                <th>Reward</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($jenisPengaduans as $jenisPengaduan)
                                                <tr>
                                                    <td>{{ $jenisPengaduan->jns_pengaduan }}</td>
                                                    <td>{{ $jenisPengaduan->keterangan }}</td>
                                                    <td>{{ $jenisPengaduan->sifat }}</td>
                                                    <td>
                                                        @if ($jenisPengaduan->reward === 'Y')
                                                            <span class="badge badge-success"><i
                                                                    class="fas fa-check-circle"></i> Ya</span>
                                                        @else
                                                            <span class="badge badge-danger"><i
                                                                    class="fas fa-times-circle"></i> Tidak</span>
                                                        @endif
                                                    </td>
                                                    <td>

                                                        <form action="{{ route('jenisPengaduan.destroy', $jenisPengaduan->jns_pengaduan) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-xs btn-danger"><i
                                                                class="fas fa-trash-alt"></i> Hapus</button>
                                                            <button type="button" class="btn btn-success btn-xs"
                                                                data-toggle="modal" data-target="#edit{{ $jenisPengaduan->jns_pengaduan }}"><i
                                                                    class="fas fa-edit"></i> Edit</button>
                                                        </form>
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

    {{-- Edit Form --}}
    @include('master.jenisPengaduan.edit')
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

        // function deletejenisPengaduan(jns_pengaduan) {
            // console.log(jns_pengaduan)
            // swal.fire({
            //     title: "Hapus Data?",
            //     icon: 'question',
            //     text: "Apakah Anda Yakin Ingin Menghapus",
            //     type: "warning",
            //     showCancelButton: !0,
            //     confirmButtonColor: "#e74c3c",
            //     confirmButtonText: "Iya",
            //     cancelButtonText: "Tidak",
            //     reverseButtons: !0
            // }).then(function(e) {
            //     if (e.value === true) {
            //         let token = "{{ csrf_token() }}"
            //         let _url = `/master/jenisPengaduan/${id}`
            //         console.log(_url)

            //         $.ajax({
            //             type: 'DELETE',
            //             url: _url,
            //             data: {
            //                 _token: token
            //             },
            //             success: function(resp) {
            //                 if (resp.success) {
            //                     swal.fire("Selesai!", resp.message, "success");
            //                     location.reload();
            //                 } else {
            //                     swal.fire("Gagal!", "Terjadi Kesalahan.", "error");
            //                 }
            //             },
            //             error: function(resp) {
            //                 swal.fire("Gagal!", "Terjadi Kesalahan.", "error")
            //             }
            //         })
            //     } else {
            //         e.dismiss;
            //     }
            // }, function(dismiss) {
            //     return false;
            // });
        // }

        // $(document).ready(function($) {
        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': "{{ csrf_token() }}"
        //         }
        //     });

        //     $('body').on('click', '.edit', function() {
        //         var id = $(this).data('id');

        //
        //     })
        // })
    </script>
@endpush
