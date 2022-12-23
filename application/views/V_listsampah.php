<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Sampah</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styleadmin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</head>
<!-- header -->
<div class="container px-3 bg-light">
    <div class="d-flex">
        <div class="d-flex align-items-center " id="navbar">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-items" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                <!-- Sidebar toggle -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none
                                rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
                <!-- end\ -->
                <span class="fas fa-bars ps-3"></span>
            </button>
            <a class="text-decoration-none fs14 ps-3" href="">ADMIN PAGE
            </a>
        </div>
        <div id="navbar2" class="d-flex justify-content-end pe-4"> <span class="far fa-user-circle "></span>
        </div>
    </div>
    <div class="d-md-flex">
        <ul id="navbar-items" class="">
            <li>
                <i class="fas fa-comment-alt px-2 ps-0"></i><a href="<?= site_url('homeadmin') ?>" class="nav-link active">Konfirmasi Pesanan</a>
            </li>
            <li>
                <i class="fas fa-calendar-alt px-2 ps-0"></i><a href="<?= site_url('updatesampah') ?>" class="nav-link">Data Pelanggan</a>
            </li>
            <li>
                <i class="fas fa-chart-line px-2 ps-0"></i><a href="<?= site_url('updatesampah') ?>" class="nav-link">List Sampah</a>
            </li>
            <li>
                <i class="fas fa-fw fa-sign-out-alt px-4 ps-0"></i><a href="<?= site_url('Welcome') ?>" class="nav-link">Logout</a>
            </li>
        </ul>
        <div id="topnavbar">
            <div class="topnav mb-3">
            </div>
            <div class="d-flex align-items-center mb-3 px-md-3 px-2"> <span class="text-uppercase fs13 fw-bolder pe-3 mb-3">search<span class="ps-1">by</span></span>
                <form class="example d-flex align-items-center mb-3"> <input type="text" placeholder="Cari Sesuatu..." name="search"> <button type="submit"><i class="fa fa-search"></i></button> </form>
            </div>
            <a href="<?= base_url('Updatesampah/tambah') ?>" class=" ps-3 btn btn-primary btn-sm px-2 pe-3 mb-3 ">Tambah Data</a>
            <div class="container text-center">
                <p class="teks-pesanan"> List Sampah </p>
                <div class="container text-center">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col"> No </th>
                                <th scope="col"> Kategori </th>
                                <th scope="col"> Jenis </th>
                                <th scope="col"> Jumlah </th>
                                <th scope="col"> Satuan </th>
                                <th scope="col"> Harga </th>
                                <th scope="col"> Action </th>
                            </tr>
                        </thead>

                        <?php
                        $no = 1;
                        foreach ($updatesampah as $ush) : ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $ush->kategori ?></td>
                                <td><?php echo $ush->jenis ?></td>
                                <td><?php echo $ush->satuan ?></td>
                                <td><?php echo $ush->satuankilo ?></td>
                                <td>Rp. <?php echo $ush->hargamin ?> - <?php echo $ush->harga ?></td>
                                <td>
                                    <a href=" <?= site_url('Updatesampah/edit/' . $ush->id) ?>" class="btn btn-sm btn-success"><i class="fa fa-pencil small"></i>Update</a>
                                </td>
                                <td onclick="javascript: return confirm('Anda Yakin Hapus?')">
                                    <form action="<?= site_url('Updatesampah/hapus/') ?>" method="post">
                                        <input type="hidden" name="id" value="<?= $ush->id ?>">
                                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash small"></i>Delete</button>
                                    </form>
                                </td>
                            </tr>

                        <?php endforeach; ?>

                        <div class="d-flex align-items-center justify-content-between px-3 mt-3">
                            <div class="bg-bdark fs13">
                                <span>Page</span>
                                <input class="input-10 text-center" type="text" value="1">
                                <span>
                                    <span class="px-1">of</span>
                                    1</span>
                            </div>
                            <div class="d-flex justify-content-end bg-bdark fs13">
                                <span class="pe-1">Show</span>
                                <input class="input-10" type="number" value="25">
                                <span class="ps-2"><span class="pe-2">/</span>Page</span>
                            </div>
                        </div>
                </div>
            </div>


            <!--js link--->
            <script type="text/javascript" src="js/script.js"></script>
            <!-- js bootstrap -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
            </body>

</html>