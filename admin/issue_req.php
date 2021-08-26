<?php include 'includes/session.php'; ?>
<?php
  $branchid=0;
  $where = '';
  if(isset($_GET['branch'])){
    $branchid = $_GET['branch'];
    $where = 'AND BOOKS.BRANCH_ID = '.$branchid;
  }
?>
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
        Issue Request
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Transaction</li>
        <li class="active">Issue Request</li>
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
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border" style="padding-bottom: 3%;">
              <div class="box-tools pull-right" >
                <form class="form-inline">
                  <div class="form-group">
                    <label>Branch: </label>
                    <select class="form-control input-sm" id="select_branch">
                      <option value="0" >ALL</option>
                      <?php
                        $sql = "SELECT * FROM BRANCH";
                        $query = $set->query($sql);
                        while($brow = $query->fetch_assoc()){
                          $selected = ($branchid == $brow['BRANCH_ID']) ? " selected" : "";
                          echo "
                            <option value='".$brow['BRANCH_ID']."' ".$selected.">".$brow['BRANCH_NAME']."</option>
                          ";
                        }
                      ?>
                    </select>
                  </div>
                </form>
              </div>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead style="background-color: #80008054;">
                  <th>Book ID</th>
                  <th>Book</th>
                  <th>User ID</th>
                  <th>Branch Name</th>
                  <th>Request Date</th>
                  <th>Tools</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT *,concat(ISSUE_REQ.ISBN,ISSUE_REQ.USER_ID) AS REQ_NO FROM ISSUE_REQ LEFT JOIN BOOKS ON BOOKS.ISBN=ISSUE_REQ.ISBN LEFT JOIN BRANCH ON BRANCH.BRANCH_ID=BOOKS.BRANCH_ID $where";
                    $query = $set->query($sql);
                    while($row = $query->fetch_array()){
                      echo "
                        <tr>
                          <td>".$row['ISBN']."</td>
                          <td>".$row['TITLE']."</td>
                          <td>".$row['USER_ID']."</td>
                          <td>".$row['BRANCH_NAME']."</td>
                          <td>".$row['REQ_DATE']."</td>
                          <td>
                            <button class='btn btn-success btn-sm issue btn-flat' data-id='".$row['REQ_NO']."'><i class='fa fa-edit'></i>Issue</button>
                            <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['REQ_NO']."'><i class='fa fa-trash'></i>Delete</button>
                          </td>
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
    </section>   
  </div>
  <?php include 'includes/issue_req_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
  $('#select_branch').change(function(){
    var value = $(this).val();
    if(value == 0){
      window.location = 'issue_req.php';
    }
    else{
      window.location = 'issue_req.php?branch='+value;
    }
  });

  $(document).on('click', '.issue', function(e){
    e.preventDefault();
    $('#issue').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });
  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'issue_req_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.reqid').val(response.REQ_NO);
      $('#isbn').val(response.ISBN);
      $('#uid').val(response.USER_ID);
      $('#del_book').html(response.title);
    }
  });
}

</script>
</body>
</html>
