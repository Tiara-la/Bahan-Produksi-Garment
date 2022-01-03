<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header text-white bg-primary">
                    Edit Data Penerimaan Bahan Produksi
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id_penerimaan" value="<?= $penerimaan['id_penerimaan']; ?>">
                        <div class="form-group">
                            <label for="tgl_penerimaan">Tanggal</label>
                            <input type="text" name="tanggal" class="form-control" id="tgl_penerimaan" value="<?= $penerimaan['tgl_penerimaan']; ?>">
                            <small class="form-text text-danger"><?= form_error('tgl_penerimaan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control" id="deskripsi" value="<?= $penerimaan['deskripsi']; ?>">
                            <small class="form-text text-danger"><?= form_error('deskripsi'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="satuan">Satuan</label>
                            <input type="text" name="satuan" class="form-control" id="satuan" value="<?= $penerimaan['satuan']; ?>">
                            <small class="form-text text-danger"><?= form_error('satuan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="no_sj">No Surat Jalan</label>
                            <input type="text" name="no_sj" class="form-control" id="no_sj" value="<?= $penerimaan['no_sj']; ?>">
                            <small class="form-text text-danger"><?= form_error('no_sj'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tgl_sj">Tanggal Surat Jalan</label>
                            <input type="text" name="tgl_sj" class="form-control" id="tgl_sj" value="<?= $penerimaan['tgl_sj']; ?>">
                            <small class="form-text text-danger"><?= form_error('tgl_sj'); ?></small>
                        </div>
                       
                        <div class="form-group">
                            <label for="supplier">Supplier</label>
                            <input type="text" name="supplier" class="form-control" id="supplier" value="<?= $penerimaan['supplier']; ?>">
                            <small class="form-text text-danger"><?= form_error('supplier'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input type="text" name="jumlah" class="form-control" id="jumlah" value="<?= $penerimaan['jumlah']; ?>">
                            <small class="form-text text-danger"><?= form_error('jumlah'); ?></small>
                        </div>
                       
                        <button type="submit" name="ubah" class="btn btn-success float-right">Edit Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>