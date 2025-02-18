<?php
    session_start();
    if (isset($_SESSION['id']) && isset($_SESSION['nama']) && isset($_SESSION['email']) && isset($_SESSION['username'])) {
?>
<!DOCTYPE html>
<html>
<head>
	<!-- <meta name="color-scheme" content="dark light"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TK Nusantara | CMS</title>

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../css/cms-style.css">
</head>
<?php
	require("../Models/function.php");
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
           save_dt_student();
   	}
?>
<body>
	<!-- SIDEBAR -->
	<section class="header-sec">
		<div class="header" id="header">
			<div class="side-nav">
				<div class="user">
					<img src="../images/user-default.png" class="user-img">
					<div>
						<h2><?= $_SESSION['username'] ?></h2>
						<p><?= $_SESSION['email'] ?></p>
					</div>
					<img src="../images/star.png" class="star-img">
				</div>
				<ul>
					<li><img src="../images/dashboard.png"><a href="cms-index.php">Beranda</a></li>
					<li><img src="../images/projects.png"><a href="i-account.php?page-nr=1">Akun</a></li>
					<li><img src="../images/members.png"><a href="i-student.php?page-nr=1">Murid</a></li>
					<li><img src="../images/reports.png"><a href="i-comment.php?page-nr=1">Masukan</a></li>
					<li><img src="../images/messages.png"><a href="i-message.php?page-nr=1">Pesan</a></li>
				</ul>
				<ul class="logout">
					<li><img src="../images/logout.png"><a href="../Models/logout.php">Keluar</a></li>
				</ul>
				<p class="made">Made With by | <b class="dakode">Dakode</b></p>
			</div>
		</div>
	</section>

	<!-- CONTENT -->
	<section class="forms">
		<h2>Input Data Akun</h2>
		<hr>
		<div align="center">
			<form name="form-new" action="" method="POST">
				<table align="" width="80%">
                <!-- Nama Lengkap -->
                <tr>
                    <td width="7%"></td>
                    <td width="25%"><b>Nama Lengkap</b></td>
                    <td><b>:</b></td>
                    <td><input type="text" name="namalengkap" size="50" autocomplete="off" required maxlength="60"></td>
                </tr>
                <!-- Tempat Lahir -->
                <tr>
                    <td width="7%"></td>
                    <td width="25%"><b>Tempat Lahir</b></td>
                    <td><b>:</b></td>
                    <td><input type="text" name="tempat" size="50" autocomplete="off" required maxlength="30"></td>
                </tr>
                <!-- Tanggal Lahir -->
                <tr>
                    <td width="7%"></td>
                    <td width="25%"><b>Tanggal Lahir</b></td>
                    <td><b>:</b></td>
                    <td><input type="date" name="tgl_lahir" ></td>
                </tr>
                <!-- Other form fields based on SQL columns go here... -->
                <!-- Alamat -->
                <tr>
                    <td width="7%"></td>
                    <td width="25%"><b>Alamat</b></td>
                    <td><b>:</b></td>
                    <td><textarea name="alamat" cols="50" rows="4" required></textarea></td>
                </tr>
                <!-- Jenis Kelamin -->
                <tr>
                    <td width="7%"></td>
                    <td width="25%"><b>Jenis Kelamin</b></td>
                    <td><b>:</b></td>
                    <td>
                        <input type="radio" name="jk" value="Laki-laki" required> Laki-laki
                        <input type="radio" name="jk" value="Perempuan" required> Perempuan
                    </td>
                </tr>
                <!-- Agama -->
                <tr>
                    <td width="7%"></td>
                    <td width="25%"><b>Agama</b></td>
                    <td><b>:</b></td>
                    <td><input type="text" name="agama" size="50" autocomplete="off" required maxlength="50"></td>
                </tr>
                <!-- Nama Ibu -->
                <tr>
                    <td width="7%"></td>
                    <td width="25%"><b>Nama Ibu</b></td>
                    <td><b>:</b></td>
                    <td><input type="text" name="nama_ibu" size="50" autocomplete="off" maxlength="255"></td>
                </tr>
                <!-- Nama Ayah -->
                <tr>
                    <td width="7%"></td>
                    <td width="25%"><b>Nama Ayah</b></td>
                    <td><b>:</b></td>
                    <td><input type="text" name="nama_ayah" size="50" autocomplete="off" maxlength="255"></td>
                </tr>
                <!-- No HP Ibu -->
                <tr>
                    <td width="7%"></td>
                    <td width="25%"><b>No HP Ibu</b></td>
                    <td><b>:</b></td>
                    <td><input type="tel" name="nohp_ibu" size="50" autocomplete="off" maxlength="20"></td>
                </tr>
                <!-- No HP Ayah -->
                <tr>
                    <td width="7%"></td>
                    <td width="25%"><b>No HP Ayah</b></td>
                    <td><b>:</b></td>
                    <td><input type="tel" name="nohp_ayah" size="50" autocomplete="off" maxlength="20"></td>
                </tr>
                <!-- Provinsi -->
                <tr>
                    <td width="7%"></td>
                    <td width="25%"><b>Provinsi</b></td>
                    <td><b>:</b></td>
                    <td><input type="text" name="prov" size="50" autocomplete="off" maxlength="100"></td>
                </tr>
                <!-- Kota -->
                <tr>
                    <td width="7%"></td>
                    <td width="25%"><b>Kota</b></td>
                    <td><b>:</b></td>
                    <td><input type="text" name="kota" size="50" autocomplete="off" maxlength="100"></td>
                </tr>
                <!-- Kecamatan -->
                <tr>
                    <td width="7%"></td>
                    <td width="25%"><b>Kecamatan</b></td>
                    <td><b>:</b></td>
                    <td><input type="text" name="kec" size="50" autocomplete="off" maxlength="100"></td>
                </tr>
                <!-- Kelurahan -->
                <tr>
                    <td width="7%"></td>
                    <td width="25%"><b>Kelurahan</b></td>
                    <td><b>:</b></td>
                    <td><input type="text" name="kel" size="50" autocomplete="off"> </td>
                </tr>

				</table>

				<input type="submit" value="Simpan">
				<input type="reset" value="Ulang">
				<button><a id='button-links' href="i-student.php?page-nr=1">Kembali</a></button>
			</form>
		</div>
	</section>


	<!-- JavaScript -->
	<script type="text/javascript">

	</script>
</body>
</html>
<?php } else{
    echo "<script type='text/javascript'>alert('Please check again!');</script>";
}?>