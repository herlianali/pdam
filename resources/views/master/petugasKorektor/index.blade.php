@extends('layout.app')
@section('title', 'Petugas Korektor')


@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('namaHal', 'Master')
@section('breadcrumb')
@endsection

@section('content')

    <section class="content">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('petugasKorektor') }}">Master Petugas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('laporanpetugasKorektor') }}">Laporan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('randompetugasKorektor') }}">Random Penugasan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('viewptspetugasKorektor') }}">View Penugasan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('monitoringpetugasKorektor') }}">Monitoring Petugas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('koreksipetugasKorektor') }}">Koreksi Penugasan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('viewsisapetugasKorektor') }}">View Sisa Random Penugasan</a>
            </li>
        </ul>
        <div class="card">
            <div class="card-body">
                <div class="row mb-9">
                    <div class="col-md-12">                 
                    </div>
                </div>
                <table id="example2" class="table table-bordered table-responsive-md table-condensed">
                    <thead>
                        <tr>
                            <th >NIP </th>
                            <th >Nama</th>
                            <th >Aktif</th>
                            <th >Jabatan</th>
                            <th >Recid</th>
                            <th >UserAkses</th>
                            <th > Aksi </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($korektor as $petKorektor)
                            <tr>
                                <td>{{ $petKorektor->nip }}</td>
                                <td>{{ $petKorektor->nama }}</td>
                                <td>{{ $petKorektor->aktif }}</td>
                                <td>
                                    @if ($petKorektor->aktif == 1)
                                        1
                                    @else
                                        0
                                    @endif
                                </td>
                                <td>{{ $petKorektor->recid }}</td>
                                <td>{{ $petKorektor->userakses }}</td>
                                <td>        
                                    <button type="submit" 
                                    class="btn btn-danger btn-sm hapus"
                                    data-id="{{ $petKorektor->nip }}">
                                    <i class="fas fa-trash-alt"></i>
                                    Hapus
                                    </button>

                                    <button type="button" 
                                    class="btn btn-success btn-sm edit"
                                    data-id="{{ $petKorektor->nip }}" 
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
        </div>
    </section>
    @include('master.petugasKorektor.petcs')
    @include('master.petugasKorektor.edit')
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
            $('#example1').DataTable({
                "paging": true,
                "lengthChange": false,
                "oLanguage": {
                    "sSearch": "NIP/NAMA : "
                },
                "bInfo": false,
                "ordering": true,
                "autoWidth": false,
                "responsive": true,
                "pageLength": 5
            })
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
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


        $(document).on('click', '#pilih', function(e) {
            e.preventDefault();
            let nip = $(this).data('id');
            $.ajax({
                type: "GET",
                url: `{{ url('api/dip') }}/` + nip,
                data: {
                    id: nip,
                    _token: '{{ csrf_token() }}'
                },
                beforeSend: function() {
                    showLoading()
                },
                success: function(res) {
                    $('#nip').val(res.nip)
                    $('#nama').val(res.nama)
                    swal.close();
                }
            })
        })


        function valueing() {
            // if(document.getElementById('kode').value==="" || document.getElementById('keterangan').value==="") {
            //     document.getElementById('batal').disabled = true
            //     document.getElementById('simpan').disabled = true
            // }else{
            //     document.getElementById('batal').disabled = false
            //     document.getElementById('simpan').disabled = false
            // }
        }

        
        $(document).on('click', '.edit', function(e) {
            e.preventDefault();
            let nip = $(this).data('id')
            $.ajax({
                type: "GET",
                url: `{{ url('master/petugasKorektor') }}/`+nip,
                data: {
                    id: nip,
                    _token: '{{ csrf_token() }}'
                },
                // beforeSend: function() {
                //     showLoading()
                // },
                success: function(response) {
                    console.log('respon');
                    $('#form-edit').attr('action', "{{ url('master/petugasKorektor') }}/"+nip)
                    $('#nip1').val(response.nip)
                    $('#nama1').val(response.nama)
                    if(response.jabatan.trim() === '0'){
                        $('#konektor').attr('checked', '')
                    }
                    else if {
                        $('#supervisor').attr('checked', '')
                    }
                    else {
                        $('#seniorstaff').attr('checked', '')
                    }
                    console.log(response.jabatan.trim());
                    if(response.aktif == 1){
                        $('#aktif').attr('checked', 'checked')
                    }else if{
                        $('#aktif').removeAttr('checked', ' ')
                    }
                    swal.close();
                }
            })
        })


        function clear() {
            document.getElementById('noPelanggan').value = ''
        }
        document.getElementById("clear").addEventListener("click", clear);
    </script>
@endpush
