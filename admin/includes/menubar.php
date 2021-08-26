<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="../images/user.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $user['BRANCH_NAME']; ?></p>
        <p>ID: <?php echo $user['ADMIN_ID']; ?></p>
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
          <li><a href="register.php"><i class="fa fa-circle-o"></i> Register</a></li>
          <li><a href="issued.php"><i class="fa fa-circle-o"></i> Issued Books</a></li>
          <li><a href="returned.php"><i class="fa fa-circle-o"></i> Returned Books</a></li>
          <li><a href="issue_req.php"><i class="fa fa-circle-o"></i> Issue Request</a></li>
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
          <li><a href="category.php"><i class="fa fa-circle-o"></i> Category</a></li>
          <li><a href="authors.php"><i class="fa fa-circle-o"></i> Author List</a></li>
          <li><a href="publisher.php"><i class="fa fa-circle-o"></i> Publisher List</a></li>
          <li><a href="branch.php"><i class="fa fa-circle-o"></i> Branch List</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-graduation-cap"></i>
          <span>Users</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="user.php"><i class="fa fa-circle-o"></i> User List</a></li>
          <li><a href="req_book.php"><i class="fa fa-circle-o"></i> Requested Books</a></li>
        </ul>
      </li>
      <li class="header">LOGOUT</li>
      <li class=""><a href="../logout.php"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>