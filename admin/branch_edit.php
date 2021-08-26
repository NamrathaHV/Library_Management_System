<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$location = $_POST['location'];

		$sql = "UPDATE BRANCH SET LOCATION= '$location' WHERE BRANCH_ID = '$id'";
		if($set->query($sql)){
			$_SESSION['success'] = 'Branch Location updated successfully';
		}
		else{
			$_SESSION['error'] = $set->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location:branch.php');

?>