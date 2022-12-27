<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TrashChange | Pick Up</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>Assets/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">

</head>

<body>

    <!-- navbar -->
    <header>
        <a href="<?php echo base_url(); ?>home" class="logo">
            <img src="<?php echo base_url() ?>Assets/assets/logo-brand.png" alt="">
        </a>

        <ul class="navbar">
            <li><a href="<?php echo base_url(); ?>home" class="active"> Beranda</a></li>
            <li><a href="<?php echo base_url(); ?>Pemesanan/index">Transaksi</a></li>
            <li><a href="<?php echo base_url(); ?>Chat/index">Chat</a></li>
            <li><a href="<?php echo base_url(); ?>Kelolaakun/index">Kelola Akun</a></li>
        </ul>
        <div class="logo2">
            <a href="#">
                <img src="assets/icon-navbar.png" alt="">
            </a>
        </div>
        <div class="bx bx-menu" id="menu-icon"></div>
    </header>
    <!-- end -->

    <!-- main -->
    <main>
        <div class="container text-center">
            <p class="teks-pesanan">
                <a href="<?php echo base_url(); ?>home">
                    <i class="fas fa-long-arrow-alt-left"></i>
                </a>
                Pick Up
            </p>

            <div class="teks-pickup">
                <p>Order layanan Pickup, driver akan menjemput sampahmu. Lihat panduan berat sampah
                    <a href="<?php echo base_url(); ?>Guidance">di sini.</a>
                </p>
                <p class="teks-pickup2">Informasi Sampah</p>
                <p class="teks-pickup3"> Pilih jenis sampah dan masukkan perkiraan berat sampah. Tidak ada batasan berat minimal penjemputan. </p>
            </div>
        </div>

        <div class="container mt-5">
            <form class="pickup">
                <div class="form-check form-check-reverse">
                    <input class="form-check-input" type="checkbox" value="" id="reverseCheck1">
                    <label class="form-check-label" for="reverseCheck1">
                        <i class="fas fa-book"></i> Kertas
                    </label>
                </div>
                <hr />

                <div class="form-check form-check-reverse mt-4">
                    <input class="form-check-input" type="checkbox" value="" id="reverseCheck1">
                    <label class="form-check-label" for="reverseCheck1">
                        <i class="fas fa-gift"></i>Plastik
                    </label>
                </div>
                <hr />

                <div class="form-check form-check-reverse mt-4">
                    <input class="form-check-input" type="checkbox" value="" id="reverseCheck1">
                    <label class="form-check-label" for="reverseCheck1">
                        <i class="fa fa-tv"></i>elektronik
                    </label>
                </div>
                <hr />

                <div class="form-check form-check-reverse mt-4">
                    <input class="form-check-input" type="checkbox" value="" id="reverseCheck1">
                    <label class="form-check-label" for="reverseCheck1">
                        <i class="fas fa-wrench"></i>Besi
                    </label>
                </div>
                <hr />

                <div class="form-check form-check-reverse mt-4">
                    <input class="form-check-input" type="checkbox" value="" id="reverseCheck1">
                    <label class="form-check-label" for="reverseCheck1">
                        <i class="fas fa-atom"></i>Aluminium
                    </label>
                </div>
                <hr />

                <div class="form-check form-check-reverse mt-4">
                    <input class="form-check-input" type="checkbox" value="" id="reverseCheck1">
                    <label class="form-check-label" for="reverseCheck1">
                        <i class="fas fa-wine-bottle"></i>Botol Kaca
                    </label>
                </div>
                <hr />

                <div class="pickup-kirim">
                    <p>
                        <a href="#">Pesan</a>
                    </p>
                </div>
            </form>
        </div>

    </main>
    <!-- end -->

    <!-- footer -->
    <footer>

        <div id="container">
            <div class="main-content">
                <div class="logo-footer">
                    <img src="assets/logo.png" alt="">
                </div>
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

                <div class="center1 box">
                    <h2>Link Terkait</h2>
                    <div class="content">
                        <div class="list-link">
                            <li><a href="<?php echo base_url(); ?>home" class="active"> Beranda</a></li>
                            <li><a href="<?php echo base_url(); ?>Pemesanan/index">Transaksi</a></li>
                            <li><a href="<?php echo base_url(); ?>Chat/index">Chat</a></li>
                            <li><a href="<?php echo base_url(); ?>Kelolaakun/index">Kelola Akun</a></li>
                        </div>
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
    <!-- end -->

    <!--js link--->
    <script type="text/javascript" src="js/script.js"></script>
    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>