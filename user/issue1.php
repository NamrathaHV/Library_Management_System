<?php
	include 'includes/session.php';

	if(isset($_POST['issue'])){
		$isbn = $_POST['isbn'];
		$issue_req_date = $_POST['issue_req_date'];
		
		$sql="SELECT * FROM REGISTER WHERE REGISTER.RETURN_DATE IS NULL AND ISBN='$isbn'";
		$query=$set->query($sql);
		if(($query->num_rows)==1)
		{
			$_SESSION['error'] = 'Book is Not Available';
		}
		else
		{
			$sql = "INSERT INTO ISSUE_REQ (ISBN, USER_ID,REQ_DATE) VALUES ('$isbn', '$user[USER_ID]','$issue_req_date')";
			if($set->query($sql)){
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