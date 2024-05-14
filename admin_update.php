<?php
require_once('db.php');
$query ="SELECT * FROM  `data`";
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
        <h2 id="Events Registration">ADMIN UPDATE DETAILS</h2>
    </div>
    <div class="row ">
        <div class="col">
            <div class="card mt-3">
                <div class="card-body">
                    <table class="table table-bordered text-center border border-dark">
                        <tr class="head bg-info border border-dark">
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>street</th>
                            <th>types_of_complaint</th>
                            <th>Status</th>
                            <th>feedback_mass</th>
                        </tr>
                        <tr>
                            <?php
                            while($row= mysqli_fetch_assoc($result))
                            {
                            ?>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['phone_number'];?></td>
                            <td> <?php echo $row['street'];?></td>
                            <td><?php echo $row['types_of_complaint'];?></td>
                            <td><?php echo $row['Status'];?></td>
                            <td><?php echo $row['feedback_mass'];?></td>
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