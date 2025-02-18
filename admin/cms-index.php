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
				<ul>
					<p class="made">Made With by | <b class="dakode">Dakode</b></p>
				</ul>
			</div>
		</div>
	</section>

	<!-- CONTENT -->
	<section class="main">
		<div class="main-top">
			<h1 id="greeting"></h1>
			<h1>, <?= $_SESSION['nama'] ?>!</h1>
		</div>
		<div class="main-title">
			<h3>Siswa-siswi Baru</h3>
			<a href="i-student.php">Lihat semua</a>
		</div>
		<?php 
			require("../Models/connect_db.php");

			$sql = "SELECT * FROM students ORDER BY id DESC LIMIT 4";
            $query = mysqli_query($conn, $sql);
            
		 ?>
		<div class="users">
			<?php 
				while ($show = mysqli_fetch_array($query)) {
					$kelamin = ($show['jk'] == 'L') ? "LAKI-LAKI":"PEREMPUAN";
			 ?>
			<div class="card">
				<img src="../images/user-default.png">
				<h4 style="text-decoration: none;"><?php echo $show['namalengkap'] ?></h4>
				<p style="text-decoration: none;"><?php echo $show['tempat'] ?></p>
				<div class="per">
					<table>
						<tr>
							<td>
								<span><?php echo $kelamin ?></span>
							</td>
							<!-- <td>
								<span>87%</span>
							</td> -->
						</tr>
						<tr>
							<td>Jenis Kelamin</td>
							<!-- <td>Bulan</td> -->
						</tr>
					</table>
				</div>
				<button><a href="r-student.php?id=<?php echo $show['id'] ?>">Profile</button>
			</div>
		<?php } ?>
		</div>
		<?php 
			require("../Models/connect_db.php");

			$sql = "SELECT DATE(created_at) AS date, COUNT(*) AS count FROM students GROUP BY DATE(created_at) ORDER BY DATE(created_at) ";
            $query = mysqli_query($conn, $sql);

            foreach ($query as $data) {
            	$a_day = $data['date'];
            	$total = $data['count'];
            }

            $sql = "SELECT DATE(created_at) AS date_user, COUNT(*) AS count_user FROM users GROUP BY DATE(created_at) ORDER BY DATE(created_at)";
            $query = mysqli_query($conn, $sql);

            foreach ($query as $data) {
            	$a_day_user = $data['date_user'];
            	$total_user = $data['count_user'];
            }
		 ?>
		<div class="charts">
			<canvas id="myChart" width="25%"></canvas>
			<!-- <canvas id="myCharts" width="25%"></canvas> -->
		</div>
	</section>
	
	<!-- JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script>
	  const ctx = document.getElementById('myChart');
	
	  new Chart(ctx, {
	    type: 'bar',
	    data: {
	      labels: <?php echo json_encode($a_day) ?>,
	      datasets: [{
	        label: '# total of Students',
	        data: <?php echo json_encode($total) ?>,
	        borderWidth: 1
	      }]
	    },
	    options: {
	      scales: {
	        y: {
	          beginAtZero: true
	        }
	      }
	    }
	  });

	  const ctxs = document.getElementById('myCharts');
	
	  new Chart(ctxs, {
	    type: 'bar',
	    data: {
	      labels: <?php echo json_encode($a_day_user) ?>,
	      datasets: [{
	        label: '# total of Users',
	        data: <?php echo json_encode($total_user) ?>,
	        borderWidth: 1
	      }]
	    },
	    options: {
	      scales: {
	        y: {
	          beginAtZero: true
	        }
	      }
	    }
	  });
	</script>
	<script type="text/javascript">
		var date = new Date();
		var hours = date.getHours();
		var greeting;
		if (hours >= 0 && hours < 10) {
			greeting = 'Selamat Pagi';
			
		} else if (hours >= 10 && hours < 14) {
			greeting = 'Selamat Siang';
			
		} else if (hours >= 14 && hours < 18) {
			greeting = 'Selamat Sore';
			
		} else {
			greeting = 'Selamat Malam';
			
		}
		document.getElementById('greeting').innerHTML = greeting;
	</script>
</body>
</html>

<?php } else{
	echo "<script type='text/javascript'>alert('Please check again!');</script>";
}?>