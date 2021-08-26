<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Profile</li>
        <li class="active">Update</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
        <div class="row">
            <div align="center" class="col-xs-12" style="width: 70%; margin-left: 16%;">
                <div class="box">
                  <div class="box-body">
                    <div class="login-box-body" style="background: #9514e654;">
                      <!--<p class="login-box-msg">Sign in to start your session</p>-->
                      <br/>
                      <br/>
                      <form class="form-horizontal" method="POST" action="update.php" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="userid" class="col-sm-3 control-label">User ID</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="userid" name="userid" value="<?php echo $user['USER_ID']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="username" class="col-sm-3 control-label">Username</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="username" name="username" value="<?php echo $user['FULL_NAME']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="phn" class="col-sm-3 control-label">Phone Number</label>
                                            <div class="col-sm-9">
                                                <input type="tel" class="form-control" id="phn" name="phn" pattern="\d{10}" value="<?php echo $user['PHONE_NO']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="col-sm-3 control-label">E-mail ID</label>

                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" id="email" name="email" value="<?php echo $user['MAIL_ID']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="address" class="col-sm-3 control-label">Address</label>

                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="address" name="address" value="<?php echo $user['ADDRESS']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="col-sm-3 control-label">Password</label>

                                            <div class="col-sm-9"> 
                                            <input type="password" class="form-control" id="password" name="password" value="<?php echo $user['PASSWORD']; ?>">
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label for="curr_password" class="col-sm-3 control-label">Current Password:</label>

                                            <div class="col-sm-9">
                                            <input type="password" class="form-control" id="curr_password" name="curr_password" placeholder="input current password to save changes" required>
                                            </div>
                                        </div>
                        <div class="row">
                          <br>
                          <div class="col-xs-4" style="float: none; width: 86.333333%;">
                            <button type="reset" style="float:left; " class="btn btn-default btn-flat pull-left" ><i class="fa fa-close"></i> Cancel</button>
                            <button type="submit" style="float:right;" class="btn btn-success btn-flat" name="save"><i class="fa fa-check-square-o"></i> Save</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    </section>

</div>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
