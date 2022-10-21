@extends('layout.app')
@section('title', 'Petugas Kontrol')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Master')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Petugas Kontrol</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Petugas Kontrol</h3>
                            <a href="{{ route('printpetugasKontrol') }}" class="btn btn-xs btn-success float-right"><i class="fas fa-print"></i> Cetak</a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <form class="form-horizontal" action="{{ route('petugasKontrol.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="kd_ptgktrl" class="col-md-2 col-form-label">Kode Petugas</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="kd_ptgktrl" name="kd_ptgktrl" onkeyup="valueing()">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="checkbox" name="is_satgas">
                                                <label class="col-form-label" for="is_satgas">Is Satgas</label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nip" class="col-md-2 col-form-label">NIP Pegawai</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="nip" name="nip" onkeyup="valueing()">
                                            </div>
                                            <div class="col-md-3">
                                                <button class="btn btn-default btn-mt-2" type="button" data-toggle="modal"
                                                    data-target="#pegawai"><i class="fas fa-search fa-fw"></i> Pilih
                                                    Pegawai</button>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nama" class="col-md-2 col-form-label">Nama Pegawai</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="nama" name="nama" onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2 ">
                                            <label for="tombol" class="col-md-7 col-form-label"></label>
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
                            <table id="example2" class="table table-bordered table-responsive-md table-condensed"
                                style="width: 100%">
                                <thead>
                                    <tr>
                                       
                                        <th>Kode Petugas</th>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Is Satgas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($petugas as $ptKontrol)
                                        <tr>
                                           
                                            <td>{{ $ptKontrol->kd_ptgktrl }}</td>
                                            <td>{{ $ptKontrol->nip }}</td>
                                            <td>{{ $ptKontrol->nama }}</td>
                                            <td>
                                                @if ($ptKontrol->is_satgas == 1)
                                                    <span class="badge badge-success"><i
                                                        class="fas fa-check-circle"></i> Ya</span>
                                                @else
                                                    <span class="badge badge-danger"><i
                                                            class="fas fa-times-circle"></i> Tidak</span>
                                                @endif
                                            </td>
                                            <td>
                                                    <button type="submit"
                                                    class="btn btn-danger btn-sm hapus"
                                                    data-id="{{ $ptKontrol->kd_ptgktrl }}">
                                                    <i class="fas fa-trash-alt"></i>
                                                    Hapus
                                            </button>
                                            <button type="button"
                                                    class="btn btn-success btn-sm edit"
                                                    data-id="{{ $ptKontrol->kd_ptgktrl }}"
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

    @include('master.petugasKontrol.edit')
    @include('master.petugasKontrol.petugas')
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

        $(document).on('click', '.hapus', function(e) {
            e.preventDefault();
            //  console.log('respon');
            let kd_ptgktrl = $(this).data('id');
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
                        url: `{{ url('master/petugasKontrol') }}/`+kd_ptgktrl,
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

        $(document).on('click', '.edit', function(e) {
            e.preventDefault();
            let kd_ptgktrl = $(this).data('id')
            $.ajax({
                type: "GET",
                url: `{{ url('master/petugasKontrol') }}/`+kd_ptgktrl,
                data: {
                    id: kd_ptgktrl,
                    _token: '{{ csrf_token() }}'
                },
                // beforeSend: function() {
                //     showLoading()
                // },
                success: function(response) {
                    $('#form-edit').attr('action', "{{ url('master/petugasKontrol') }}/"+kd_ptgktrl)
                    $('#kd_ptgktrl').val(response.kd_ptgktrl)
                    $('#nip').val(response.nip)
                    $('#nama').val(response.nama)
                    // $('#satgas').val(response.satgas)
                    swal.close();
                }
            })
        })


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


        // function deletePetugasKontrol(id) {
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
        //             let _url = `/master/deletePetugasKontrol/${id}`
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
        //                         swal.fire("Gagal!", "Terjadi Anjayy.", "error");
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
