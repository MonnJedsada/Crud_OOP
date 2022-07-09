<?php

    include_once('function.php');


    $updatedata = new DB_con();

    if(isset($_POST['update'])){
        $userid = $_GET['id'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $address = $_POST['address'];

        $sql = $updatedata->update($fname, $lname, $email, $phonenumber, $address, $userid);
        if($sql){
            echo "<script>alert('Update Success');</script>";
            echo "<script>window.location.href='index.php'</script>";
        }else {
            echo "<script>alert('Something Wrong! Please try again');</script>";
            echo "<script>window.location.href='update.php'</script>";
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
    <title>อัพเดตข้อมูล</title>
</head>

<body>
    <div class="container">
        <h1 class="mt-5">อัพเดตข้อมูล</h1>
        <hr>

    <?php

        $userid = $_GET['id'];
        $updateuser = new DB_con();
        $sql = $updateuser->fetchonerecord($userid);
        while ($row = mysqli_fetch_array($sql)) {
    ?>

            <form action="" method="post">
                <div class="mb-3">
                    <label for="firstname" class="form-label">firstname</label>
                    <input type="text" class="form-control" name="firstname" 
                    value="<?php echo $row['firstname']; ?>" require>
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label">lastname</label>
                    <input type="text" class="form-control" name="lastname" 
                    value="<?php echo $row['lastname']; ?>" require>
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" 
                    value="<?php echo $row['email']; ?>" require>
                </div>
                <div class="mb-3">
                    <label for="phonenumber">Phone Number</label>
                    <input type="text" class="form-control" name="phonenumber" 
                    value="<?php echo $row['phonenumber']; ?>" require>
                </div>
                <div class="mb-3">
                    <label for="address">Address</label>
                    <textarea name="address" cols="30" rows="10" class="form-control" require><?php echo $row
                    ['address']; ?></textarea>
                </div>
            
            <?php } ?>
            <button type="submit" name="update" class="btn btn-success">Update</button>
            </form>

    </div>








    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
</body>

</html>