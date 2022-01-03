<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header text-white bg-primary">
                    Buat Izin
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="tgl_penerimaan">Tanggal Izin Keluar</label>
                            <input type="text" name="tanggal" class="form-control" id="tgl_penerimaan">
                            <small class="form-text text-danger"><?= form_error('tanggal'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">No Izin</label>
                            <input type="text" name="deskripsi" class="form-control" id="deskripsi">
                            <small class="form-text text-danger"><?= form_error('deskripsi'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="satuan">Nama Peminta Iin</label>
                            <input type="text" name="satuan" class="form-control" id="satuan">
                            <small class="form-text text-danger"><?= form_error('satuan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="no_sj">Nama Pemberi Izin</label>
                            <input type="text" name="no_sj" class="form-control" id="no_sj">
                            <small class="form-text text-danger"><?= form_error('no_sj'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tgl_sj">Tanggal Izin Mulai</label>
                            <input type="text" name="tgl_sj" class="form-control" id="tgl_sj">
                            <small class="form-text text-danger"><?= form_error('tgl_sj'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="supplier">Tanggal Izin Selesai</label>
                            <input type="text" name="supplier" class="form-control" id="supplier">
                            <small class="form-text text-danger"><?= form_error('supplier'); ?></small>
                        </div>


                        <button type="submit" name="tambah" class="btn btn-success float-right">Cetak</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>