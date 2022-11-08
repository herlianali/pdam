{
  "no_bonc": "TCL1111561          ",
  "tgl_bonc": "2011-11-14 00:00:00",
  "status_bonc": "S",
  "no_bonp": "TP11035601          ",
  "status_bonp": "P",
  "tgl_bonp": "2011-12-21 00:00:00",
  "no_pengaduan": "T20110076843        ",
  "tgl_pengaduan": "2011-11-14 10:42:37",
  "status": "Sedang diproses",
  "kel_bonc": "L",
  "jns_pekerjaan": "43",
  "no_plg": "0000010 ",
  "jns_pengadu": "P",
  "nama_pengadu": "PARDEDE                       ",
  "alamat_pengadu": "AMARTA TIMUR  2                                                                                     ",
  "nama": "S U K A D I                   ",
  "jalan": "AMARTA TIMUR                                      ",
  "gang": null,
  "nomor": "2   ",
  "notamb": null,
  "uraian": null,
  "jns_pengaduan": "A ",
  "asal_pengaduan": "T ",
  "sifat": "A"
}

$.ajax({
    type: "GET",
    url: `{{ url('pengaduan/cariPelanggan') }}/`+params,
    xhrFields: {
        withCredentials: true
    },
    data: {
        id: params,
        _token: '{{ csrf_token() }}'
    },
    beforeSend: function() {
        showLoading()
    },
    success: function(res) {
        // table.empty()
        // $.each(res, function(a, b) {
        //     table.append(
        //         '<tr onclick="">'
        //             +'<td>'+b.no_bonc+'</td>'
        //             +'<td>'+b.tgl_bonc+'</td>'
        //             +'<td>'+b.status_bonc+'</td>'
        //             +'<td>'+b.no_bonp+'</td>'
        //             +'<td>'+b.status_bonp+'</td>'
        //             +'<td>'+b.tgl_bonp+'</td>'
        //             +'<td>'+b.no_pengaduan+'</td>'
        //             +'<td>'+b.tgl_pengaduan+'</td>'
        //             +'<td>'+b.status+'</td>'
        //             +'<td>'+b.kel_bonc+'</td>'
        //             +'<td>'+b.jns_pekerjaan+'</td>'
        //             +'<td>'+b.no_plg+'</td>'
        //             +'<td>'+b.jns_pengadu+'</td>'
        //             +'<td>'+b.nama_pengadu+'</td>'
        //             +'<td>'+b.alamat_pengadu+'</td>'
        //             +'<td>'+b.nama+'</td>'
        //             +'<td>'+b.jalan+'</td>'
        //             +'<td>'+b.gang+'</td>'
        //             +'<td>'+b.nomor+'</td>'
        //             +'<td>'+b.notamb+'</td>'
        //             +'<td>'+b.uraian+'</td>'
        //             +'<td>'+b.jns_pengaduan+'</td>'
        //             +'<td>'+b.asal_pengaduan+'</td>'
        //             +'<td>'+b.sifat+'</td>'
        //             +'<td>'+b.sifat+'</td>'
        //             +'<td>'+b.sifat+'</td>'
        //             +'<td>'+b.sifat+'</td>'
        //         +'</tr>'
        //     )
        // })
        $('#table').DataTable({
            paging: false,
            searching: false,
            data: res,
            column: [
                {data: 'no_bonc'},
                {data: 'tgl_bonc'},
                {data: 'status_bonc'},
                {data: 'no_bonp'},
                {data: 'status_bonp'},
                {data: 'tgl_bonp'},
                {data: 'no_pengaduan'},
                {data: 'tgl_pengaduan'},
                {data: 'status'},
                {data: 'kel_bonc'},
                {data: 'jns_pekerjaan'},
                {data: 'no_plg'},
                {data: 'jns_pengadu'},
                {data: 'nama_pengadu'},
                {data: 'alamat_pengadu'},
                {data: 'nama'},
                {data: 'jalan'},
                {data: 'gang'},
                {data: 'nomor'},
                {data: 'notamb'},
                {data: 'uraian'},
                {data: 'jns_pengaduan'},
                {data: 'asal_pengaduan'},
                {data: 'sifat'},
                {data: 'sifat'},
                {data: 'sifat'},
                {data: 'sifat'}
            ],
        })
        // res.forEach(element => {


            // dt +=
        // });
        $('.modal').modal('hide')
        swal.close();
    }
})