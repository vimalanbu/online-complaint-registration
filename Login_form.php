<?php

include 'Config.php';

session_start();

if(isset($_POST['submit'])){

    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $pass = md5($_POST['password']);

    $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        
        if($row['user_type'] == 'Admin'){
            $_SESSION['admin_name'] = $row['name'];
            header('location:Admin_page.php');

        }elseif($row['user_type']== 'User'){

            $_SESSION['user_name']=$row['name'];
            header('location:User_page.php');
        }

    }else{
        $error[] ='incorrect email or password!';
    }
};

?>

<html>
<head>
    <title>LOGIN FORM</title>
    <link rel="stylesheet" href="my.css">
</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>LOGIN NOW</h3>
            <?php
            
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            ?>
            <input type="email" name="email" placeholder="Enter your Email"><br>
            <input type="password" name="password" placeholder="Enter your Possword"><br>
            <input type="submit" name="submit" value="Login Now" class="form-btn">
            <p>Don't Have An Account?<a href="Register_page.php">Register Now</a></p>
        </form>
    </div>
</body>
</html>