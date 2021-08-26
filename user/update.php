<?php
	include 'includes/session.php';

	if(isset($_POST['save'])){
		$curr_password = $_POST['curr_password'];
		$username = $_POST['username'];
		$password =$_POST['password'];
        $phn = $_POST['phn'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $curr_password=md5($curr_password);
        if($username!=NULL && $phn!=NULL && $email!=NULL && $address!=NULL && $password!=NULL && $curr_password!=NULL)
        { 
            if($curr_password==$user['PASSWORD'])
            {
                if($password!=$user['PASSWORD'])
                {
                    echo "inside password change";
                    $password=md5($password);
                }
                
                $sql = "UPDATE READERS SET FULL_NAME='$username',PHONE_NO='$phn',MAIL_ID='$email',ADDRESS='$address',password = '$password' WHERE USER_ID = '".$user['USER_ID']."'";
                if($set->query($sql)){
                    $_SESSION['success'] = 'User profile updated successfully';
                }
                else{
                        $_SESSION['error'] = $set->error;
                    
                }
                
            }
            else{
                    $_SESSION['error'] = 'Incorrect password';
            }
	    }
        else{
                $_SESSION['error'] = 'Fill up required details first';
        }
    }
    else{
        $_SESSION['error'] = 'Fill up required details first';
    }

	header('location: profile_update.php');

?>