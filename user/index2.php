<?php 
		include 'includes/header.php'; 
		session_start();
?>

<body class="hold-transition skin-blue sidebar-mini" class="hold-transition login-page">

	<?php include 'includes/navbar1.php'; ?>
	<div class="content-wrapper" style="margin-left: 0%;">
		<section class="content">
			<div class="login-box">
				<div class="login-logo" style="margin-top: -13%;">
					<b>User Registration</b>
				</div>
				<?php
					if(isset($_SESSION['error'])){
						echo "
							<div align=center class='alert alert-danger alert-dismissible'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<h4><i class='icon fa fa-warning'></i> Error!</h4>
							".$_SESSION['error']."
							</div>
						";
						unset($_SESSION['error']);
					}
					if(isset($_SESSION['success'])){
						echo "
							<div align=center class='alert alert-success alert-dismissible'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<h4><i class='icon fa fa-check'></i> Registered Successfully! </h4>
							".$_SESSION['success']."
							</div>
						";
						unset($_SESSION['success']);
					}
				?>
				<div class="login-box-body" style="background: #9514e654;">
					<!--<p class="login-box-msg">Sign in to start your session</p>-->
					<br/>
					<br/>
					<form action="registration.php" method="POST">
						<div class="form-group has-feedback">
							<input type="text" name="name" class="form-control" placeholder="Enter Full Name" required autofocus />
							<span class="glyphicon glyphicon-user form-control-feedback"></span>
						</div>
						<div class="form-group has-feedback">
							<input type="email" name="email" class="form-control" placeholder="Enter Email-ID" required autofocus />
							<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
						</div>
						<div class="form-group has-feedback">
							<input type="tel" class="form-control" name="phn"  pattern="\d{10}" placeholder="Enter Phone Number" required>
							<span class="glyphicon glyphicon-phone form-control-feedback"></span>
						</div>
						<div class="form-group has-feedback">
							<input type="text" class="form-control" name="address" placeholder="Enter Full Address" required>
							<span class="glyphicon glyphicon-home form-control-feedback"></span>
						</div>
						<div class="form-group has-feedback">
							<input type="password" class="form-control" name="password" placeholder="Enter Password" required>
							<span class="glyphicon glyphicon-lock form-control-feedback"></span>
						</div>
						<div class="row">
							<div class="col-xs-4">
								<button type="submit" class="btn btn-primary btn-block btn-flat" name="register"><i class="fa fa-sign-in"></i> Register </button>
							</div>
						</div>
					</form>
				</div>
			</div>
		<section>
	</div>
				<!--<div class="form-group has-feedback">
                    <label for="branch" class="col-sm-3 control-label">Branch</label>
                    <div class="col-sm-9">
                      <select class="form-control" name="branch" id="branch" required>
                        <option value="" selected>- Select Branch-</option>
                        <?php
                          /*$sql = "SELECT * FROM BRANCH";
                          $query = $set->query($sql);
                          while($brow = $query->fetch_assoc()){
                            echo "
                              <option value='".$brow['BRANCH_ID']."'>".$brow['BRANCH_NAME']."</option>
                            ";
                          }*/
                        ?>
                      </select>
                    </div>
                </div>-->
				
				
		
	<?php include 'includes/scripts.php' ?>
</body>
</html>

