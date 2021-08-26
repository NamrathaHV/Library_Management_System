<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$name = $_POST['name'];
		$location = $_POST['location'];
		$sql = "INSERT INTO Branch (BRANCH_NAME,LOCATION) VALUES ('$name', '$location')";
		if($set->query($sql)){
			$_SESSION['success'] = 'Branch added successfully';
		}
		else{
			$_SESSION['error'] = $set->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: branch.php');

?>