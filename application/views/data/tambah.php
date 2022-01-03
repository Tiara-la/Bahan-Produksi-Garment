<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header text-white bg-primary">
                    Tambah Data Bahan Produksi
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="kode_bp">Kode Bahan</label>
                            <input type="text" name="kode" class="form-control" id="kode_bp">
                            <small class="form-text text-danger"><?= form_error('kode'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama_bp">Nama Bahan</label>
                            <input type="text" name="nama" class="form-control" id="nama_bp">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="satuan_bp">Satuan</label>
                            <input type="text" name="satuan" class="form-control" id="satuan_bp">
                            <small class="form-text text-danger"><?= form_error('satuan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jml_stok">Jumlah Stok</label>
                            <input type="text" name="jumlah" class="form-control" id="jml_stok">
                            <small class="form-text text-danger"><?= form_error('jumlah'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="safety_stok">Safety Stok</label>
                            <input type="text" name="safety" class="form-control" id="safety_stok">
                            <small class="form-text text-danger"><?= form_error('safety'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis</label>
                            <select class="form-control" id="jenis" name="jenis">
                                <option value="Kain Polos">Kain Polos</option>
                                <option value="Kain Corak">Kain Corak</option>
                               
                            </select>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-success float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>