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
            <li class="nav-item ">
                <a class="nav-link active" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-user"></i>
                    <span>Students</span>
                </a>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item active" href="ad_st.php">Add Students</a>
                        <a class="collapse-item " href="st_search.php">Search Students</a>
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

                <!--Start Right Side Body-->

                <div class="container-fluid">
                    <h4 class="m-0 font-weight-bold text-success text-center">Add Student</h4>
                    <div class="card position-relative ">
                        <div class="card-header py-2">
                            <h4 class="m-0 font-weight-bold text-primary">Enter Student Details</h4>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-lg-8">

                                    <!--Alart Box-->

                                    <!--Input Form-->
                                    <form class="row g-3" action="" method="post" enctype="multipart/form-data">

                                        <div class="col-md-6">
                                            <label for="inputName" class="form-label">Name</label>
                                            <input type="text" class="form-control" maxlength="50" name="st_name" placeholder="Enter Student Name" require>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputreg" class="form-label">Registration No.</label>
                                            <input type="text" pattern="[d/D][0-9]{9}" class="form-control" name="reg_no" maxlength="10" placeholder="Enter Registration No" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputreg" class="form-label">Date Of Birth</label>
                                            <input type="date" class="form-control" name="dob" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputreg" class="form-label">Fathers Name</label>
                                            <input type="text" class="form-control" maxlength="50" name="fathers_name" placeholder="Enter Fathers Name" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email" placeholder="Enter Student Email" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPhone" class="form-label">Phone No.</label>
                                            <input type="tel" pattern="[0-9]{10}" maxlength="10" class="form-control" name="ph_no" placeholder="Phone Number" required>
                                        </div>

                                        <fieldset class="row mb-6">
                                            <legend class="col-form-label col-sm-2 pt-3">Branch</legend>
                                            <div class="col-sm-10 pt-4">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="branch" value="CST">
                                                    <label class="form-check-label" for="gridRadios1">
                                                        CST
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="branch" value="ETC">
                                                    <label class="form-check-label" for="gridRadios2">
                                                        ETC
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="branch" value="EE">
                                                    <label class="form-check-label" for="gridRadios3">
                                                        EE
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <fieldset class="row ">
                                            <legend class="col-form-label col-sm-2 pt-1">Gender</legend>
                                            <div class="col-sm-10 pt-4">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="Male">
                                                    <label class="form-check-label" for="gridRadios1">
                                                        Male
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="Female">
                                                    <label class="form-check-label" for="gridRadios2">
                                                        Female
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" id="gridRadios3" value="Trnasgender">
                                                    <label class="form-check-label" for="gridRadios3">
                                                        Transgender
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="col-md-4">
                                            <label for="inputAddmissation" class="form-label">Addmission Type</label>
                                            <select class="form-select" name="ad_type" required>
                                                <option selected>Select Addmission Type</option>
                                                <option>Jexpo</option>
                                                <option>Voclet</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputState" class="form-label">Semester</label>
                                            <select class="form-select" name="semester" required>
                                                <option selected>Select Semester</option>
                                                <option>Semester - I</option>
                                                <option>Semester - III</option>

                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputreg" class="form-label">Addmission Date</label>
                                            <input type="date" class="form-control" name="ad_date" required>
                                        </div>

                                        <div class="col-12">
                                            <label for="inputAddress" class="form-label">Address</label>
                                            <input type="text" class="form-control" name="address" id="inputAddress" placeholder="40 Itahar North Dinajpur.." required>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="inputCity" class="form-label">City</label>
                                            <input type="text" class="form-control" name="city" id="inputCity" required>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="inputState" class="form-label">District</label>
                                            <select class="form-select" name="district" required>
                                                <option selected>Selec District</option>
                                                <option>Alipurduar</option>
                                                <option>Bankura</option>
                                                <option>Birbhum</option>
                                                <option>Cooch Behar </option>
                                                <option>Dakshin Dinajpur</option>
                                                <option>Darjeeling</option>
                                                <option>Hooghly</option>
                                                <option>Howrah</option>
                                                <option>Jalpaiguri</option>
                                                <option>Jhargram</option>
                                                <option>Kalimpong</option>
                                                <option>Kolkata</option>
                                                <option>Malda</option>
                                                <option>Murshidabad</option>
                                                <option>Nadia</option>
                                                <option>North 24 Parganas</option>
                                                <option>Paschim Bardhaman</option>
                                                <option>Paschim Medinipur</option>
                                                <option>Purba Bardhaman</option>
                                                <option>Purba Medinipur</option>
                                                <option>Purulia</option>
                                                <option>South 24 Parganas</option>
                                                <option>Uttar Dinajpur</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="inputZip" class="form-label">Zip</label>
                                            <input type="text" class="form-control" name="zip_cod" id="inputZip" pattern="[0-9]{6}" placeholder="Postal Code" maxlength="6" required>
                                        </div>
                                        <div class="col-6">
                                            <label for="formFile" class="form-label">Upload Image  (Only .png  height: 278px & width: 220px)</label>
                                            <input class="form-control" type="file" id="file" title="Only .png  height: 278px & width: 220px" name="st_image" accept="image/png" placeholder="" required>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                                <label class="form-check-label" for="gridCheck">
                                                    Check me out
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center">
                                            <button type="submit" name="add" id="add" class="btn btn-primary">Add Student</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>


                        <!--PHP Code-->
                        <?php

                        if (isset($_POST['add'])) {

                            $name = strtoupper($_POST['st_name']);
                            $registration = strtoupper($_POST['reg_no']);
                            $dob = $_POST['dob'];
                            $fa_name = strtoupper($_POST['fathers_name']);
                            $email = strtolower($_POST['email']);
                            $mob_no = $_POST['ph_no'];
                            $branch = $_POST['branch'];
                            $gender = $_POST['gender'];
                            $ad_type = $_POST['ad_type'];
                            $ad_date = $_POST['ad_date'];
                            $adress = strtoupper($_POST['address']);
                            $city = strtoupper($_POST['city']);
                            $semester = $_POST['semester'];
                            $dist = $_POST['district'];
                            $zip = $_POST['zip_cod'];
                            $image = $_FILES['st_image']['name'];

                            $check = "select * from student where reg_no = '$registration'";
                            $result = mysqli_query($connection, $check);
                            $count = mysqli_num_rows($result);

                            if ($count > 0) {
                                echo /*$_SESSION['status'] =*/ "<script>alert('Student Data Is already Stored In Database')</script>";
                                //header('location: ad_st.php');
                            } else {
                                $query = "INSERT INTO student(st_name, reg_no, dob, fathers_name, email, ph_no, branch, gender,ad_type, adress, city, semester, district, zip_cod, st_image,ad_date) VALUES('$name','$registration','$dob','$fa_name','$email','$mob_no','$branch','$gender','$ad_type','$adress','$city','$semester' ,'$dist','$zip','$image','$ad_date')";
                                $query_run = mysqli_query($connection, $query);
                                if ($query_run) {
                                    move_uploaded_file($_FILES["st_image"]["tmp_name"], "upload/" . $_FILES["st_image"]["name"]);
                                    echo /*$_SESSION['status'] = */ "<script>alert('Student Data Stored Successfully In Database')</script>";
                                    //header('location: ad_st.php');
                                } else {
                                    //echo "Student Data Not Stored ..!";
                                    echo /*$_SESSION['status'] = */ "<script>alert('Data Did Not Stored  In Database')</script>";
                                    //header('location: ad_st.php');
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