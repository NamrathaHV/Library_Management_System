<?php
  	session_start();
  	if(isset($_SESSION['admin_id'])){
    	header('location:home.php');
  	}
?>

<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue sidebar-mini" class="hold-transition login-page">
<?php include 'includes/navbar1.php'; ?>
<div class="login-box">
  	<div class="login-logo">
  		<b>Admin Login</b>
  	</div>
  
  	<div class="login-box-body" style="background: #9514e654;">
    	<!--<p class="login-box-msg">Sign in to start your session</p>-->
		  <br/>
		  <br/>
    	<form action="login.php" method="POST">
      		<div class="form-group has-feedback">
                <input type="text" name="admin_id" class="form-control" placeholder="Enter Admin ID" required autofocus />
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
			<div class="form-group has-feedback">
				<input type="password" class="form-control" name="password" placeholder="Enter Password" required>
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="login"><i class="fa fa-sign-in"></i> Login In</button>
        		</div>
      		</div>
    	</form>
  	</div>
  	<?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>