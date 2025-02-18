<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TK Nusantara | Contact</title>

	<link rel="stylesheet" href="../css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

   	<!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.2.0/css/all.css"> -->
   	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<!-- Header -->
	<section class="contact-header">
		<nav>
			<a href="index.html"><img src="../images/logo.png"></a>
			<div class="nav-links" id="navLinks">
				<i class="fa fa-times" onclick="hideMenu()"></i>
				<ul>
					<li><a href="index.html">HOME</a></li>
					<li><a href="about.html">ABOUT</a></li>
					<li><a href="blog.php">BLOG</a></li>
					<li><a href="ppdb.php">PPDB</a></li>
					<li><a href="contact.php">CONTACT</a></li>
				</ul>
			</div>
			<i class="fa fa-bars" onclick="showMenu()"></i>
		</nav>
		<h1>Contact Us</h1>
	</section>

	<!-- Location -->
	<section class="location">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.2569973925897!2d107.56284611127259!3d-6.859771467085985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e41b02b4d9d3%3A0x2df3212bfba4a834!2sTK%20Nusantara!5e0!3m2!1sid!2sid!4v1690535629994!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</section>
	
	<!-- Contact us -->
	<section class="contact-us">
		<div class="row">
			<div class="contact-col">
				<div>
					<i class="fa fa-home"></i>
					<span>
						<h5>Gg. PLN No.183, Cihanjuang, Kec. Parongpong</h5>
						<p>4HR8+35 Cihanjuang, Kabupaten Bandung Barat, Jawa Barat 40559</p>
					</span>
				</div>
				<div>
					<i class="fa fa-phone"></i>
					<span>
						<h5>(022)6650313</h5>
						<p>Senin sampai Sabtu, pukul 07.00 sampai 12.00</p>
					</span>
				</div>
				<div>
					<i class="fa fa-envelope-o"></i>
					<span>
						<h5>TKNusantara@gmail.com</h5>
						<p>Kirimkan pesan secara langsung melalui Email</p>
					</span>
				</div>
			</div>
			<div class="contact-col">
				<form action="../Models/c-contact.php" method="POST">
					<input name="nama" type="text" placeholder="Masukkan Nama" maxlength="60" required>
					<input name="email" type="email" placeholder="Masukkan Alamat Email" maxlength="50" required>
					<input name="subjudul" type="text" placeholder="Masukkan Subjek Judul" maxlength="50" required>
					<textarea name="message" rows="8" placeholder="Masukkan Pesan Anda" maxlength="255" required></textarea>
					<button type="submit" class="hero-btn red-btn">KIRIM PESAN</button>
				</form>
			</div>
		</div>
	</section>

	<!-- Footer -->
	<section class="footer">
		<h4>About Us</h4>
		<p>Hubungi kami untuk hal teknis seputar proses dan pelaksanaan Penerimaan Peserta Didik Baru di TK Nusantara ini di menu Contact,<br> Atau pilih menu About untuk membaca Tata Cara dalam Penerimaan Peserta Didik Baru di TK Nusantara.</p>
		<div class="icons">
			<a href="#">
				<i class="fa fa-facebook"></i>
			</a>
			<a href="#">
				<i class="fa fa-twitter"></i>
			</a>
			<a href="#">
				<i class="fa fa-instagram"></i>
			</a>
			<a href="#">
				<i class="fa fa-youtube-play"></i>
			</a>
		</div>
		<p>Made With by | <b class="dakode">Dakode</b></p>
	</section>


	<!-- JavaScript -->
	<script type="text/javascript" src="../js/script.js"></script>
</body>
</html>