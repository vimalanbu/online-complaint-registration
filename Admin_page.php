<?php
include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
    header ('location:Login_form.php');
}
?>

<html>
<head>
    <title>ADMIN PAGE</title>
    <link rel="stylesheet" href="ad.css">
</head>
<body>
   <div class="container">

   <div class="content">
    <h1>Hi,<span>Admin</span></h1>
    <h3>Welcome <span><?php echo $_SESSION['admin_name'] ?></span></h3>
    <p>This is An Admin Page</p>
    <a href="Admin_details.php" class="btn">User Registration </a>
    <a href="Home_page.php" class="btn">Logout</a>
   </div>
   </div> 
</body>
</html>