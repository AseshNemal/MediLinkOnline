<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="styles/admin.css">
	<style type="text/css">
		Body{
	background-image: url("images/admin.jpg");background-repeat: no-repeat;
	background-attachment: fixed;
  background-size: cover;
	}
	</style>
</head>
<body>

	<img src="images/logo.png" class="logo">
	<center><h1>MediLink Admin</h1></center>


	<fieldset class="set">
		<legend>Patient</legend>
		<form method="post" action="php/updatePatient.php">
			<h4>update patient detiles</h4>
			Enter patient id :
			<input type="text" name="id"><br><br>


			<h5>Fill in the requird fild</h5>

			First Name:
			<input type="text" name="fname">
			Last Name:
			<input type="text" name="lname">
			Age :
			<input type="text" name="age">
			Telephone Number :
			<input type="text" name="tnumber"><br>
			Address :
			<input type="text" name="address">
			Gender :
			<input type="text" name="gender">
			Email :
			<input type="text" name="email">
			NIC :
			<input type="text" name="nic"><br>

			<input type="submit" value="Update Patient">

		</form><br>


		<form method="post" action="php/deletePatient.php">
			<h4>Delete Patient</h4>
			Enter Patient Id :
			<input type="text" name="id">
			<input type="submit" value="Delete Patient">
			
		</form><br><br>

		<h4>Patient List</h4>

		<?php
			include 'php/patientList.php'
		?>
		

        
	

	</fieldset>

	<fieldset class="set">
		<legend>Doctor</legend>

		<form method="post" action="php/addDoctor.php">
			<h4>Add Doctor</h4>
			Doctor name :
			<input type="text" name="name"><br>
			Specialization :
			<input type="text" name="Specialization"><br>
			Experience;
			<input type="text" name="experience"><br>
			Bio :
			<input type="text" name="bio"><br>
			<input type="submit" value="Add Doctor" name="add"><br>
		</form><br><br>



		<form method="post" action="php/deleteDoctor.php">
			<h4>Delete Doctor</h4>
			Enter Doctor Id :
			<input type="text" name="id">
			<input type="submit" value="Delete Doctor">
			
		</form><br><br>




		<h4>updeta Doctor info</h4>
		<form method="post" action="php/updateDoctor.php"> 
			Enter Doctor ID:
			<input type="text" name="id"><br>

			<h5>Fill in the requird fild</h5>
			Doctor name :
			<input type="text" name="name">
			Specialization :
			<input type="text" name="Specialization"><br>
			Experience :
			<input type="text" name="experience">
			Bio :
			<input type="text" name="bio"><br>
			<input type="submit" value="Update doctor"><br>



		</form>


		<br>
		<br>
		<h4>Doctors List</h4>

        <?php include 'php/doctorList.php'?>

		
	</fieldset>


	<fieldset>
		<legend>Health Check Packages</legend>
		<form method="post" action="view_packages.php">
			<input type="submit" value="View Packages">
		</form>

		<form method="post" action="packages.php">
			<input type="submit" value="Add Packages">
		</form>


	</fieldset>


	<center><a href="adminlogin.php"><button>LOG OUT</button></a></center>






</body>
</html>
