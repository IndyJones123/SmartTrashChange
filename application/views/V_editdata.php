<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Admin</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styleadmin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</head>
   <!-- header -->
   <div class="container px-3 bg-light">
            <div class="d-flex">
                <div class="d-flex align-items-center " id="navbar">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbar-items" aria-controls="navbarSupportedContent" aria-expanded="true"
                        aria-label="Toggle navigation">
                         <!-- Sidebar toggle -->
                         <button id="sidebarToggleTop" class="btn btn-link d-md-none
                                rounded-circle mr-3">
                                <i class="fa fa-bars"></i>
                            </button>
                         <!-- end\ -->
                        <span class="fas fa-bars ps-3"></span>
                    </button>
                    <a class="text-decoration-none fs14 ps-3" href="">ADMINISTRATOR
                    </a>
                </div>
                <div id="navbar2" class="d-flex justify-content-end pe-4"> <span class="far fa-user-circle "></span>
                </div>
            </div>
            <div class="d-md-flex">
                <ul id="navbar-items" class="">
                <li>
                        <i class="fas fa-comment-alt px-2 ps-0"></i><a href="<?=site_url('homeadmin') ?>" class="nav-link active">Konfirmasi Pesanan</a>
                    </li>
                    <li>
                        <i class="fas fa-calendar-alt px-2 ps-0"></i><a href="<?=site_url('updatesampah') ?>" class="nav-link">Data Pelanggan</a>
                    </li>
                    <li>
                        <i class="fas fa-chart-line px-2 ps-0"></i><a href="<?=site_url('updatesampah') ?>" class="nav-link">List Sampah</a>
                    </li>
                    <li>
                        <i class="fas fa-fw fa-sign-out-alt px-4 ps-0"></i><a href="<?=site_url('Welcome') ?>" class="nav-link">Logout</a>
                    </li>
                </ul>

                <div class="container-fluid ps-3">
                <h3 class="col-sm-5 ps-3">Halaman Tambah Data</h3>
                <hr>
                <br>
                <form method="post" action="<?php echo base_url('Updatesampah/proses_edit'); ?>">

                    <input type="hidden" name="id" value="<?php echo $loaddata['id']; ?>">
                    
                    <div class="form-group row">
                        <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="kategori" value="<?php echo $loaddata['kategori']; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="jenis" value="<?php echo $loaddata ['jenis']; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="satuan" class="col-sm-2 col-form-label">Jumlah</label>
                        <div class="col-sm-5">
                            <input type="number" class="form-control" name="satuan" value="<?php echo $loaddata ['satuan']; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="satuankilo" class="col-sm-2 col-form-label">Satuan</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="satuankilo" value="<?php echo $loaddata ['satuankilo']; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="hargamin" class="col-sm-2 col-form-label">Harga Minimum
                        </label>
                        <div class="col-sm-5">
                            <input type="number" class="form-control" name="hargamin" value="<?php echo $loaddata ['hargamin']; ?>">
                        </div>
                    </div>

                    <div class="form-group row ">
                        <label for="harga" class="col-sm-2 col-form-label">Harga Maximum</label>
                        <div class="col-sm-5">
                            <input type="number" class="form-control" name="harga" value="<?php echo $loaddata ['harga']; ?>">
                        </div>
                    </div>

                    <div class="form-group row ">
                        <label for="harga" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-5">
                            <button type="submit" class="btn btn-primary">Ubah</button>
                            <button type="reset" class="btn btn-danger">Cancel</button>
                        </div>
                    </div>
                    </div>
                    </form>

    <!--js link--->
<script type="text/javascript" src="js/script.js"></script>
<!-- js bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>