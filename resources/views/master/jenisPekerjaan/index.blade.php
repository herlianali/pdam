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
                            <button type="button"
                                class="btn btn-xs btn-success float-right"
                                data-toggle="modal"
                                data-target="#filter">
                                <i class="fas fa-print"></i> Cetak
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <form class="form-horizontal" action="{{ route('jenisPekerjaan.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="jns_pekerjaan" class="col-md-2 col-form-label">Jenis Pekerjaan</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="jns_pekerjaan" onkeyup="valueing()">
                                            </div>
                                            {{-- <div class="col-md-3">
                                                <button class="btn btn-default btn-mt-2" type="button" data-toggle="modal" data-target="#pegawai"><i class="fas fa-search fa-fw"></i> Pilih Pegawai</button>
                                            </div> --}}
                                        </div>
                                        <div class="form-group row">
                                            <label for="keterangan" class="col-md-2 col-form-label">Keterangan</label>
                                            <div class="col-md-8">
                                                <textarea class="form-control" onkeyup="valueing()" name="keterangan"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="jenis_bonp" class="col-md-2 col-form-label">Jenis BON P </label>
                                            <div class="col-md-8">
                                                <select class="form-control" onkeyup="valueing()" name="jenis_bonp">
                                                    @foreach ($jnsBonp as $jb)
                                                        <option value="{{ $jb->kode }}">{{ $jb->kode }} - {{ $jb->keterangan }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="beban" class="col-md-2 col-form-label">Beban </label>
                                            <div class="col ml-3 row">
                                                <div class="col-md-1">
                                                    <input type="radio" class="form-check-input" name="beban_plg" value="1">
                                                    <label class="form-check-label">Ya</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="radio" class="form-check-input" name="beban_plg" value="0">
                                                    <label class="form-check-label">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kel_bonp" class="col-md-2 col-form-label">Kel. BON P </label>
                                            <div class="col-md-8">
                                                <select class="form-control" onkeyup="valueing()" name="kel_bonp">
                                                    <option value="T">T - TDA </option>
                                                    <option value="K">K - Kebocoran </option>
                                                    <option value="M">M - Meter </option>
                                                    <option value="S">S - Segel </option>
                                                    <option value="A">A - Air Kotor </option>
                                                    <option value="R">R - Stop Kran </option>
                                                    <option value="L">L - Lain-Lain </option>
                                                    <option value="B">B - Bukaan </option>
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
                                            <td>
                                                @if ($jenisPekerjaan->beban_plg == "0")
                                                    Tidak
                                                @else
                                                    Ya
                                                @endif
                                            </td>
                                            <td>{{ $jenisPekerjaan->kel_bonp }}</td>
                                            <td>
                                                <button type="submit"
                                                        class="btn btn-xs btn-danger hapus"
                                                        data-id="{{ $jenisPekerjaan->jns_pekerjaan }}">
                                                        <i class="fas fa-trash-alt"></i>
                                                        Hapus
                                                </button>
                                                <button type="button"
                                                        class="btn btn-xs btn-success edit"
                                                        data-id="{{ $jenisPekerjaan->jns_pekerjaan }}"
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
                        @include('master.jenisPekerjaan.filter')
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
                "lengthChange": false,
                "autoWidth": false,
                "responsive": true,
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
            let jns_pekerjaan = $(this).data('id')
            $.ajax({
                type: "GET",
                url: `{{ url('master/jenisPekerjaan') }}/`+jns_pekerjaan,
                data: {
                    id: jns_pekerjaan,
                    _token: '{{ csrf_token() }}'
                },
                beforeSend: function() {
                    showLoading()
                },
                success: function(response) {
                    $('#form-edit').attr('action', "{{ url('master/jenisPekerjaan') }}/"+jns_pekerjaan)
                    $('#jns_pekerjaan').val(response.jns_pekerjaan)
                    $('#keterangan').val(response.keterangan)
                    $('#jenis_bonp').val(response.jenis_bonp).change()
                    if(response.beban_plg.trim() === '1'){
                        $('#Ya').attr('checked', '')
                    }else{
                        $('#Tidak').attr('checked', '')
                    }
                    $('#kel_bonp').val(response.kel_bonp.trim()).change()
                    console.log(response.beban_plg.trim());
                    swal.close();
                }
            })
        })

        $(document).on('click', '.hapus', function(e) {
            e.preventDefault();
             //console.log();
            let jns_pekerjaan = $(this).data('id');
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
                        url: `{{ url('master/jenisPekerjaan') }}/`+jns_pekerjaan,
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
