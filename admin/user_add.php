<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$name = $_POST['name'];
		$phn = $_POST['phn'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$password = md5($_POST['password']);
		$sql = "INSERT INTO READERS (FULL_NAME,PHONE_NO,MAIL_ID,ADDRESS,PASSWORD) VALUES ('$name', '$phn','$email', '$address', '$password')";
		if($set->query($sql)){
			$sql="SELECT * FROM READERS WHERE MAIL_ID='$email'";
			$query=$set->query($sql);
			$b=$query->fetch_assoc();
			$_SESSION['success'] = 'User added successfully <br> USER-ID: '.$b['USER_ID'];
		}
		else{
			$_SESSION['error'] = $set->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: user.php');

?>