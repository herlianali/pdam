@extends('layout.app')
@section('title', 'BA Mutasi Pelanggan')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'BA Mutasi Pelanggan')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">BA Mutasi Pelanggan</a></li>
        <li class="breadcrumb-item active">Monitoring Surat Pemberitahuan</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Monitoring Surat Rekategori Tarif ke Pelanggan</h3>
                        </div>
                        <div class="card-body">
                            <div class="row mb-5">
                                <div class="col-md-1"></div>
                                <div class="col-md-12">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="tgl_entri" class="col-md-2 col-form-label">Tgl Entri</label>
                                            <div class="col-md-3">
                                                <input type="date" class="form-control" id="tgl_entri" name="tgl_entri" onkeyup="valueing()">
                                            </div>
                                            <label for="s.d" class="col-form-label">S.D</label>
                                            <div class="col-md-3">
                                                <input type="date" class="form-control" id="tgl_entri1"name="tgl_entri1" onkeyup="valueing()">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <table id="table" class="table table-bordered table-responsive-md table-condensed">
                                <thead>
                                    <tr>
                                        <th>No Pelanggan </th>
                                        <th>Tanggal</th>
                                        <th>Zona</th>
                                        <th>Kode Tarif Lama</th>
                                        <th>Kode Tarif Baru</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- <tr>
                                        <td>1031864</td>
                                        <td>08/10/2020</td>
                                        <td>103</td>
                                        <td>4B.2</td>
                                        <td>3C.2</td>
                                    </tr>
                                    <tr>
                                        <td>1031865</td>
                                        <td>09/10/2020</td>
                                        <td>104</td>
                                        <td>4B.2</td>
                                        <td>3C.2</td>
                                    </tr>
                                    <tr>
                                        <td>1031866</td>
                                        <td>10/10/2020</td>
                                        <td>108</td>
                                        <td>4B.2</td>
                                        <td>3C.2</td>
                                    </tr>
                                    <tr>
                                        <td>1031870</td>
                                        <td>08/10/2020</td>
                                        <td>103</td>
                                        <td>4A.2</td>
                                        <td>3C.2</td>
                                    </tr> --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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

                // "lengthChange": false,
                //  "autoWidth": false,
                //   "responsive": true,
                "oLanguage": {
                    "sSearch": "Keterangan : "
                },
                //  "pageLength": 3
            }).buttons().container().appendTo('#table_wrapper .col-md-1:eq(0)');
            $('#table1').DataTable({
                "paging": true,
                //  "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                //  "autoWidth": false,
                // "responsive": true,
                // "pageLength": 3

            });
        });

        function deletepDinas(id) {
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
                    let _url = `/panggilanDinas/${id}`
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
