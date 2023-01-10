<div class="modal fade" id="pln" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Jalan PLN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{-- <form action="" class="form-horizontal"> --}}
                <div class="form-group row mt-2">
                    <label for="zona" class="col-md-2 col-form-label">Zona </label>
                    <div class="col-md-3">
                        <input type="text" class="form-control" id="zona" name="zona">
                    </div>
                </div>
                <div class="form-group row mt-2">
                    <label for="no_bundel" class="col-md-2 col-form-label">Bundel </label>
                    <div class="col-md-3">
                        <input type="text" class="form-control" id="no_bundel" name="no_bundel">
                    </div>
                    <button class="btn btn-info btn-mt-2" id="cari" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </div><br>
                    <div class="form-group row mt-2">
                        <label for="no_plg" class="col-md-2 col-form-label">Nopel</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="no_plg" name="no_plg" value="">
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="alamat" class="col-md-2 col-form-label">Alamat</label>
                        <div class="col-md-8">
                            <textarea class="form-control" id="alamat" name="alamat" value="" value=""></textarea>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="text" class="col-md-2 col-form-label">PLN</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control amper" id="amper" name="amper">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="kwh" name="kwh">
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="text" class="col-md-2 col-form-label">Jalan</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="jalan" name="jalan">
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <div class="col-md-6">
                            <button class="btn btn-success btn-sm" type="submit"><i class="far fa-save"></i> Simpan</button>
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-undo"></i> Batal</button>
                        </div>
                    </div>

                {{-- </form> --}}
            </div>
        </div>
    </div>
</div>

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

        $(document).on('click', '#cari', function(e) {
            e.preventDefault();
            let zona = $('#zona').val();
            let no_bundel = $('#no_bundel').val();
            $.ajax({
                type: "POST",
                dataType: "JSON",
                url: `{{ url('master/surveyTarif') }}`,
                data: {
                    _token: '{{ csrf_token() }}',
                    _method: "POST",
                    zona: zona,
                    no_bundel: no_bundel,
                },
                beforeSend: function() {
                    showLoading()
                },
                success: function(response) {
                    console.log(response);
                    $('#no_plg').val(response.no_plg)
                    $('#alamat').val(response.alamat)
                    $('#pln').val(response.pln)
                    $('#jalan').val(response.lebar_jalan)
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
                                alert("Data Ampere Tersebut Tidak Ada")
                                break;
                        }
                    }
                }
            }
        })

    </script>
@endpush
