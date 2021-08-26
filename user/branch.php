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
        Branch List
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Books</li>
        <li class="active">Branch List</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <div class="box-body">
                <table id="example1" class="table table-bordered">
                  <thead style="background-color: #80008054;">
                    <th>Branch</th>
                    <th>Location</th>
                  </thead>
                  <tbody>
                    <?php
                      $sql = "SELECT * FROM BRANCH";
                      $query = $set->query($sql);
                      while($row = $query->fetch_assoc()){
                        echo "
                          <tr>
                            <td>".$row['BRANCH_NAME']."</td>
                            <td>".$row['LOCATION']."</td>
                          </tr>
                        ";
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
           </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
</div>
<?php include 'includes/scripts.php'; ?>
</script>
</body>
</html>
