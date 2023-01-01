<?php
	require_once 'session.php';
	session_start();
	session_destroy();

	/*$status = "Offline now";
	$sql2 = mysqli_query($conn, "UPDATE tb_user SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");*/
		unset($_SESSION['login_user']);
		header("Location: ../login.php");
		exit();
?>