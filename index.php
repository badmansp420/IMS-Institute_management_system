<!DOCTYPE html>
<html>
<link rel="icon" href="photos\ITA_LOGO .jpg">

<head>
  <meta charset="utf-8">
  <title>Home</title>
  <meta charset="utf-8" name="viewport" content="width=device-width, intial-scale=1">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/119345a10f.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style type="text/css">
    * {
      padding: 0%;
      margin: 0%;
    }

    .head {
      padding: 5px;
      top: 5px;
    }

    .head img {
      width: 100%;
      height: 200px;
    }
  </style>
</head>

<body>
  <div class="main">
    <div class="head">
      <img src="photos/HEAD2.jpg">
    </div>

    <hr>


    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="index.php"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">
                <h5><i class="fa fa-home" aria-hidden="true"></i>&nbsp;<b>Home&nbsp;&nbsp;</b></h5>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-secondary" aria-current="page" href="gallery.html">
                <h5>Gallery&nbsp;&nbsp;</h5>
              </a>
            </li>

            <li class="nav-item dropdown">
              <h5> <a class="nav-link  dropdown-toggle text-secondary" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Academic
                </a>
                <ul class="dropdown-menu text-white" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item text-secondary" href="#">
                      <h5>Branches</h5>
                    </a></li>
                  <li><a class="dropdown-item text-secondary" href="#">
                      <h5>Faclities</h5>
                    </a></li>
                  <li><a class="dropdown-item text-secondary" href="#">
                      <h5>Libary</h5>
                    </a></li>
                  <li><a class="dropdown-item text-secondary" href="#">
                      <h5>Store</h5>
                    </a></li>
                </ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </h5>
            </li>
            <li class="nav-item dropdown">
              <h5> <a class="nav-link dropdown-toggle text-secondary" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Login
                </a>
                <ul class="dropdown-menu text-white" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item text-secondary" href="ad_login.php" target="_blank">
                      <h5>Admin Login</h5>
                    </a></li>
                  <li><a class="dropdown-item text-secondary" href="fa_login.php" target="_blank">
                      <h5>Teachers Login</h5>
                    </a></li>
                  <li><a class="dropdown-item text-secondary" href="st_login.php" target="_blank">
                      <h5>Students Login</h5>
                    </a></li>
                </ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </h5>
            </li>
            <li class="nav-item">
              <a class="nav-link text-secondary" target="_blank" aria-current="page" href="registration.php">
                <h5>Registration&nbsp;&nbsp;</h5>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-secondary" aria-current="page" href="#">Contact Us</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>


    <div id="myCarousel" class="carousel slide mt-3" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item">
          <img class="bd-placeholder-img" width="100%" height="650px" src="photos/1.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="650px" fill="#777"></rect>



        </div>
        <div class="carousel-item active">
          <img class="bd-placeholder-img" width="100%" height="650px" src="photos/fb.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="650px" fill="#777"></rect>



        </div>
        <div class="carousel-item">
          <img class="bd-placeholder-img" width="100%" height="650px" src="photos/IMG-20191219-WA0002.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="650px" fill="#777"></rect>


        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!--hod photos-->

    <div class="container marketing ">

      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 " style="background:#11924C">
          <h2 class="featurette-heading text-white"><i class="fa fa-quote-left" aria-hidden="true"></i><span class="text-muted"></span></h2>
          <p class="lead text-left  text-white">In the world governed by technology, we at Itahar Government Polytechnic, put in our sincere efforts to keep pace with the rising demands of technology.
            Itahar Government Polytechnic stands for excellence, perfection and discipline.
            Our major focus and our concern are our students and our institution strives to impart the best knowledge for promoting & pursuing multidisciplinary engineering in the most disciplined manner.
            We at Itahar Government Polytechnic, take every care to achieve the level of aspirations of all students by providing best academic infrastructure needed to make them competent technical professionals.
            Our experienced and qualified faculty members add value to our best endeavor in providing technical trainings to our students in the interest of all the stake holders in th<br><br>Thanks<br>Principal<br>Itahar Govt. Polytechnic </p>
          <h2 class="featurette-heading text-white text-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-quote-right" aria-hidden="true"></i>
        </div>
        <div class="col-md-5">
          <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="photos/pic" width="500" height="500" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#eee"></rect>

        </div>
      </div>

      <hr class="featurette-divider">
      <div class="row featurette">

        <div class="col-md-5">
          <video width="100%" height="100%" controls>
            <source src="video/ITA.mp4" type="video/mp4">
            Your browser does not support This video.
          </video>
        </div>
        <div class="col-md-7 " style="background:#11924C">
          <h2 class="featurette-heading text-white"><i class="fa fa-quote-left" aria-hidden="true"></i><span class="text-muted"></span></h2>
          <p class="lead text-left  text-white">In the world governed by technology, we at Itahar Government Polytechnic, put in our sincere efforts to keep pace with the rising demands of technology.
            Itahar Government Polytechnic stands for excellence, perfection and discipline.
            Our major focus and our concern are our students and our institution strives to impart the best knowledge for promoting & pursuing multidisciplinary engineering in the most disciplined manner.
            We at Itahar Government Polytechnic, take every care to achieve
            <br><br>Thanks<br>Principal<br>Itahar Govt. Polytechnic
          </p>
          <h2 class="featurette-heading text-white text-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-quote-right" aria-hidden="true"></i>
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4 text-center">
          <img src="photos/cst.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">

          <h3>CST</h3>
          <p>My Name Is ........, I am a Lactuerer from ...... Branch</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 text-center">
          <img src="photos/ee.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">

          <h3>EE</h3>
          <p>My Name Is ........, I am a Lactuerer from ...... Branch</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 text-center">
          <img src="photos/etc.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">

          <h3>ETC</h3>
          <p>My Name Is ........, I am a Lactuerer from ...... Branch</p>
        </div><!-- /.col-lg-4 -->

      </div><!-- /.row -->

      <!-- /END THE FEATURETTES -->
      <br>

    </div>

    <br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </div>

</body>

</html>