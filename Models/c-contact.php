<?php 
	require("../Models/connect_db.php");
    if (mysqli_connect_errno()) {
      echo "Gagal terhubung ke dalam Databate : ". mysqli_connect_error();
    }
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $sub = $_POST['subjudul'];
    $pesan = $_POST['message'];
    
    $sql = "INSERT INTO messages(nama, email, sub_judul, message) VALUES ('$nama','$email','$sub','$pesan') ";
    $hasil = mysqli_query($conn, $sql);
    echo "<script type='text/javascript'>alert('Pesan Anda telah berhasil Diunggah!');document.location='contact.php';</script>";
 ?>