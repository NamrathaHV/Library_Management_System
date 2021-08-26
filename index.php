<?php
    session_start();
    session_destroy();
?>

<?php include 'header.php'; ?>

<body class="hold-transition skin-blue sidebar-mini" class="hold-transition login-page">

    <?php include 'navbar.php'; ?>
    <div class="login-logo" style="margin-bottom: -30px; margin-top: 67px; color: purple; font-family: cursive;">
    <b align="center" > BANGTAN LIBRARY MANAGEMENT SYSTEM </b>
    </div>

    <div  >
        <div  class = "first-wrapper"  >
                <br>
                <h1 style="text-align:center; color:black; font-weight: bold; font-size: 27px;" class="SubHead"> USER </h1>
                <br>
                <button align="center" class="button"><a href="user/index2.php" class="link">Sign Up</a></button>
                <br>
                <br>
                <button class="button"><a href="user/index1.php" class="link">Login In</a></button>
                <br>
                <br>
        </div>
        <div  class = "second-wrapper" >
                <br>
                <h1 style="text-align:center; color:black; font-weight: bold; font-size: 27px;" class="SubHead"> ADMIN </h1>
                <br>
                <button class="button"><a href="admin/index2.php" class="link">Sign Up</a></button>
                <br>
                <br>
                <button class="button"><a href="admin/index1.php" class="link">Login In</a></button>
                <br>
                <br>
        </div>
  
    </div>

</body>
