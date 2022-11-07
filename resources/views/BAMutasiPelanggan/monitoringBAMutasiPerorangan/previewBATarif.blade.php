@extends('layout.app')
@section('title', 'BA Mutasi Pelanggan')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <style>
        .container {
            border: 2px solid;
        }
    </style>
@endpush

@section('namaHal', 'BA Mutasi Pelanggan')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">BA Mutasi Pelanggan</a></li>
        <li class="breadcrumb-item active">Cetak BA Tarif</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Cetak BA Tarif</h3>
                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="form-group row ">
                                    <label for="usulan_no_bonc" class="col-md-3 col-form-label">Nomor BA</label>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" id="usulan_no_bonc" name="usulan_no_bonc"
                                            onkeyup="valueing()">
                                    </div>
                                    <label for="usulan_no_bonc" class="col-form-label">S.D</label>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" id="usulan_no_bonc" name="usulan_no_bonc"
                                            onkeyup="valueing()">
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
                            <a href="" class="btn btn-sm btn-success float-right"><i class="fas fa-print"></i>Cetak</a>
                        </div>
                        <div class="card-body priview">
                            <div class="row">
                                <div class="col">
                                    <div style="font-size:15px">PEMERINTAH KOTAMADYA DARRA II SURABAYA</div>
                                    <div style="font-size:15px">PERUSAHAAN DAERAH AIR MINUM</div>
                                    <div style="font-size:13px">Jl.Mayjen Prof Moestopo 2 </div>
                                    <div style="font-size:13px">Tlp.(031)5039373,5039392,5039676</div>
                                    <div style="font-size:13px">Surabaya</div>
                                </div>
                                <div class="col">
                                    <div class="border pl-2 w-80">
                                        <div class="row">
                                            <div class="col">
                                                <div class="row">
                                                    <div class="col justify-content-between">
                                                        BAGIAN LANGGANAN WILAYAH
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="atas">
                                            <div class="row">
                                                NOMOR :
                                            </div>
                                            <div class="row">
                                                TANGGAL :
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h6>
                                <center><b>PEMBERITAHUAN <br>
                                        PENYESUAIAN KLASIFIKASI TARIF AIR MINUM</b></center>
                            </h6>
                            <p class="font">Kepada Yth: </p>
                            <div class="container">
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
                            </div>

                            <br>
                            <div class="d-flex justify-content-center table-left" style="text-align: justify">
                                <p> Setelah diadakan penelitian secara administrasi dan pengecekan persil Saudara, maka
                                    dengan ini dieberitahukan bahwa terhadap pelanggan air minum PDAM Koday Dati II
                                    Surabaya, atas nama dan alamat diatas perlu diadakan penyesuain dalam penetapan
                                    klasifikasi tarif air minum sebagai berikut :
                                </p>
                            </div>

                            Kode Tarif <span> :</span> <br>
                            Tabel Tarif <span>:</span>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <table>
                                        <tr>
                                            <td>Pemakaian Minumum </td>
                                            <td>:</td>
                                        </tr>
                                        <tr>
                                            <td>Berlaku mulai penerbitan rekening bulan</td>
                                            <td>:</td>
                                        </tr>
                                        <tr>
                                            <td> Yang akan ditagihkan pada bulan</td>
                                            <td>:</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <br>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <table>
                                        <h5><b>KETERANGAN</h5>
                                        <tr>
                                            <td>1. Dasar</td>
                                            <td>:</td>
                                        </tr>
                                        <tr>
                                            <td>2. Kontrol No/Tanggal</td>
                                            <td>:</td>
                                        </tr>
                                        <tr>
                                            <td>3. Penggunaan Persil</td>
                                            <td>:</td>
                                        </tr>
                                        <tr>
                                            <td>4. Jenis Pelanggan</td>
                                            <td>:</td>
                                        </tr>
                                        <tr>
                                            <td>5. Kode Tarif Lama</td>
                                            <td>:</td>
                                        </tr>
                                        <tr>
                                            <td>6. Ukuran Meter</td>
                                            <td>:</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <h5><b>LAIN- LAIN </b></h5>
                                    <span>Apabila dikemudian hari ternyata terjadi perubahan penggunaan persil, maka akan
                                        diadakan penyesuaian kode tarif secara sepihak oleh PDAM-KMS</span>
                                    <span>
                                        <center>Demikian hendaknya mendapat perhatian dan dimaklumi, terimakasih</center>
                                    </span>
                                </div>
                            </div>
                            <div class="ttd">
                                <div class="row text-center">
                                    <div class="col justify-content-between">
                                        <p>Petugas</p>
                                        <p class="mb-5">Bagian Langganan</p>
                                        <p class="mb-n3">Moch. Soejanto</p>
                                        <hr style="width: 50%">
                                        <p class="mt-n3">NIP: 1.96.01018</p>
                                    </div>
                                    <div class="col">
                                        <p>Mengetahui</p>
                                        <p class="mb-5">Kepala Bagian Langganan</p>
                                        <p class="mb-n3">Nurlillah Satria Pratama</p>
                                        <hr style="width: 50%">
                                        <p class="mt-n3">NIP: 1.08.01499</p>
                                    </div>
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
