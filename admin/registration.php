<?php
	session_start();
	include 'includes/conn.php';

	if(isset($_POST['register'])){
		//$name=$_POST['name'];
		$phn=$_POST['phn'];
		$branch=$_POST['branch'];
		//$password=mysqli_real_escape_string($set,$_POST['password']);
		$pas=md5($_POST['password']);
		$sql1=$set->query("SELECT * FROM BRANCH WHERE BRANCH_NAME='$branch'");
		if($sql1->num_rows==1)
		{
			$b=$sql1->fetch_assoc();
			$branch_id=$b['BRANCH_ID'];
		}
		//$sql=$set->query("INSERT INTO ADMIN(ADMIN_NAME,PHONE_NUMBER,BRANCH_ID,PASSWORD) VALUES('$name','$phn','$branch_id','$pas')");
		$sql=$set->query("INSERT INTO ADMIN(PHONE_NUMBER,BRANCH_ID,PASSWORD) VALUES('$phn','$branch_id','$pas')");

		if($sql)
		{
			$a=$set->query("SELECT * FROM ADMIN WHERE BRANCH_ID='$branch_id'");
			if($a->num_rows==1)
			{
				$c=$a->fetch_assoc();
				$admin_id=$c['ADMIN_ID'];
				$_SESSION['success'] = 'HELLO ADMIN <br> WELCOME TO BANGTAN LMS <br> ADMIN ID = '.$admin_id;
				
			}
		}
		else
		{
			$a=$set->query("SELECT * FROM ADMIN WHERE BRANCH_ID='$branch_id'");
			
			if($a->num_rows!=1)
			{
				$_SESSION['error'] = 'Enter the Correct Details';
			}
			else
			{
				$b=$a->fetch_assoc();
				$_SESSION['error'] = 'Admin Already Exists';
		
			}
		}
		
	}
	else{
		$_SESSION['error'] = 'Fill up Registration form first';
	}

	header('location: index2.php');

?>