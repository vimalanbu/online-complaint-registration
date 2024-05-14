<?php
include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
    header ('location:Login_form.php');
}
?>

<html>
<head>
    <title>USER PAGE</title>
    <link rel="stylesheet" href="ad.css">
</head>
<body>
   <div class="container">

   <div class="content">
    <h1>Hi,<span>User</span></h1>
    <h3>Welcome <span><?php echo $_SESSION['user_name'] ?></span></h3>
    <p>This is An User Page</p>
    <h3><a href="Events_register.php" class="btn">Complaint Registration </a></h3>
    <h3><a href="User_update.php" class="btn">Complaint Registration Details </a></h3>
    <a href="Home_page.php" class="btn">Logout</a>
    <button class="btn"><a href="admin_update.php" class="btn">Home Page</a></button>
   </div>
   </div> 
</body>
</html>