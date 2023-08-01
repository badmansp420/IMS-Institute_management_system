<?PHP
include('security.php');
include('server.php');

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
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

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
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>Students</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="ad_st.php">Add Students</a>
                        <a class="collapse-item" href="st_search.php">Search Students</a>
                        <a class="collapse-item" href="st_update.php">Print Details</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>Teachers</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="#">Add Teachers</a>
                        <a class="collapse-item" href="#">View Teachers</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Accademic Details
            </div>

            <!-- Nav Item - Pages Collapse Menu -->


            <!-- Nav Item - Charts -->

            <li class="nav-item ">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseMarks" aria-expanded="true"
                    aria-controls="collapseMarks">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Add Marks</span>
                </a>
                <div id="collapseMarks" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="marks_jexpo.php">Jexpo Student</a>

                        <a class="collapse-item" href="marks_voclate.php">Voclet Student</a>
                    </div>
                </div>

            </li>
            <?php /* <li class="nav-item">
<a class="nav-link" href="add_mark.php">
<i class="fas fa-fw fa-chart-area"></i>
<span>Add Marks</span></a>
</li>
*/?>


            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="table.php?page=<?= "1" ?>">
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
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?php echo $_SESSION['name']; ?>
                                </span>
                                <img class="img-profile rounded-circle" src="photos/images.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Database</h1>

                    </div>



                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Students Data</h6>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <?php

                                    ?>
                                    <thead>
                                        <tr align="center">
                                            <th>Sl.</th>
                                            <th>Name</th>
                                            <th>Registration No.</th>
                                            <th>Addmission Type</th>
                                            <th>Branch</th>
                                            <th>Semester</th>
                                            <th>Gender</th>
                                            <th>Mobile No.</th>

                                            <th>Photo</th>
                                            <!-- <th>Action</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        $page = $_GET['page'];
                                        if ($page == "" || $page == "1") {
                                            $page1 = 0;
                                        } else {
                                            $page1 = ($page * 10) - 10;
                                        }
                                        $query = "select * from student limit $page1,10";
                                        $query_run = mysqli_query($connection, $query);



                                        if (mysqli_num_rows($query_run) > 0) {
                                            $no = 1;
                                            while ($row = mysqli_fetch_array($query_run)) {

                                                ?>
                                                <tr align="center">
                                                    <td>
                                                        <?php echo $no ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['st_name'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['reg_no'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['ad_type'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['branch'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['semester'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['gender'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['ph_no'] ?>
                                                    </td>

                                                    <td><img src="<?php echo "upload/" . $row['st_image']; ?>" height="80px"
                                                            width="65px"></td>
                                                    <!--  <td> -->
                                                    <!--a href="st_edit.php?reg_no=<//?= $row['reg_no'] ?>" class="btn btn-success btn-sm "-->
                                                    <!--Edit-->
                                                    <!--/a-->
                                                    <!-- <form action="" method="post">
                                                        <button type="button" value="" onclick="btn()" name="delete"
                                                            class="btn btn-danger btn-sm ">Delete</button>
                                                    </form> -->

                                                    <!-- </td> -->
                                                </tr>

                                                <?php $no++;

                                            }
                                        }


                                        // if (isset($_POST['delete'])) {
                                        
                                        //     $registration = mysqli_real_escape_string($connection, $_GET['reg_no']);
                                        
                                        //     $query = "DELETE FROM student WHERE reg_no='$registration'";
                                        //     $query_run = mysqli_query($connection, $query);
                                        //     if ($query_run) {
                                        //         echo "<script>alert('Deleted')</script>";
                                        //     } else {
                                        //         echo "<script>alert('Not Deleted')</script>";
                                        //     }
                                        // }
                                        // ?>
                                    </tbody>



                                </table>
                                <?php
                                $res = mysqli_query($connection, "SELECT * FROM student");
                                $count = mysqli_num_rows($res);
                                $page = $count / 10;
                                $page = ceil($page);

                                for ($i = 1; $i <= $page; $i++) {
                                    ?>
                                    <a href="table.php?page=<?= $i ?>" class="btn btn-primary"><?php echo $i . " "; ?></a>
                                    <?php
                                }
                                ?>
                            </div>

                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->




        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
    <?php
    ?>


</body>

</html>