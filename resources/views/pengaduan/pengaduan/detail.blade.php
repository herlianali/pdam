@extends('layout.app')
@section('title', 'Pengaduan')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Pengaduan')
@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Pengaduan</a></li>
    <li class="breadcrumb-item active"> Detail Data Pengaduan</li>
</ol>
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Detail Pengaduan</h3>
                    </div>
               
            <div class="card-body">
            <div class="row mb-5">
                <div class="col-md-1"></div>
                <div class="col-md-12">
                    <form class="form-horizontal">
                     <fieldset>
                        <div class="form-group row">
                            <label for="nopelanggan" class="col-md-2 col-form-label">Nama Pengadu</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="listrik" onkeyup="valueing()">
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="njop" class="col-md-2 col-form-label"> Alamat Pengadu </label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="listrik" onkeyup="valueing()">
                            </div>
                            </div>
                        <div class="form-group row ">
                            <label for="listrik" class="col-md-2 col-form-label">Telepon Pengadu</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="listrik" onkeyup="valueing()">
                            </div>
                            <label for="listrik" class="col-form-label">Periode/Rek</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="listrik" onkeyup="valueing()">
                            </div>
                        </div>
                        </fieldset>
                        
                        <div class="form-group row mt-2">
                            <label for="listrik" class="col-md-2 col-form-label">No Pengaduan</label>
                            <div class="col-md-7">
                                <input type="text" class="form-control" id="listrik" onkeyup="valueing()">
                            </div>
                        </div>
                       
                       
                        <div class="form-group row ">
                            <label for="lebarjalan" class="col-md-2 col-form-label">Tgl Pengaduan</label>
                            <div class="col-md-2">
                            <input type="text" class="form-control" id="lebarjln" placeholder="Jalan" onkeyup="valueing()">
                            </div>
                            </div>
                            <div class="form-group row ">
                            <label for="lebarjalan" class="col-md-2 col-form-label">Asal Pengaduan</label>
                            <div class="col-md-2">
                            <input type="text" class="form-control" id="lebarjln" placeholder="Jalan" onkeyup="valueing()">
                            </div>
                            </div>
                            <div class="form-group row ">
                            <label for="lebarjalan" class="col-md-2 col-form-label">Jenis Pengaduan</label>
                            <div class="col-md-2">
                            <input type="text" class="form-control" id="lebarjln" placeholder="Jalan" onkeyup="valueing()">
                            </div>
                            </div>
                            <div class="form-group row ">
                            <label for="lebarjalan" class="col-md-2 col-form-label">Uraian</label>
                            <div class="col-md-2">
                            <input type="text" class="form-control" id="lebarjln" placeholder="Jalan" onkeyup="valueing()">
                            </div>
                            </div>
                            <div class="form-group row ">
                            <label for="lebarjalan" class="col-md-2 col-form-label">Usulan No BonC</label>
                            <div class="col-md-2">
                            <input type="text" class="form-control" id="lebarjln" placeholder="Jalan" onkeyup="valueing()">
                            </div>
                            </div>
                            <div class="form-group row ">
                            <label for="lebarjalan" class="col-md-2 col-form-label">No BonC Mtr Garansi</label>
                            <div class="col-md-2">
                            <input type="text" class="form-control" id="lebarjln" placeholder="Jalan" onkeyup="valueing()">
                            </div>
                            </div>
                            <div class="form-group row ">
                            <input type="checkbox"> </input>
                            <label for="lebarjalan" class="col-md-2 col-form-label">Buat Bon C Tanggal</label>
                            <div class="col-md-2">
                            <input type="text" class="form-control" id="lebarjln" placeholder="Jalan" onkeyup="valueing()">
                            </div>
                        
                            &nbsp;
                            <div class="col-md-2">
                            <input type="text" class="form-control" id="lebarjln" placeholder="Jalan" onkeyup="valueing()">
                            </div>
                            </div>
                            <div class="form-group row mt-2">
                            <label for="lebarjalan" class="col-md-2 col-form-label">Sumber Bon C </label>
                            <div class="col-md-2">
                            <input type="text" class="form-control" id="lebarjln" placeholder="Jalan" onkeyup="valueing()">
                            </div>
                            </div>
                        
                    
                    </form>
                </div>
                </div>
               
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
