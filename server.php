<?php
 $connection = mysqli_connect("db", "ims_user", "ims_pass", "ims_db");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>