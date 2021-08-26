<?php
	session_start();
	include 'includes/conn.php';

	if(!isset($_SESSION['user_id']) || trim($_SESSION['user_id']) == ''){
		header('location: ../index.php');
	}

	$sql = "SELECT * FROM READERS WHERE USER_ID = '".$_SESSION['user_id']."'";
	$query = $set->query($sql);
	$user = $query->fetch_assoc();
	
?>