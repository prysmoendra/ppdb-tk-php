<?php
    // error_reporting(0);

	function login_verification_user(){
		require('connect_db.php');
		
        $username = $_POST['email-phone'];
        $password = $_POST['password'];

        $sql = "select * from user where (username = '$username' or email = '$username' or nohp = '$username') and (password = '$password')";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_array($result);

        // check user roles
        if ($row[user_roles] == "admin") {
        	echo "<script type='text/javascript'>alert('Selamat datang $row[namalengkap] !');document.location='../admin/cms-index.html';</script>";

        } elseif ($row[user_roles] == "user") {
        	echo "<script type='text/javascript'>alert('Selamat datang $row[namalengkap] !');document.location='../user/user-index.php';</script>";
            
        } else {
            echo "<script type='text/javascript'>alert('Your Username or Password INCORECT! Please check again!');document.location='ppdb.php';</script>";
        }
    }

    function login_verification_admin(){
        require('connect_db.php');
        
        $username = $_POST['username'];
        $password =$_POST['password'];

        $sql = "select * from user where (username = '$username' or email = '$username' or nohp = '$username') and (password = '$password')";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_array($result);

        if ($row[user_roles] == "admin") {
            echo "<script type='text/javascript'>alert('Selamat datang $row[namalengkap] !');document.location='../admin/cms-index.html';</script>";

        } else {
            echo "<script type='text/javascript'>alert('Your Username or Password INCORECT! Please check again!');document.location='../admin/login-adm.php';</script>";
        }
    }