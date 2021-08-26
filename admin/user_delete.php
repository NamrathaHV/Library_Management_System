<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM READERS WHERE USER_ID = '$id'";
		if($set->query($sql)){
			$_SESSION['success'] = 'User deleted successfully <br> USER-ID: '.$id;
		}
		else{
			$_SESSION['error'] = $set->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}

	header('location: user.php');
	
?>