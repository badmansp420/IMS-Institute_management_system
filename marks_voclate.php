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
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!--Bootstrap-->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/119345a10f.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
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

            <!-- Heading -->
            <div class="sidebar-heading">
                Academic Details
            </div>

            <!-- Nav Item - Pages Collapse Menu -->


            <!-- Nav Item - Charts -->
            <li class="nav-item ">
                <a class="nav-link active" href="#" data-toggle="collapse" data-target="#collapseMarks" aria-expanded="true" aria-controls="collapseMarks">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Add Marks</span>
                </a>
                <div id="collapseMarks" class="collapse show" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="marks_jexpo.php">Jexpo Student</a>

                        <a class="collapse-item active" href="marks_voclate.php">Voclet Student</a>
                    </div>
                </div>

            </li>
            <?php /*<li class="nav-item active">
                <a class="nav-link " href="add_mark.php">
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
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
                                    Change Password
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

                <!--Start Right Side Body-->
                <div class="container-fluid align-center">

                    <div class="card position-relative">
                        <div class="card-header py-2">
                            <h4 class="m-0 font-weight-bold text-primary">For Voclet Students</h4>
                        </div>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="col-12 text-center md-2 py-2">
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-wrapping"><i class="fa fa-id-card" aria-hidden="true">&nbsp;&nbsp;</i> Registration No:</span>
                                        <input type="text" pattern="[d/D][0-9]{9}" class="form-control" name="reg_no" maxlength="10" placeholder="Enter Student Registration Number" aria-describedby="addon-wrapping" maxlength="10" required>
                                    </div>
                                    <div class="col-12 text-center md-2 py-4">
                                        <button type="submit" name="show" id="show" class="btn btn-primary">Show Data</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                    <br>
                    <br>
                </div>
                <!--Show Data-->
                <?php
                if (isset($_POST['show'])) {

                    $query = "select * from student where reg_no = '$_POST[reg_no]'";
                    $query_run = mysqli_query($connection, $query);
                    while ($row = mysqli_fetch_assoc($query_run)) {

                        if ($row['ad_type'] == "Voclet") {


                ?>


                            <div class="container-fluid align-center">

                                <div class="card position-relative">
                                    <div class="card-header py-2">
                                        <h4 class="m-0 font-weight-bold text-primary">Basic Details</h4>
                                        <div class="nav dropdown no-arrow justify-content-end">
                                            <button class="btn btn-success me-md-2" type="button" id="dropdownCenterBtn" data-bs-toggle="dropdown" aria-expanded="false">
                                                Add Marks
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownCenterBtn">
                                                <li><a class="dropdown-item" href="st_mark_sem_3.php?reg_no=<?= $row['reg_no'] ?>"><b>Semester - III</b></a></li>
                                                <li><a class="dropdown-item" href="st_mark_sem_4.php?reg_no=<?= $row['reg_no'] ?>"><b>Semester - IV</b></a></li>
                                                <li><a class="dropdown-item" href="st_mark_sem_5.php?reg_no=<?= $row['reg_no'] ?>"><b>Semester - V</b></a></li>
                                                <li><a class="dropdown-item" href="st_mark_sem_6.php?reg_no=<?= $row['reg_no'] ?>"><b>Semester - VI</b></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div class="col-12 text-center md-2 py-2">
                                            <label for="inputreg" class="form-label"></label>
                                            <a style="border:10px" target="_blank" href="<?php echo "upload/" . $row['st_image']; ?>"><img src="<?php echo "upload/" . $row['st_image']; ?>" height="100px" width="80px"></a>

                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                                <tr>

                                                    <td><b>Name : </b></td>
                                                    <td><?php echo $row['st_name']; ?>
                                                    </td>

                                                    <td><b>Date Of Birth : </b></td>
                                                    <td><?php echo $row['dob']; ?>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><b>Registration No : </b></td>
                                                    <td> <?php echo $row['reg_no']; ?></td>
                                                    <td><b>Branch : </b></td>
                                                    <td><?php echo $row['branch']; ?>
                                                    </td>

                                                </tr>

                                                <tr>
                                                    <td><b>Father Name : </b></td>
                                                    <td><?php echo $row['fathers_name']; ?>
                                                    </td>

                                                    <td><b>Admission Type : </b></td>
                                                    <td><?php echo $row['ad_type']; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b>Email : </b></td>
                                                    <td><?php echo $row['email']; ?>
                                                    </td>

                                                    <td><b>Gender : </b></td>
                                                    <td><?php echo $row['gender']; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b>Mobile No : </b></td>
                                                    <td><?php echo $row['ph_no']; ?>
                                                    </td>

                                                    <td><b>Semester : </b></td>
                                                    <td><?php echo $row['semester']; ?>
                                                    </td>
                                                </tr>



                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                            </div>
                            <?php

                            if (isset($_POST['show'])) {

                                $query2 = "select * from mark_sem_3 where reg_no = '$_POST[reg_no]'";
                                $query_run2 = mysqli_query($connection, $query2);
                                while ($row2 = mysqli_fetch_assoc($query_run2)) {
                            ?>
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
                                                        </tr>
                                                        <tr align="center">
                                                            <td>SEMESTER - III</td>
                                                            <td><?php echo $row2['st_status'] ?></td>
                                                            <td><?php echo $row2['parcentage'] ?></td>
                                                            <td><?php echo $row2['gpa'] ?></td>
                                                            <td><?php echo $row2['grade'] ?></td>

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







                        <?php
                        } else {
                            echo "<script>alert('Please Enter Correct Details')</script>";
                        }
                    }
                }



                        ?>

                        </form>






            </div>
            <!--end container-->
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



</body>

</html>