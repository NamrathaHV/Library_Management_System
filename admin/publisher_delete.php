<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM PUBLISHER WHERE PUBLISHER_ID = '$id'";
		if($set->query($sql)){
			$_SESSION['success'] = 'Publisher deleted successfully';
		}
		else{
			$_SESSION['error'] = $set->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}

	header('location: publisher.php');
	
?>