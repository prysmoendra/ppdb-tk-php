<?php
	session_start();
	session_unset();
	session_destroy();

	echo "<script type='text/javascript'>alert('Terimakasih telah berkunjung!');document.location='../tk-nusantara/ppdb.php';</script>";
?>