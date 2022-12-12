<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TrashChange | CHAT</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

</head>

<body>

	<!-- navbar -->
	<header>
		<a href="home.html" class="logo">
			<img src="assets/logo-brand.png" alt="">
		</a>

		<ul class="navbar">
			<li><a href="home.html"> Beranda</a></li>
			<li><a href="pesanan.html">Transaksi</a></li>
			<li><a href="chat.html" class="active">Chat</a></li>
			<li><a href="kelola_akun.html">Kelola Akun</a></li>
		</ul>
		<div class="logo2">
			<a href="#">
				<img src="assets/icon-navbar.png" alt="">
			</a>
		</div>
		<div class="bx bx-menu" id="menu-icon"></div>
	</header>

	<!-- end -->
	<main>
		<div class="container text-center">
			<p class="teks-pesanan">Notifikasi Saya</p>
		</div>

		<div class="containerchat">
			<div class="rowchat">
				<div class="columnchat">
					<?php
					?>
					<div id="pesan"></div>
					<div class="form-group">
						<input type="text" name="nama" id="nama" class="form-control" placeholder="Nama">
					</div>
					<div class="form-group">
						<input type="text" name="message" id="message" class="form-control" placeholder="Pesan">
					</div>
					<div class="form-group">
						<input type="button" value="Send" class="btn btn-primary btn-block" onclick="store();">
					</div>
				</div>
			</div>
		</div>
	</main>


	<!-- footer -->

	<!--js link--->

	<script type="text/javascript" src="js/script.js"></script>
	<!-- js bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>