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

<body>

    <!--PHP Code-->
    <?php

    if (isset($_GET['reg_no'])) {
        $reg_no = mysqli_real_escape_string($connection, $_GET['reg_no']);


        $query = "select * from student WHERE reg_no='$reg_no'";
        $query_run = mysqli_query($connection, $query);

        if ($query_run) {
            $reg_no = mysqli_fetch_array($query_run);
    ?>



            <!--Start Right Side Body-->
            <div class="container mt-5">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header py-2">
                            <h4 class="m-0 font-weight-bold text-primary">Update Details</h4>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a class="btn btn-primary me-md-2" href="st_search.php">Back</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">


                                <!--Alart Box-->


                                <!--Input Form-->
                                <form class="row g-3" action="" method="post" enctype="multipart/form-data">

                                    <div class="col-md-4">
                                        <label for="inputName" class="form-label">Name</label>
                                        <input type="text" class="form-control" name="st_name" placeholder="Enter Student Name" value="<?= $reg_no['st_name']; ?>" disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputreg" class="form-label">Registration No.</label>
                                        <input type="text" pattern="[d/D][0-9]{9}" class="form-control" name="reg_no" maxlength="10" value="<?= $reg_no['reg_no']; ?>" placeholder="Enter Registration No" disabled>
                                    </div>
                                    <div class="col-4">
                                        <td><a href="<?php echo "upload/" . $reg_no['st_image']; ?>"><img src="<?php echo "upload/" . $reg_no['st_image']; ?>" height="150px" width="125px"></a></td>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputreg" class="form-label">Date Of Birth</label>
                                        <input type="date" class="form-control" name="dob" value="<?= $reg_no['dob']; ?>" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputreg" class="form-label">Fathers Name</label>
                                        <input type="text" class="form-control" maxlength="50" name="fathers_name" value="<?= $reg_no['fathers_name']; ?>" placeholder="Enter Fathers Name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="Enter Student Email" value="<?= $reg_no['email']; ?>" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPhone" class="form-label">Phone No.</label>
                                        <input type="tel" pattern="[0-9]{10}" maxlength="10" class="form-control" name="ph_no" value="<?= $reg_no['ph_no']; ?>" placeholder="Phone Number" required>
                                    </div>

                                    <fieldset class="row mb-6">
                                        <legend class="col-form-label col-sm-2 pt-3">Branch</legend>
                                        <div class="col-sm-10 pt-4">
                                            <div class=" form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="branch" value="CST" <?php
                                                                                                                        if ($reg_no['branch'] == "CST") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?>>
                                                <label class="form-check-label" for="gridRadios1">
                                                    CST
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="branch" value="ETC" <?php
                                                                                                                        if ($reg_no['branch'] == "ETC") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?>>
                                                <label class="form-check-label" for="gridRadios2">
                                                    ETC
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="branch" value="EE" <?php
                                                                                                                        if ($reg_no['branch'] == "EE") {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?>>
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
                                                <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="Male" <?php
                                                                                                                                            if ($reg_no['gender'] == "Male") {
                                                                                                                                                echo "checked";
                                                                                                                                            }
                                                                                                                                            ?>>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Male
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="Female" <?php
                                                                                                                                            if ($reg_no['gender'] == "Female") {
                                                                                                                                                echo "checked";
                                                                                                                                            }
                                                                                                                                            ?>>
                                                <label class="form-check-label" for="gridRadios2">
                                                    Female
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" id="gridRadios3" value="Trnasgender" <?php
                                                                                                                                                if ($reg_no['gender'] == "Trnasgender") {
                                                                                                                                                    echo "checked";
                                                                                                                                                }
                                                                                                                                                ?>>
                                                <label class="form-check-label" for="gridRadios3">
                                                    Transgender
                                                </label>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="col-md-4">
                                        <label for="inputAddmissation" class="form-label">Addmission Type</label>
                                        <select class="form-select" name="ad_type" disabled>
                                            <option>Select Addmission Type</option>
                                            <option value="Jexpo" <?php
                                                                    if ($reg_no['ad_type'] == "Jexpo") {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>Jexpo</option>
                                            <option value="Voclet" <?php
                                                                    if ($reg_no['ad_type'] == "Voclet") {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>Voclet</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputState" class="form-label">Semester</label>
                                        <select class="form-select" name="semester" required>

                                            <option value="Semester - I" <?php
                                                                            if ($reg_no['semester'] == "Semester - I") {
                                                                                echo "selected";
                                                                            }
                                                                            ?>>Semester - I</option>
                                            <option value="Semester - II" <?php
                                                                            if ($reg_no['semester'] == "Semester - II") {
                                                                                echo "selected";
                                                                            }
                                                                            ?>>Semester - II</option>
                                            <option value="Semester - III" <?php
                                                                            if ($reg_no['semester'] == "Semester - III") {
                                                                                echo "selected";
                                                                            }
                                                                            ?>>Semester - III</option>
                                            <option value="Semester - IV" <?php
                                                                            if ($reg_no['semester'] == "Semester - IV") {
                                                                                echo "selected";
                                                                            }
                                                                            ?>>Semester - IV</option>
                                            <option value="Semester - V" <?php
                                                                            if ($reg_no['semester'] == "Semester - V") {
                                                                                echo "selected";
                                                                            }
                                                                            ?>>Semester - V</option>
                                            <option value="Semester - VI" <?php
                                                                            if ($reg_no['semester'] == "Semester - VI") {
                                                                                echo "selected";
                                                                            }
                                                                            ?>>Semester - VI</option>

                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="inputreg" class="form-label">Addmission Date</label>
                                        <input type="date" class="form-control" name="ad_date" value="<?= $reg_no['ad_date']; ?>" disabled>
                                    </div>

                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">Address</label>
                                        <input type="text" class="form-control" name="address" id="inputAddress" value="<?= $reg_no['adress']; ?>" placeholder="40 Itahar North Dinajpur.." required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="inputCity" class="form-label">City</label>
                                        <input type="text" class="form-control" name="city" value="<?= $reg_no['city']; ?>" id="inputCity" required>
                                    </div>

                                    <div class=" col-md-4">
                                        <label for="inputState" class="form-label">District</label>
                                        <select class="form-select" name="district" required>
                                            <option>Select State</option>
                                            <option value="Alipurduar" <?php
                                                                        if ($reg_no['district'] == "Alipurduar") {
                                                                            echo "selected";
                                                                        }
                                                                        ?>>Alipurduar</option>
                                            <option value="Bankura" <?php
                                                                    if ($reg_no['district'] == "Bankura") {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>Bankura</option>
                                            <option value="Birbhum" <?php
                                                                    if ($reg_no['district'] == "Birbhum") {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>Birbhum</option>
                                            <option value="Cooch Behar" <?php
                                                                        if ($reg_no['district'] == "Cooch Behar") {
                                                                            echo "selected";
                                                                        }
                                                                        ?>>Cooch Behar </option>
                                            <option value="Dakshin Dinajpur" <?php
                                                                                if ($reg_no['district'] == "Dakshin Dinajpur") {
                                                                                    echo "selected";
                                                                                }
                                                                                ?>>Dakshin Dinajpur</option>
                                            <option value="Darjeeling" <?php
                                                                        if ($reg_no['district'] == "Darjeeling") {
                                                                            echo "selected";
                                                                        }
                                                                        ?>>Darjeeling</option>
                                            <option value="Hooghly" <?php
                                                                    if ($reg_no['district'] == "Hooghly") {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>Hooghly</option>
                                            <option value="Howrah" <?php
                                                                    if ($reg_no['district'] == "Howrah") {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>Howrah</option>
                                            <option value="Jalpaiguri" <?php
                                                                        if ($reg_no['district'] == "Jalpaiguri") {
                                                                            echo "selected";
                                                                        }
                                                                        ?>>Jalpaiguri</option>
                                            <option value="Jhargram" <?php
                                                                        if ($reg_no['district'] == "Jhargram") {
                                                                            echo "selected";
                                                                        }
                                                                        ?>>Jhargram</option>
                                            <option value="Kalimpong" <?php
                                                                        if ($reg_no['district'] == "Kalimpong") {
                                                                            echo "selected";
                                                                        }
                                                                        ?>>Kalimpong</option>
                                            <option value="Kolkata" <?php
                                                                    if ($reg_no['district'] == "Kolkata") {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>Kolkata</option>
                                            <option value="Malda" <?php
                                                                    if ($reg_no['district'] == "Malda") {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>Malda</option>
                                            <option value="Murshidabad" <?php
                                                                        if ($reg_no['district'] == "Murshidabad") {
                                                                            echo "selected";
                                                                        }
                                                                        ?>>Murshidabad</option>
                                            <option value="Nadia" <?php
                                                                    if ($reg_no['district'] == "Nadia") {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>Nadia</option>
                                            <option value="North 24 Parganas" <?php
                                                                                if ($reg_no['district'] == "North 24 Parganas") {
                                                                                    echo "selected";
                                                                                }
                                                                                ?>>North 24 Parganas</option>
                                            <option value="Paschim Bardhaman" <?php
                                                                                if ($reg_no['district'] == "Paschim Bardhaman") {
                                                                                    echo "selected";
                                                                                }
                                                                                ?>>Paschim Bardhaman</option>
                                            <option value="Paschim Medinipur" <?php
                                                                                if ($reg_no['district'] == "Paschim Medinipur") {
                                                                                    echo "selected";
                                                                                }
                                                                                ?>>Paschim Medinipur</option>
                                            <option value="Purba Bardhaman" <?php
                                                                            if ($reg_no['district'] == "Purba Bardhaman") {
                                                                                echo "selected";
                                                                            }
                                                                            ?>>Purba Bardhaman</option>
                                            <option value="Purba Medinipur" <?php
                                                                            if ($reg_no['district'] == "Purba Medinipur") {
                                                                                echo "selected";
                                                                            }
                                                                            ?>>Purba Medinipur</option>
                                            <option value="Purulia" <?php
                                                                    if ($reg_no['district'] == "Purulia") {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>Purulia</option>
                                            <option value="South 24 Parganas" <?php
                                                                                if ($reg_no['district'] == "South 24 Parganas") {
                                                                                    echo "selected";
                                                                                }
                                                                                ?>>South 24 Parganas</option>
                                            <option value="Uttar Dinajpur" <?php
                                                                            if ($reg_no['district'] == "Uttar Dinajpur") {
                                                                                echo "selected";
                                                                            }
                                                                            ?>>Uttar Dinajpur</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="inputZip" class="form-label">Zip</label>
                                        <input type="text" class="form-control" name="zip_cod" id="inputZip" pattern="[0-9]{6}" value="<?= $reg_no['zip_cod']; ?>" placeholder="Postal Code" maxlength="6" required>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" name="update" id="update" class="btn btn-primary">Update Details</button>
                                    </div>
                                </form>
                                <?php



                                if (isset($_POST['update'])) {
                                    //$name = strtoupper($_POST['st_name']);
                                    $registration = $_GET['reg_no'];
                                    $dob = $_POST['dob'];
                                    $fa_name = strtoupper($_POST['fathers_name']);
                                    $email = strtolower($_POST['email']);
                                    $mob_no = $_POST['ph_no'];
                                    $branch = $_POST['branch'];
                                    $gender = $_POST['gender'];
                                    //$ad_type = $_POST['ad_type'];
                                    //$ad_date = $_POST['ad_date'];
                                    $adress = strtoupper($_POST['address']);
                                    $city = strtoupper($_POST['city']);
                                    $semester = $_POST['semester'];
                                    $dist = $_POST['district'];
                                    $zip = $_POST['zip_cod'];


                                    $query = "UPDATE student 
                                        SET dob='$dob',reg_no='$registration',fathers_name='$fa_name',email='$email',ph_no='$mob_no',branch='$branch',gender='$gender',
                                            adress='$adress',city='$city', semester='$semester',district='$dist',zip_cod='$zip' 
                                        WHERE reg_no='$registration'";

                                    $query_run = mysqli_query($connection, $query);
                                    if ($query_run) {
                                        echo "<script>alert('Data Updated Successfully')</script>";
                                        echo "<script>window.top.location='st_search.php'</script>";
                                        //header('location:table.php');
                                    } else {
                                        echo "<script>alert('Error...')</script>";
                                        // header('location:table.php');
                                    }
                                }
                                ?>

                            </div>
                        </div>
                    </div>




                </div>
            </div>
    <?php

        } else {
            echo "No Such Id..!";
        }
    }



    ?>

    </div>


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