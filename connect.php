<?php
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$number = $_POST['number'];
$altnumber = $_POST['alternum'];
$gen = $_POST['gen'];
$email = $_POST['email'];
$date=$_POST['complaintdate'];
$dob=$_POST['dob'];
$dist= $_POST['district'];
$city = $_POST['city'];
$street = $_POST['street'];
$Address= $_POST['address'];
$img= $_POST['image'];




$conn= new mysqli('localhost','root','','online_data');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}else{
    $stmt =$conn->prepare("insert into registration(firstname,lastname,number,alternum,gen,email,complaintdate,dob,district,city,street,address,image)values(?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssiisssssssss",$fname,$lname,$number,$altnumber,$gen,$email,$date,$dob,$dist,$city,$street,$Address,$img);
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
            <button class="btn"><a href="Home_page.php" class="btn">Home Page</a></button>
            
        </div>
    </div>
    
</body>
</html>
