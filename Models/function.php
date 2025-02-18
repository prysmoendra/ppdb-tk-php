<?php
    session_start();
    // error_reporting(0);

	function login_verification_user(){
		require('connect_db.php');
		
        $username = $_POST['email-phone'];
        $password = $_POST['password'];

        if (true) {
            $query_get_pass = "select password from users where username='$username'";
            $get_result = mysqli_query($conn, $query_get_pass);
            $pass_result = mysqli_fetch_array($get_result);

            if (password_verify($password, $pass_result['password'])) {
                // check and get data of user
                $sql = "select * from users where (username = '$username' or email = '$username' or nohp = '$username')";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
                // get id of created user
                $reg_user_id = $row['id'];
                $email = $row['email'];
                $uname = $row['username'];
                $fname = $row['nama'];
                $std = $row['students_id'];
                
                // check user roles if user is admin, redirect to admin area
                if ($row['user_roles'] == "admin") {
                    // put logged in user into session array
                    $_SESSION['id'] = $reg_user_id;
                    $_SESSION['username'] = $uname;
                    $_SESSION['nama'] = $fname;
                    $_SESSION['email'] = $email;

                    echo "<script type='text/javascript'>alert('Selamat datang $row[nama] !');document.location='../admin/cms-index.php';</script>";

                } elseif ($row['user_roles'] == "user") {
                    // put logged in user into session array
                    $_SESSION['id'] = $reg_user_id;
                    $_SESSION['nama'] = $fname;
                    $_SESSION['email'] = $email;
                    $_SESSION['students_id'] = $std;

                    echo "<script type='text/javascript'>alert('Selamat datang $row[nama] !');document.location='../user/user-index.php';</script>";
                }
            } else {
                echo "<script type='text/javascript'>alert('Your Username or Password INCORECT! Please check again!');document.location='ppdb.php';</script>";
            }
        }
    }

    function login_verification_admin(){
        require('connect_db.php');
        
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (true) {
            $query_get_pass = "select password from users where username='$username'";
            $get_result = mysqli_query($conn, $query_get_pass);
            $pass_result = mysqli_fetch_array($get_result);

            if (password_verify($password, $pass_result['password'])) {
                // check and get data of user
                $sql = "select * from users where (username = '$username' or email = '$username' or nohp = '$username')";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
                // get id of created user
                $reg_user_id = $row['id'];
                $email = $row['email'];
                $uname = $row['username'];
                $fname = $row['nama'];
                $std = $row['students_id'];
                
                // check user roles if user is admin, redirect to admin area
                if ($row['user_roles'] == "admin") {
                   $_SESSION['id'] = $reg_user_id;
                   $_SESSION['username'] = $uname;
                   $_SESSION['nama'] = $fname;
                   $_SESSION['email'] = $email;
        
                    echo "<script type='text/javascript'>alert('Selamat datang $row[nama] !');document.location='../admin/cms-index.php';</script>";
                }
            } else {
                echo "<script type='text/javascript'>alert('Your Username or Password INCORECT! Please check again!');document.location='../admin/login-adm.php';</script>";
            }
        }
    }

    function save_dt_account(){
        if (isset($_POST['username']) && isset($_POST['nama']) && isset($_POST['email']) && isset($_POST['nohp']) && isset($_POST['user_roles']) && isset($_POST['password'])) {
            require("connect_db.php");
            if (mysqli_connect_errno()) {
              echo "Gagal terhubung ke dalam Databate : ". mysqli_connect_error();
            }

            $uname = $_POST['username'];
            $fname = $_POST['nama'];
            $email = $_POST['email'];
            $phone = $_POST['nohp'];
            $roles = $_POST['user_roles'];
            $pass = $_POST['password'];
    
            $username = mysqli_real_escape_string($conn, $uname);
            $sql = "SELECT * FROM users WHERE username = '$username'";
            $check_uname = mysqli_query($conn, $sql);
    
    
            // check same username
            if (mysqli_num_rows($check_uname) > 0) {
              // The username already exists
                echo "<script type='text/javascript'>alert('Maaf, username $username tidak tersedia!');document.location='../admin/c-account.php';</script>";
    
            } else {
              // The username is unique
                echo "<script type='text/javascript'>alert('USERNAME $username Anda ada dan bisa digunakan');</script>";
    
                if (true) {
                    $sql = "INSERT INTO users(username, nama, email, nohp, user_roles, password) VALUES ('$username','$fname','$email','$phone','$roles','$pass') ";
                    $hasil = mysqli_query($conn, $sql);
                    echo "<script type='text/javascript'>alert('Akun Anda telah berhasil di Dibuat!');document.location='../admin/i-account.php';</script>";
                }
            }
        }
    }
    function save_dt_student(){
        require("connect_db.php");
        if (mysqli_connect_errno()) {
            echo "Gagal terhubung ke dalam Databate : ". mysqli_connect_error();
        }

        $nama = $_POST['namalengkap'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tgl_lahir'];
        $alamat = $_POST['alamat'];
        $jk = $_POST['jk'];
        $agama = $_POST['agama'];
        $namaibu = $_POST['nama_ibu'];
        $namaayah = $_POST['nama_ayah'];
        $nohpibu = $_POST['nohp_ibu'];
        $nohpayah = $_POST['nohp_ayah'];
        $prov = $_POST['prov'];
        $kota = $_POST['kota'];
        $kec = $_POST['kec'];
        $kel = $_POST['kel'];
        $rt = $_POST['rt'];
        $rw = $_POST['rw'];

        $sql = "INSERT INTO students (namalengkap, tempat, tgl_lahir, alamat, jk, agama, nama_ibu, nama_ayah, nohp_ibu, nohp_ayah, prov, kota, kec, kel, rt, rw)
            VALUES ('$nama', '$tempat', '$tanggal', '$alamat', '$jk', '$agama', '$namaibu', '$namaayah', '$nohpibu', '$nohpayah', '$prov', '$kota', '$kec', '$kel', '$rt', '$rw')";
        $hasil = mysqli_query($conn, $sql);
        echo "<script type='text/javascript'>alert('Akun Anda telah berhasil di Dibuat!');document.location='../admin/i-student.php';</script>";
        
    }

    function update_dt_student($data) {
        $dbHost = "dakota_db";

    
        // Connect to the database
        $conn = mysqli_connect($dbHost);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    
        // Escape and sanitize the data to prevent SQL injection
        $studentId = mysqli_real_escape_string($conn, $data['student_id']);
        $namalengkap = mysqli_real_escape_string($conn, $data['namalengkap']);
        $tempat = mysqli_real_escape_string($conn, $data['tempat']);
        $tgl_lahir = mysqli_real_escape_string($conn, $data['tgl_lahir']);
        $alamat = mysqli_real_escape_string($conn, $data['alamat']);
        $jk = mysqli_real_escape_string($conn, $data['jk']);
        $agama = mysqli_real_escape_string($conn, $data['agama']);
        $nama_ibu = mysqli_real_escape_string($conn, $data['nama_ibu']);
        $nama_ayah = mysqli_real_escape_string($conn, $data['nama_ayah']);
        $nohp_ibu = mysqli_real_escape_string($conn, $data['nohp_ibu']);
        $nohp_ayah = mysqli_real_escape_string($conn, $data['nohp_ayah']);
        $prov = mysqli_real_escape_string($conn, $data['prov']);
        $kota = mysqli_real_escape_string($conn, $data['kota']);
        $kec = mysqli_real_escape_string($conn, $data['kec']);
        $kel = mysqli_real_escape_string($conn, $data['kel']);
    
        // SQL query to update the record
        $sql = "UPDATE students SET
                namalengkap = '$namalengkap',
                tempat = '$tempat',
                tgl_lahir = '$tgl_lahir',
                alamat = '$alamat',
                jk = '$jk',
                agama = '$agama',
                nama_ibu = '$nama_ibu',
                nama_ayah = '$nama_ayah',
                nohp_ibu = '$nohp_ibu',
                nohp_ayah = '$nohp_ayah',
                prov = '$prov',
                kota = '$kota',
                kec = '$kec',
                kel = '$kel'
                WHERE id = '$studentId'";
    
        if (mysqli_query($conn, $sql)) {
            mysqli_close($conn);
            return true; // Update successful
        } else {
            mysqli_close($conn);
            return false; // Update failed
        }
    }
?>