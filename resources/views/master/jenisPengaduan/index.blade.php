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
                            <button type="button"
                            class="btn btn-xs btn-success filter float-right"
                            data-toggle="modal"
                            data-target="#filter">
                            <i class="fas fa-print"></i>
                            Print
                    </button>
                          
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
                                                <input type="text" class="form-control"  name="jns_pengaduan" onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="jns_keterangan" class="col-md-3 col-form-label">Jenis Keterangan</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control"  name="keterangan" onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="sifat_pengaduan" class="col-md-3 col-form-label">Sifat Pengaduan</label>
                                            <div class="col-md-4">
                                                <select class="form-control"  name="sifat" onkeyup="valueing()">
                                                    <option value="T"> T- Teknis </option>
                                                    <option value="A"> A- Administrasi </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="reward" class="col-md-3 col-form-label">Reward</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control"  name="reward" onkeyup="valueing()">
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
                                                            <button type="submit"
                                                                    class="btn btn-xs btn-danger hapus"
                                                                    data-id="{{ $jenisPengaduan->jns_pengaduan }}">
                                                                    <i class="fas fa-trash-alt"></i>
                                                                    Hapus
                                                            </button>
                                                            <button type="button"
                                                                    class="btn btn-xs btn-success edit"
                                                                    data-id="@php trim($jenisPengaduan->jns_pengaduan) @endphp"
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
                            </div>
                        </div>
                    </div>
                </div>
    </section>

    {{-- Edit Form --}}
    @include('master.jenisPengaduan.edit')
    @include('master.jenisPengaduan.filter')
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
                    "sSearch": "Search : "
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
            let jns_pengaduan = $(this).data('id')
            $.ajax({
                type: "GET",
                url: `{{ url('master/jenisPengaduan') }}/`+jns_pengaduan,
                data: {
                    id: jns_pengaduan,
                    _token: '{{ csrf_token() }}'
                },
                beforeSend: function() {
                    showLoading()
                },
                success: function(response) {
                    console.log(response)
                    $('#form-edit').attr('action', "{{ url('master/jenisPengaduan') }}/"+jns_pengaduan)
                    $('#jns_pengaduan').val(response.jns_pengaduan)
                    $('#keterangan').val(response.keterangan)
                    $('#sifat').val(response.sifat)
                    $('#pelayanan').val(response.pelayanan)
                    $('#reward').val(response.reward)
                    swal.close();
                }
            })
        })

        $(document).on('click', '.hapus', function(e) {
            e.preventDefault();
            let jns_pengaduan = $(this).data('id');
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
                        url: `{{ url('master/jenisPengaduan') }}/`+jns_pengaduan,
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
