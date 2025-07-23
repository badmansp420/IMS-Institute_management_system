<?php
session_start(); // ✅ Must be first

// Handle form submission
if (isset($_POST['submit'])) {
    $connection = mysqli_connect("db", "ims_user", "ims_pass", "ims_db");

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = $_POST['password'];

    $query = "SELECT * FROM admin WHERE email = '$email' LIMIT 1";
    $query_run = mysqli_query($connection, $query);

    if (mysqli_num_rows($query_run) == 1) {
        $row = mysqli_fetch_assoc($query_run);

        // If using password_hash (recommended)
        // if (password_verify($password, $row['password'])) {

        if ($row['password'] === $password) { // Not safe, just for now
            $_SESSION['email'] = $row['email'];
            $_SESSION['name'] = $row['name'];
            header("Location:ad_das.php");
            exit;
        } else {
            echo "<script>alert('Wrong Password');</script>";
        }
    } else {
        echo "<script>alert('Email not found');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<link rel="icon" href="photos\ITA_LOGO .jpg">

<head>
    <meta charset="utf-8">
    <title>Login Here</title>
    <meta charset="utf-8" name="viewport" content="width=device-width, intial-scale=1">
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
    <script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        body {
            padding: 0%;
            margin: 0%;
            font-family: monospace;
            background: linear-gradient(120deg, #2980b9, #8e44ab);
            height: 100vh;
            overflow: hidden;
        }

        .center {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            background: whitesmoke;
            border-radius: 10px;
        }

        .center h1 {
            text-align: center;
            padding: 0 0 20px 0;
            border-bottom: 2px solid silver;
        }

        .center form {
            padding: 0 40px;
            box-sizing: border-box;
        }

        form .textfild {
            position: relative;
            border-bottom: 2px solid #adadad;
            margin: 30px 0;
        }

        .textfild input {
            width: 100%;
            padding: 0 5px;
            height: 40px;
            font-size: 16px;
            border: none;
            background: none;
            outline: none;
        }

        .textfild label {
            position: absolute;
            top: 50%;
            left: 5%;
            color: #adadad;
            transform: translateY(-50%);
            font-size: 16px;
            pointer-events: none;
            transition: 0.5s;

        }

        .textfild span::before {
            content: '';
            position: absolute;
            top: 40px;
            left: 0;
            width: 0%;
            height: 2px;
            background: #2980b9;
            transition: 0.7ms;
        }

        .textfild input:focus~label,
        .textfild input:valid~label {
            top: -5px;
            color: #2980b9;

        }

        .textfild input:focus~span::before,
        .textfild input:valid~span::before {
            width: 100%;
        }

        .forget {
            margin: -5px 0 20px 5px;
            color: #a6a6a6;
            cursor: pointer;
            font-size: 14px;
        }

        .forget:hover {
            text-decoration: underline;
        }

        input[type="submit"] {
            width: 100%;
            height: 50px;
            border: 1px solid;
            background: #2961d9;
            border-radius: 25px;
            font-size: 18px;
            color: #e9f4fb;
            font-weight: 700;
            cursor: pointer;
            outline: none;
        }

        input[type="submit"]:hover {
            border-color: #2961d9;
            transition: .5s;
        }

        .signup {
            margin: 30px 0;
            text-align: center;
            font-size: 16px;
            color: #666666;
        }
    </style>

</head>

<body>
    <div class="center">
        <h1>Admin Login</h1>
        <form method="post">
            <div class="textfild">
                <input type="email" name="email" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="textfild">
                <input type="password" name="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="forget">
                Forget Password?
            </div>
            <input type="submit" name="submit">
            <div class="signup">

            </div>
        </form>
    </div>
</body>

</html>