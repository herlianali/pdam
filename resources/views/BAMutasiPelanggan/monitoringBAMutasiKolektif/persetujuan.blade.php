@extends('layout.app')
@section('title', 'BA Mutasi Pelanggan')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <style>
        table thead {
            border: 2px solid rgb(102, 102, 102);
        }
    </style>
@endpush

@section('namaHal', 'BA Mutasi Pelanggan')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Monitoring BA Mutasi Kolektif</a></li>
        <li class="breadcrumb-item active">Halaman Persetujuan</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Halaman Persetujuan</h3>
                            <a href="{{ route('previewPdinas') }}"class="btn btn-xs btn-info float-right"> Panggilan Dinas</a>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="" method="post">
                                @csrf
                                <div class="form-group row mt-2 ">
                                    <label for="nomor_ba" class="col-md-2 col-form-label">Nomor BA</label>
                                    <div class="col-md-2">
                                        <input type="text" class="form-control" name="nomor_ba" id="nomor_ba"onkeyup="valueing()">
                                    </div>
                                    <button class="btn btn-info  btn-mt-2" type="button" data-toggle="modal"data-target="#pegawai"><i class="fa fa-search"></i>Cari BA</button>
                                    &nbsp;
                                </div>
                                <div class="form-group row mt-2 ">
                                    <label for="tgl_ba" class="col-md-2 col-form-label">Tanggal BA </label>
                                    <div class="col-md-3">
                                        <input type="date" class="form-control" name="tgl_ba" id="tgl_ba" onkeyup="valueing()">
                                    </div>
                                    <label for="jenis_mutasi" class="col-md-2 col-form-label">Jenis Mutasi </label>
                                    <div class="col-md-2">
                                        <input type="text" class="form-control" name="jenis_mutasi" id="jenis_mutasi"onkeyup="valueing()">
                                    </div>
                                </div>
                                <p>Jenis Mutasi :</p>
                                <div class="row">
                                    <label for="" class="col-form-label"></label>
                                    <div class="col">
                                        <input type="checkbox">
                                        <label for="alamat" class="col-form-label">B - Alamat</label>
                                    </div>
                                    <div class="col">
                                        <input type="checkbox">
                                        <label for="gunapersil" class="col-form-label">E - Guna Persil</label>
                                    </div>
                                    <div class="col">
                                        <input type="checkbox">
                                        <label for="jns_pelanggan" class="col-form-label">I - Jns Pelanggan</label>
                                    </div>
                                    <div class="col">
                                        <input type="checkbox">
                                        <label for="no_bundel" class="col-form-label">K - No Bundel</label>
                                    </div>
                                    <div class="col"></div>
                                </div>
                                <div class="row">
                                    <label for="" class="col-form-label"></label>
                                    <div class="col">
                                        <input type="checkbox">
                                        <label for="tarif" class="col-form-label">D - Tarif</label>
                                    </div>
                                    <div class="col">
                                        <input type="checkbox">
                                        <label for="retribusi" class="col-form-label">F - Retribusi</label>
                                    </div>
                                    <div class="col">
                                        <input type="checkbox">
                                        <label for="subzona" class="col-form-label">J - Sub Zona</label>
                                    </div>
                                    <div class="col">
                                        <input type="checkbox">
                                        <label for="no_meter" class="col-form-label">L - No Meter</label>
                                    </div>
                                    <div class="col"></div>
                                </div>
                                <br>
                                <table>
                                    <thead>
                                        <div class="row">
                                            <div class="col ml-5 justify-content-between">
                                            </div>
                                            <div class="col">
                                                Lama
                                            </div>
                                            <div class="col">
                                                Baru
                                            </div>
                                        </div>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col justify-content-between">
                                                        <input type="checkbox" name="alamat" id="alamat">
                                                        B. Alamat
                                                    </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col justify-content-between">
                                                        <div class="col">
                                                            <p align="right">Jalan</p>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="col-md-12">
                                                            <input type="text" class="form-control" id="jln_lama" name="jln_lama" onkeyup="valueing()">
                                                        </div>
                                                    </div>
                                                    <div class="col">

                                                    </div>
                                                    <div class="col">
                                                        <div class="col-md-12">
                                                            <input type="text" class="form-control" id="jln_baru"name="jln_baru" onkeyup="valueing()">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col justify-content-between">
                                                        <div class="col">
                                                            <p align="right">Gang</p>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="col-md-12">
                                                            <input type="text" class="form-control" id="gang_lama" name="gang_lama" onkeyup="valueing()">
                                                        </div>
                                                    </div>
                                                    <div class="col"></div>
                                                    <div class="col">
                                                        <div class="col-md-12">
                                                            <input type="text" class="form-control" id="gang_baru" name="gang_baru" onkeyup="valueing()">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col justify-content-between">
                                                        <div class="col">
                                                            <p align="right">Nomor</p>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="col-md-12">
                                                            <input type="text" class="form-control" id="no_lama" name="no_lama" onkeyup="valueing()">
                                                        </div>
                                                    </div>
                                                    <div class="col"></div>
                                                    <div class="col">
                                                        <div class="col-md-12">
                                                            <input type="text" class="form-control" id="no_baru"name="no_baru" onkeyup="valueing()">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col justify-content-between">
                                                        <div class="col">
                                                            <p align="right">No Tambahan</p>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="col-md-12">
                                                            <input type="text" class="form-control" id="no_tambahan_lama" name="no_tambahan_lama" onkeyup="valueing()">
                                                        </div>
                                                    </div>
                                                    <div class="col"></div>
                                                    <div class="col">
                                                        <div class="col-md-12">
                                                            <input type="text" class="form-control" id="no_tambahan_baru" name="no_tambahan_baru" onkeyup="valueing()">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col justify-content-between">
                                                        <input type="checkbox" name="tarif" id="tarif">
                                                        D. Tarif
                                                    </div>
                                                    <div class="col">
                                                        <div class="col-md-12">
                                                            <select class="form-control" id="tarif_lama"onkeyup="valueing()">
                                                                <option value=" ">  </option>
                                                                <option value=" ">  </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" class="form-control" id="tarif_lama"
                                                            name="tarif_lama " onkeyup="valueing()">
                                                    </div>
                                                    <div class="col">
                                                        <div class="col-md-12">
                                                            <select class="form-control" id="tarif_baru" onkeyup="valueing()">
                                                                <option value="">  </option>
                                                                <option value="">  </option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <select class="form-control" id="tarif_baru" onkeyup="valueing()">
                                                                <option value="">  </option>
                                                                <option value="">  </option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <input type="text" class="form-control" id="tarif_baru" name="tarif_baru" onkeyup="valueing()">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col justify-content-between">
                                                        <input type="checkbox" name="guna_persil" id="guna_persil">
                                                        E. Guna Persil
                                                    </div>
                                                    <div class="col">
                                                        <div class="col-md-12">
                                                            <select class="form-control" id="guna_persil_lama"onkeyup="valueing()">
                                                                <option value="">  </option>
                                                                <option value="">  </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col"></div>
                                                    <div class="col">
                                                        <div class="col-md-12">
                                                            <select class="form-control" id="guna_persil_baru"onkeyup="valueing()">
                                                                <option value="">  </option>
                                                                <option value="">  </option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col">

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col justify-content-between">
                                                        <input type="checkbox" name="retribusi" id="retribusi">
                                                        F. Retribusi
                                                    </div>
                                                    <div class="col">
                                                        <div class="col-md-12">
                                                            <select class="form-control" id="retribusi_lama" onkeyup="valueing()">
                                                                <option value="">  </option>
                                                                <option value="">  </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col"></div>
                                                    <div class="col">
                                                        <div class="col-md-12">
                                                            <select class="form-control" id="retribusi_baru" onkeyup="valueing()">
                                                                <option value="">  </option>
                                                                <option value="">  </option>
                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <p>Lebar Jalan</p>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <input type="text" class="form-control" id="lebar_jln" name="lebar_jln" onkeyup="valueing()">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col justify-content-between">
                                                        <input type="checkbox" name="jns_pelanggan" id="jns_pelanggan">
                                                        I. Jns Pelanggan
                                                    </div>
                                                    <div class="col">
                                                        <div class="col-md-12">
                                                            <select class="form-control" id="jns_pelanggan_lama" onkeyup="valueing()">
                                                                <option value="">  </option>
                                                                <option value="">  </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col"></div>
                                                    <div class="col">
                                                        <div class="col-md-12">
                                                            <select class="form-control" id="jns_pelanggan_baru"onkeyup="valueing()">
                                                                <option value="">  </option>
                                                                <option value="">  </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col justify-content-between">
                                                        <input type="checkbox" name="sub_zona" id="sub_zona">
                                                        J. Sub Zona
                                                    </div>
                                                    <div class="col">
                                                        <div class="col-md-12">
                                                            <select class="form-control" id="sub-zona_lama" onkeyup="valueing()">
                                                                <option value=""> </option>
                                                                <option value="">  </option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col"></div>
                                                    <div class="col">
                                                        <div class="col-md-12">
                                                            <select class="form-control" id="sub_zona_baru" onkeyup="valueing()">
                                                                <option value="">   </option>
                                                                <option value="">   </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col justify-content-between">
                                                        <input type="checkbox" name="no_bundel" id="no_bundel">
                                                        K. No Bendel
                                                    </div>
                                                    <div class="col">
                                                        <div class="col-md-12">
                                                            <input type="text" class="form-control" id="no_bundel_lama"name="no_bundel_lama" onkeyup="valueing()">
                                                        </div>
                                                    </div>
                                                    <div class="col"></div>
                                                    <div class="col">
                                                        <div class="col-md-12">
                                                            <input type="text" class="form-control" id="no_bundel_baru"name="no_bundel_baru" onkeyup="valueing()">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="form-group row mt-2 ">
                                    <label for="status" class="col-md-2 col-form-label">Status Perubahan Tarif</label>
                                    <div class="col-md-2">
                                        <select class="form-control" id="status" onkeyup="valueing()">
                                            <option value="">   </option>
                                            <option value="">   </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mt-2 ">
                                    <label for="dasar" class="col-md-2 col-form-label">Dasar</label>
                                    <div class="row">
                                        <div class="col">
                                            <div class="col ml-3">
                                                <div class="col">
                                                    <input type="radio" class="form-check-input" id="konektor" name="jabatan">
                                                    <label class="form-check-label">Konektor</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" class="form-check-input" id="konektor" name="jabatan">
                                                    <label class="form-check-label">Konektor</label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <textarea class="form-control" id="keterangan" onkeyup="valueing()" name="keterangan"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mt-2 ">
                                    <label for="terhitung_mulai" class="col-md-2 col-form-label">Terhitung Mulai</label>
                                    <div class="col-md-2">
                                        <input type="date" class="form-control" name="terhitung_mulai" id="tehritung_mulai"onkeyup="valueing()">
                                    </div>
                                    <label for="bulan_terbit" class="col-md-2 col-form-label">Bulan Terbit </label>
                                    <div class="col-md-2">
                                        <input type="date" class="form-control" name="bulan_terbit" id="bulan_terbit"onkeyup="valueing()">
                                    </div>
                                    <div class="col-md-2">
                                        <a href="{{ route('previewUsulan') }}"class="btn btn-sm btn-info float-right"><i  class="fas fa-print"></i> Cetak BA Usulan</a>
                                    </div>
                                </div>
                                <div class="form-group row mt-2 ">

                                    <label for="tgl_kasie" class="col-md-2 col-form-label">Tanggal Kasie</label>
                                    <div class="col-md-2">
                                        <input type="date" class="form-control" name="tgl_kasie" id="tgl_kasie" onkeyup="valueing()">
                                    </div>
                                    <label for="tgl_kabag" class="col-md-2 col-form-label">Tanggal Kabag </label>
                                    <div class="col-md-2">
                                        <input type="date" class="form-control" name="tgl_kabag" id="tgl_kabag"onkeyup="valueing()">
                                    </div>
                                    <div class="col-md-2">
                                        <a href="{{ route('previewLampiran') }}"class="btn btn-sm btn-info float-right"><i class="fas fa-print"></i> Cetak BA Lampiran</a>
                                    </div>
                                    &nbsp;
                                </div>
                                <div class="form-group row mt-2 ">
                                    <label for="tombol" class="col-md-6 col-form-label"></label>
                                    <div class="col-md-6">
                                        <button class="btn btn-success btn-sm float-right" type="submit"><i class="far fa-save"></i> Simpan</button>
                                        <button type="submit" class="btn btn-danger btn-sm float-right"><i class="fas fa-undo"></i> Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bs-custom-file-input/bs-custom-file-input.js') }}"></script>
    <script>
        $(function() {
            $('#table').DataTable({
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
