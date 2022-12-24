<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TrashChange | HOME</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/9350614167.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- navbar -->
    <header>
        <a href="<?php echo base_url(); ?>home" class="logo">
            <img src="<?php echo base_url(); ?>assets/assets/logo-brand.png" alt="" />
        </a>

        <ul class="navbar">
            <li>Hai! <b><?php echo $this->session->userdata('Username'); ?></b></li>
            <li><a href="<?php echo base_url(); ?>home" class="active"> Beranda</a></li>
            <li><a href="<?php echo base_url(); ?>Pemesanan/index">Transaksi</a></li>
            <li><a href="<?php echo base_url(); ?>Chat/index">Chat</a></li>
            <li><a href="<?php echo base_url(); ?>Kelolaakun/index">Kelola Akun</a></li>
        </ul>

        <div class="logo2">
            <a href="#">
                <img src="<?php echo base_url(); ?>assets/assets/icon-navbar.png" alt="" />
            </a>
        </div>

        <div class="bx bx-menu" id="menu-icon"></div>
    </header>

    <!-- end -->
    <main>
        <!-- iklan1 -->
        <div id="carouselExampleControls" class="carousel slide mt-5" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo base_url(); ?>assets/assets/banner1.png" class="d-block w-100" alt="..." />
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url(); ?>assets/assets/banner1.png" class="d-block w-100" alt="..." />
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url(); ?>assets/assets/banner1.png" class="d-block w-100" alt="..." />
                </div>
            </div>
        </div>
        <!-- iklan 1 end -->

        <!-- kategori -->
        <div class="container mt-5">
            <div class="row justify-content-around g-0 text-center">
                <div class="col-md-3">
                    <div class="menu-kategori">
                        <a href="pickup.html"><img src="<?php echo base_url(); ?>assets/assets/icon_pickup.png" class="img-kategori" /></a>
                        <p class="mt-2">Pick Up</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="menu-kategori">
                        <a href="dropoff.html"><img src="<?php echo base_url(); ?>assets/assets/icon_dropoff.png" class="img-kategori" /></a>
                        <p class="mt-2">Drop Off</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="menu-kategori">
                        <a href="tcbox.html"><img src="<?php echo base_url(); ?>assets/assets/icon_tcbox.png" class="img-kategori" /></a>
                        <p class="mt-2">Tc Box</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="menu-kategori">
                        <a href="tentangkami.html"><img src="<?php echo base_url(); ?>assets/assets/ixon_ttgkami.png" class="img-kategori" /></a>
                        <p class="mt-2">Tentang Kami</p>
                    </div>
                </div>

            </div>
        </div>
        <!-- kategori end -->

        <!-- rekomendasi -->
        <div class="container">
            <div class="rekomendasi">
                <h3 style="text-align: center;">Sample Jenis Sampah</h3>
            </div>
        </div>
        <!-- end -->


        <!-- jenis sampah card -->
        <div id="jenisSampahCard" class="container mt-5 text-center">
            <div class="card w-25 d-inline-block m-3">
                <img src="<?php echo base_url(); ?>assets/assets/sampah1.jpg" class="card-img-top" alt="...">
                <div class="m-3">
                    <h5 class="card-title">Kertas</h5>
                    <p class="card-text">Up to Rp5000,- <span>/kg</span></p>
                    <p class="card-text"><small class="text-muted">Kertas banyak ditemui di sampah perkantoran. Sampah kertas bisa berupa koran, majalah, dan sebagainya.</small></p>
                </div>
            </div>
            <div class="card w-25 d-inline-block m-3">
                <img src="<?php echo base_url(); ?>assets/assets/sampah2.jpg" class="card-img-top" alt="...">
                <div class="m-3">
                    <h5 class="card-title">Kaca</h5>
                    <p class="card-text">Up to Rp10000,- <span>/unit</span></p>
                    <p class="card-text"><small class="text-muted">Restoran dan rumah tangga merupakan sumber sampah kaca yang biasanya berupa botol kaca bekas.</small></p>
                </div>
            </div>
            <div class="card w-25 d-inline-block m-3">
                <img src="<?php echo base_url(); ?>assets/assets/sampah3.jpg" class="card-img-top" alt="...">
                <div class="m-3">
                    <h5 class="card-title">Elektronik</h5>
                    <p class="card-text">Up to Rp200000,- <span>/unit</span></p>
                    <p class="card-text"><small class="text-muted">Barang elektronik yang telah rusak, seperti mesin cuci, kipas angin, dan lain-lain sering kali terbengkalai.</small></p>
                </div>
            </div>
        </div>
        <!-- end -->


    </main>

    <!-- footer -->
    <footer>
        <div id="container">
            <div class="main-content">

                <div class="left box">
                    <h2>About us</h2>
                    <div class="content">
                        <p>TrashChange merupakan sebuah aplikasi sederhana yang digunakan untuk proses menukar sampah
                            menjadi bahan pokok atau sebagainya.</p>
                        <div class="social">
                            <a href="#"><span class="fab fa-facebook-f"></span></a>
                            <a href="#"><span class="fab fa-twitter"></span></a>
                            <a href="#"><span class="fab fa-instagram"></span></a>
                            <a href="#"><span class="fab fa-youtube"></span></a>
                        </div>
                    </div>
                </div>

                <div class="center box">
                    <h2>Link Terkait</h2>
                    <div class="content">
                        <ul class="list-link">
                            <li><a href="home.html">Beranda</a></li>
                            <li><a href="pesanan.html">Transaksi</a></li>
                            <li><a href="chat.html">chat</a></li>
                            <li><a href="kelola_akun.html">kelola Akun</a></li>
                        </ul>
                    </div>
                </div>

                <div class="center box">
                    <h2>Hubungi Kami</h2>
                    <div class="content">
                        <div class="place">
                            <span class="fas fa-map-marker-alt"></span>
                            <span class="text">Gunung Anyar, SUB, Jawa Timur</span>
                        </div>
                        <div class="phone">
                            <span class="fas fa-phone-alt"></span>
                            <span class="text">+089-123456789</span>
                        </div>
                        <div class="email">
                            <span class="fas fa-envelope"></span>
                            <span class="text">Kelompok10@example.com</span>
                        </div>
                    </div>
                </div>


            </div>

            <div class="bottom">
                <center>
                    <span class="credit">Created By Kelompok 10 </a> | </span>
                    <span class="far fa-copyright"></span><span> 2022 All rights reserved.</span>
                </center>
            </div>

        </div>
    </footer>
    <!-- End Footer -->

    <!--js link--->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/script.js"></script>
    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>