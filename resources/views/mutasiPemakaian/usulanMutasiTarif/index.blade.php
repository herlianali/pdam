@extends('layout.app')
@section('title', 'Mutasi Pemakaian')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Mutasi Pemakaian')
@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Mutasi Pemakaian</a></li>
    <li class="breadcrumb-item active">Usulan Mutasi Tarif</li>
</ol>
@endsection


@section('content')
<section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Usulan Mutasi Tarif</h3>
                            
                        </div>
                        <div class="card-body">
                        <div class="row mb-4">
                <div class="col-md-1"></div>
                <div class="col-md-12">
                    <form class="form-horizontal" action="" method="post">
          @csrf
                        <div class="form-group row ">
                            <label for="jp_dinas"  class="col-md-3 col-form-label">No Usulan</label>
                            <div class="col-md-4">
                            <input type="text" class="form-control" name="jp_dinas" id="jp_dinas" onkeyup="valueing()">
                            </div>
                            <div class="col-md-4">
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#pelanggan"><i class="fas fa-search"></i> Cari Pelanggan</button>
                            </div>
                            <label for="jp_dinas"  class="col-md-3 col-form-label">No Pelanggan</label>
                            <div class="col-md-4">
                            <input type="text" class="form-control" name="jp_dinas" id="jp_dinas" onkeyup="valueing()">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="keterangan"  class="col-md-3 col-form-label">Tanggal Usulan </label>
                            <div class="col-md-4">
                            <input type="date" class="form-control" name="jp_dinas" id="jp_dinas" onkeyup="valueing()">
                            </div>
                            <label for="keterangan"  class="col-md-3 col-form-label">Nama Pelanggan </label>
                            <div class="col-md-4">
                            <input type="date" class="form-control" name="jp_dinas" id="jp_dinas" onkeyup="valueing()">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-1"></div>
            <div class="col-md-12">
            <form action="">

                <div class="form-group row ">
                    <label for="keterangan"  class="col-md-3 col-form-label">Periode </label>
                    <div class="col-md-4">
                    <input type="text" class="form-control" name="jp_dinas" id="jp_dinas" onkeyup="valueing()">
                    </div>
                    <label for="keterangan"  class="col-md-3 col-form-label">No Nota Restitusi </label>
                    <div class="col-md-4">
                    <input type="text" class="form-control" name="jp_dinas" id="jp_dinas" onkeyup="valueing()">
                    </div>
                </div>

                <div class="form-group row ">
                    <label for="keterangan"  class="col-md-3 col-form-label">Grand Total</label>
                    <div class="col-md-4">
                    <input type="text" class="form-control" name="jp_dinas" id="jp_dinas" onkeyup="valueing()">
                    </div>
                </div>
         
        </form>
    </div>
</div>

<table id="table" class="table table-bordered table-responsive-md table-condensed">
    <thead>
    <tr>
        <th>Periode </th>
        <th>KD Tarif L</th>
        <th>MTRLalu L</th>
        <th>Pakai L</th>
        <th>RP PAKAI</th>
        <th>Rp_Restitusi</th>
        <th>Rp_Denda</th>
        <th>Rp_Bayar</th>
       
    </tr>
    </thead>

</table>

    
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
               
              //  "lengthChange": false,
             //   "autoWidth": false,
             //   "responsive": true,
             "oLanguage": {
                    "sSearch": "Keterangan : "
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
            function deletepanggilanDinas (id) {
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
                    let _url = `/pDinas/${id}`
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
