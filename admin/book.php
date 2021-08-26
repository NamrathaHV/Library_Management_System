<?php include 'includes/session.php'; ?>
<?php
  $catid = 0;
  $branchid=0;
  $where = '';
  if(isset($_GET['category']) && isset($_GET['branch']))
  {
      $where='WHERE BOOKS.SECTION_NO = '.$catid.' AND BOOKS.BRANCH_ID ='.$branchid; 
  }
  elseif(isset($_GET['category'])){
    $catid = $_GET['category'];
    $where = 'WHERE BOOKS.SECTION_NO = '.$catid;
  }
  elseif(isset($_GET['branch'])){
    $branchid = $_GET['branch'];
    $where = 'WHERE BOOKS.BRANCH_ID = '.$branchid;
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
        Book List
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Books</li>
        <li class="active">Book List</li>
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
            <div class="box-header with-border">
              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
              <div class="box-tools pull-right">
                <form class="form-inline">
                  <div class="form-group">
                    <label>Category: </label>
                    <select class="form-control input-sm" id="select_category">
                      <option value="0" >ALL</option>
                      <?php
                        $sql = "SELECT * FROM SECTION";
                        $query = $set->query($sql);
                        while($catrow = $query->fetch_assoc()){
                          $selected = ($catid == $catrow['SECTION_NO']) ? " selected" : "";
                          echo "
                            <option value='".$catrow['SECTION_NO']."' ".$selected.">".$catrow['SECTION_NAME']."</option>
                          ";
                        }
                      ?>
                    </select>
                  </div>
                </form>
              </div>
              <div class="box-tools pull-right" style="right:310px;">
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
                  <th>Title</th>
                  <th>Edition</th>
                  <th>Author</th>
                  <th>Publisher</th>
                  <th>Price</th>
                  <th>Year of Publication</th>
                  <th>Category</th>
                  <th>Branch</th>
                  <th>Tools</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT *,BOOKS.ISBN AS bookid FROM BOOKS LEFT JOIN SECTION ON SECTION.SECTION_NO=BOOKS.SECTION_NO LEFT JOIN AUTHORS ON AUTHORS.AUTHOR_ID=BOOKS.AUTHOR_ID LEFT JOIN PUBLISHER ON PUBLISHER.PUBLISHER_ID=BOOKS.PUBLISHER_ID LEFT JOIN BRANCH ON BRANCH.BRANCH_ID=BOOKS.BRANCH_ID $where";
                    $query = $set->query($sql);
                    while($row = $query->fetch_array()){
                      echo "
                        <tr>
                          <td>".$row['ISBN']."</td>
                          <td>".$row['TITLE']."</td>
                          <td>".$row['EDITION']."</td>
                          <td>".$row['AUTHOR_NAME']."</td>
                          <td>".$row['PUBLISHER_NAME']."</td>
                          <td>".$row['PRICE']."</td>
                          <td>".$row['YEAR_OF_PUBLICATION']."</td>
                          <td>".$row['SECTION_NAME']."</td>
                          <td>".$row['BRANCH_NAME']."</td>
                          <td>
                            <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['bookid']."'><i class='fa fa-trash'></i> Delete</button>
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
    

  <?php include 'includes/book_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
  $('#select_category').change(function(){
    var value = $(this).val();
    if(value == 0){
      window.location = 'book.php';
    }
    else{
      window.location = 'book.php?category='+value;
    }
  });

  $('#select_branch').change(function(){
    var value = $(this).val();
    if(value == 0){
      window.location = 'book.php';
    }
    else{
      window.location = 'book.php?branch='+value;
    }
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
    url: 'book_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.bookid').val(response.bookid);
      $('#del_book').html(response.title);
    }
  });
}

</script>
</body>
</html>
