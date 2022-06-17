@extends('layout.app')

@section('title', 'Data Entri Pegawai')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Petugas')
@section('menuName', 'Master')
@section('subMenuName', 'Jenis Pengaduan')

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

                            <form>
                                <div class="form-group">
                                  <label for="kdptg">Kode Petugas</label>
                                  <input type="kdptg" class="form-control" id="kdptg">
                                </div>
                                <div class="form-group">
                                    <label for="nip">NIP</label>
                                    <input type="text" class="form-control" id="nip">
                                </div>
                                <div class="form-group">
                                  <label for="nama">Nama</label>
                                  <input type="text" class="form-control" id="nama">
                                </div>

                                <button type="submit" class="btn btn-info btn-sm"><i class="fas fa-plus-circle"></i> Baru</button>
                                <button class="btn btn-default btn-sm" type="button" data-toggle="modal" data-target="#pegawai"><i class="fas fa-search fa-fw"></i> Lihat Table Pegawai</button>
                                <button type="submit" class="btn btn-success btn-sm"><i class="far fa-save"></i> Simpan</button>
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-undo"></i> Batal</button>
                            </form>
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
                              </tbody>
                            </table>
                        </div>
                        <div class="modal fade" id="pegawai" tabindex="-1" aria-labelledby="pegawaiLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Table Pegawai</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <table id="example1" class="table table-bordered table-hover table table-bordered table-responsive-md table-condensed" style="width: 100%">
                                            <thead>
                                            <tr>
                                                <th>Nip</th>
                                                <th>Nama Lengkap</th>
                                                <th>Jenis Pegawai</th>
                                                <th>Kedudukan Pegawai</th>
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1.07.01460</td>
                                                    <td>Ema Nurmasanti, S.T</td>
                                                    <td>PD</td>
                                                    <td>01</td>
                                                    <td>
                                                        <button class="btn btn-success btn-sm"><i class="far fa-check-circle"></i> Pilih</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1.83.00528</td>
                                                    <td>Mashud CH</td>
                                                    <td>PD</td>
                                                    <td>01</td>
                                                    <td>
                                                        <button class="btn btn-success btn-sm"><i class="far fa-check-circle"></i> Pilih</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1.83.00583</td>
                                                    <td>Djauhar Busthom</td>
                                                    <td>PD</td>
                                                    <td>01</td>
                                                    <td>
                                                        <button class="btn btn-success btn-sm"><i class="far fa-check-circle"></i> Pilih</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                          </table>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
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
    </script>
@endpush
