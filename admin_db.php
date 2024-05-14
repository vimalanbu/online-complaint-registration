<?php
$name1 = $_POST['name'];
$number = $_POST['phone_number'];
$toc= $_POST['types_of_complaint'];
$street = $_POST['street'];
$status = $_POST['Status'];
$fb = $_POST['feedback_mass'];





$conn= new mysqli('localhost','root','','online_data');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}else{
    $stmt =$conn->prepare("insert into data(name,phone_number,types_of_complaint,street,Status,feedback_mass)values(?,?,?,?,?,?)");
    $stmt->bind_param("sissss",$name1,$number,$toc,$street,$status,$fb);
    $stmt->execute();
  
    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="msg_page.css">
</head>
<body>
    <div class="container">
        <div class="">
            <h3>ONLINE COMPLAIINTS</h3>
            <h4>
            <?php
                 echo"Registration Successfully....";
            ?>
            
            </h4>
            <button class="btn"><a href="admin_update.php" class="btn">Home Page</a></button>
            
        </div>
    </div>
    
</body>
</html>