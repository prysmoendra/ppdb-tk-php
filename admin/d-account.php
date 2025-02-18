<?php
include '../Models/connect_db.php';
$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id = '$id'";
$result = mysqli_query($conn, $query);
$show = mysqli_fetch_array($result);

if (true) {
	echo "<script type='text/javascript'>alert('USERNAME $show[username] akan Anda hapus');</script>";
	echo "<script type='text/javascript'>alert('Anda yakin ?');document.location='i-account.php?page-nr=1';</script>";
	
	$query = "DELETE from users where id = '$id'";
	mysqli_query($conn, $query);
}
?>