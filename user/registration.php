<?php
	session_start();
	include 'includes/conn.php';

	if(isset($_POST['register'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phn=$_POST['phn'];
		$address=$_POST['address'];
		$pas=md5($_POST['password']);
		$sql=$set->query("INSERT INTO READERS(FULL_NAME,PHONE_NO,MAIL_ID,ADDRESS,PASSWORD) VALUES('$name','$phn','$email','$address','$pas')");
		if($sql)
		{
			$a=$set->query("SELECT * FROM READERS WHERE MAIL_ID='$email'");
			if($a->num_rows==1)
			{
				$c=$a->fetch_assoc();
				$user_id=$c['USER_ID'];
				$_SESSION['success'] = 'HELLO  '. $name.'<br> WELCOME TO BANGTAN LMS <br> USER ID = '.$user_id;
				
			}
		}
		else
		{
			$a=$set->query("SELECT * FROM READERS WHERE MAIL_ID='$email'");
			
			if($a->num_rows!=1)
			{
				$_SESSION['error'] = 'Enter the Correct Details';
			}
			else
			{
				$_SESSION['error'] = 'User Already Exists';
		
			}
		}
		
	}
	else{
		$_SESSION['error'] = 'Fill up Registration form first';
	}

	header('location: index2.php');

?>