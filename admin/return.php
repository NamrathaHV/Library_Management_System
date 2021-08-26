<?php
	include 'includes/session.php';

	if(isset($_POST['return'])){
		$id = $_POST['id'];
		$return_date = $_POST['return_date'];

		$sql = "UPDATE REGISTER SET RETURN_DATE = '$return_date' WHERE REG_NO = '$id'";
		if($set->query($sql)){
			$_SESSION['success'] = 'Returned successfully';
		}
		else{
			$_SESSION['error'] = $set->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up return form first';
	}

	header('location:register.php');

?>