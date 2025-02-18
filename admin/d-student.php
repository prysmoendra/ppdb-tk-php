<?php
include '../Models/connect_db.php';
$id = $_GET['id'];
$query = "SELECT * FROM students WHERE id = '$id'";
$result = mysqli_query($conn, $query);
$show = mysqli_fetch_array($result);

if (true) {
	echo "<script type='text/javascript'>alert('NAMA $show[namalengkap] akan Anda hapus');</script>";
	echo "<script type='text/javascript'>alert('Anda yakin ?');document.location='i-student.php?page-nr=1';</script>";
	
	$query = "DELETE from students where id = '$id'";
	mysqli_query($conn, $query);
}
?>