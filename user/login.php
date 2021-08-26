<?php
	session_start();
	include 'includes/conn.php';

	if(isset($_POST['login'])){
		$user_id = $_POST['user_id'];
		$password=mysqli_real_escape_string($set,$_POST['password']);

		$sql=$set->query("SELECT * FROM READERS WHERE USER_ID=$user_id");

		if($sql->num_rows < 1){
			$_SESSION['error'] = 'Cannot find account with the User ID';
		}
		else{ //verification of password
				
				$row=$sql->fetch_array();
				$password1=$row['PASSWORD'];
                $password=md5($password);
			if($password==$password1){
				$_SESSION['user_id'] = $user_id;
				$_SESSION['name']=$row['FULL_NAME'];
			}
			else{
				$_SESSION['error'] = 'Incorrect password';
			}
		}
		
	}
	else{
		$_SESSION['error'] = 'Input User Credentials First';
	}

	header('location: index1.php');

?>