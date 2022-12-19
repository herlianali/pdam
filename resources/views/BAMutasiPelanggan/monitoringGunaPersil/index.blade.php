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
        <li class="breadcrumb-item active">Monitoring Guna Persil</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Monitoring Guna Persil</h3>
                            @if (count($formData) > 0)
                            <form action="{{ route('previewmonitoring') }}" method="POST">
                                @csrf
                                <input type="text" name="thbl" value="{{ $formData['thbl'] }}" style="display:none">
                                <input type="text" name="periode" value="{{ $formData['periode'] }}" style="display:none">
                                <input type="text" name="stan_persil" value="{{ $formData['stan_persil'] }}" style="display:none">
                                <button type="submit" id="cetak" class="btn btn-xs btn-info float-right"><i class="fas fa-print"></i> Cetak</button>
                            </form>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <form class="form-horizontal" method="post">
                                        @csrf
                                        <div class="form-group row ">
                                            <label for="thbl" class="col-md-2 col-form-label">THBL</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="thbl" id="thbl" placeholder="202010">
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="periode" class="col-md-2 col-form-label">Periode</label>
                                            <div class="col-md-4">
                                                <select class="form-control" id="periode" name="periode">
                                                    <option value="1"> 1</option>
                                                    <option value="2"> 2 </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row ">
                                            <label for="" class="col-md-2 col-form-label"></label>
                                            <div class="col-md-4">
                                                <div class="form-check">
                                                    <div class="row">
                                                        <div class="col-ml-1">
                                                            <input type="radio" name="stan_persil" id="stan_persil_sesuai" value="1">
                                                            <label for="">STAN Sesuai GUNA PERSIL Sesuai</label>
                                                        </div>
                                                        <div class="col-ml-1">
                                                            <input type="radio" name="stan_persil" id="stan_persil_tidak_sesuai" value="2">
                                                            <label for="">STAN Sesuai GUNA PERSIL Tidak Sesuai</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <button class="btn btn-success btn-sm float-right">Filter</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <table id="table" class="table table-bordered table-responsive-md table-condensed">
                                <thead>
                                    <tr>
                                        <th>No Pelanggan</th>
                                        <th>Nama</th>
                                        <th>Jalan</th>
                                        <th>Gang</th>
                                        <th>Nomor</th>
                                        <th>No Tambahan</th>
                                        <th>DA</th>
                                        <th>KD Tarif</th>
                                        <th>Verifikator</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($data) > 0)
                                        @foreach ($data as $row)
                                        <tr>
                                            <td>{{ $row->no_plg }}</td>
                                            <td>{{ $row->nama }}</td>
                                            <td>{{ $row->jalan }}</td>
                                            <td>{{ $row->gang}}</td>
                                            <td>{{ $row->nomor}}</td>
                                            <td>{{ $row->notamb}}</td>
                                            <td>{{ $row->da}}</td>
                                            <td>{{ $row->kd_tarif}}</td>
                                            <td>{{ $row->kd_verifikator}}</td>
                                        </tr>
                                        @endforeach
                                    @endif
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script>
        $(function() {
            $('#table').DataTable({
                "oLanguage": {
                    "sSearch": "No Pelanggan : "
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

        var showLoading = function() {
            swal.fire({
                title: "Mohon Tunggu !",
                html: "Sedang Menyiapkan Data...",
                allowOutsideClick: false,
                showConfirmButton: false,
                willOpen: () => {
                    swal.showLoading()
                },
            })
        }

        // $(document).on('click', '#cetak', function(e){
        //     e.preventDefault();
        //     let thbl = `<?php echo (isset($formData['thbl'])) ? $formData['thbl'] : '' ?>`
        //     let periode = `<?php echo (isset($formData['periode'])) ? $formData['periode'] : '' ?>`
        //     let stan_persil = `<?php echo (isset($formData['stan_persil'])) ? $formData['stan_persil'] : '' ?>`
        //     $.ajax({
        //         type: "POST",
        //         dataType: "JSON",
        //         url: `{{ url('mutasipelanggan/previewmonitoring') }}`,
        //         data: {
        //             _token: "{{ csrf_token() }}",
        //             thbl: thbl,
        //             periode: periode,
        //             stan_persil: stan_persil
        //         },
        //         success: function(response) {
        //             console.log(response);
        //             // window.location = "{{ route('previewmonitoring') }}"
        //         }
        //     })
        // })

    </script>
@endpush
