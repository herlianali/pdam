@extends('layout.app')
@section('title', 'BA Mutasi Pelanggan')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Pengaduan')
@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">BA Mutasi Pelanggan</a></li>
    <li class="breadcrumb-item active">Laporan Rekapitulasi Perubahan Tarif</li>
</ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Laporan Rekapitulasi Perubahan Tarif</h3>
                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="form-group row">
                                    <div class="form-check">
                                        <input type="radio" name="filter" id="semuakd" value="semua">
                                        <label for="">Pembuatan</label>
                                        <input type="radio" name="filter" id="semuakd" value="semua">
                                        <label for="">Pengesahan</label>
                                        <input type="radio" name="filter" id="semuakd" value="semua">
                                        <label for="">Penerbitan</label>
                                    </div>
                                </div>
                                    <div class="form-group row ">
                                        <label for="keterangan"  class="col-md-3 col-form-label">Periode </label>
                                        <div class="col-md-4">
                                        <input type="date" class="form-control" name="jp_dinas" id="jp_dinas" onkeyup="valueing()">
                                        </div>
                                        <label for="keterangan"  class=" col-form-label">S.D </label>
                                        <div class="col-md-4">
                                        <input type="date" class="form-control" name="jp_dinas" id="jp_dinas" onkeyup="valueing()">
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label for="wilayah" class="col-md-3 col-form-label"> Wilayah </label>
                                        <div class="col-md-7">
                                            <select class="form-control" disabled id="wilayah" onkeyup="valueing()">

                                                <option value="wilayah T" >T - Timur </option>
                                                <option value="wilayah B" disabled> B - Barat</option>

                                            </select>
                                        </div>
                                    </div>
                                
                            
                                <button type="submit" class=" btn-info btn-sm float-right">Preview</button>
                                <button class=" btn-danger btn-sm float-right">Batal</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Print preview Laporan Rekapitulasi Perubahan Tarif</h3>
                            <a href="" class="btn btn-sm btn-success float-right"><i class="fas fa-print"></i> Cetak</a>
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
        $(function () {
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
            function deletepDinas (id) {
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
            }).then(function (e) {
                if (e.value === true) {
                    let token = "{{ csrf_token() }}"
                    let _url = `/panggilanDinas/${id}`
                    console.log(_url)

                    $.ajax({
                        type: 'DELETE',
                        url: _url,
                        data: {_token: token},
                        success: function (resp) {
                            if (resp.success) {
                                swal.fire("Selesai!", resp.message, "Berhasil");
                                location.reload();
                            }else{
                                swal.fire("Gagal!", "Terjadi Kesalahan.", "error");
                            }
                        },
                        error: function(resp) {
                            swal.fire("Gagal!", "Terjadi Kesalahan.", "error" )
                        }
                    })
                }else{
                    e.dismiss;
                }
            }, function(dismiss) {
                return false;
            });
        }
    </script>
@endpush
