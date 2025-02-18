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
		<h2>Edit Data Akun</h2>
		<hr>
		<?php
            include('../Models/connect_db.php');
            $id = $_GET['id'];
            $sql = "SELECT users.*,students.namalengkap FROM students JOIN users ON students.id = users.students_id WHERE users.id = '$id'";

            $query = mysqli_query($conn, $sql);
			if ($query->num_rows > 0) {
			    $row = mysqli_fetch_assoc($query);
			    if ($row['namalengkap'] != NULL) {
					$std_name = $row['namalengkap'];
				} else{
					$std_name = "-";
				}

			} else {
			    $sql = "SELECT * FROM users WHERE id = '$id'";
			    $query = mysqli_query($conn, $sql);
			    $row = mysqli_fetch_array($query);
	            if ($row['students_id'] != NULL) {
					$std_name = $row['students_id'];
				} else{
					$std_name = "-";
				}
			}
			function active_radio_btn($value, $input){
                $result = $value == $input ? 'checked':'';
                return ($result);
            }
        ?>
		<div align="center">
			<form name="form-new" action="u-account.php" method="POST">
				<input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
				<input type="hidden" name="username" value="<?php echo $row['username']; ?>" />
				<table align="" width="80%">
					<tr>
						<td width="7%"></td>
                    	<td width="25%"><b>username</b></td>
                    	<td><b>:</b></td>
						<td><input type="text" name="username" size="50" autocomplete="off" required maxlength="15" minlength="" value="<?php echo $row['username']; ?>" disabled></td>
					</tr>
					<tr>
						<td width="7%"></td>
                    	<td width="25%"><b>Nama Lengkap</b></td>
                    	<td><b>:</b></td>
						<td><input type="text" name="nama" size="50" autocomplete="off" required maxlength="60" minlength="" value="<?php echo $row['nama']; ?>"></td>
					</tr>
					<tr>
						<td width="7%"></td>
                    	<td width="25%"><b>Email</b></td>
                    	<td><b>:</b></td>
						<td><input type="email" name="email" size="50" autocomplete="off" required maxlength="30" minlength="" value="<?php echo $row['email']; ?>"></td>
					</tr>
					<tr>
						<td width="7%"></td>
                    	<td width="25%"><b>No Hp</b></td>
                    	<td><b>:</b></td>
						<td><input type="tel" name="nohp" size="50" autocomplete="off" required maxlength="15" minlength="" value="<?php echo $row['nohp']; ?>"></td>
					</tr>
					<tr>
						<td width="7%"></td>
                    	<td width="25%"><b>User Roles</b></td>
                    	<td><b>:</b></td>
						<td>
                            <input type="radio" name="user_roles" value="user" <?php echo active_radio_btn("user", $row['user_roles']);?>> USER | 
                            <input type="radio" name="user_roles" value="admin" <?php echo active_radio_btn("admin", $row['user_roles']);?>> ADMIN
                        </td>
					</tr>
					<tr>
						<td width="7%"></td>
                    	<td width="25%"><b>Password</b></td>
                    	<td><b>:</b></td>
						<td><input type="password" name="password" size="50" autocomplete="off" required maxlength="25" minlength="" value="<?php echo $row['password']; ?>"></td>
					</tr>
					<tr>
						<td width="7%"></td>
                    	<td width="25%"><b>Ulangi Password</b></td>
                    	<td><b>:</b></td>
						<td><input type="password" name="password" size="50" autocomplete="off" required maxlength="25" minlength="" value="<?php echo $row['password']; ?>"></td>
					</tr>
				</table>
				<hr>
				<input type="submit" value="Simpan">
				<input type="reset" value="Ulang">
				<button><a id="button-links" href="i-account.php?page-nr=1">Kembali</a></button>
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