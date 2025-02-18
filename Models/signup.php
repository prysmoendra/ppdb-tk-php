<?php
	// REGISTER USER
	if (isset($_POST['nama']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['password'])) {
		// connecting to db
		require("connect_db.php");
		if (mysqli_connect_errno()) {
		  echo "Gagal terhubung ke dalam Databate : ". mysqli_connect_error();
		}

		// receive all input values from the form
		$uname = $_POST['username'];
		$fname = $_POST['nama'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$password = $_POST['password'];
		
		// Ensure that no user is registered twice, the usernames should be unique
		$username = mysqli_real_escape_string($conn, $uname);
		$uname_check_query = "SELECT * FROM users WHERE username = '$username'";
		$check_uname = mysqli_query($conn, $uname_check_query);


		// check same username
		if (mysqli_num_rows($check_uname) > 0) {
		  // The username already exists
			echo "<script type='text/javascript'>alert('Maaf, username $username tidak tersedia!');document.location='../tk-nusantara/ppdb.php';</script>";

		} else {
		  // The username is unique
			echo "<script type='text/javascript'>alert('username $username Anda ada dan bisa digunakan');</script>";

			if (true) {
				// make encrypt password
				$pass = password_hash($password, PASSWORD_DEFAULT);
				$query = "INSERT INTO users(username, nama, email, nohp, password) VALUES ('$username', '$fname', '$email', '$phone', '$pass')";
				$result = mysqli_query($conn, $query);
				echo "<script type='text/javascript'>alert('Akun Anda telah berhasil Dibuat!');document.location='../tk-nusantara/ppdb.php';</script>";
			}
		}
	}
?>