<?php
	include('security.php');

	session_destroy();
	unset($_SESSION['email']);
	echo "<script>window.close();</script>";
	
?>