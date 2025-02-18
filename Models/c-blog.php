<?php 
	require("../Models/connect_db.php");
    if (mysqli_connect_errno()) {
      echo "Gagal terhubung ke dalam Databate : ". mysqli_connect_error();
    }
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komen = $_POST['komentar'];
    
    $sql = "INSERT INTO comments(nama, email, komentar) VALUES ('$nama','$email','$komen') ";
    $hasil = mysqli_query($conn, $sql);
    echo "<script type='text/javascript'>alert('Komentar Anda telah berhasil Diunggah!');document.location='blog.php';</script>";
 ?>