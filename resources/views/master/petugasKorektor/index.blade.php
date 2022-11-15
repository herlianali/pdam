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
                <a class="nav-link active" href="{{ route('petugasKorektor.index') }}">Master Petugas</a>
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
                <a class="nav-link" href="{{ route('koreksipetugasKorektor') }}">Koreksi Penugasan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('viewsisapetugasKorektor') }}">View Sisa Random Penugasan</a>
            </li>
        </ul>
        <div class="card">
            <div class="card-body">
                <div class="row mb-9">
                    <div class="col-md-12">

                <form class="form-horizontal" action="{{ route('petugasEntry.store') }}" method="post">
                    @csrf
                    <div class="form-group row mt-2">
                        <label for="nip" class="col-md-2 col-form-label">NIP </label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="nip" name="nip"
                                onkeyup="valueing()" readonly>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="nama" class="col-md-2 col-form-label">Nama </label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="nama"
                                name="nama"onkeyup="valueing()" readonly>
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-default btn-mt-2" type="button"
                                data-toggle="modal"data-target="#cs"><i class="fas fa-search fa-fw"></i> Pilih
                                Pegawai</button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="beban" class="col-md-2 col-form-label">Jabatan </label>
                        <div class="col ml-3 row">

                            <div class="col-md-1">
                                <input type="radio" class="form-check-input" name="jabatan" value="0">
                                <label class="form-check-label">Konektor</label>
                            </div>
                            <div class="col-md-6">
                                <input type="radio" class="form-check-input" name="jabatan" value="1">
                                <label class="form-check-label">Senior Staf</label>
                            </div>
                            <div class="col-md-6">
                                <input type="radio" class="form-check-input" name="jabatan" value="2">
                                <label class="form-check-label">Supervisor</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="" class="col-md-2 col-form-label"></label>
                        <div class="col-md-7">
                            <input type="checkbox" name="status" id="status">
                            <label for="potensial" class="col-md-2 col-form-label">Aktif</label>
                        </div>
                    </div>
                    <div class="form-group row mt-2 ">
                        <label for="tombol" class="col-md-6 col-form-label"></label>
                        <div class="col-md-5">
                            <button class="btn btn-success btn-sm" type="submit"> Simpan</button>
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
                            <th >NIP </th>
                            <th >Nama</th>
                            <th >Aktif</th>
                            <th >Jabatan</th>
                            <th >Recid</th>
                            <th >UserAkses</th>
                            <th > Aksi </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($korektor as $petKorektor)
                            <tr>
                                <td>{{ $petKorektor->nip }}</td>
                                <td>{{ $petKorektor->nama }}</td>
                                <td>
                                    @if ($petKorektor->aktif == 1)
                                        <span class="badge badge-success"><i class="fas fa-check-circle"></i></span>
                                    @else
                                        <span class="badge badge-danger"><i class="fas fa-times-circle"></i></span>
                                    @endif
                                </td>
                                <td>{{ $petKorektor->aktif }}</td>
                                <td>{{ $petKorektor->recid }}</td>
                                <td>{{ $petKorektor->userakses }}</td>
                                <td>
                                    <button type="submit"
                                    class="btn btn-danger btn-sm hapus"
                                    data-id="{{ $petKorektor->nip }}">
                                    <i class="fas fa-trash-alt"></i>
                                    Hapus
                                    </button>

                                    <button type="button"
                                    class="btn btn-success btn-sm edit"
                                    data-id="{{ $petKorektor->recid }}"
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
    </section>
    @include('master.petugasKorektor.petcs')
    @include('master.petugasKorektor.edit')
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
                "bInfo": false,
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



        $(document).on('click', '.hapus', function(e) {
            e.preventDefault();
             //console.log();
            let nip = $(this).data('id').trim().replace(/\s/g, '');
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
                        url: `{{ url('master/petugasKorektor') }}/`+nip,
                        data: {
                                _token: token
                            },
                            beforeSend: function() {
                    showLoading()
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


        $(document).on('click', '#pilih', function(e) {
            e.preventDefault();
            let nip = $(this).data('id');
            $.ajax({
                type: "GET",
                url: `{{ url('api/dip') }}/` + nip,
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
                    swal.close();
                    $('.modal').modal('hide');
                }
            })
        })

        $(document).on('click', '.edit', function(e) {
            e.preventDefault();
            let recid = $(this).data('id')
            $.ajax({
                type: "GET",
                url: `{{ url('master/petugasKorektor') }}/`+recid,
                data: {
                    id: recid,
                    _token: '{{ csrf_token() }}'
                },
                beforeSend: function() {
                    showLoading()
                },
                success: function(response) {
                    console.log(response);
                    $('#form-edit').attr('action', "{{ url('master/petugasKorektor') }}/"+recid)
                    $('#nipE').val(response.nip)
                    $('#namaE').val(response.nama)
                    $('#jabatanE').val(response.jabatan)
                    if(response.aktif == 1){
                        $('#aktif').attr('checked', 'checked')
                    }else{
                        $('#aktif').removeAttr('checked', ' ')
                    }
                    swal.close();
                }
            })
        })

        $(document).on('click', 'reset', function() {
            $('#nip').val('')
            $('#nama').val('')
            $("input:radio").removeAttr('checked')
            $('#status').removeAttr("checked");
        })
    </script>
@endpush
