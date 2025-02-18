<?php
include('../Models/connect_db.php');

$id = $_POST['id'];
$uname = $_POST['username'];
$fname = $_POST['nama'];
$email = $_POST['email'];
$phone = $_POST['nohp'];
$roles = $_POST['user_roles'];
$pass = $_POST['password'];

$sql = "UPDATE users SET username = '$uname', nama ='$fname', email ='$email', nohp ='$phone', user_roles ='$roles', password ='$pass' WHERE id ='$id'";

mysqli_query($conn, $sql);

echo "<script type='text/javascript'>alert('Data dengan USERNAME $uname telah berhasil di Diperbarui!');document.location='i-account.php';</script>";
?>