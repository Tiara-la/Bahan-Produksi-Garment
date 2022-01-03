<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header text-white bg-primary">
                    Edit Data Penyaluran Bahan Produksi
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id_penyaluran" value="<?= $penyaluran['id_penyaluran']; ?>">
                        <div class="form-group">
                            <label for="no_penyaluran">No Penyaluran</label>
                            <input type="text" name="no_pny" class="form-control" id="no_penyaluran" value="<?= $penyaluran['no_penyaluran']; ?>">
                            <small class="form-text text-danger"><?= form_error('no_pny'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tgl_penyaluran">Tanggal Penyaluran</label>
                            <input type="text" name="tgl_pny" class="form-control" id="tgl_penyaluran" value="<?= $penyaluran['tgl_penyaluran']; ?>">
                            <small class="form-text text-danger"><?= form_error('tgl_pny'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="no_wo">No WO</label>
                            <input type="text" name="no_wo" class="form-control" id="no_wo" value="<?= $penyaluran['no_wo']; ?>">
                            <small class="form-text text-danger"><?= form_error('no_wo'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="bagian">Bagian</label>
                            <input type="text" name="bagian" class="form-control" id="bagian" value="<?= $penyaluran['bagian']; ?>">
                            <small class="form-text text-danger"><?= form_error('bagian'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $penyaluran['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status">
                                <?php foreach( $status as $s ) : ?>
                                    <?php if( $s == $penyaluran['status'] ) : ?>
                                        <option value="<?= $s; ?>" selected><?= $s; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $s; ?>"><?= $s; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-success float-right">Edit Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>