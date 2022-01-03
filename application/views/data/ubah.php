<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header text-white bg-primary">
                    Edit Data Bahan Produksi
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="kode_bp" value="<?= $bahan['kode_bp']; ?>">
                        <div class="form-group">
                            <label for="kode_bp">Kode Bahan</label>
                            <input type="text" name="kode" class="form-control" id="kode_bp" value="<?= $bahan['kode_bp']; ?>">
                            <small class="form-text text-danger"><?= form_error('kode'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama_bp">Nama Bahan</label>
                            <input type="text" name="nama" class="form-control" id="nama_bp" value="<?= $bahan['nama_bp']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="satuan_bp">Satuan</label>
                            <input type="text" name="satuan" class="form-control" id="satuan_bp" value="<?= $bahan['satuan_bp']; ?>">
                            <small class="form-text text-danger"><?= form_error('satuan_bp'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jml_stok">Jumlah Stok</label>
                            <input type="text" name="jumlah" class="form-control" id="jml_stok" value="<?= $bahan['jml_stok']; ?>">
                            <small class="form-text text-danger"><?= form_error('jumlah'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="safety_stok">Safety Stok</label>
                            <input type="text" name="safety" class="form-control" id="safety_stok" value="<?= $bahan['safety_stok']; ?>">
                            <small class="form-text text-danger"><?= form_error('safety'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis</label>
                            <select class="form-control" id="jenis" name="jenis">
                                <?php foreach( $jenis as $j ) : ?>
                                    <?php if( $j == $bahan['jenis'] ) : ?>
                                        <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $j; ?>"><?= $j; ?></option>
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