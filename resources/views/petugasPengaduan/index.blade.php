@extends('layout.app')

@section('title', 'Data Entri Pegawai')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Master')
@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Master</a></li>
    <li class="breadcrumb-item active">Petugas Entry Pengaduan</li>
</ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Petugas Customer Servis</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="kdptg" class="col-md-2 col-form-label">Kode Petugas</label>
                                            <div class="col-md-6">
                                                <input type="kdptg" class="form-control" id="kdptg" onkeyup="valueing()">
                                            </div>
                                            <div class="col-md-2">
                                                <button class="btn btn-default btn-sm" type="button" data-toggle="modal" data-target="#pegawai"><i class="fas fa-search fa-fw"></i> Pilih Pegawai</button>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nip" class="col-md-2 col-form-label">NIP</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="nip" onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nama" class="col-md-2 col-form-label">Nama</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="nama" onkeyup="valueing()">
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-info btn-sm" id="baru"><i class="fas fa-undo"></i> Baru</button>
                                        <button type="submit" class="btn btn-success btn-sm" id="simpan" disabled><i class="far fa-save"></i> Simpan</button>
                                        <button type="submit" class="btn btn-danger btn-sm" id="batal" disabled><i class="far fa-times-circle"></i> Batal</button>
                                    </form>
                                </div>
                                <div class="col-md-2">
                                    <img src="{{ asset('assets/img/logo.png') }}" class="mx-auto d-block mt-3" alt="" style="width: 90%">
                                </div>
                            </div>
                            <table id="example2" class="table table-bordered table-responsive-md table-condensed" style="width: 100%">
                              <thead>
                              <tr>
                                <th>Kode Petugas</th>
                                <th>Nama</th>
                                <th>Nip</th>
                                <th>Status</th>
                                <th>ISCS</th>
                              </tr>
                              </thead>
                              <tbody>
                                <tr>
                                    <td>LT1</td>
                                    <td>Ema Nurmasanti, S.T</td>
                                    <td>1.07.01460</td>
                                    <td>
                                        <span class="badge badge-danger">Tidak Aktif</span>
                                    </td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>LT10</td>
                                    <td>Mashud CH</td>
                                    <td>1.83.00528</td>
                                    <td>
                                        <span class="badge badge-success">Aktif</span>
                                    </td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>LT11</td>
                                    <td>Djauhar Busthom</td>
                                    <td>1.83.00583</td>
                                    <td>
                                        <span class="badge badge-danger">Tidak Aktif</span>
                                    </td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>LT12</td>
                                    <td>Internal HLT</td>
                                    <td>1.83.00583</td>
                                    <td>
                                        <span class="badge badge-success">Aktif</span>
                                    </td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>LT13</td>
                                    <td>Nanang Adi Sucipto</td>
                                    <td>1.83.00583</td>
                                    <td>
                                        <span class="badge badge-danger">Tidak Aktif</span>
                                    </td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>LT14</td>
                                    <td>Anugrah Santoso</td>
                                    <td>1.83.00583</td>
                                    <td>
                                        <span class="badge badge-success">Aktif</span>
                                    </td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>LT15</td>
                                    <td>Moch.Nurul Huda</td>
                                    <td>1.83.00583</td>
                                    <td>
                                        <span class="badge badge-danger">Tidak Aktif</span>
                                    </td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>LT16</td>
                                    <td>Djauhar Busthom</td>
                                    <td>1.83.00583</td>
                                    <td>
                                        <span class="badge badge-success">Aktif</span>
                                    </td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>LT17</td>
                                    <td>Djauhar Busthom</td>
                                    <td>1.83.00583</td>
                                    <td>
                                        <span class="badge badge-danger">Tidak Aktif</span>
                                    </td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>LT18</td>
                                    <td>Djauhar Busthom</td>
                                    <td>1.83.00583</td>
                                    <td>
                                        <span class="badge badge-success">Aktif</span>
                                    </td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>LT19</td>
                                    <td>Djauhar Busthom</td>
                                    <td>1.83.00583</td>
                                    <td>
                                        <span class="badge badge-danger">Tidak Aktif</span>
                                    </td>
                                    <td>0</td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                        @include('petugasPengaduan.tablePegawai')

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
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": true,
                "scrollX": false,
                "oLanguage": {
                    "sSearch": "Nama / Nip : "
                }
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });

        function valueing() {
            if(document.getElementById('kdptg').value==="" || document.getElementById('nip').value==="" || document.getElementById('nama').value==="") {
                document.getElementById('batal').disabled = true
                document.getElementById('simpan').disabled = true
            }else{
                document.getElementById('batal').disabled = false
                document.getElementById('simpan').disabled = false
            }
        }
    </script>
@endpush
