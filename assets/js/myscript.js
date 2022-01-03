

const flashData = $('.flash-data').data('flashdata');

if(flashData) {
    Swal ({
        title: 'Data Bahan Produksi',
        text: 'Berhasil' + flashData,
        type: 'success'
    });

}

//tombol hapus
$('.tombol-hapus').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal({
        title: 'Apakah anda yakin',
        text:'data bahan produksi akan dihapus',
        type: 'warning',
        showCancelButon: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus Data!'

    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })

});