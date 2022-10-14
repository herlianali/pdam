@extends('layout.app')
@section('title', 'Pelanggan Meter C')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Master')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Pelanggan Meter C</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Pelanggan Meter C</h3>

                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <form class="form-horizontal">
                                        <div class="form-group row ">
                                            <label for="no_pelanggan" class="col-md-3 col-form-label">Nomor Pelanggan</label>
                                            <div class="col-md-5">
                                                <input type="text" class="form-control" id="no_pelanggan" name="no_pelanggan" onkeyup="valueing()">
                                            </div>
                                            <button class="btn btn-success btn-sm" type="submit"><i
                                                    class="far fa-save"></i> Simpan</button>
                                            &nbsp;
                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                    class="fas fa-trash"></i> Bersihkan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <table id="table" class="table table-bordered table-responsive-md table-condensed"
                                style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Pelanggan</th>
                                        <th>Petugas Entri</th>
                                        <th>Tanggal Entri</th>
                                        <th>Aktif</th>
                                        <th>Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($plgMeterC as $plgnMeterC)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $plgnMeterC->no_plg }}</td>
                                            <td>{{ $plgnMeterC->ptgentri }}</td>
                                            <td>{{ $plgnMeterC->tgl_entry }}</td>
                                            <td>{{ $plgnMeterC->aktif }}</td>
                                            <td>
                                                <button type="submit" class="btn btn-xs btn-danger "
                                                    onclick="deletepelangganMeterC({{ $plgnMeterC->id }})"><i
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
    @include('master.pelangganMeterC.edit')

@endsection

@push('js')
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
                    "sSearch": "No Pelanggan : "
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

        function deletePelangganMeterC(id) {
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
                    let _url = `/pelangganMeterC/${id}`
                    console.log(_url)

                    $.ajax({
                        type: 'DELETE',
                        url: _url,
                        data: {
                            _token: token
                        },
                        success: function(resp) {
                            if (resp.success) {
                                swal.fire("Selesai!", resp.message, "Berhasil");
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
