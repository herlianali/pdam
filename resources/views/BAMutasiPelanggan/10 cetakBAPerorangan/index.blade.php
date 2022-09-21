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
    <li class="breadcrumb-item active">Cetak BA Perorangan</li>
</ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Cetak BA Perorangan</h3>
                        </div>
                        <div class="card-body">
                            <form action="">
                                
                                <div class="form-group row ">
                                    <label for="usulan_no_bonc" class="col-md-3 col-form-label">Nomor BA</label>
                                    <div class="col-md-3">
                                    <input type="text" class="form-control" id="usulan_no_bonc" name="usulan_no_bonc" onkeyup="valueing()">
                                    </div>
                                    <label for="usulan_no_bonc" class="col-form-label">S.D</label>
                                    <div class="col-md-3">
                                    <input type="text" class="form-control" id="usulan_no_bonc" name="usulan_no_bonc" onkeyup="valueing()">
                                    </div>
                                    </div>

                                <button type="submit" class=" btn-info btn-sm float-right">Preview</button>
                                <button class=" btn-danger btn-sm float-right">Batal</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Print preview BA Perorangan</h3>
                            <a href="" class="btn btn-sm btn-success float-right"><i class="fas fa-print"></i> Cetak</a>
                        </div>
                        <div class="card-body priview">
                            <div style="margin-left: 5px">
                                <div style="font-size:15px">PEMERINTAH KOTAMADYA DARRA II SURABAYA</div>
                                <div style="font-size:15px">PERUSAHAAN DAERAH AIR MINUM</div>
                                <div style="font-size:13px">Jl.Mayjen Prof Moestopo 2 </div>
                                <div style="font-size:13px">Tlp.(031)5039373,5039392,5039676</div>
                                <div style="font-size:13px">Surabaya</div>
                            </div>
                        
                          
                                     <h6><center><b>PEMBERITAHUAN  <br>
                                PENYESUAIAN KLASIFIKASI TARIF AIR MINUM</b></center></h6>
                            

                         
                            <p class="font">Kepada Yth: </p>
                         <table>
                            <tr>
                                <td>No Pelanggan</td>
                                <td>:</td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                            </tr>
                         </table>
                        <div class="d-flex justify-content-center table-left" style="text-align: justify">
                        <p>  Setelah diadakan penelitian secara administrasi dan pengecekan persil Saudara, maka dengan ini dieberitahukan bahwa terhadap pelanggan air minum PDAM Koday Dati II Surabaya, atas nama dan alamat diatas perlu diadakan penyesuain dalam penetapan klasifikasi tarif air minum sebagai berikut : 
                        </p>
                        
                    </div>
                   Kode Tarif <span> :</span> <br>
                    Tabel Tarif <span>:</span> 
<br>
<br>
                  

                            Pemakaian Minumum <span> : </span><br>
                            Berlaku mulai penerbitan rekening bulan <span> : </span> <br>
                            Yang akan ditagihkan pada bulan <span> : </span>

<br>
<br>
<h6><b>KETERANGAN : </b></h6>
<div class="d-flex justify-content-left ">
    <p>
        1. Dasar  <span >:</span> <br>
        2. Kontrol No/Tanggal <span style="margin-left:5 % ">:</span> <br>
        3. Penggunaan Persil <span>:</span> <br>
        4. Jenis Pelanggan <span>:</span> <br>
        5. Kode Tarif Lama <span >:</span> <br>
        6. Ukuran Meter <span>:</span> <br>
    </p>
                        </div>
                        <h6><b>LAIN-LAIN : </b></h6>
                        <p>Apabila dikemudian hari ternyata terjadi perubahan penggunaan persil, maka akan diadakan penyesuaian kode tarif secara sepihak oleh PDAM-KMS</p>

<p><center>Demikian hendaknya mendapat perhatian dan dimaklumi, terimakasih</center></p>
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
