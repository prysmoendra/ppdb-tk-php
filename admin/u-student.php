<?php
include('../Models/connect_db.php');

$id = $_POST['student_id'];
$namalengkap = $_POST['namalengkap'];
$tempat = $_POST['tempat'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$nama_ibu = $_POST['nama_ibu'];
$nama_ayah = $_POST['nama_ayah'];
$nohp_ibu = $_POST['nohp_ibu'];
$nohp_ayah = $_POST['nohp_ayah'];
$prov = $_POST['prov'];
$kota = $_POST['kota'];
$kec = $_POST['kec'];
$kel = $_POST['kel'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];

$sql = "UPDATE student SET
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
            kel = '$kel',
            rt = '$rt',
            rw = '$rw'
        WHERE id = '$id'";

mysqli_query($conn, $sql);

echo "<script type='text/javascript'>alert('Data telah berhasil diperbarui!'); document.location='i-student.php?page-nr=1';</script>";
?>