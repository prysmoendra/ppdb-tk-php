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
	if (isset($_GET['page-nr'])) {
		$id = $_GET['page-nr'];
	} else{
		$id = 1;
	}
 ?>
<body id="<?php echo $id ?>">
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
	<section class="main-table">
		<div class="head-table">
			<img src="../images/projects.png" id="icon-title">
			<h2>Data Akun</h2>
			<form action="#" class="head-search">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><img src="../images/icon-search.png"></button>
				</div>
			</form>
		</div>
		<div class="table">
			<div class="tambah">

				<a href="c-account.php" id="tambah">Tambah Baru</a>
				
			</div>
			<table border="1">
				<tr bgcolor="steelblue">
					<th width="50"><center>No
					<th width="120"><center>Username
					<th width="370"><center>Nama
					<!-- <th width="120"><center>Tanggal Lahir -->
					<th width="140"><center>Email
					<th width="130"><center>No Hp
					<th width="300"><center>Nama Anak
					<th width="120"><center>User Role
					<!-- <th width="120"><center>Kota/Kabupaten -->
					<!-- <th width="120"><center>Kecamatan -->
					<!-- <th width="120"><center>Kelurahan/Desa -->
					<!-- <th width="120"><center>RT/RW -->
					<!-- <th width="120"><center>Nama Ibu -->
					<!-- <th width="120"><center>Nama Ayah -->
					<!-- <th width="120"><center>No. HP Ibu -->
					<!-- <th width="120"><center>No. HP Ayah -->
					<th width="130"><center>created at
					<th width="130"><center>updated at
					<th colspan="3"><center>Proses
				</tr>
	
				<?php
				require('../Models/connect_db.php');

				$start = 0;
				$perPage = 10;

				$query = "SELECT * FROM users";
				$records = mysqli_query($conn, $query);
				$no_rows =$records->num_rows;

				$pages = ceil($no_rows / $perPage);

				if (isset($_GET['page-nr'])) {
					$page = $_GET['page-nr'] -1;
					$start = $page * $perPage;
				}
	
				$sql = "SELECT users.*,students.namalengkap FROM users LEFT JOIN students ON users.students_id = students.id LIMIT $start, $perPage";
				$result = mysqli_query($conn, $sql);
				$no = 1;
	
				while ($show = mysqli_fetch_assoc($result)) {
					$color = ($no %2 == 1) ? "white":"#eee";
					if ($show['namalengkap'] != NULL) {
						$std_name = $show['namalengkap'];
					} else{
						$std_name = "-";
					}
	
					echo "
					<tr bgcolor='$color'>
					<td align='center'>$show[id]</td>
					<td align='center'>$show[username]</td>
					<td>$show[nama]</td>
					<td align='center'>$show[email]</td>
					<td align='center'>$show[nohp]</td>
					<td>$std_name</td>
					<td align='center'>$show[user_roles]</td>
					<td align='center'>$show[created_at]</td>
					<td align='center'>$show[updated_at]</td>

					<td align='center'><a href='r-account.php?id=$show[id]' id='show'>Lihat</a></td>
					<td align='center'><a href='e-account.php?id=$show[id]' id='edit'>Ubah</a></td>
					<td align='center'><a href='d-account.php?id=$show[id]' id='delete'>Hapus</a></td>
					</tr>
					";
					$no++;
				}
				?>
			</table>
			<div class="page">
				<div class="pagination">
					<a href="?page-nr=1">First</a>
					<?php 
						if (isset($_GET['page-nr']) && $_GET['page-nr'] >1) {
							?>
								<a href="?page-nr=<?php echo $_GET['page-nr'] -1 ?>">Previous</a>
							<?php
						} else {
							?>
								<a>Previous</a>
							<?php
						}
					 ?>

					<div class="page-numbers">
						<?php 
							for ($i=1; $i <= $pages; $i++) { 
								?>
									<a href="?page-nr=<?php echo $i ?>" id="num"><?php echo $i ?></a>
								<?php
							}
						 ?>
					</div>

					<?php 
						if (!isset($_GET['page-nr'])) {
							?>
								<a href="?page-nr=2">Next</a>
							<?php
						} else {
							if ($_GET['page-nr'] >= $pages) {
								?>
									<a>Next</a>
								<?php
							} else {
								?>
									<a href="?page-nr=<?php echo $_GET['page-nr'] +1 ?>"></a>
								<?php
							}
						}
					 ?>
					<a href="?page-nr=<?php echo $pages ?>">Last</a>

					<div class="page-info">
						<?php 
							if (!isset($_GET['page-nr'])) {
								$page = 1;
							} else{
								$page = $_GET['page-nr'];
							}
						 ?>

						Showing <?php echo $page ?> of <?php echo $pages ?> pages
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	<!-- JavaScript -->
	<script>
		var links = document.querySelectorAll('.page-numbers > num');
		var bodyId = parseInt(document.body.id) - 1;
		links[bodyId].classList.add('active');
	</script>
</body>
</html>
<?php } else{
	echo "<script type='text/javascript'>alert('Please check again!');</script>";
}?>