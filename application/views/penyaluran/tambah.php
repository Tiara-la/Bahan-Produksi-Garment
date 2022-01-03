<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header text-white bg-primary">
                    Tambah Data Penyaluran Bahan Produksi
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="no_penyaluran">No Penyaluran</label>
                            <input type="text" name="no_pny" class="form-control" id="no_penyaluran">
                            <small class="form-text text-danger"><?= form_error('no_pny'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tgl_penyaluran">Tanggal Penyaluran</label>
                            <input type="text" name="tgl_pny" class="form-control" id="tgl_penyaluran">
                            <small class="form-text text-danger"><?= form_error('tgl_pny'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="no_wo">No WO</label>
                            <input type="text" name="no_wo" class="form-control" id="no_wo">
                            <small class="form-text text-danger"><?= form_error('no_wo'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="bagian">Bagian</label>
                            <input type="text" name="bagian" class="form-control" id="bagian">
                            <small class="form-text text-danger"><?= form_error('bagian'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status">
                                <option value="Terkirim">Terkirim</option>
                                <option value="Belum Terkirim">Belum Terkirim</option>
                                <option value="Proses">Proses</option>
                               
                            </select>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-success float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>