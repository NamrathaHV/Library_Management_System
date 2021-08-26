<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM REQUESTED_BOOK WHERE REQ_ID = '$id'";
		if($set->query($sql)){
			$_SESSION['success'] = 'Requested Book deleted successfully';
		}
		else{
			$_SESSION['error'] = $set->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}

	header('location: req_book.php');
	
?>