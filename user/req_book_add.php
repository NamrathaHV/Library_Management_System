<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$name= $_POST['name'];
		$author = $_POST['author'];
        $a=$set->query("SELECT * FROM AUTHORS WHERE AUTHOR_NAME='$author'");
        $b = $a->fetch_assoc();
		$sql = "INSERT INTO REQUESTED_BOOK (BOOK_NAME,AUTHOR_ID) VALUES ('$name','$b[AUTHOR_ID]')";
		if($set->query($sql)){
			$_SESSION['success'] = 'Requested successfully';
		}
		else{
			$_SESSION['error'] = $set->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up request form first';
	}

	header('location: req_book.php');

?>