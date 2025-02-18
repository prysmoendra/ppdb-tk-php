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
		<h2>View Data Akun</h2>
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
        ?>

        <div align="center" class="links-button">
            <table align="" width="80%">
                <tr>
                    <td width="7%"></td>
                    <td width="25%"><b>id</b></td>
                    <td><b>:</b></td>
                    <td><?php echo $row['id']; ?></td>
                </tr>
                <tr>
                    <td width="7%"></td>
                    <td width="25%"><b>User Roles</b></td>
                    <td><b>:</b></td>
                    <td><?php echo $row['user_roles']; ?></td>
                </tr>
                <tr>
                    <td width="7%"></td>
                    <td width="25%"><b>Username</b></td>
                    <td><b>:</b></td>
                    <td><?php echo $row['username']; ?></td>
                </tr>
                <tr>
                    <td width="7%"></td>
                    <td width="25%"><b>Nama</b></td>
                    <td><b>:</b></td>
                    <td><?php echo $row['nama']; ?></td>
                </tr>
                <tr>
                    <td width="7%"></td>
                    <td width="25%"><b>Email</b></td>
                    <td><b>:</b></td>
                    <td><?php echo $row['email']; ?></td>
                </tr>
                <tr>
                    <td width="7%"></td>
                    <td width="25%"><b>No Hp</b></td>
                    <td><b>:</b></td>
                    <td><?php echo $row['nohp']; ?></td>
                </tr>
                <tr>
                    <td width="7%"></td>
                    <td width="25%"><b>Nama Anak</b></td>
                    <td><b>:</b></td>
                    <td><?php echo $std_name; ?></td>
                </tr>
                <tr>
                    <td width="7%"></td>
                    <td width="25%"><b>created at</b></td>
                    <td><b>:</b></td>
                    <td><?php echo $row['created_at']; ?></td>
                </tr>
                <tr>
                    <td width="7%"></td>
                    <td width="25%"><b>updated at</b></td>
                    <td><b>:</b></td>
                    <td><?php echo $row['updated_at']; ?></td>
                </tr>
            </table>
            <hr><br>
            <?php
                echo "<button><a id='button-links' href='e-account.php?id=$id'>Ubah</a></button> ";
                echo "<button><a id='button-links' href='create.php'>Tambah Baru</a></button> ";
                echo "<button><a id='button-links' href='i-account.php?page-nr=1'>Kembali</a></button> ";
            ?>
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