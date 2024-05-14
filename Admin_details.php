<?php
require_once('db.php');
$query ="SELECT * FROM `registration`";
$result =mysqli_query($connection,$query);
?>
<html>
<head>
    <title>Admin panel </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="Admin_details_page.css">
</head>
<body>
    <div class="container-fluid">
      <!-- Nevigation start-->
  

    <div class="User">
        <h4>ADMIN</h4>
        <h2 id="Events Registration">User Events Details</h2>
    </div>
    <div class="row ">
        <div class="col">
            <div class="card mt-3">
                <div class="card-body">
                    <table class="table table-bordered text-center border border-dark">
                        <tr class="head bg-info border border-dark">
                            <th>First Name</th>
                            <th>last Name</th>
                            <th>Phone Number</th>
                            <th>Alt Phone number</th>
                            <th>gender</th>
                            <th>Email</th>
                            <th>complaintdate</th>
                            <th>dob</th>
                            <th>district</th>
                            <th>City</th>
                            <th>Street</th>
                            <th>Address</th>
                            <th>Images</th>
                            <th>A/R</th>
                        </tr>
                        <tr>
                            <?php
                            while($row= mysqli_fetch_assoc($result))
                            {
                            ?>
                            <td><?php echo $row['firstname'];?></td>
                            <td><?php echo $row['lastname'];?></td>
                            <td><?php echo $row['number'];?></td>
                            <td> <?php echo $row['alternum'];?></td>
                            <td><?php echo $row['gen'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['complaintdate'];?></td>
                            <td><?php echo $row['dob'];?></td>
                            <td><?php echo $row['district'];?></td>
                            <td><?php echo $row['city'];?></td>
                            <td><?php echo $row['street'];?></td>
                            <td><?php echo $row['address'];?></td>
                            <td><?php echo $row['image'];?></td>
                            <td><a href="Admin_update.php" class="btn btn-primary">A/R</td>
                        </tr>
                        <?php

                            }
                            ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>