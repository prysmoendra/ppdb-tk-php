<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TK Nusantara | PPDB</title>

	<link rel="stylesheet" href="../css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

   	<!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.2.0/css/all.css"> -->
   	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php
    require_once("../Models/function.php");
    if (isset($_POST['email-phone']) and isset($_POST['password'])) {
        echo login_verification_user();
        return;
    }
    // }
?>
<body>
	<!-- Header -->
	<section class="ppdb-header">
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
		<h1>Penerimaan Peserta Didik Baru</h1>
	</section>

	<!-- CONTENT -->
	<div class="container">
        <!-- NAV CONTENT -->
        <div class="links">
            <a href="#" onclick="showContent('left')"><span>Informasi PPDB</span></a>
            <a href="#" onclick="showContent('center')"><span>Tata Cara PPDB</span></a>
            <a href="#" onclick="showContent('right')"><span>Pendaftaran</span></a>
        </div>
        <div class="content">
            <!-- INFORMASI -->
            <div id="left-content" class="left-content hidden">
                <div class="single-dashboard pt-40">
                    <p>Pendaftaran TK Islam Pembangunan dibuka untuk tingkat TK A dan TK B. </p>
                    <hr>
                    Penerimaan Peserta Didik Baru Tahun Pelajaran 2023/2024 dibuka untuk umum mulai tanggal 10 November 2022. Pendaftaran melalui sistem online dan offline (dapat datang langsung), sebelum tanggal tersebut tidak dapat kami proses.
                    <hr>
                </div>
                <div class="single-dashboard pt-20">
                    <p>
                        <h4>Persyaratan PPDB</h4>
                        <hr>
                    </p>
                    <i class="fa fa-check"></p></i> Membayar Formulir Pendaftaran Rp. 400.000,-<hr></p>
                    <i class="fa fa-check"></p></i> Mengisi Formulir Pendaftaran Online Calon Peserta Didik <hr></p>
                    <i class="fa fa-check"></p></i> Unggah Foto Berwarna terbaru ukuran 3 x 4 cm <hr></p>
                    <i class="fa fa-check"></p></i> Unggah Scan Kartu Keluarga &amp; Akta Kelahiran dengan tipe file PDF<hr></p>
                    <i class="fa fa-check"></p></i> Unggah Scan KTP Orang Tua<hr>
                </div>
            </div>

            <!-- TATA CARA -->
            <div id="center-content" class="center-content hidden">
                <table>
                    <tbody>
                        <tr>
                            <th>1. </th>
                            <td>Silahkan kunjungi web PPDB MP UIN Jakarta di alamat : <b>www.pembangunan.sch.id</b> pilih jenjang yang dituju, kemudian silahkan buat akun pendaftran dengan cara masukan alamat email Anda beserta password; <b>(Pastikan email &amp; No. Telp Anda AKTIF)</b> Isi biodata calon peserta didik dengan lengkap sesuai dengan akte dan KK lalu klik “Daftar” </td>
                        </tr>
                        <tr>
                            <th>2. </th>
                            <td>Setelah berhasil mengisi data, ikuti petunjuk yang ada untuk tahap pembayaran formulir, proses pembayaran formulir dengan memilih metode pembayaran yang telah disediakan; (Waktu yang disediakan untuk proses pembayaran formulir hanya 6 jam terhitung mulai dari penyimpanan data calon peserta didik di web PPDB) </td>
                        </tr>
                        <tr>
                            <th>3. </th>
                            <td>Setelah berhasil melakukan pembayaran formulir, silahkan cek status pendaftaran di web PPDB dengan cara "Login" menggunakan email dan password yang telah anda daftarkan. Segera Lengkapi biodata calon peserta didik untuk kemudian mencetak kartu peserta. (Jika pembayaran belum terkonfirmasi, silahkan kirim bukti pembayaran ke email: tki@pembangunan.sch.id atau hubungi kami di hot line ppdb) </td>
                        </tr>
                        <tr>
                            <th>4. </th>
                            <td>Pengumuman hasil seleksi dapat dilihat di website:<b> www.pembangunan.sch.id,</b> dan di mading yang ada di Madrasah Pembangunan UIN Jakarta pada tanggal yang telah ditentukan; </td>
                        </tr>
                        <tr>
                            <th>5. </th>
                            <td>Setelah dinyatakan diterima di TK Islam Pembangunan, dimohon untuk segera melakukan pembayaran uang masuk melalui transfer maupun tunai di Bank BJB Syariah dengan nomor rekening<b> 5400102001011 Bank BJB KC. Ciputat an. Yayasan Syarif Hidayatullah Jakarta</b> pada tanggal yang telah ditentukan; </td>
                        </tr>
                        <tr>
                            <th>6. </th>
                            <td>Silahkan melengkapi berkas pendafaran melalui website : <a href="https://dikjar.mpuin-jkt.com/ppdb/" target="_blank" rel="noopener noreferrer"> <b> www.dikjar.mpuin-jkt.com/ppdb/ </b></a><b> dengan melengkapi biodata, unduh dan unggah berkas. Kemudian cetak surat rekomendasi pengambilan seragam; <br>Berkas yang perlu disiapkan (scan akte kelahiran, kartu keluarga, bukti pembayaran)</b></td>
                        </tr>
                        <tr>
                            <th>7. </th>
                            <td>Pengambilan seragam dan perlengkapan dengan menunjukan surat rekomendasi yang dicetak melalui website : <a href="https://dikjar.mpuin-jkt.com/ppdb/" target="_blank" rel="noopener noreferrer"> <b> www.dikjar.mpuin-jkt.com/ppdb/ </b></a></td>
                        </tr>
                        <tr>
                            <th>8. </th>
                            <td>Selamat menjadi Peserta didik TK Islam Pembangunan. </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- PENDAFTARAN -->
            <div id="right-content" class="right-content hidden">
                <div class="create-account-form">
                    <h2>Belum punya akun</h2>
                    <br>
                    <button class="btn-create-account" onclick="showSignupForm()">BUAT AKUN BARU</button>
                    <hr>
                    <h2>Login</h2>
                    <br>
                    <!-- <button class="btn-signin-google"><i class="fa-brands fa-google-plus-g"></i>SIGN IN WITH GOOGLE+</button> -->
                    <!-- <center><p>atau</p></center> -->

                    <!-- FORM LOGIN - USER -->
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="email-phone">Email/Phone</label>
                            <input type="text" id="email-phone" name="email-phone" required placeholder="Phone number, username, or email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" required placeholder="Password">
                        </div>
                        <button class="btn-signin" type="submit"><i class="fa-sharp fa-solid fa-right-to-bracket"></i>SIGN IN</button>
                        <p><a href="#">Forgot password?</a></p>
                    </form>
                </div>
                <div class="signup-form hidden">
                    <h2>Sign up</h2>
                    <br>
                    <!-- <button class="btn-signup-google"><i class="fa-brands fa-google-plus-g"></i>SIGN UP WITH GOOGLE+</button> -->
                    <!-- <center><p>ATAU</p></center> -->

                    <!-- FORM DAFTAR AKUN -->
                    <form action="../Models/signup.php" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama lengkap</label>
                            <input type="text" id="nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">No HP</label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="confirm-password">Ulangi Password</label>
                            <input type="password" id="confirm-password" name="confirm-password" required>
                        </div>
                        <button class="btn-signup" onclick="showCreateAccountForm()"> SIGN UP</button>
                        <p><a href="#" onclick="showCreateAccountForm()">< Back</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

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