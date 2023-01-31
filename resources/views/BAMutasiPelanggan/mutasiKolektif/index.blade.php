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
        <li class="breadcrumb-item active">Mutasi Kolektif</li>
    </ol>
@endsection


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"> Mutasi Kolektif</h3>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <form class="form-horizontal" action="" method="post">
                                        @csrf
                                        <div class="form-group row mt-2">
                                            <label for="no_ba" class="col-md-2 col-form-label">NO BA </label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" name="no_ba" value="T{{ $no }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <label for="tgl_ba" class="col-md-2 col-form-label">Tanggal BA </label>
                                            <div class="col-md-2">
                                                <input type="date" class="form-control" id="tgl_ba" name="tgl_ba" value="{{ $date }}">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <label for="jns_penomoran" class="col-md-2 col-form-label">Jenis Penomoran </label>
                                            <div class="form-group">
                                                <div id="result" class="form-check">
                                                <form action="" method="post">
                                                    <input type="radio" name="jns_penomoran" class="check" value="jns" onclick="getvalue();"/>
                                                    <label for="">I - Jenis Pelanggan</label>&nbsp;&nbsp;
                                                    <input type="radio" name="jns_penomoran" class="check" value="sub_zona" onclick="getvalue();">
                                                    <label for="">J - Sub Zona</label>&nbsp;&nbsp;
                                                    <input type="radio" name="jns_penomoran" class="check" value="bundel" onclick="getvalue();">
                                                    <label for="">K - No Bundel</label>&nbsp;&nbsp;
                                                    <input type="radio" name="jns_penomoran" class="check" value="retribusi" onclick="getvalue();">
                                                    <label for="">F - Retribusi</label>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <label for="jns_mutasi" class="col-md-2 col-form-label">Jenis Mutasi </label>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input type="checkbox" name="jns_mutasi" id="jns" value="jns">
                                                    <label for="">Jenis Pelanggan [I]</label>&nbsp;
                                                    <input type="checkbox" name="jns_mutasi" id="subzona" value="sub_zona">
                                                    <label for="">Sub Zona [J]</label>&nbsp;
                                                    <input type="checkbox" name="jns_mutasi" id="bundel" value="bundel">
                                                    <label for="">No Bundel [K]</label>&nbsp;
                                                    <input type="checkbox" name="jns_mutasi" id="retribusi" value="retribusi">
                                                    <label for="">Retribusi [F]</label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-12">
                                        <div class="form-group row mt-2">
                                            <label for="no_plg" class="col-md-2 col-form-label">No Pelanggan </label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" id="no_plg" name="no_plg">
                                            </div>
                                            <button class="btn btn-info btn-mt-2" id="cari" type="button">
                                                <i class="fa fa-search"></i>
                                            </button>&nbsp;
                                            <button type="reset" class="btn btn-danger btn-mt-2">
                                                <i class="fa fa-undo"></i>
                                                Reset
                                            </button>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <label for="nama" class="col-md-2 col-form-label"> Nama </label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" id="nama" name="nama" onkeyup="valueing()" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <label for="alamat_pemohon" class="col-md-2 col-form-label"> Alamat </label>
                                            <div class="col-md-6">
                                                <textarea type="text" class="form-control" id="alamat_pemohon" name="alamat_pemohon" onkeyup="valueing()" readonly></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <label for="jns_pelanggan" class="col-md-2 col-form-label"> Jenis Pelanggan
                                            </label>
                                            <div class="col-md-1">
                                                <input type="text" class="form-control" id="jns_pelanggan" name="jns_pelanggan" onkeyup="valueing()" readonly>
                                            </div>
                                            <label for="zona" class=" col-form-label"> Sub Zona</label>
                                            <div class="col-md-1">
                                                <input type="text" class="form-control" id="zona" name="zona" onkeyup="valueing()" readonly>
                                            </div>
                                            <label for="no_bundel" class=" col-form-label"> No Bundel </label>
                                            <div class="col-md-1">
                                                <input type="text" class="form-control" id="no_bundel" name="no_bundel" onkeyup="valueing()" readonly>
                                            </div>
                                            <label for="rp_retribusi" class=" col-form-label"> Rp Retribusi </label>
                                            <div class="col-md-1">
                                                <input type="text" class="form-control" id="rp_retribusi" name="rp_retribusi" onkeyup="valueing()" readonly>
                                            </div>
                                            <div class="col-md-1">
                                                <button type="button" class="btn btn-danger btn-md float-right" data-toggle="modal" data-target="#pelanggan"><i class=""></i> Import </button>
                                                <br>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <label for="jns_pelanggan_b" class="col-md-2 col-form-label"> Data Baru </label>
                                            <div class="col-md-1">
                                                <input type="text" class="form-control" id="jns_pelanggan_b" name="jns_pelanggan_b" onkeyup="valueing()">
                                            </div>
                                            <label for="zona_b" class=" col-form-label"> Sub Zona</label>
                                            <div class="col-md-1">
                                                <input type="text" class="form-control" id="zona_b"name="zona_b" onkeyup="valueing()">
                                            </div>
                                            <label for="no_bundel_b" class=" col-form-label"> No Bundel </label>
                                            <div class="col-md-1">
                                                <input type="text" class="form-control" id="no_bundel_b" name="no_bundel_b" onkeyup="valueing()">
                                            </div>
                                            <label for="rp_retribusi_b" class=" col-form-label"> Rp Retribusi </label>
                                            <div class="col-md-1">
                                                <select class="custom-select" id="rp_retribusi_b" onkeyup="valueing()">
                                                    @foreach ($getRet as $ret)
                                                        <option value="{{ $ret->rp_retribusi }}">{{ $ret->rp_retribusi }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-1">
                                                <button type="submit" class="btn btn-danger btn-md float-right" data-toggle="modal" data-target="#pelanggan"><i class=""></i> Tambah</button>
                                                <br>
                                            </div>
                                        </div><br>
                                </form>
                                </div>
                            </div>
                            <table id="table" class="table table-bordered table-responsive-md table-condensed">
                                <thead>
                                    <tr>
                                        <th>No Pelanggan</th>
                                        <th>Zona</th>
                                        <th>Jenis Pelanggan</th>
                                        <th>No Bundel</th>
                                        <th>Nama</th>
                                        <th>Alamat Pemohon</th>
                                        <th>Zona Baru</th>
                                        <th>Jns Pelanggan Baru</th>
                                        <th>No Bundel Baru</th>
                                        <th>Kd Ret Lama</th>
                                        <th>Rp Ret Lama</th>
                                        <th>Kd Ret Baru</th>
                                        <th>Rp Ret Baru</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <td></th>
                                    <td></th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a href="" class="btn btn-xs btn-danger "><i class="fas fa-trash"></i>Hapus</a>
                                    </td>
                                </tbody>
                            </table>
                            <form class="form-horizontal" action="" method="post">
                                @csrf
                            <div class="form-group row mt-2">
                                
                                <label for="status" class="col-md-2 col-form-label">Status Perubahan Tarif</label>
                                <div class="col-md-3">
                                    <select class="form-control" id="status" onkeyup="valueing()">
                                        <option value=""></option>
                                        <option value="T">T - Tetap </option>
                                        <option value="N">N - Naik </option>
                                        <option value="R">R - Turun </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label for="dasar" class="col-md-2 col-form-label">Dasar </label>
                                <div class="col-md-3">
                                    <textarea class="form-control" id="dasar" onkeyup="valueing()" name="dasar"></textarea>
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label for="terhitung_mulai" class="col-md-2 col-form-label">Terhitung Mulai</label>
                                <div class="col-md-2">
                                    <input type="date" class="form-control" id="trhitung_mulai" name="trhitung_mulai"onkeyup="valueing()">
                                </div>
                                <label for="bln_terbit" class="col-md-1 col-form-label">Bln Terbit</label>
                                <div class="col-md-2">
                                    <input type="date" class="form-control" id="bln_terbit" name="bln_terbit"onkeyup="valueing()">
                                </div>
                                <div class="col-md-2">
                                    <a href="{{ route('previewBAMutasiKolektif') }}" class="btn btn-md btn-info float-right"><i class="fas fa-print"></i> Cetak BA</a>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tgl_kasie" class="col-md-2 col-form-label">Tgl Kasi </label>
                                <div class="col-md-2">
                                    <input type="date" class="form-control" id="tgl_kasie" name="tgl_kasie" onkeyup="valueing()">
                                </div>
                                <label for="tgl_kabag" class="col-md-1 col-form-label">Tgl Kabag </label>
                                <div class="col-md-2">
                                    <input type="date" class="form-control" id="tgl_kabag" name="tgl_kabag"onkeyup="valueing()">
                                </div>
                                <div class="col-md-2">
                                    <a href="{{ route('previewLampiranMutasiKolektif') }}" class="btn btn-md btn-info float-right"><i class="fas fa-print"></i> Cetak Lampiran</a>
                                </div>
                            </div><br>
                            </form>
                            <div class="form-group row mt-2 ">
                                <label for="" class="col-md-6 col-form-label"></label>
                                <div class="col-md-5">
                                    <button class="btn btn-success btn-sm" type="submit"><i class="far fa-save"></i> Simpan</button>
                                    <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-undo"></i> Reset</button>
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script>
        $(function() {
            $('#table').DataTable({

                //  "lengthChange": false,
                //   "autoWidth": false,
                //   "responsive": true,
                "scrollX": true,
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

        $(".check").change(function(){
            var val = $(".check:checked").val();
            console.log(val);
            
        });

        var showLoading = function() {
            swal.fire({
                title: "Mohon Tunggu !",
                html: "Sedang Memproses...",
                allowOutsideClick: false,
                showConfirmButton: false,
                willOpen: () => {
                    swal.showLoading()
                },
            })
        }

        $(document).on('click', '#cari', function(e) {
            e.preventDefault();
            let no_plg = $('#no_plg').val();
            $.ajax({
                type: "GET",
                url: `{{ url('mutasipelanggan/mutasiKolektif') }}/` + no_plg,
                data: {
                    id: no_plg,
                    _token: '{{ csrf_token() }}'
                },
                beforeSend: function() {
                    showLoading()
                },
                success: function(response) {
                    console.log(response);
                    $('#no_plg').val(response.no_plg)
                    $('#nama').val(response.nama)
                    $('#alamat_pemohon').val(response.jalan.trim()+' '+response.gang.trim()+' '+response.nomor.trim()+' '+response.notamb)
                    $('#jns_pelanggan').val(response.jns_pelanggan)
                    $('#zona').val(response.zona)
                    $('#no_bundel').val(response.no_bundel)
                    $('#rp_retribusi').val(response.rp_retribusi)
                    $('#jns_pelanggan_b').val(response.jns_pelanggan)
                    $('#zona_b').val(response.zona)
                    $('#no_bundel_b').val(response.no_bundel)
                    $('#rp_retribusi_b').val(response.rp_retribusi)
                    swal.close();
                }
            })
        })
    </script>
@endpush
