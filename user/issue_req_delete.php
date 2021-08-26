<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM ISSUE_REQ WHERE ISBN= '$id' AND USER_ID='$user[USER_ID]'";
		if($set->query($sql)){
			$_SESSION['success'] = 'Deleted Successfully ';
		}
		else{
			$_SESSION['error'] = $set->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}

	header('location: issue_req.php');
	
?>