<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="../images/user.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $user['FULL_NAME']; ?></p>
        <p>ID: <?php echo $user['USER_ID']; ?></p>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">REPORTS</li>
      <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li class="header">MANAGE</li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-refresh"></i>
          <span>Transaction</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="issued.php"><i class="fa fa-circle-o"></i> Issued Books</a></li>
          <li><a href="book_read.php"><i class="fa fa-circle-o"></i> Book Read</a></li>
          <li><a href="issue_req.php"><i class="fa fa-circle-o"></i> Request for Issue</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-book"></i>
          <span>Books</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="book.php"><i class="fa fa-circle-o"></i> Book List</a></li>
          <li><a href="authors.php"><i class="fa fa-circle-o"></i>Author List</a></li>
          <li><a href="branch.php"><i class="fa fa-circle-o"></i>Branch List</a></li>
          <li><a href="req_book.php"><i class="fa fa-circle-o"></i> Requested Books</a></li>
        </ul>
      </li>
      <li class="header">Profile</li>
      <li class=""><a href="profile_update.php"><i class="fa fa-edit"></i> <span>Update</span></a></li>
      <li class="header">LOGOUT</li>
      <li class=""><a href="../logout.php"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>