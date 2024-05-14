<?php

include 'Config.php';

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];

    $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
       
        $error[] ='user already exist!';

    }else{
        if($pass != $cpass){
            $error[] = 'password not matched!';
        }
        else{
            $insert = "INSERT INTO `user_form`(name, email,password, user_type) VALUES('$name','$email','$pass','$user_type')";
            mysqli_query($conn, $insert);
            header('location:Login_form.php');


        }
    }
};

?>


<html>
<head>
    <title>REGISTER</title>
    <link rel="stylesheet" href="my.css">
</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>Register Now</h3>
            <?php
            
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            ?>
            <input type="text" name="name" placeholder="Enter your name">
            <input type="email" name="email" placeholder="Enter your Email">
            <input type="password" name="password" placeholder="Enter your Possword">
            <input type="password" name="cpassword" placeholder="Enter your confirm Possword "><br>
            <select name="user_type">
                <option value="User">User</option>
                <option value="Admin">Admin</option>
            </select>
            <br>
            <input type="submit" name="submit" value="Register Now" class="form-btn">
            <p>Already Have An Account?<a href="Login_form.php">Login Now</a></p>
        </form>
    </div>
</body>
</html>