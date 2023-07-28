<!--PHP Change Password-->

<?php
if (isset($_POST['changepassword'])) {
    $oldpassword = $_POST['oldpassword'];
    $newpassword = $_POST['newpassword'];
    $confirmpassword = $_POST['confirmpassword'];

    if (isset($_POST['newpassword']) == ($_POST['confirmpassword'])) {
        $query = "select password from admin where password ='$oldpassword' ";
        $result = mysqli_query($connection, $query);
        $count = mysqli_num_rows($result);
        echo "<script>alert('New Password & Confirm Password Does Not Match')</script>";
        if ($count > 0) {
            $query = "update admin SET password ='$newpassword'";
            $result = mysqli_query($connection, $query);
            echo "<script>alert('Password Updated Successfully')</script>";
            header('location: index.php');
        } else {
            echo "<script>alert('Password Not Updated Successfully')</script>";
        }
    }
}
?>