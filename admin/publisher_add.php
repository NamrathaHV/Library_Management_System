<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$name = $_POST['name'];
		
		$sql = "INSERT INTO PUBLISHER (PUBLISHER_NAME) VALUES ('$name')";
		if($set->query($sql)){
			$_SESSION['success'] = 'Publisher added successfully';
		}
		else{
			$_SESSION['error'] = $set->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: publisher.php');

?>