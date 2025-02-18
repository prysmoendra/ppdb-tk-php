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
           save_dt_account();
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
					<tr>
						<td width="7%"></td>
                    	<td width="25%"><b>username</b></td>
                    	<td><b>:</b></td>
						<td><input type="text" name="username" size="50" autocomplete="off" required maxlength="15" minlength="" required></td>
					</tr>
					<tr>
						<td width="7%"></td>
                    	<td width="25%"><b>Nama Lengkap</b></td>
                    	<td><b>:</b></td>
						<td><input type="text" name="nama" size="50" autocomplete="off" required maxlength="60" minlength="" required></td>
					</tr>
					<tr>
						<td width="7%"></td>
                    	<td width="25%"><b>Email</b></td>
                    	<td><b>:</b></td>
						<td><input type="email" name="email" size="50" autocomplete="off" required maxlength="30" minlength="" required></td>
					</tr>
					<tr>
						<td width="7%"></td>
                    	<td width="25%"><b>No Hp</b></td>
                    	<td><b>:</b></td>
						<td><input type="tel" name="nohp" size="50" autocomplete="off" required maxlength="15" minlength="" required></td>
					</tr>
					<tr>
						<td width="7%"></td>
                    	<td width="25%"><b>User Roles</b></td>
                    	<td><b>:</b></td>
						<td>
							<select name="user_roles" required>
								<option>Pilih</option>
								<option value="user">User</option>
								<option value="admin">Admin</option>
							</select>
						</td>
					</tr>
					<tr>
						<td width="7%"></td>
                    	<td width="25%"><b>Password</b></td>
                    	<td><b>:</b></td>
						<td><input type="password" name="password" size="50" autocomplete="off" required maxlength="25" minlength="" required></td>
					</tr>
					<tr>
						<td width="7%"></td>
                    	<td width="25%"><b>Ulangi Password</b></td>
                    	<td><b>:</b></td>
						<td><input type="password" name="password" size="50" autocomplete="off" required maxlength="25" minlength="" required></td>
					</tr>
				</table>
				<hr>
				<input type="submit" value="Simpan">
				<input type="reset" value="Ulang">
				<button><a id='button-links' href="i-account.php?page-nr=1">Kembali</a></button>
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