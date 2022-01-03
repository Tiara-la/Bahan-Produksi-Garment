<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">Bahan Produksi</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item btn btn-primary tombol" href="#">Login</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- JUMBOTRON -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><span>Selamat Datang,</span> di Website Pengolahan Data Bahan Produksi <span>PT.Garment</span></h1>
        </div>
    </div>
    <!-- AKHIR JUMBOTRON -->

    <!-- CONTAINER -->
    <div class="container">

        <!-- info panel -->
        <div class="row justify-content-center">
            <div class="col-7 info-panel">
                <div class="row">
                    <div class="col-lg">
                        <img src="<?= base_url('assets/img/stok.png'); ?>" alt="Stok" class="float-left">
                        <h3>Stok</h3>
                    </div>
                    <div class="col-lg">
                        <img src="<?= base_url('assets/img/penerimaan.png'); ?>" alt="Penerimaan" class="float-left">
                        <h4>Penerimaan</h4>
                    </div>
                    <div class="col-lg">
                        <img src="<?= base_url('assets/img/penyaluran.png'); ?>" alt="Penyaluran" class="float-left">
                        <h4>Penyaluran</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- akhir info panel -->
    </div>
    <!-- AKHIR CONTAINER -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
<!-- <div class="container px-4">
<div class="row mt-5">
    <div class="col-md">
    <h1><center>Selamat Datang di Website Pengolahan Data Stok Bahan Produksi !</center> </h1>
</div>
</div>
</div> -->