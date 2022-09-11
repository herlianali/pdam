@extends('layout.app')
@section('title', 'Riwayat Pemakaian')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Pengaduan')
@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Pengaduan</a></li>
    <li class="breadcrumb-item active">Riwayat Pemakaian</li>
</ol>
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Riwayat Pemakaian</h3>
                    </div>
               
            <div class="card-body">
            <div class="row mb-5">
                <div class="col-md-1"></div>
                <div class="col-md-9">
                    <form class="form-horizontal">
                     
                        <div class="form-group row mt-2 ">
                            <label for="nopelanggan" class="col-md-3 col-form-label"> Dari Periode </label>
                            <div class="col-md-2">
                            <input type="text" class="form-control" id="nopelanggan" onkeyup="valueing()">
                            </div>
                            <label for="nopelanggan" class="col-form-label"> s.d. </label>
                            <div class="col-md-2">
                            <input type="text" class="form-control" id="nopelanggan" onkeyup="valueing()">
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="njop" class="col-md-3 col-form-label"> No Pelanggan </label>
                            <div class="col-md-2">
                            <input type="text" class="form-control" id="njop" onkeyup="valueing()">
                            </div>
                            </div>
                        <div class="form-group row mt-2">
                            <label for="listrik" class="col-md-3 col-form-label">Nama</label>
                            <div class="col-md-7">
                                <input type="text" class="form-control" id="listrik" onkeyup="valueing()">
                            </div>
                        </div>
                       
                        <div class="form-group row ">
                            <label for="lebarjalan" class="col-md-3 col-form-label">Alamat</label>
                            <div class="col-md-2">
                            <input type="text" class="form-control" id="lebarjln" placeholder="Jalan" onkeyup="valueing()">
                            </div>
                            <label for="lebarjalan" class="col-form-label">Gang</label>
                            <div class="col-md-1">
                            <input type="text" class="form-control" id="lebarjln" onkeyup="valueing()">
                            </div>
                            <label for="lebarjalan" class="col-form-label">No</label>
                            <div class="col-md-1">
                            <input type="text" class="form-control" id="lebarjln" onkeyup="valueing()">
                            </div>
                            <label for="lebarjalan" class="col-form-label">No Tambahan</label>
                            <div class="col-md-2">
                            <input type="text" class="form-control" id="lebarjln" onkeyup="valueing()">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="lebarjalan" class="col-md-3 col-form-label">Tarif</label>
                            <div class="col-md-3">
                            <input type="text" class="form-control" id="lebarjln" onkeyup="valueing()">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="lebarjalan" class="col-md-3 col-form-label">Ukuran Meter</label>
                            <div class="col-md-2">
                            <input type="text" class="form-control" id="lebarjln" onkeyup="valueing()">
                            </div>
                            <label for="lebarjalan" class="col-form-label">No Meter</label>
                            <div class="col-md-2">
                            <input type="text" class="form-control" id="lebarjln" onkeyup="valueing()">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="lebarjalan" class="col-md-3 col-form-label">No Bundel</label>
                            <div class="col-md-2">
                            <input type="text" class="form-control" id="lebarjln" onkeyup="valueing()">
                            </div>
                            <label for="lebarjalan" class="col-form-label">No Telepon</label>
                            <div class="col-md-3">
                            <input type="text" class="form-control" id="lebarjln" onkeyup="valueing()">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="lebarjalan" class="col-md-3 col-form-label">Nopel</label>
                            <div class="col-md-2">
                            <input type="text" class="form-control" id="lebarjln" onkeyup="valueing()">
                            </div>
                        </div>
                   
                      
                       
                    </form>
                </div>
                </div>
                <table id="table" class="table table-bordered table-responsive-md table-condensed" >
                <thead>
                    <tr>
                        <th width="10%">No_Plgn</th>
                        <th width="10%">Tgl_Transaksi</th>
                        <th width="10%">NO_BAMUTASI</th>
                        <th width="15%">NO_BA_MUTASI</th>
                        <th width="10%">NO_BAPAKAI</th>
                        <th width="10%">NO_Pengesahan</th>
                        <th width="10%">Tgl_Pengesahan</th>
                        <th width="10%">NO_BONBUKAAN</th>
                        <th width="20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>01</td>
                        <td>Tanpa Meter Air</td>
                        <td>01</td>
                        <td>Tanpa Meter Air</td>
                        <td>01</td>
                        <td>Tanpa Meter Air</td>
                        <td>01</td>
                        <td>01</td>
                        <td>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="deletePanggilanDinas()"><i class="fas fa-trash-alt"></i> Hapus</button>
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#form"><i class="fas fa-edit"></i> Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Pompa Langsung</td>
                        <td>02</td>
                        <td>Pompa Langsung</td>
                        <td>02</td>
                        <td>Pompa Langsung</td>
                        <td>02</td>
                        <td>02</td>
                        
                        <td>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="deletePanggilanDinas()"><i class="fas fa-trash-alt"></i> Hapus</button>
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#form"><i class="fas fa-edit"></i> Edit</button>
                        </td>
                    </tr>
                

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