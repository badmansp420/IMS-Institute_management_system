<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="photos/ITA_LOGO .jpg">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background: linear-gradient(120deg, #916020, #3870b9);
            height: 100%;
            width: 100%;
            padding-bottom: 50px;

        }

        div.main {
            width: 300px;
            margin: 100px auto 0px auto;
        }

        h2 {
            text-align: center;
            padding: 20px;
            font-family: sans-serif;
        }

        div.register {
            background-color: rgba(109, 109, 109, 0.5);
            width: 150%;
            font-size: 18px;
            border-radius: 10px;
            border: 1px solid rgba(225, 225, 225, 0.3);
            box-shadow: 2px 2px 15px rgba(0, 0, 0, 0.3);
            color: #fff;
        }

        form#register {
            margin: 40px;
        }

        label {
            font-family: sans-serif;
            font-size: 18px;

        }

        input#name {
            width: 280px;
            margin: 2px 0 2px 20px;
            border: 1px solid #ddd;
            border-radius: 3px;
            outline: 0;
            padding: 7px;
            background-color: #fff;
            box-shadow: inset 1px 1px 5px rgba(0, 0, 0, 0.3);
        }

        input#gender {
            margin: 2px 0 2px 20px;
        }

        input#branch {
            margin: 2px 0 2px 20px;
        }

        input#myFile {
            margin: 2px 0 2px 30px;
        }

        button {
            text-align: center;
            width: 200px;
            padding: 7px;
            margin: 50px 0 50px 80px;
            font-size: 16px;
            font-family: sans-serif;
            font-weight: 600;
            border: none;
            border-radius: 2px;
            background-color: rgba(250, 100, 0, 0.8);
            color: rgb(243, 235, 235);
            cursor: pointer;
            border: 1px solid rgb(241, 238, 238);
            box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3);
            margin-bottom: 20px;
            transition: 0.5s;


        }

        button:hover {
            background-color: rgba(37, 37, 37, 0.849);
            transform: scale(1.1);
        }

        label,
        span,
        h2 {
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3);
        }

        .singin {
            margin: 25px 0;
            text-align: left;
            font-size: 20px;
            color: white;
        }

        .singin a {
            color: burlywood;
            text-decoration: none;
        }

        .singin a:hover {
            transition: .5s;
            color: skyblue;
            transform: scale(1.1);
            text-decoration: underline;
        }
        h4{
            margin-top: 20px;
            font-size: 25px;
            color: #fff;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <marquee>
        <h4>This Site is currently Not Working </h4>
    </marquee>
    <div class="main">

        <div class="register">
            <h2>Register Here</h2>

            <form id=register method="POST" action="">
                <lebel><i class="fa fa-user"></i> &nbsp;First Name:</lebel>
                <br>
                <abbr title="Please fill in this field."><input type="text" name="fname" id="name" placeholder="Enter Your First Name" required></abbr>
                <br><br>
                <lebel><i class="fa fa-user"></i> &nbsp;Middle Name:</lebel>
                <br>
                <abbr title="Please fill in this field."><input type="text" name="mname" id="name" placeholder="Enter Your Middle Name"></abbr>
                <br><br>
                <lebel><i class="fa fa-user"></i> &nbsp;Last Name:</lebel>
                <br>
                <abbr title="Please fill in this field."><input type="text" name="lname" id="name" placeholder="Enter Your Last Name" required></abbr>
                <br><br>
                <label> <i class="fa fa-birthday-cake" aria-hidden="true"></i>&nbsp; Date Of Birth:</label>
                <br>
                <abbr title="Please fill in this field."><input type="date" name="dob" id="name" placeholder="Enter Your Date Of Birth" required></abbr>
                <br><br>
                <label>Gender:</label>
                <br>
                <input type="radio" name="gender" id="gender">&nbsp;<span id="male">Male</span>
                <input type="radio" name="gender" id="gender">&nbsp;<span id="female">Female</span>
                <input type="radio" name="gender" id="gender">&nbsp;<span id="others">Others</span>
                <br><br>
                <label><i class="fa fa-id-card" aria-hidden="true"></i>&nbsp;Registration No.:</label>
                <br>
                <abbr title="Please fill in this field."><input type="text" name="reg_no" id="name" placeholder="Enter Your Registration No" required></abbr>
                <br><br>
                <label><i class="fa fa-branch"></i>&nbsp; Branch:</label>
                <br>
                <input type="radio" name="branch" id="branch">&nbsp;<span id="cst">CST</span>
                <input type="radio" name="branch" id="branch">&nbsp;<span id="ee">EE</span>
                <input type="radio" name="branch" id="branch">&nbsp;<span id="etc">ETC</span>
                <br><br>
                <lable><i class="fa fa-phone"></i> &nbsp;Mobile No:</lable>
                <br>
                <abbr title="Please fill in this field."><input type="text" name="mob_no" id="name" maxlength="10" placeholder="10 Digit Mobile Number" required></abbr>
                <br><br>
                <lable><i class="fa fa-envelope"></i> &nbsp;Email:</lable>
                <br>
                <abbr title="Please fill in this field."><input type="email" name="email" id="name" placeholder="Enter Your Email" required></abbr>
                <br><br>
                <lable><i class="fa fa-key" aria-hidden="true"></i>&nbsp; Password:</lable>
                <br>
                <input type="password" name="password" id="name" placeholder="Enter Your Password" required>
                <br><br>
                <lable><i class="fa fa-key" aria-hidden="true"></i>&nbsp; Confirm Password:</lable>
                <br>
                <input type="password" name="password" id="name" placeholder="Enter Your Password" required>
                <br><br>
                <label><i class="fa fa-file-image-o" aria-hidden="true"></i>&nbsp;Upload Photo:</label>
                <br>
                <input type="file" id="myFile" name="filename" required>
                <br><br>

                <button type="button">Register</button>

                <br><br>

                <div class="singin">
                    Already a Member? &nbsp;<a target="_blank" href="st_login.php"> I have an account</a>
                </div>
            </form>

        </div>
        <!--end register-->
    </div>
    <!--end main-->
</body>

</html>