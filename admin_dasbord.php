<!Doctype HTML>
<html lang="en">
<link rel="icon" href="ITA_LOGO .jpg">

<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<style type="text/css">
		* {
			margin-top: 2px;
			margin-bottom: 2px;
			margin-left: 1px;
			margin-right: 1px;

		}

		#header {
			height: 8%;
			width: 100%;
			top: 1%;
			background-color: black;
			color: whitesmoke;
			position: fixed;
			text-align: center;
		}

		#left_side {
			height: 75%;
			width: 20%;
			top: 18%;

		}

		#right_side {
			height: 75%;
			width: 80%;
			background-color: whitesmoke;
			position: fixed;
			left: 17%;
			top: 30%;
			color: red;
			border: solid 1px blueviolet;
		}
	</style>
	<?PHP
	session_start();
	$connection = mysqli_connect("localhost", "root", "");
	$db = mysqli_select_db($connection, "e_sms");

	?>
</head>

<body>
	<div id="header">
		<center><b><u><br>E - Management System</u></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:<?php echo $_SESSION['fname'];
																																												echo $_SESSION['lname']; ?> &nbsp;&nbsp;&nbsp;Email:<?php echo $_SESSION['email']; ?>&nbsp;&nbsp;&nbsp; <a href="logout.php">Logout</a></center>
	</div>
	<br>
	<br>
	<br>
	<br>
	<span id="top_span">
		<marquee>Welcome To E - Management System</marquee>
	</span>
	<div id="left_side">
		<form action="" method="post">
			<table>
				<tr>
					<td><button type="submit" name="search_students">Search Student's</button></td>
				</tr>
				<tr>
					<td><button type="submit" name="view_students">View Student's</button> </td>
				</tr>
				<tr>
					<td><button type="submit" name="view_teachers">View Teacher's</button></td>
				</tr>
				<tr>
					<td><button type="submit" name="view_staf">View Staf</button></td>
				</tr>
				<tr>
					<td><button type="submit" name="add_student">Add Student</button></td>
				</tr>
			</table>
	</div>
	<div id="right_side">
		<div id="work">
			<?php
			if (isset($_POST['search_students'])) {
			?>
				<center>
					<form action="" method="post">
						<label><i class="fa fa-id-card" aria-hidden="true"></i>&nbsp;Registration No.:</label>

						<abbr title="Please fill in this field."><input type="text" name="reg_no" id="name" placeholder="Enter Your Registration No" required></abbr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

						<input type="submit" name="search_students_by_reg_no" value="Search">
					</form>
				</center>
				<?php

			}
			if (isset($_POST['search_students_by_reg_no'])) {
				$query = "select * from student where reg_no = '$_POST[reg_no]'";
				$query_run = mysqli_query($connection, $query);
				while ($row = mysqli_fetch_assoc($query_run)) {
				?>
					<table>
						<tr>
							<td><b>Serial No: </b></td>
							<td><input type="text" value="<?php echo $row['sl_no']; ?>" disabled>
							</td>
						</tr>
						<tr>
							<td><b>Registration No: </b></td>
							<td><input type="text" value="<?php echo $row['reg_no']; ?>" disabled>
							</td>
						</tr>
						<tr>
							<td><b>Name: </b></td>
							<td><input type="text" value="<?php echo $row['name']; ?>" disabled>
							</td>
						</tr>
						<tr>
							<td><b>Branch: </b></td>
							<td><input type="text" value="<?php echo $row['branch']; ?>" disabled>
							</td>
						</tr>
						<tr>
							<td><b>Email: </b></td>
							<td><input type="text" value="<?php echo $row['email']; ?>" disabled>
							</td>
						</tr>
						<tr>
							<td><b>Password: </b></td>
							<td><input type="text" value="<?php echo $row['password']; ?>" disabled>
							</td>
						</tr>
						<tr>
							<td><b>Mobile No: </b></td>
							<td><input type="text" value="<?php echo $row['ph_no']; ?>" disabled>
							</td>
						</tr>
					</table>


			<?php


				}
			}

			?>

		</div>

	</div>
</body>

</html>