<?php
	session_start();
	include 'includes/conn.php';

	if(!isset($_SESSION['admin_id']) || trim($_SESSION['admin_id']) == ''){
		header('location: ../index.php');
	}

	$sql = "SELECT * FROM ADMIN LEFT JOIN BRANCH ON BRANCH.BRANCH_ID=ADMIN.BRANCH_ID WHERE ADMIN_ID = '".$_SESSION['admin_id']."'";
	$query = $set->query($sql);
	$user = $query->fetch_assoc();
	
?>