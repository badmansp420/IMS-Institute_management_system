<!Doctype HTML>
	<html>
	<head>
		<title>
			Admin Login
		</title>
	</head>

	<body>
		<center>
            <h3>Admin Login</h3><br>
            <form action="" method="post">
                Email:<input type="text" name="email" placeholder="Enter Your Email" required><br><br>
                Password:<input type="password" name="password" placeholder="Enter Your Password" required><br><br>
                <input type="submit" name="submit">
</form><br>
<?php
session_start();
if(isset($_POST['submit'])){
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"e_sms");
    $query = "select * from admin where email = '$_POST[email]'";
    $query_run = mysqli_query($connection, $query);
    while($row = mysqli_fetch_assoc($query_run)){
       if($row['email'] == $_POST['email'])
       {
           if($row['password'] == $_POST['password'])
           {
                $_SESSION['email'] = $row['email'];
                $_SESSION['name'] = $row['name'];
                

               header("Location:C:ad_das.php");

           }
           else{
               echo "Worng password";
           }
           
       } 
       else{
        echo "Worng Email Id";
       
   }
    }
}
?>

</center>
</body>
</html>