<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TK Nusantara | User</title>

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../css/user-style.css">

</head>
<?php
	// error_reporting(0);
	session_start();
	if (isset($_SESSION['id']) && isset($_SESSION['nama']) && isset($_SESSION['email'])) {
		$id = $_SESSION['id'];
?>
<body>
	<!--=== SIDEBAR ===-->
	<section class="user-content">
		<div class="header" id="header">
			<div class="side-nav">
				<div class="user">
					<img src="../images/user-default.png" class="user-img">
					<div>
						<h2><?= $_SESSION['nama'] ?></h2>
						<p><?= $_SESSION['email'] ?></p>
					</div>
				</div>
				<ul>
					<li><img src="../images/dashboard.png"><a href="user-index.php" style="text-decoration: none;color: #000;"><p>Mading Informasi</p></a></li>
				</ul>
				<ul class="logout">
					<li><img src="../images/logout.png"><p><a href="../Models/logout.php" class="link-logout">Keluar</a></p></li>
				</ul>
				<p class="made">Made With by | <b class="dakode">Dakode</b></p>
			</div>
		</div>
	</section>

	<!--=== CONTENT ===-->
	<section class="main-user">
		<?php
			require_once('../Models/connect_db.php');
			$sql = "SELECT * from users WHERE id = '$id'";
			$query = mysqli_query($conn, $sql);
			$user = mysqli_fetch_array($query);

			// check if student not register yet, account need complete form first
			if ($user['students_id'] == NULL) {
		?>

		<!-- TOP CONTENT (if NULL) -->
		<div class="main-top">
			<div class="btn-user">
				<b class="form-btn" onclick="show_form()">Lengkapi Biodata Anak</b>
			</div>
			<div class="login-admin">
				<a href="../admin/login-adm.php" class="adm-btn">ADMIN</a>
			</div>
		</div>

		<!-- MAIN CONTENT (if NULL) -->
		<div class="main-form">
			<div class="reg-std" id="regStd" style="display:none">
				<!-- +++++ FORMULIR +++++ -->
				<div id="forms">
					<h1 class="title">Formulir Pendaftaran</h1>
					<form action="" method="POST">
						<table>
							<div class="container">
								<div class="contact-form">
									<div class="form">
										<div class="form">
											<input type="text" name="namalengkap" id="namalengkap" class="input-text" autocomplete="off" required maxlength="60" minlength="" tabindex="1">
											<label for="namalengkap" class="label-name">
												<span class="content-name">nama lengkap</span>
											</label>
										</div>
									</div>
									<div class="form">
										<div class="form">
											<input type="text" name="tempat" id="tempat" class="input-text" autocomplete="off" required maxlength="20" minlength="" tabindex="2">
											<label for="tempat" class="label-name">
												<span class="content-name">tempat</span>
											</label>
										</div>
									</div>
									<div class="form">
										<div class="form">
											<input type="date" name="tgl" id="tgl" class="input-text" autocomplete="off" required maxlength="60" minlength="" placeholder="-" min="1945-01-01" max="2006-12-31" tabindex="3">
											<label for="tgl" class="label-name">
												<span class="content-name">tanggal lahir</span>
											</label>
										</div>
									</div>
									<div class="form">
										<div class="form">
											<input type="text" name="alamat" id="alamat" class="input-text" autocomplete="off" required maxlength="50" minlength="" tabindex="4">
											<label for="alamat" class="label-name">
												<span class="content-name">alamat</span>
											</label>
										</div>
									</div>
									<div class="radiosel">
										<div class="col">
											<label for="kelamin" class="label-name">
												<span class="content-name">jenis kelamin</span>
											</label>
										</div>
										<div class="col">
											<div class="wrapper">
												<input type="radio" name="kelamin" id="option-1" value="laki-laki" required>
												<label for="option-1" class="option option-1" tabindex="5">
										    		<div class="dot"></div>
										    		<span>laki-laki</span>
												</label>
										 		<input type="radio" name="kelamin" id="option-2" value="perempuan" required>
												<label for="option-2" class="option option-2"  tabindex="6">
													<div class="dot"></div>
													<span>perempuan</span>
												</label>
											</div>
										</div>
									</div>

									<div class="select-opt">
										<div class="col">
											<label for="agama" class="label-name">
												<span class="content-name">agama</span>
											</label>
										</div>
										<div class="col">
											<select name="agama" class="type-select" tabindex="12">
												<option>Pilih</option>
												<option class="opt-tvalue" value="islam" tabindex="13">ISLAM</option>
												<option class="opt-tvalue" value="protestan" tabindex="14">PROTESTAN</option>
												<option class="opt-tvalue" value="katolik" tabindex="15">KATOLIK</option>
												<option class="opt-tvalue" value="hindu" tabindex="16">HINDU</option>
												<option class="opt-tvalue" value="buddha" tabindex="17">BUDDHA</option>
												<option class="opt-tvalue" value="khonghucu" tabindex="18">KHONGHUCU</option>
											</select>
										</div>
									</div>
									
									<div class="form">
										<div class="form">
											<input type="text" name="nama_ibu" id="nama_ibu" class="input-text" autocomplete="off" required maxlength="60" minlength="" tabindex="19">
											<label for="nama_ibu" class="label-name">
												<span class="content-name">nama ibu</span>
											</label>
										</div>
									</div>
									<div class="form">
										<div class="form">
											<input type="tel" name="nohp_ibu" id="nohp_ibu" class="input-text" autocomplete="off" required maxlength="15" minlength="" tabindex="19">
											<label for="nohp_ibu" class="label-name">
												<span class="content-name">No HP Ibu</span>
											</label>
										</div>
									</div>
									<div class="form">
										<div class="form">
											<input type="text" name="nama_ayah" id="nama_ayah" class="input-text" autocomplete="off" required maxlength="60" minlength="" tabindex="19">
											<label for="nama_ayah" class="label-name">
												<span class="content-name">nama ayah</span>
											</label>
										</div>
									</div>
									<div class="form">
										<div class="form">
											<input type="tel" name="nohp_ayah" id="nohp_ayah" class="input-text" autocomplete="off" required maxlength="15" minlength="" tabindex="19">
											<label for="nohp_ayah" class="label-name">
												<span class="content-name">No HP Ayah</span>
											</label>
										</div>
									</div>

									<div class="select-opt">
										<div class="col">
											<label class="label-name">
												<span class="content-name">provinsi</span>
											</label>
										</div>
										<div class="col">
											<select name="provinsi" id="provinsi" class="type-select" tabindex="21">
												<option>Pilih</option>
											</select>
										</div>
									</div>  
									<div class="select-opt">
										<div class="col">
											<label class="label-name">
												<span class="content-name">kota/kabupaten</span>
											</label>
										</div>
										<div class="col">
											<select name="kota" id="kota" class="type-select" tabindex="22">
												<option>Pilih</option>
											</select>
										</div>
									</div>
									<div class="select-opt">
										<div class="col">
											<label class="label-name">
												<span class="content-name">kecamatan</span>
											</label>
										</div>
										<div class="col">
											<select name="kecamatan" id="kecamatan" class="type-select" tabindex="23">
												<option>Pilih</option>
											</select>
										</div>
									</div>
									<div class="select-opt">
										<div class="col">
											<label class="label-name">
												<span class="content-name">kelurahan/desa</span>
											</label>
										</div>
										<div class="col">
											<select name="kelurahan" id="kelurahan" class="type-select" tabindex="24">
												<option>Pilih</option>
											</select>
										</div>
									</div>

									<div class="form">
										<div class="form">
											<input type="text" name="rt" id="rt" class="input-text" autocomplete="off" required maxlength="15" minlength="" tabindex="26">
											<label for="rt" class="label-name">
												<span class="content-name">RT</span>
											</label>
										</div>
									</div>
									<div class="form">
										<div class="form">
											<input type="text" name="rw" id="rw" class="input-text" autocomplete="off" required maxlength="15" minlength="" tabindex="26">
											<label for="rw" class="label-name">
												<span class="content-name">RW</span>
											</label>
										</div>
									</div>

									<div class="form-field">
										<input type="submit" class="submit-btn" value="submit" name="process" tabindex="27">
									</div>
								</div>
							</div>
						</table>
					</form>
				</div>
				<?php
					if (isset($_POST['process'])) {
						require_once('../Models/connect_db.php');

						$nama = $_POST['namalengkap'];
						$tempat = $_POST['tempat'];
						$tgl = $_POST['tgl_lahir'];
						$alamat = $_POST['alamat'];
						$jk = $_POST['jk'];
						$agama = $_POST['agama'];
						$namaibu = $_POST['nama_ibu'];
						$namaayah = $_POST['nama_ayah'];
						$nohpibu = $_POST['nohp_ibu'];
						$nohpayah = $_POST['nohp_ayah'];
						$prov = $_POST['provinsi'];
						$kota = $_POST['kota'];
						$kec = $_POST['kecamatan'];
						$kel = $_POST['kelurahan'];
						$rt = $_POST['rt'];
						$rw = $_POST['rw'];

						$sql = "INSERT INTO students(namalengkap, tempat, tgl_lahir, alamat, jk, agama, nama_ibu, nama_ayah, nohp_ibu, nohp_ayah, prov, kota, kec, kel, rt, rw) VALUES ('$nama', '$tempat', '$tgl', '$alamat', '$jk', '$agama', '$namaibu', '$namaayah', '$nohpibu', '$nohpayah', '$prov', '$kota', '$kec', '$kel', '$rt', '$rw')";
						$result = mysqli_query($conn, $sql);

						if (true) {
							$std_id = $conn->insert_id;
							mysqli_query($conn, "UPDATE users SET students_id = '$std_id' WHERE id = '$id'");
						}

						echo "<script type='text/javascript'>alert('Ananda $nama telah berhasil terdaftar di TK Nusantara!');document.location='user-index.php';</script>";
					}
				?>
			</div>
		</div>

		<!-- check if data of student done and complete -->
		<?php } else { 
			require_once('../Models/connect_db.php');
			$id_std = $user['students_id'];
			$sql = "SELECT * from students WHERE id = '$id_std'";
			$query = mysqli_query($conn, $sql);
			$std = mysqli_fetch_array($query);
			$nama = $std['namalengkap'];

		?>

		<!-- TOP CONTENT (if NOT NULL) -->
		<div class="main-top">
			<div class="greeting">
				<h2>Halo, <?php echo $nama ?></h2>
			</div>
			<div class="login-admin">
				<a href="../admin/login-adm.php" class="adm-btn">ADMIN</a>
			</div>
		</div>

		<!-- MAIN CONTENT (if NOT NULL) -->
		<div class="main-form">
			<div class="info-std">
				<br><hr>
				<h1>DATA SUDAH LENGKAP</h1>
				<p>Ananda <?php echo $nama ?> Telah terdaftar di TK Nusantara, mohon untuk segera blablablablabla di ruangan Administrasi. <br>Terimakasih</p>
			</div>
		</div>

		<?php } ?>
	</section>
<?php } ?>
	
	<!-- JavaScript -->
	<script type="text/javascript" src="../js/user-script.js"></script>
</body>
</html>
