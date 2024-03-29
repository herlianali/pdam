@extends('layout.app')
@section('title', 'Pelanggan Meter C')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Master')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active">Pelanggan Meter C</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Pelanggan Meter C</h3>

                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <form class="form-horizontal" action="{{ route('pelangganMeterC.store') }}" method="post">
                                        @csrf
                                        <div class="form-group row ">
                                            <label for="no_pelanggan" class="col-md-3 col-form-label">Nomor Pelanggan</label>
                                            <div class="col-md-5">
                                                <input type="text" class="form-control" name="no_plg">
                                            </div>
                                            <button class="btn btn-success btn-sm" type="submit"><i
                                                    class="far fa-save"></i> Simpan</button>
                                            &nbsp;
                                            <button type="reset" class="btn btn-danger btn-mt-2">
                                                <i class="fa fa-undo"></i>
                                                Reset
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <table id="table" class="table table-bordered table-responsive-md table-condensed"
                                style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Pelanggan</th>
                                        <th>Petugas Entri</th>
                                        <th>Tanggal Entri</th>
                                        <th>Aktif</th>
                                        <th>Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pelangganMTRC as $pelangganMtrC)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $pelangganMtrC->no_plg }}</td>
                                            <td>{{ $pelangganMtrC->ptgentri }}</td>
                                            <td>{{ $pelangganMtrC->tgl_entry }}</td>
                                            <td>{{ $pelangganMtrC->aktif }}</td>
                                            <td>
                                                <button type="submit"
                                                class="btn btn-xs btn-danger hapus"
                                                data-id="{{ $pelangganMtrC->no_plg }}">
                                                <i class="fas fa-trash-alt"></i>
                                                Hapus
                                                </button>
                                                <button type="button"
                                                        class="btn btn-xs btn-success edit"
                                                        data-id="{{ $pelangganMtrC->no_plg }}"
                                                        data-toggle="modal"
                                                        data-target="#edit">
                                                        <i class="fas fa-edit"></i>
                                                        Edit
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        @include('master.pelangganMeterC.edit')
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
                html: "Sedang Memproses...",
                allowOutsideClick: false,
                showConfirmButton: false,
                willOpen: () => {
                    swal.showLoading()
                },
            })
        }
 

        $(document).on('click', '.hapus', function(e) {
            e.preventDefault();
             //console.log();
            let no_plg = $(this).data('id').trim().replace(/\s/g, '');
            let token = "{{ csrf_token() }}";
            swal.fire({
                title: "Apakah Anda Yakin ?",
                icon: 'warning',
                text: "Anda Tidak Akan Bisa Mengembalikan Data Ini",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Iya, Hapus!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "DELETE",
                        url: `{{ url('master/pelangganMeterC') }}/`+no_plg,
                        data: {
                                _token: token
                            },
                          
                            success: function(resp) {
                                swal.fire(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success'
                                )
                                location.reload();
                            }
                    });
                }
            });
        });

        $(document).on('click', '.edit', function(e) {
            e.preventDefault();
            let no_plg = $(this).data('id')
            $.ajax({
                type: "GET",
                url: `{{ url('master/pelangganMeterC') }}/`+no_plg,
                data: {
                    id: no_plg,
                    _token: '{{ csrf_token() }}'
                },
                beforeSend: function() {
                    showLoading()
                },
                success: function(response) {
                    $('#form-edit').attr('action', "{{ url('master/pelangganMeterC') }}/"+no_plg)
                    $('#no_plg').val(response.no_plg.trim()).change()
                    $('#ptgentri').val(response.ptgentri)
                    $('#tgl_entry').val(response.tgl_entry)
                    if(response.aktif == 1){
                        $('#aktif').attr('checked', 'checked')
                    }else{
                        $('#aktif').removeAttr('checked', ' ')
                    }
                    // $('#aktif').val(response.aktif)
                    swal.close();
                }
            })
        })
    </script>
@endpush
