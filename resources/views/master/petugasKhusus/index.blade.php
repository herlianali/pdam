@extends('layout.app')
@section('title', 'Petugas Khusus')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Master')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Petugas Khusus</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Petugas Khusus</h3>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('petugasKhusus.store') }}" method="post">
                                @csrf
                                <div class="form-group row mt-2 ">
                                    <label for="nip" class="col-md-2 col-form-label">NIP</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="nip" id="nip" onkeyup="valueing()">
                                    </div>
                                    <button class="btn btn-info  btn-mt-2" type="button" data-toggle="modal"
                                        data-target="#pegawai"><i class="fa fa-search"></i></button>
                                    &nbsp;
                                </div>
                                <div class="form-group row mt-2 ">
                                    <label for="nama" class="col-md-2 col-form-label">Nama </label>
                                    <div class="col-md-6">
                                        <input class="form-control" id="nama" disabled></input>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="keterangan" class="col-md-2 col-form-label">Tugas </label>
                                    &nbsp;
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="tugas" name="tugas" value="K">
                                        <label class="form-check-label">Korektor</label>
                                    </div>
                                    &nbsp;
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="tugas" name="tugas" value="C">
                                        <label class="form-check-label">Pencatat Meter</label>
                                    </div>
                                </div>
                                <div class="form-group row mt-2 ">
                                    <label for="jns_pelanggan" class="col-md-2 col-form-label">Jenis Pelanggan</label>
                                    <div class="col-md-6">
                                        <select class="custom-select" name="jenis_pelanggan" id="jenis_pelanggan">
                                            @foreach ($jns_pelanggan as $pelanggan)
                                                <option value="{{ $pelanggan->jns_pelanggan }}">{{ $pelanggan->jns_pelanggan }} - {{ $pelanggan->keterangan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mt-2 ">
                                    <label for="tombol" class="col-md-6 col-form-label"></label>
                                    <div class="col-md-5">
                                        <button class="btn btn-success btn-sm" type="submit"><i class="far fa-save"></i>
                                            Simpan</button>
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-undo"></i>
                                            Reset</button>
                                    </div>
                                </div>
                            </form>
                            <table id="example" class="table table-bordered table-responsive-md table-condensed" style="width: 100%">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th width="10%">NIP </th>
                                    <th width="20%">Nama</th>
                                    <th width="10%">Tugas</th>
                                    <th width="20%">Jenis Pelanggan</th>
                                    <th width="10%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jenis as $petugasKhusus)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $petugasKhusus->nip }}</td>
                                        <td>{{ $petugasKhusus->nama }}</td>
                                        <td>
                                                @if ($petugasKhusus->tugas == "K")
                                                    K
                                                @else
                                                    C
                                                @endif
                                        </td>
                                        <td>{{ $petugasKhusus->keterangan }}</td>
                                        <td>
                                            <button type="submit"
                                                    class="btn btn-xs btn-danger hapus"
                                                    data-id="{{ $petugasKhusus->nip }}">
                                                    <i class="fas fa-trash-alt"></i>
                                                    Hapus
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
    @include('master.petugasKhusus.petugas')
@endsection

@push('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bs-custom-file-input/bs-custom-file-input.js') }}"></script>
    <script>
        $(function() {
            $(function() {
            $('#example').DataTable({

            //  "lengthChange": false,
            //   "autoWidth": false,
            //   "responsive": true,
            "oLanguage": {
                "sSearch": "Search : "
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

            $("#example1").on("click", ".pilih", function() {
                var currentRow = $(this).closest("tr");
                var nip  = currentRow.find("td:eq(0)").text();
                var nama = currentRow.find("td:eq(1)").text();

                $("#nip").val(nip);
                $("#nama").val(nama);
                $('.modal').modal('hide');
            })
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

        // validasi nip petugas khusu
        // $(document).on('click', '.simpan', function() {
        //     e.preventDefault()
        // })

        $(document).on('click', '.hapus', function(e) {
            e.preventDefault();
            let nip = $(this).data('id').trim().replace(/\s/g, '');
            let token = '{{ csrf_token() }}';
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
                        data: {
                            _token: token
                        },
                        type: "DELETE",
                        url: `{{ url('master/petugasKhusus') }}/`+nip,
                        beforeSend: function() {
                            showLoading()
                        },
                        success: function(response) {
                            console.log(response);
                            swal.fire(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success'
                                )
                                location.reload();
                        }
                    })
                }
            })

        });
    </script>
@endpush
