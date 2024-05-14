<?php
require_once('conn.php');
$query ="SELECT * FROM `registration`";
$result =mysqli_query($connection,$query);
?>


<html>
<head>
    <title>User panel </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS_File/Admin_details_page.css">
</head>
<body>
    <div class="container-fluid">
      <!-- Nevigation start-->


    <div class="User">
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
                            <th>Email</th>
                            <th>Date</th>
                            <th>Event venues</th>
                            <th>Type_Of_Price</th>
                            <th>City</th>
                            <th>Street</th>
                            <th>Pincode</th>
                            <th>Address</th>
                            <th>status</th>
                        </tr>
                        <tr>
                            <?php
                            while($row= mysqli_fetch_assoc($result))
                            {
                            ?>
                            <td><?php echo $row['fname'];?></td>
                            <td><?php echo $row['lname'];?></td>
                            <td><?php echo $row['phone_number'];?></td>
                            <td> <?php echo $row['Alt_phone_number'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['date'];?></td>
                            <td><?php echo $row['Event_venues'];?></td>
                            <td><?php echo $row['Type_of_Price'];?></td>
                            <td><?php echo $row['city'];?></td>
                            <td><?php echo $row['street'];?></td>
                            <td><?php echo $row['pincode'];?></td>
                            <td><?php echo $row['Address'];?></td>
                            <td><?php echo $row['Status'];?>process 
                        </td>
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
</div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>