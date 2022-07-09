<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>ข้อมูลสมาชิกทั้งหมด</title>


</head>

<body>

    <div class="container">
        <h1 class="mt-5">ข้อมูลสมาชิก</h1>
        <a href="insert.php" class="btn btn-success mt-3">เพิ่มข้อมูล</a>
        <hr>
    <table id="mytable" class="table table-bordered table-striped">
        <thead>
            <th>#</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th>Posting Date</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>

        <tbody>
            <?php

            include_once('function.php');
            $fetchdata = new DB_con();
            $sql = $fetchdata->fetchdata();
            while ($row = mysqli_fetch_array($sql)) {

            ?>

                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['firstname'];?></td>
                    <td><?php echo $row['lastname'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['phonenumber'];?></td>
                    <td><?php echo $row['address'];?></td>
                    <td><?php echo $row['postingdate'];?></td>
                    <td><a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a></td>
                    <td><a href="delete.php?del=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>

            <?php

            }

            ?>
        </tbody>
    </table>
    </div>




    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
</body>

</html>