<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$name = $_POST['name'];
		
		$sql = "INSERT INTO AUTHORS (AUTHOR_NAME) VALUES ('$name')";
		if($set->query($sql)){
			$_SESSION['success'] = 'Author added successfully';
		}
		else{
			$_SESSION['error'] = $set->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: authors.php');

?>