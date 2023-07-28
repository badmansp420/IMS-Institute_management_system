<?PHP
include('security.php');
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "e_sms");

?>

<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="photos\ITA_LOGO .jpg">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">



</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <br>
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="ad_das.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    (IMS)
                </div>
                <div class="sidebar-brand-text mx-3">Institute Managemnet System</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="ad_das.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item ">
                <a class="nav-link active" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-user"></i>
                    <span>Students</span>
                </a>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="ad_st.php">Add Students</a>
                        <a class="collapse-item active" href="st_search.php">Search Students</a>
                        <a class="collapse-item" href="st_update.php">Print Details</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-user"></i>
                    <span>Teachers</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="#">Add Teachers</a>
                        <a class="collapse-item" href="#">View Teachers</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Academic Details
            </div>

            <!-- Nav Item - Pages Collapse Menu -->


            <!-- Nav Item - Charts -->

            <li class="nav-item ">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseMarks" aria-expanded="true" aria-controls="collapseMarks">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Add Marks</span>
                </a>
                <div id="collapseMarks" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="marks_jexpo.php">Jexpo Student</a>

                        <a class="collapse-item" href="marks_voclate.php">Voclet Student</a>
                    </div>
                </div>

            </li>
            <?php /*<li class="nav-item">
                <a class="nav-link" href="add_mark.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Add Marks</span></a>
            </li>*/ ?>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="table.php?page=<?= "1"; ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">



            <!-- Sidebar Message -->


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['name']; ?></span>
                                <img class="img-profile rounded-circle" src="photos/images.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>

                <div class="container-fluid align-center">

                    <div class="card position-relative">
                        <div class="card-header py-2">
                            <h4 class="m-0 font-weight-bold text-primary">Search Details</h4>
                        </div>
                        <form action="" method="post">
                            <div class="card-body">
                                <div class="col-12 text-center md-2 py-2">

                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="addon-wrapping"><i class="fa fa-id-card" aria-hidden="true">&nbsp;&nbsp;</i> Registration No:</span>
                                        <input type="text" pattern="[d/D][0-9]{9}" class="form-control" name="reg_no" maxlength="10" placeholder="Enter Registration No" aria-describedby="addon-wrapping" maxlength="10" required>

                                        <button type="submit" name="show" id="show" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i> Search Details</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                    <br>
                    <br>
                </div>


                <br>
                <br>


                <?php
                if (isset($_POST['show'])) {
                    $query = "select * from student where reg_no = '$_POST[reg_no]'";
                    $query_run = mysqli_query($connection, $query);
                    while ($row = mysqli_fetch_assoc($query_run)) {
                        //if ($_POST['reg_no'] === $row['reg_no']) {



                ?>
                        <div class="container-fluid align-center">

                            <div class="card position-relative">
                                <div class="card-header py-2">
                                    <h4 class="m-0 font-weight-bold text-primary">Basic Details</h4>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <a class="btn btn-success me-md-2" href="st_edit.php?reg_no=<?= $row['reg_no'] ?>">Edit</a>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="table-responsive">
                                        <div class="col-12 text-center md-2 py-2">
                                            <label for="inputreg" class="form-label"></label>
                                            <a style="border:10" href="<?php echo "upload/" . $row['st_image']; ?>"><img src="<?php echo "upload/" . $row['st_image']; ?>" height="100px" width="80px"></a>
                                        </div>
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                            <tr>
                                                <td><b>Addmission Date: </b></td>
                                                <td><input type="text" value="<?php echo $row['ad_date']; ?>" disabled>
                                                </td>

                                                <td><b>Date Of Birth: </b></td>
                                                <td><input type="text" value="<?php echo $row['dob']; ?>" disabled>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Name: </b></td>
                                                <td><?php echo $row['st_name']; ?>
                                                </td>

                                                <td><b>Registration No: </b></td>
                                                <td> <?php echo $row['reg_no']; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Father Name: </b></td>
                                                <td><?php echo $row['fathers_name']; ?>
                                                </td>

                                                <td><b>Branch: </b></td>
                                                <td><?php echo $row['branch']; ?>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><b>Email: </b></td>
                                                <td><?php echo $row['email']; ?>
                                                </td>

                                                <td><b>Gender </b></td>
                                                <td><?php echo $row['gender']; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Mobile No: </b></td>
                                                <td><?php echo $row['ph_no']; ?>
                                                </td>

                                                <td><b>Semester: </b></td>
                                                <td><?php echo $row['semester']; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>District: </b></td>
                                                <td><?php echo $row['district']; ?>
                                                </td>

                                                <td><b>City: </b></td>
                                                <td><?php echo $row['city']; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Address: </b></td>
                                                <td><?php echo $row['adress']; ?>
                                                </td>

                                                <td><b>Pin Code: </b></td>
                                                <td><?php echo $row['zip_cod']; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Admission Status :</b></td>
                                                <td><?php echo $row['ad_type']; ?>
                                                </td>
                                            </tr>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                        </div>

                        <div class="container-fluid align-center">

                            <div class="card position-relative">
                                <div class="card-header py-2">
                                    <h4 class="m-0 font-weight-bold text-primary">Accademic Details</h4>

                                </div>

                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                            <tr align="center">
                                                <th>Semester</th>
                                                <th>Status</th>
                                                <th>Parcentage</th>
                                                <th>GPA</th>
                                                <th>Grade</th>
                                                <th>Action</th>
                                            </tr>


                                    <?php
                                    // } else {
                                    //echo "<script>alert('Please Enter Valid Details')</script>";
                                    // }
                                }
                            }



                                    ?>



                                    <?php



                                    if (isset($_POST['show'])) {

                                        $query1 = "select * from mark_sem_1 where reg_no = '$_POST[reg_no]'";
                                        $query_run1 = mysqli_query($connection, $query1);
                                        while ($row1 = mysqli_fetch_assoc($query_run1)) {


                                    ?>

                                            <tr align="center">
                                                <td>SEMESTER - I</td>
                                                <td><?php echo $row1['st_status'] ?></td>
                                                <td><?php echo $row1['parcentage'] ?></td>
                                                <td><?php echo $row1['gpa'] ?></td>
                                                <td><?php echo $row1['grade'] ?></td>
                                                <td><a href="st_edit_sem_1.php?reg_no=<?= $row1['reg_no'] ?>" class="btn btn-success btn-sm ">Edit</a></td>
                                            </tr>

                                    <?php
                                        }
                                    }
                                    ?>
                                    <?php

                                    if (isset($_POST['show'])) {

                                        $query1 = "select * from mark_sem_2 where reg_no = '$_POST[reg_no]'";
                                        $query_run1 = mysqli_query($connection, $query1);
                                        while ($row1 = mysqli_fetch_assoc($query_run1)) {
                                    ?>



                                            <tr align="center">
                                                <td>SEMESTER - II</td>
                                                <td><?php echo $row1['st_status'] ?></td>
                                                <td><?php echo $row1['parcentage'] ?></td>
                                                <td><?php echo $row1['gpa'] ?></td>
                                                <td><?php echo $row1['grade'] ?></td>
                                                <td><a href="st_edit_sem_2.php?reg_no=<?= $row1['reg_no'] ?>" class="btn btn-success btn-sm ">Edit</a></td>
                                            </tr>

                                    <?php
                                        }
                                    }
                                    ?>
                                    <?php

                                    if (isset($_POST['show'])) {

                                        $query2 = "select * from mark_sem_3 where reg_no = '$_POST[reg_no]'";
                                        $query_run2 = mysqli_query($connection, $query2);
                                        while ($row2 = mysqli_fetch_assoc($query_run2)) {
                                    ?>



                                            <tr align="center">
                                                <td>SEMESTER - III</td>
                                                <td><?php echo $row2['st_status'] ?></td>
                                                <td><?php echo $row2['parcentage'] ?></td>
                                                <td><?php echo $row2['gpa'] ?></td>
                                                <td><?php echo $row2['grade'] ?></td>
                                                <td><a href="st_edit_sem_3.php?reg_no=<?= $row2['reg_no'] ?>" class="btn btn-success btn-sm ">Edit</a></td>
                                            </tr>

                                    <?php
                                        }
                                    }
                                    ?>
                                    <?php

                                    if (isset($_POST['show'])) {

                                        $query3 = "select * from mark_sem_4 where reg_no = '$_POST[reg_no]'";
                                        $query_run3 = mysqli_query($connection, $query3);
                                        while ($row3 = mysqli_fetch_assoc($query_run3)) {
                                    ?>



                                            <tr align="center">
                                                <td>SEMESTER - IV</td>
                                                <td><?php echo $row3['st_status'] ?></td>
                                                <td><?php echo $row3['parcentage'] ?></td>
                                                <td><?php echo $row3['gpa'] ?></td>
                                                <td><?php echo $row3['grade'] ?></td>
                                                <td><a href="st_edit_sem_4.php?reg_no=<?= $row3['reg_no'] ?>" class="btn btn-success btn-sm ">Edit</a></td>
                                            </tr>

                                    <?php
                                        }
                                    }
                                    ?>
                                    <?php

                                    if (isset($_POST['show'])) {

                                        $query4 = "select * from mark_sem_5 where reg_no = '$_POST[reg_no]'";
                                        $query_run4 = mysqli_query($connection, $query4);
                                        while ($row4 = mysqli_fetch_assoc($query_run4)) {
                                    ?>



                                            <tr align="center">
                                                <td>SEMESTER - V</td>
                                                <td><?php echo $row4['st_status'] ?></td>
                                                <td><?php echo $row4['parcentage'] ?></td>
                                                <td><?php echo $row4['gpa'] ?></td>
                                                <td><?php echo $row4['grade'] ?></td>
                                                <td><a href="st_edit_sem_5.php?reg_no=<?= $row4['reg_no'] ?>" class="btn btn-success btn-sm ">Edit</a></td>
                                            </tr>

                                    <?php
                                        }
                                    }
                                    ?>
                                    <?php

                                    if (isset($_POST['show'])) {

                                        $query5 = "select * from mark_sem_6 where reg_no = '$_POST[reg_no]'";
                                        $query_run5 = mysqli_query($connection, $query5);
                                        while ($row5 = mysqli_fetch_assoc($query_run5)) {
                                    ?>



                                            <tr align="center">
                                                <td>SEMESTER - VI</td>
                                                <td><?php echo $row5['st_status'] ?></td>
                                                <td><?php echo $row5['parcentage'] ?></td>
                                                <td><?php echo $row5['gpa'] ?></td>
                                                <td><?php echo $row5['grade'] ?></td>
                                                <td><a href="st_edit_sem_6.php?reg_no=<?= $row5['reg_no'] ?>" class="btn btn-success btn-sm ">Edit</a></td>
                                            </tr>

                                    <?php
                                        }
                                    }
                                    ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                        </div>




            </div>
        </div>
    </div>
    </div>




    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>

                </div>
                <div class="modal-body">Are you secure "Logout" from your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>












</body>

</html>