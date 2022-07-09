<?php
    include_once("function.php");

    $insertdata = new DB_con();

    if(isset($_POST['insert'])){
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $address = $_POST['address'];

        $sql = $insertdata->insert($fname, $lname, $email, $phonenumber, $address);

        if($sql){
            echo "<script>alert('Record Insert Success');</script>";
            echo "<script>window.location.href='index.php'</script>";
        }else {
            echo "<script>alert('Something Wrong! Please try again');</script>";
            echo "<script>window.location.href='index.php'</script>";
        }
    }

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>เพิ่มข้อมูลสมาชิก</title>


</head>

<body>

    <div class="container">
        <a href="index.php" class="btn btn-primary mt-3">หน้าหลัก</a>
        <hr>
        <h1 class="mt-5">กรอกข้อมูล</h1>
        <hr>
        <form action="" method="post">
            <div class="mb-3">
                <label for="firstname" class="form-label">firstname</label>
                <input type="text" class="form-control" name="firstname" require>
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">lastname</label>
                <input type="text" class="form-control" name="lastname" require>
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" require>
            </div>
            <div class="mb-3">
                <label for="phonenumber">Phone Number</label>
                <input type="text" class="form-control" name="phonenumber" require>
            </div>
            <div class="mb-3">
                <label for="address">Address</label>
                <textarea name="address" cols="30" rows="10" class="form-control" require></textarea>
            </div>
            <button type="submit" name="insert" class="btn btn-primary">Insert</button>
        </form>
    </div>




    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
</body>

</html>