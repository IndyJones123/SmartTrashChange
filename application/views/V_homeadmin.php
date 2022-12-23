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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</head>

<body>
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
                    <i class="fas fa-comment-alt px-2 ps-0"></i><a href="<?= site_url('homeadmin') ?>" class="nav-link active">History Pemesanan</a>
                </li>
                <li>
                    <i class="fas fa-calendar-alt px-2 ps-0"></i><a href="<?php echo base_url(); ?>Pelanggan" class="nav-link">Data Pelanggan</a>
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
                    <div class="d-flex px-1">
                        <p> Selamat Datang Admin <strong><?php echo $this->session->userdata('Username'); ?></strong> </p>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-3 px-md-3 px-2"> <span class="text-uppercase fs13 fw-bolder pe-3">search<span class="ps-1">by</span></span>
                    <form class="example d-flex align-items-center"> <input type="text" placeholder="Cari Sesuatu..." name="search"> <button type="submit"><i class="fa fa-search"></i></button> </form>
                </div>
                <div class="container text-center">
                    <p class="teks-pesanan"> History Pemesanan </p>
                    <div class="container text-center">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col"> No </th>
                                    <th scope="col"> Nama </th>
                                    <th scope="col"> Alamat </th>
                                    <th scope="col"> Kategori Sampah </th>
                                    <th scope="col"> Jenis Sampah </th>
                                    <th scope="col"> Tanggal Pemesanan </th>
                                    <th scope="col"> Total Sampah </th>
                                    <th scope="col"> Harga </th>
                                    <th scope="col"> Action </th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <th scope="row">1</th>
                                    <td>Alvin</td>
                                    <td>Jl. Adirasa No.20</td>
                                    <td>Kertas</td>
                                    <td>Koran</td>
                                    <td>12 Desember 2022</td>
                                    <td>2 Kg</td>
                                    <td>Rp. 2000</td>
                                    <td><a href="pesan_berhasil_admin.html" class="btn btn-sm btn-success">Terima</a></td>
                                    <td><a href="pesan_gagal_admin.html" class="btn btn-sm btn-danger">Tolak</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Pandu</td>
                                    <td>Jl. veteran nomer 35</td>
                                    <td>Kertas</td>
                                    <td>HVS</td>
                                    <td>10 Desember 2022</td>
                                    <td>2 Kg</td>
                                    <td>Rp. 4000</td>
                                    <td><a href="" class="btn btn-sm btn-success">Terima</a></td>
                                    <td><a href="" class="btn btn-sm btn-danger">Tolak</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Dorif</td>
                                    <td>Jl. kudus raya nomer 27</td>
                                    <td>Kaca</td>
                                    <td>Botol Minuman Besar</td>
                                    <td>30 Desember 2022</td>
                                    <td>5 Botol</td>
                                    <td>Rp. 5000</td>
                                    <td><a href="" class="btn btn-sm btn-success">Terima</a></td>
                                    <td><a href="" class="btn btn-sm btn-danger">Tolak</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Isan</td>
                                    <td>Jl. semarang nomer 18</td>
                                    <td>Elektronik</td>
                                    <td>TV</td>
                                    <td>20 Desember 2022</td>
                                    <td>1 TV</td>
                                    <td>Rp. 100.000</td>
                                    <td><a href="" class="btn btn-sm btn-success">Terima</a></td>
                                    <td><a href="" class="btn btn-sm btn-danger">Tolak</a></td>
                                </tr>
                            </tbody>
                        </table>
                        </ol>

                    </div>
                </div>
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
    </div>
    <!-- end of header -->

    <!-- footer -->
    <footer>
        <div class="container py-4 mt-5">
            <div class="row px-3">
                <div class="social-contact ">
                    <small class="text-center mb-3">Copyright &copy; 2022. All rights reserved.</small>
                    <span class="fab fa-facebook"></span>
                    <span class="fab fa-google-plus"></span>
                    <span class="fab fa-linkedin"></span>
                    <span class="fab fa-twitter"></span>
                </div>
            </div>
        </div>
    </footer>

    <!--js link--->
    <script type="text/javascript" src="js/script.js"></script>
    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>