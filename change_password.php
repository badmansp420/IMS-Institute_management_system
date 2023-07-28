<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="photos\ITA_LOGO .jpg">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Change Password</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <?PHP
    session_start();
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, "e_sms");
    ?>

</head>

<!--change password model-->




<div class="card text-center">
    <div class="card-header">
        Change Password
    </div>
    <div class="card-body">
        <form action="" method="post" class="col-3 ">
            <div class="col">
                <label for="recipient-name" class="col-form-label">Old Password</label>
                <input type="password" class="form-control" placeholder="Old Password" id="oldpassword" required>
            </div>
            <div class="col">
                <label for="recipient-name" class="col-form-label">New Password</label>
                <input type="password" class="form-control" placeholder="New Password" id="newpassword" required>
            </div>
            <div class="col">
                <label for="recipient-name" class="col-form-label">Confirm Password</label>
                <input type="password" class="form-control" placeholder="Confirm New Password" id="confirmpassword" required>
            </div>
        </form>
        
        <a href="ad_das.php" class="btn btn-secondary">Close</a>
        <a class="btn btn-primary" type="submit" name="update">Update</a>

    </div>

</div>



<!--PHP Change Password-->

<?php


if (isset($_POST['update'])) {
    $oldpassword = $_POST['oldpassword'];
    $newpassword = $_POST['newpassword'];
    $confirmpassword = $_POST['confirmpassword'];
    echo "deog";
    if (isset($_post['newpassword']) == ($_post['confirmpassword'])) {
        $query = "select * from admin where password ='$oldpassword' ";
        $result = mysqli_query($connection, $query);
        $count = mysqli_num_rows($result);
        echo "Password Mismatch";
        if ($count > 0) {
            $query = "update admin SET password ='$newpassword'";
            $result = mysqli_query($connection, $query);
            echo "<script>alert('Password Updated Successfully')</script>";
            header('location:ad_das.php');
        } else {
            echo "Password Not Updated Successfully";
        }
    }
}
?>




</body>

</html>