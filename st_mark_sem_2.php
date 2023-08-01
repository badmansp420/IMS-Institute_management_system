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
                        <a class="collapse-item" href="st_update.php">Update Details</a>
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
                        <a class="collapse-item active" href="marks_jexpo.php">Jexpo Student</a>
                        <a class="collapse-item" href="marks_voclate.php">Voclet Student</a>
                    </div>
                </div>
            </li>
            <?php /*<li class="nav-item  active">
                <a class="nav-link active" href="add_mark.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Add Marks</span></a>
            </li>*/?>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="table.php">
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
                                <img class="img-profile rounded-circle" src="photos/pic">
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
                <?php if (isset($_GET['reg_no'])) {
                    $reg_no = mysqli_real_escape_string($connection, $_GET['reg_no']);


                    $query = "select * from student WHERE reg_no='$reg_no'";
                    $query_run = mysqli_query($connection, $query);

                    if ($query_run) {
                        $reg_no = mysqli_fetch_array($query_run);
                ?>
                        <!--Start Right Side Body-->
                        <div class="container-fluid">


                            <div class="card position-relative">
                                <div class="card-header py-2">
                                    <h4 class="m-0 font-weight-bold text-primary">Add (Semester - II) Student Marks</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-8">

                                            <!--Alart Box-->

                                            <!--Input Form-->
                                            <form class="row g-3" action="" method="post" enctype="multipart/form-data">

                                                <div class="col-6">
                                                    <label for="inputreg" class="form-label">Registration No.</label>
                                                    <input type="text" pattern="[d/D][0-9]{9}" class="form-control" value="<?= $reg_no['reg_no'] ?>" name="reg_no" maxlength="10" placeholder="Enter Registration No" disabled>
                                                </div>
                                                <!--Titel-->
                                                <div class="col-6 py-2">
                                                    <label for="inputreg" class="form-label"></label>
                                                    <input type="text" class="form-control" name="sem1" value="Semester I" placeholder="Semester - II" disabled>
                                                </div>

                                                <div class="col-3">
                                                    <label for="inputStatus" class="form-label">Status</label>
                                                    <select class="form-select" name="status" required>
                                                        <option selected>Select</option>
                                                        <option value="Pass">Pass</option>
                                                        <option value="Back">Back</option>

                                                    </select>
                                                </div>
                                                <div class="col-3">
                                                    <label for="inputreg" class="form-label">Parcentage</label>
                                                    <input class="form-control" type="text" placeholder="Parcentage" pattern="[0-9]{2}[.][0-9]{2}" maxlength="5" name="parcentage" required>
                                                </div>
                                                <div class="col-3">
                                                    <label for="inputreg" class="form-label">GPA</label>
                                                    <input class="form-control" type="text" placeholder="GPA" pattern="[0-9]{1}[.][0-9]{1}" maxlength="5" name="gpa" required>
                                                </div>
                                                <div class="col-3">
                                                    <label for="inputreg" class="form-label">Grade</label>
                                                    <input class="form-control" type="text" placeholder="Grade" pattern="[A-O]{1}" maxlength="2" name="grade" required>
                                                </div>

                                                <div class="col text-center">
                                                    <a type="submit" href="marks_jexpo.php" name="back" id="back" class="btn btn-primary">Back</a>
                                                </div>
                                                <div class="col text-center">
                                                    <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
                                                </div>

                                                <!--after Status-->




                                            </form>
                                        </div>
                                    </div>
                                </div>


                                <!--PHP Code-->
                        <?php
                    }
                }
                if (isset($_POST['submit'])) {
                    $registration = $_GET['reg_no'];
                    $status = $_POST['status'];
                    $parcentage = $_POST['parcentage'];
                    $gpa = $_POST['gpa'];
                    $grade = $_POST['grade'];

                    $check = "select * from mark_sem_2 where reg_no = '$registration'";
                    $result = mysqli_query($connection, $check);
                    $count = mysqli_num_rows($result);
                    if ($count > 0) {
                        echo "<script>alert('Student Data is Already Stored In Our Database')</script>";
                    } else {
                        $query = "INSERT INTO mark_sem_2(reg_no, st_status, parcentage, gpa, grade) VALUES('$registration','$status','$parcentage','$gpa','$grade')";
                        $query_run = mysqli_query($connection, $query);
                        if ($query_run) {
                            echo "<script>alert('Student Data Stored Successfully')</script>";
                        } else {
                            echo "<script>alert('Student Data Not Stored ....!')</script>";
                        }
                    }
                }
                        ?>
                            </div>
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





</body>

</html>