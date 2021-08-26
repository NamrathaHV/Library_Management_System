<?php
	session_start();
	include 'includes/conn.php';

	if(isset($_POST['login'])){
		$admin_id = $_POST['admin_id'];
		$password=mysqli_real_escape_string($set,$_POST['password']);

		$sql=$set->query("SELECT * FROM ADMIN WHERE ADMIN_ID=$admin_id");

		if($sql->num_rows < 1){
			$_SESSION['error'] = 'Cannot Find Admin Account With The ID';
		}
		else{ //verification of password
				
				$row=$sql->fetch_array();
				$password1=$row['PASSWORD'];
                $password=md5($password);
			if($password==$password1){
				$_SESSION['admin_id'] = $admin_id;
			}
			else{
				$_SESSION['error'] = 'Incorrect password';
			}
		}
		
	}
	else{
		$_SESSION['error'] = 'Input Admin Credentials First';
	}

	header('location: index1.php');

?>