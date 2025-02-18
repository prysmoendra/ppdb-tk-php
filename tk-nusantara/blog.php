<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TK Nusantara | Blog</title>

	<link rel="stylesheet" href="../css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

   	<!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.2.0/css/all.css"> -->
   	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<!-- Header -->
	<section class="blog-header">
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
		<h1>Berita dan Informasi</h1>
	</section>

	<!-- Blog -->
	<section class="blog-content">
		<div class="row">
			<div class="blog-left">
				<img src="../images/certificate.jpg">
				<h2>Berita dan Informasi Terbaru</h2>
				<p><b>Penerimaan Peserta Didik Baru </b></p>
				<br>
				<p>"Kami sebagai tim dakode developer sangat antusias dalam pembuatan website penerimaan peserta didik baru TK Nusantara. Kami berkomitmen untuk memberikan pengalaman terbaik bagi calon peserta didik dan orang tua dalam mencari informasi tentang TK Nusantara. Dalam pembuatan website ini, kami akan memastikan bahwa website mudah digunakan, informatif, dan menarik bagi pengunjung. Kami juga akan memastikan bahwa website ini dapat diakses dengan mudah oleh semua orang."</p>
				<br>
				<p>Kami akan memastikan bahwa website ini memiliki tampilan yang menarik dan sesuai dengan tema TK Nusantara. Kami akan menggunakan warna-warna yang cerah dan menarik untuk menarik perhatian pengunjung. Kami juga akan memastikan bahwa website ini memiliki fitur-fitur yang berguna bagi calon peserta didik dan orang tua. Fitur-fitur tersebut antara lain informasi tentang kurikulum TK Nusantara, jadwal kegiatan, biaya pendidikan, dan lain-lain.</p>
				<br>
				<p>Kami berharap bahwa website ini dapat membantu calon peserta didik dan orang tua dalam mencari informasi tentang TK Nusantara. Kami juga berharap bahwa website ini dapat membantu TK Nusantara dalam mempromosikan diri dan menarik minat calon peserta didik.</p>
				<br>
				<p>
					<ul class="list">
						<li><p>TK Nusantara menawarkan kurikulum yang komprehensif dan terintegrasi yang dirancang untuk memenuhi kebutuhan pendidikan anak-anak di usia dini. Kurikulum ini mencakup semua aspek perkembangan anak-anak, termasuk kognitif, sosial, emosional, dan fisik.</p></li>
						<li><p>TK Nusantara memiliki tim pengajar yang berpengalaman dan berkualitas tinggi. Tim pengajar ini terdiri dari guru-guru yang berdedikasi dan berkomitmen untuk memberikan pendidikan terbaik bagi anak-anak.</p></li>
						<li><p>TK Nusantara menawarkan lingkungan belajar yang aman dan nyaman bagi anak-anak. Lingkungan belajar ini dirancang untuk mempromosikan kreativitas dan eksplorasi anak-anak.</p></li>
						<li><p>TK Nusantara menawarkan berbagai kegiatan ekstrakurikuler yang dirancang untuk membantu anak-anak mengembangkan minat dan bakat mereka. Kegiatan-kegiatan ini mencakup olahraga, seni, musik, tari, dan banyak lagi.</p></li>
					</ul>
				</p>
				<br>
				<p>TK Nusantara adalah sumber informasi yang sangat berguna bagi orang tua yang mencari sekolah terbaik untuk anak-anak mereka. Blog ini menyediakan informasi terbaru tentang kegiatan sekolah, prestasi siswa, kurikulum, program pendidikan, kegiatan ekstrakurikuler, fasilitas dan lingkungan belajar di TK Nusantara, dan informasi penerimaan siswa baru.</p>

				<div class="comment-box">
					<h3>Tinggalkan Masukan</h3>
					<form action="../Models/c-blog.php" class="comment-form" method="POST">
						<input type="text" name="nama" placeholder="Masukkan Nama" maxlength="60" required>
						<input type="email" name="email" placeholder="Masukkan Email"  maxlength="50" required>
						<textarea name="komentar" rows="5" placeholder="Masukkan Komentar" maxlength="255" required></textarea>
						<button type="submit" class="hero-btn red-btn">KIRIM MASUKAN</button>
					</form>
				</div>
			</div>
			<div class="blog-right">
				<h3>Kategori Postingan</h3>
				<div>
					<span>Olahraga</span>
					<span>9</span>
				</div>
				<div>
					<span>Rekreasi</span>
					<span>11</span>
				</div>
				<div>
					<span>Kebersihan</span>
					<span>8</span>
				</div>
				<div>
					<span>kerohanian</span>
					<span>12</span>
				</div>
				<div>
					<span>Menggambar</span>
					<span>10</span>
				</div>
				<div>
					<span>Mewarnai</span>
					<span>9</span>
				</div>
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