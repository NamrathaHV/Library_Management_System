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
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
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
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box " style="background-color: #800080bd; color: white;">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM books";
                $query = $set->query($sql);

                echo "<h3>".$query->num_rows."</h3>";
              ?>

              <p>Total Books</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="book.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box " style="background-color: #9b9da2">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM READERS";
                $query = $set->query($sql);

                echo "<h3>".$query->num_rows."</h3>";
              ?>
          
              <p>Total Users</p>
            </div>
            <div class="icon">
              <i class="fa fa-graduation-cap"></i>
            </div>
            <a href="user.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box " style="background-color: #800080bd; color: white;">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM REGISTER WHERE RETURN_DATE IS NULL";
                $query = $set->query($sql);

                echo "<h3>".$query->num_rows."</h3>";
              ?>
             
              <p>Issued Books</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="issued.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box " style="background-color: #9b9da2">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM REQUESTED_BOOK ";
                $query = $set->query($sql);

                echo "<h3>".$query->num_rows."</h3>";
              ?>

              <p>Requested Books</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="req_book.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box " style="background-color: #9b9da2">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM ISSUE_REQ ";
                $query = $set->query($sql);

                echo "<h3>".$query->num_rows."</h3>";
              ?>

              <p>Issue Request</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="issue_req.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6" style="margin-left: 50%;">
          <!-- small box -->
          <div class="small-box " style="background-color: #800080bd; color: white;">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM BRANCH ";
                $query = $set->query($sql);

                echo "<h3>".$query->num_rows."</h3>";
              ?>

              <p>Branch</p>
            </div>
            <div class="icon">
              <i class="fa fa-building"></i>
            </div>
            <a href="branch.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
    </section>

</div>
<!-- ./wrapper -->
<?php include 'includes/scripts.php'; ?>
</body>
</html>
