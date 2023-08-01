<?php
include("security.php");
include("server.php");


if (isset($_GET['reg_no'])) {

    $reg_no = mysqli_real_escape_string($connection, $_GET['reg_no']);

    $query = "DELETE FROM student WHERE reg_no='$reg_no'";
    $query1 = "DELETE FROM mark_sem_1 WHERE reg_no='$reg_no'";
    $query2 = "DELETE FROM mark_sem_2 WHERE reg_no='$reg_no'";
    $query3 = "DELETE FROM mark_sem_3 WHERE reg_no='$reg_no'";
    $query4 = "DELETE FROM mark_sem_4 WHERE reg_no='$reg_no'";
    $query5 = "DELETE FROM mark_sem_5 WHERE reg_no='$reg_no'";
    $query6 = "DELETE FROM mark_sem_6 WHERE reg_no='$reg_no'";
    $query_run = mysqli_query($connection, $query);
    $query_run1 = mysqli_query($connection, $query1);
    $query_run2 = mysqli_query($connection, $query2);
    $query_run3 = mysqli_query($connection, $query3);
    $query_run4 = mysqli_query($connection, $query4);
    $query_run5 = mysqli_query($connection, $query5);
    $query_run6 = mysqli_query($connection, $query6);

    if ($query_run && $query_run1 && $query_run2 && $query_run3 && $query_run4 && $query_run5 && $query_run6) {
        echo "<script>alert('Deleted')</script>";
        header("Location: ./st_search.php");
    } else {
        echo "<script>alert('Not Deleted')</script>";
    }
}



// if (isset($_GET['reg_no'])) {
//     $reg_no = mysqli_real_escape_string($connection, $_GET['reg_no']);


//     $query = "select * from student WHERE reg_no='$reg_no'";
//     $query_run = mysqli_query($connection, $query);

//     if ($query_run) {
//         $reg_no = mysqli_fetch_array($query_run);
?>