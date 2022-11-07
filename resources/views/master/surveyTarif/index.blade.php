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
                        <button type="button"
                            class="btn btn-xs btn-info filter float-right"
                            data-toggle="modal"
                            data-target="#filter">
                            <i class="fas fa-print"></i>
                            Cetak Survey
                        </button>
                            <a href="{{ route('lebihentri')}}" class="btn btn-xs btn-info float-right"><i class=""></i> Lebih Entri</a>
                            <a href="{{ route('dataKosong') }}" class="btn btn-xs btn-info float-right"><i
                                    class="fas "></i> Data Kosong</a>
                            <br>
                            <br>
                            <div class="row mb-2">
                                <div class="col-md-1"></div>
                                <div class="col-md-12">
                                    <div class="form-group row mt-2">
                                        <label for="blnrek" class="col-md-3 col-form-label">Bulan Rekening </label>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" id="periode" name="periode" value="{{ $date }}">
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label for="subzona" class="col-md-3 col-form-label">Sub Zona</label>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" id="zona" name="zona">
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label for="jenispelanggan" class="col-md-3 col-form-label">JenisPelanggan</label>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" id="jns_pelanggan" name="jns_pelanggan" style="text-transform:uppercase">
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label for="nobundel" class="col-md-3 col-form-label">No Bundel</label>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" id="no_bundel" name="no_bundel">
                                        </div>
                                        <button class="btn btn-info btn-mt-2" id="cari" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="reset">
                                        <div class="form-group row mt-2">
                                            <label for="nopelanggan" class="col-md-3 col-form-label">No Pelanggan</label>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" id="no_plg" name="no_plg" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="nama" class="col-md-3 col-form-label">Nama</label>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" id="nama" name="nama" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="alamat" class="col-md-3 col-form-label">Alamat</label>
                                            <div class="col-md-3">
                                                <textarea class="form-control" id="alamat" name="alamat" disabled></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="nomor" class="col-md-3 col-form-label">Nomor PA</label>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" id="no_pa" name="no_pa" disabled>
                                            </div>
                                        </div>

                                        <div class="form-group row mt-2">
                                            <label for="lebarjln" class="col-md-3 col-form-label">Lebar Jalan</label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" id="jalan" name="jalan"
                                                >
                                            </div>
                                            <label for="M" class="col-md-1 col-form-label">M</label>

                                            <div class="col-md-2">
                                                <input type="text" class="form-control" id="kd_tarif" name="kd_tarif"
                                                disabled>
                                            </div>
                                            <label for="tariflama" class="col-md-1 col-form-label">Tarif Lama</label>
                                        </div>
                                        <div class="form-group row mt-2 ">
                                            <label for="listrik" class="col-md-3 col-form-label">Listrik</label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" id="amper" name="amper"
                                                onkeydown="javascript: return ['Backspace','Delete','ArrowLeft','ArrowRight', 'Enter'].includes(event.code) ? true : !isNaN(Number(event.key)) && event.code!=='Space'">
                                            </div>
                                            <label for="amp" class="col-md-1 col-form-label">Amp</label>

                                            <div class="col-md-2">
                                                <input type="text" class="form-control" id="kwh" name="kwh"
                                                >
                                            </div>
                                            <label for="kwh" class="col-md-1 col-form-label">Kwh</label>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="njop" class="col-md-3 col-form-label">NJOP</label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" id="njop" name="njop"
                                                >
                                            </div>
                                            <label for="juta" class="col-md-3 col-form-label">Juta</label>
                                        </div>
                                    </div>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-sm mt-6 " id="hapus"><i
                                                class="fa fa-save"></i> Simpan</button>

                                        <button type="button" class="btn btn-primary btn-sm mt-6 "
                                            id="datakosong"><i class="fa fa-trash"></i> Data Kosong</button>
                                    </td>
                                </div>

                            </div>
                        </div>
    </section>
    @include('master.surveyTarif.pln')
    @include('master.surveyTarif.filter')
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
            let periode = $('#periode').val();
            let zona = $('#zona').val();
            let jns_pelanggan = $('#jns_pelanggan').val().toUpperCase();
            let no_bundel = $('#no_bundel').val();
            $('#amper').val('')
            $.ajax({
                type: "POST",
                dataType: "JSON",
                url: `{{ url('master/surveyTarif') }}`,
                data: {
                    _token: '{{ csrf_token() }}',
                    _method: "POST",
                    periode: periode,
                    zona: zona,
                    jns_pelanggan: jns_pelanggan,
                    no_bundel: no_bundel,
                },
                beforeSend: function() {
                    showLoading()
                },
                success: function(response) {
                    $('#no_plg').val(response.no_plg)
                    $('#nama').val(response.nama)
                    $('#alamat').val(response.alamat)
                    $('#no_pa').val(response.no_pa)
                    $('#jalan').val(response.lebar_jalan)
                    $('#kd_tarif').val(response.tarif_lama)
                    $('#kwh').val(response.kwh)
                    $('#njop').val(response.njop)
                    swal.close();
                }
            })
        })

        $('#amper').keypress(function(e){
            var key = e.which
            if(key == 13){
                let amp = $(this).val()
                let kwh = $('#kwh').val()
                if (amp == '0' || amp == '') {
                    $('#kwh').prop('disabled', false)
                }else{
                    $('#kwh').prop('disabled', true)
                    if (amp > 20) {
                        $('#kwh').val("5000")
                    }else{
                        switch (amp) {
                            case "2":
                                $('#kwh').val("450")
                                break;
                            case "4":
                                $('#kwh').val("900")
                                break;
                            case "6":
                                $('#kwh').val("1300")
                                break;
                            case "10":
                                $('#kwh').val("2200")
                                break;
                            case "16":
                                $('#kwh').val("3500")
                                break;
                            case "20":
                                $('#kwh').val("4400")
                                break;
                            default:
                                alert("tidak ada data amper")
                                break;
                        }
                    }
                }
            }
        })

        // $(document).on('click', '#')
    </script>
@endpush
