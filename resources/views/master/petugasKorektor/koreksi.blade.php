@extends('layout.app')
@section('title', 'Petugas Korektor')


@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Master')
@section('breadcrumb')

@endsection

@section('content')
    <section class="content">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('petugasKorektor.index') }}">Master Petugas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('laporanpetugasKorektor') }}">Laporan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('randompetugasKorektor') }}">Random Penugasan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('viewptspetugasKorektor') }}">View Penugasan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('monitoringpetugasKorektor') }}">Monitoring Petugas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('koreksipetugasKorektor') }}">Koreksi Penugasan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('viewsisapetugasKorektor') }}">View Sisa Random Penugasan</a>
            </li>
        </ul>

        <div class="card">

            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-md-12">
                        <form class="form-horizontal" action="" method="post">
                            @csrf
                            <div class="form-group row mt-2">
                                <label for="nip" class="col-md-2 col-form-label">NIP </label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="nip" name="nip">
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label for="nama" class="col-md-2 col-form-label">Nama </label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="nama" name="nama">
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-default btn-mt-2" type="button"
                                        data-toggle="modal"data-target="#cs"><i class="fas fa-search fa-fw"></i> Pilih
                                        Pegawai</button>
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label for="periode" class="col-md-2 col-form-label">Periode </label>
                                <div class="col-md-3">
                                    <input type="month" class="form-control" id="periode" name="periode">
                                </div>
                                <label for="date" class="col-md-2 col-form-label">Tanggal Penugasan
                                </label>
                                <div class="col-md-3">
                                    <input type="date" class="form-control" id="date" name="date" value="">
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label for="" class="col-md-2 col-form-label"></label>
                                <div class="col-md-7">
                                    <input type="checkbox">
                                    <label for="potensial" class="col-md-2 col-form-label">Potensial</label>
                                </div>
                            </div>
                            <div class="form-group row mt-2 ">
                                <label for="" class="col-md-6 col-form-label"></label>
                                <div class="col-md-6">
                                    <button class="btn btn-success btn-sm float-right" type="submit">Tampil</button>
                                </div>
                            </div>
                        </form>

                    <table id="example" class="table table-bordered table-responsive-md table-condensed">
                        <thead>
                            <tr>
                                <th width="20%">NIP</th>
                                <th width="20%">Nama </th>
                                <th width="10%">Recid</th>
                                <th width="20%">Zona</th>
                                <th width="20%">Bundel</th>
                                <th width=10%>Aksi</th>

                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
            </div>
    </section>

    {{-- @include('master.petugasKorektor.form') --}}
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
                "paging": true,
                "lengthChange": false,
                "oLanguage": {
                    "sSearch": "Search: "
                },
                "bInfo": false,
                "ordering": true,
                "autoWidth": false,
                "responsive": true,
                "pageLength": 5
            })
            $('#example1').DataTable({
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

        $(document).on('click', '.edit', function(e) {
            e.preventDefault();
            let recid = $(this).data('id')
            $.ajax({
                type: "GET",
                url: `{{ url('master/koreksipetugasKorektor') }}/`+recid,
                data: {
                    id: recid,
                    _token: '{{ csrf_token() }}'
                },
                beforeSend: function() {
                    showLoading()
                },
                success: function(response) {
                    $('#form-edit').attr('action', "{{ url('master/koreksipetugasKorektor') }}/"+recid)
                    $('#nip1').val(response.nip)
                    $('#nama1').val(response.nama)
                    $('#recid1').val(response.recid)
                    $('#zona1').val(response.zona)
                    $('#no_bundel1').val(response.no_bundel)

                    swal.close();
                }
            })
        })


        $(document).on('click', '.hapus', function(e) {
            e.preventDefault();
            let recid = $(this).data('id')
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
                        url: `{{ url('master/koreksipetugasKorektor') }}/` + recid,
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
    </script>
@endpush
