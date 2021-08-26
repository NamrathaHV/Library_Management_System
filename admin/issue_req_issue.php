<?php
	include 'includes/session.php';

	if(isset($_POST['issue'])){
		$isbn = $_POST['isbn'];
		$uid = $_POST['uid'];
		$issue_date = $_POST['issue_date'];
		$issue_d=$_POST['issue_date'];
		$due_date=date("Y-m-d",strtotime("+3 months",strtotime($issue_d)));
		$sql="SELECT * FROM REGISTER WHERE REGISTER.RETURN_DATE IS NULL AND ISBN='$isbn'";
		$query=$set->query($sql);
		if(($query->num_rows)==1)
		{
			$_SESSION['error'] = 'Book is Not Available';
		}
		else
		{
			$sql = "INSERT INTO REGISTER (ISBN, USER_ID,ISSUE_DATE,DUE_DATE) VALUES ('$isbn', '$uid','$issue_date', '$due_date')";
			if($set->query($sql)){
				$sql = "DELETE FROM ISSUE_REQ WHERE ISSUE_REQ.ISBN='$isbn' AND ISSUE_REQ.USER_ID='$uid'";
				$set->query($sql);
				$_SESSION['success'] = 'Issued successfully';
			}
			else{
				$_SESSION['error'] = 'Enter correct details';
			}
			
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up issue form first';
	}

	header('location: issue_req.php');

?>