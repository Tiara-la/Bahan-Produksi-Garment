<!-- Main Content
<div id="content"> -->
<div class="container-fluid">
    <div class="row">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php if ($this->session->flashdata('flash')) : ?>
            <!-- <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Bahan Produksi <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                    <?php $this->session->unset_userdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div> -->
        <?php endif; ?>
        <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Account</a></li>
                    <li class="breadcrumb-item " aria-current="page">Login History</li>
                </ol>
            </nav>
            <h3 class="mt-3">Riwayat Login Pengguna</h3>


            <div class="row mt-3">
                <div class="col-md-4">
                    <form action="<?= base_url('history'); ?>" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Cari Data Riwayat...." name="keyword" autocomplete="off" autofocus>
                            <div class="input-group-append">
                                <input class="btn btn-secondary" type="submit" name="submit">
                            </div>
                        </div>
                    </form>

                </div>
            </div>


            <div class="row mt-3">
                <div class="col-md-10">
                    <h5>Result: <?= $total_rows; ?> </h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>tanggal</th>
                                <th>Status</th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($histori)) : ?>
                                <tr>
                                    <td colspan="12">
                                        <div class="alert alert-danger" role="alert">Data tidak ditemukan !</div>
                                    </td>
                                </tr>
                            <?php endif; ?>
                            <?php foreach ($histori as $hs) :
                            ?> <tr>
                                    <th><?= ++$start; ?></th>
                                    <th><?= $hs['id']; ?></th>
                                    <th><?= $hs['name']; ?></th>
                                    <th><?= $hs['tgl_login']; ?></th>
                                    <th><?= $hs['role_id']; ?></th>


                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                    <?= $this->pagination->create_links(); ?>
                </div>
            </div>
        </div>