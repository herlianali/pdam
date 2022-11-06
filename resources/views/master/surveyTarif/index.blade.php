@extends('layout.app')
@section('title', 'Survey Tarif')

@section('namaHal', 'Master')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Survey Tarif</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"> Survey Tarif</h3>
                            <button type="button" class="btn-xs btn-success float-right " data-toggle="modal"
                                data-target="#jalan"><i class=""></i> Jalan PLN</button>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('cetaksurvey') }}" class="btn btn-xs btn-info float-right"><i
                                    class="fas fa-print"></i> Cetak Survey</a>
                            <a href="{{ route('lebihentri')}}" class="btn btn-xs btn-info float-right"><i class=""></i> Lebih Entri</a>
                            <a href="{{ route('dataKosong') }}" class="btn btn-xs btn-info float-right"><i
                                    class="fas "></i> Data Kosong</a>
                            <br>
                            <br>
                            <div class="row mb-2">
                                <div class="col-md-1"></div>
                                <div class="col-md-12">
                                    <form class="form-horizontal">
                                        @csrf
                                        <div class="form-group row mt-2">
                                            <label for="blnrek" class="col-md-3 col-form-label">Bulan Rekening </label>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" id="periode" name="periode" value="{{ $date }}">
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="subzona" class="col-md-3 col-form-label">Sub Zona</label>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" id="zona" name="zona" onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="jenispelanggan" class="col-md-3 col-form-label">JenisPelanggan</label>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" id="jns_pelanggan" name="jns_pelanggan" onkeyup="valueing()">
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="nobundel" class="col-md-3 col-form-label">No Bundel</label>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" id="no_bundel" name="no_bundel" onkeyup="valueing()">
                                            </div>
                                            <button class="btn btn-info btn-mt-2" id="cari" type="button">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="form-group row mt-2">
                                            <label for="nopelanggan" class="col-md-3 col-form-label">No Pelanggan</label>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" id="no_plg" name="no_plg" onkeyup="valueing()" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="nama" class="col-md-3 col-form-label">Nama</label>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" id="nama" name="nama" onkeyup="valueing()" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="alamat" class="col-md-3 col-form-label">Alamat</label>
                                            <div class="col-md-3">
                                                <textarea class="form-control" id="alamat" name="alamat" onkeyup="valueing()" disabled></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="nomor" class="col-md-3 col-form-label">Nomor PA</label>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" id="no_pa" name="no_pa" onkeyup="valueing()" disabled>
                                            </div>
                                        </div>

                                        <div class="form-group row mt-2">
                                            <label for="lebarjln" class="col-md-3 col-form-label">Lebar Jalan</label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" id="jalan" name="jalan"
                                                    onkeyup="valueing()">
                                            </div>
                                            <label for="M" class="col-md-1 col-form-label">M</label>

                                            <div class="col-md-2">
                                                <input type="text" class="form-control" id="kd_tarif" name="kd_tarif"
                                                    onkeyup="valueing()" disabled>
                                            </div>
                                            <label for="tariflama" class="col-md-1 col-form-label">Tarif Lama</label>
                                        </div>
                                        <div class="form-group row mt-2 ">
                                            <label for="listrik" class="col-md-3 col-form-label">Listrik</label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" id="amper" name="amper"
                                                    onkeyup="valueing()">
                                            </div>
                                            <label for="amp" class="col-md-1 col-form-label">Amp</label>

                                            <div class="col-md-2">
                                                <input type="text" class="form-control" id="kwh" name="kwh"
                                                    onkeyup="valueing()">
                                            </div>
                                            <label for="kwh" class="col-md-1 col-form-label">Kwh</label>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="njop" class="col-md-3 col-form-label">NJOP</label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" id="njop" name="njop"
                                                    onkeyup="valueing()">
                                            </div>
                                            <label for="juta" class="col-md-3 col-form-label">Juta</label>
                                        </div>
                                        <td>
                                            <button type="submit" class="btn btn-danger btn-sm mt-6 " id="hapus"><i
                                                    class="fa fa-save"></i> Simpan</button>

                                            <button type="button" class="btn btn-primary btn-sm mt-6 "
                                                id="datakosong"><i class="fa fa-trash"></i> Data Kosong</button>
                                        </td>
                                    </form>
                                </div>

                            </div>
                        </div>
    </section>
    @include('master.surveyTarif.pln')
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
            $('#example2').DataTable({
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

        $(document).on('click', '#cari', function(e) {
            e.preventDefault();
            let periode = $('#periode').val();
            let zona = $('#zona').val();
            let jns_pelanggan = $('#jns_pelanggan').val();
            let no_bundel = $('#no_bundel').val();
            $.ajax({
                type: "POST",
                dataType: "JSON",
                url: `{{ url('master/surveyTarif') }}/`,
                data: {
                    '_token': '{{ csrf_token() }}',
                    '_method': "POST",
                    'periode': periode,
                    'zona': zona,
                    'jns_pelanggan': jns_pelanggan,
                    'no_bundel': no_bundel,
                },
                success: function(response) {
                    console.log(response)
                    if (amper>20) {
                        var listrik=5000
                    } else if (amper==2) {
                        var listrik=450
                    }else if (amper==4) {
                        var listrik=900
                    }else if (amper==6) {
                        var listrik=1300
                    }else if (amper==10) {
                        var listrik=2200
                    }else if (amper==16) {
                        var listrik=3500
                    }else if (amper==20) {
                        var listrik=4400
                    }else {
                        "Data Ampere Tersebut Tidak Ada"
                    }
                    $('#no_plg').val(response.no_plg)
                    $('#nama').val(response.nama)
                    $('#alamat').val(response.alamat)
                    $('#no_pa').val(response.no_pa)
                    $('#jalan').val(response.jalan)
                    $('#listrik').val(response.listrik)
                    $('#njop').val(response.njop)
                    swal.close();
                }
            })
        })

        function valueing() {
            // if (document.getElementById('kode').value === "" || document.getElementById('keterangan').value === "") {
            //     document.getElementById('batal').disabled = true
            //     document.getElementById('simpan').disabled = true
            // } else {
            //     document.getElementById('batal').disabled = false
            //     document.getElementById('simpan').disabled = false
            // }
        }
    </script>
@endpush
