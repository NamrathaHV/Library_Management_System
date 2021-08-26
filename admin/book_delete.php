<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
        $id = $_POST['id'];
		$sql = "DELETE FROM BOOKS WHERE ISBN = '$id'";
		if($set->query($sql)){
			$_SESSION['success'] = 'Book deleted successfully';
		}
		else{
			$_SESSION['error'] = $set->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}

	header('location: book.php');
	
?>