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
                                            <label for="kd_ptgentry" class="col-md-2 col-form-label">Kode Petugas </label>
                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"></span>
                                                <input type="text" class="form-control" name="kd_ptgentry" id="kd_ptgentry"onkeyup="valueing()" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <button class="btn btn-default btn-mt-2" type="button" data-toggle="modal"data-target="#pegawai"><i class="fas fa-search fa-fw"></i> Pilih Pegawai</button>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2 ">
                                            <label for="nip" class="col-md-2 col-form-label">NIP </label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="nip" name="nip"  onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2 ">
                                            <label for="nama" class="col-md-2 col-form-label">Nama </label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="nama" name="nama"  onkeyup="valueing()">
                                            </div>
                                        </div>
                                          <input type="hidden" name="aktif" value="1">

                                        <div class="form-group row mt-2 ">
                                            <label for="" class="col-md-5 col-form-label"></label>
                                            <div class="col-md-5">
                                                <button class="btn btn-success btn-sm" type="submit"><i
                                                        class="far fa-save"></i> Simpan</button>
                                                <button type="reset" class="btn btn-danger btn-sm"><i
                                                        class="fas fa-undo"></i> Reset</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>

                            <table id="example2" class="table table-bordered table-responsive-md table-condensed">
                                <thead>
                                    <tr>

                                        <th width="10%">Kode Petugas </th>
                                        <th width="10%">NIP</th>
                                        <th width="20%">Nama</th>
                                        <th width="10%">Aktif</th>
                                        <th width="20%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pEntry as $ptsEntry)
                                        <tr>
                                            <td>{{ $ptsEntry->kd_ptgentry }}</td>
                                            <td>{{ $ptsEntry->nip }}</td>
                                            <td>{{ $ptsEntry->nama }}</td>
                                            <td>{{ $ptsEntry->aktif }}</td>
                                           
                                            <td>
                                                <button type="submit"
                                                class="btn btn-danger btn-sm hapus"
                                                data-id="{{ $ptsEntry->kd_ptgentry }}">
                                                <i class="fas fa-trash-alt"></i>
                                                Hapus
                                                 </button>
                                                 <button type="button"
                                                class="btn btn-success btn-sm edit"
                                                data-id="{{ $ptsEntry->kd_ptgentry }}"
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
    @include('master.petugasEntry.form')
    @include('master.petugasEntry.tabelPegawai')
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
            $('#example1').DataTable({
                "paging": true,
                "lengthChange": false,
                "oLanguage": {
                    "sSearch": "NIP/NAMA : "
                },
                "bInfo" : false,
                "ordering": true,
                "autoWidth": false,
                "responsive": true,
                "pageLength": 5
            })
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
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
            let kd_ptgentry = $(this).data('id')
            $.ajax({
                type: "GET",
                url: `{{ url('master/petugasEntry') }}/`+kd_ptgentry,
                data: {
                    id: kd_ptgentry,
                    _token: '{{ csrf_token() }}'
                },
                beforeSend: function() {
                    showLoading()
                },
                success: function(response) {
                    $('#form-edit').attr('action', "{{ url('master/petugasEntry') }}/"+kd_ptgentry)
                    $('#kd_ptgentry1').val(response.kd_ptgentry.trim()).change()
                    $('#nama1').val(response.nama)
                    $('#nip1').val(response.nip)
                    $('#aktif').val(response.aktif)
                  
                    swal.close();
                }
            })
        })


        $(document).on('click', '.hapus', function(e) {
            e.preventDefault();
             //console.log();
            let kd_ptgentry = $(this).data('id').trim().replace(/\s/g, '');
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
                        url: `{{ url('master/petugasEntry') }}/`+kd_ptgentry,
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

        $(document).on('click', '#pilih', function(e) {
            e.preventDefault();
            let nip = $(this).data('id');
            $.ajax({
                type: "GET",
                url: `{{ url('api/dip') }}/`+nip,
                data: {
                    id: nip,
                    _token: '{{ csrf_token() }}'
                },
                beforeSend: function() {
                    showLoading()
                },
                success: function(res) {
                    $('#nip').val(res.nip)
                    $('#nama').val(res.nama)
                    $("#pegawai").modal('hide');
                    swal.close();
                }
            })
        })

        
        // function deletepetugasEntry(id) {
        //     console.log(id)
        //     swal.fire({
        //         title: "Hapus Data?",
        //         icon: 'question',
        //         text: "Apakah Anda Yakin Ingin Menghapus",
        //         type: "warning",
        //         showCancelButton: !0,
        //         confirmButtonColor: "#e74c3c",
        //         confirmButtonText: "Iya",
        //         cancelButtonText: "Tidak",
        //         reverseButtons: !0
        //     }).then(function(e) {
        //         if (e.value === true) {
        //             let token = "{{ csrf_token() }}"
        //             let _url = `/master/deletepetugasEntry/${id}`
        //             console.log(_url)

        //             $.ajax({
        //                 type: 'DELETE',
        //                 url: _url,
        //                 data: {
        //                     _token: token
        //                 },
        //                 success: function(resp) {
        //                     if (resp.success) {
        //                         swal.fire("Selesai!", resp.message, "success");
        //                         location.reload();
        //                     } else {
        //                         swal.fire("Gagal!", "Terjadi Kesalahan.", "error");
        //                     }
        //                 },
        //                 error: function(resp) {
        //                     swal.fire("Gagal!", "Terjadi Kesalahan.", "error")
        //                 }
        //             })
        //         } else {
        //             e.dismiss;
        //         }
        //     }, function(dismiss) {
        //         return false;
        //     });
        // }
    </script>
@endpush
