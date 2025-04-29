
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Doctor</title>
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
	
	<center><h3>Doctor</h3></center>
	<fieldset class="set">
		<legend>Appointment</legend>

		<form method="post" action="doctor.php">
			<input type="submit" value="View Appointment" name="appointment">
		</form>
		
			<?php

	if(isset($_POST['appointment']))
	{

		include 'php/config.php';

		$sql = "SELECT * FROM `Appointment`";

		$result =$con->query($sql);

		if ($result->num_rows > 0) {
			echo "<center><h3>Appointment List</h3></center>";
		  	echo "<center><table border='1')>";
		 	echo "<tr>";
		  	echo "<th>Appointment ID<th>doctorName</th><th>Specialization</th><th>Date</th>";
		  	echo "<th>Time</th><th>Appoved</th>";
		  	echo "<th>Patient ID<th>";
		 

		  while ($row = $result->fetch_assoc()) {
		    echo "<tr>";
		    echo "<td>" . $row["appointmentID"] . "</td>";
		    echo "<td>" . $row["doctorName"] . "</td>";
		    echo "<td>" . $row["Specialization"] . "</td>";
		    echo "<td>" . $row["date"] . "</td>";
		    echo "<td>" . $row["time"] . "</td>";
		    echo "<td>" . $row["Approved"] . "</td>";
		    echo "<td>" . $row["patientID"] . "</td>"; 
		    echo "</tr>";
	  }

		  echo "</table></center>";
		} else {
		  echo "No results found.";
}
}

?>
	</fieldset><br>

	<fieldset class="set">
		<legend>Prescription</legend>
		<form method="post" action="doctor.php">
			<h4>ADD Prescription</h4>
			Patient ID : <input type="text" name="id"><br>
			Prescription : <textarea name="prescription"></textarea><br>
			<input type="submit" value="Add" name="add">
			
		</form>
		<?php

			include 'php/config.php';
			if(isset($_POST['add'])){


				$pID=$_POST["id"];
				$pre=$_POST["prescription"];
			
				$sql = "INSERT INTO `medicaHistory`(`patientID`, `prescription`) VALUES ('$pID','$pre')";

				if($con->query($sql))
			 {
			 	echo " prescription added";
			 }

			 else
			 {
			 	echo "Error".$con->error;
			 }
			}

		?>


		<form method="post" action="doctor.php">
			<h4>update prescription</h4>
			Patient ID : <input type="text" name="id"><br>
			Prescription : <textarea name="prescription"></textarea><br>
			<input type="submit" value="Add" name="update">
			</form>
			<?php
			include 'php/config.php';
			if(isset($_POST['update'])){

				$pID=$_POST["id"];
				$pre=$_POST["prescription"];
			
				$sql = "UPDATE `medicaHistory` SET `prescription`='$pre' WHERE `patientID`='$pID'";

				if($con->query($sql))
				 {
				 	echo " prescription added";
				 }

				 else
				 {
				 	echo "Error".$con->error;
				 }
				}
			 ?>

			<form method="post" action="doctor.php">
				<h4>Delete Precription</h4>

				Patient ID: <input type="text" name="id"><br>

				<input type="submit" name="delete">
				<input type="reset">


			</form>	
			<?php
			include 'php/config.php';
			if(isset($_POST['delete'])){

				$id=$_POST["id"];

				$sql="DELETE FROM `medicaHistory` WHERE patientID = '$id'";

				 if($con->query($sql))
					 {
						echo "Deleted";

					}

					else
					{
						echo "error";
					}
			}

			?>
			<br><br>




			 <form method="post" action="doctor.php">
			 	<input type="submit" value="Patient Prescription List" name="list"> 	
			 </form>
			 <?php
			 	include 'php/config.php';
				if(isset($_POST['list'])){

					$sql="SELECT * FROM `medicaHistory`";

				$result =$con->query($sql);

				if ($result->num_rows > 0) {
				  echo "<table border='1 '>";
				  echo "<tr>";
				  echo "<th>Patient ID</th>";
				  echo "<th>Prescription</th>";
				  echo "</tr>";

				  while ($row = $result->fetch_assoc()) {
				    echo "<tr>";
				    echo "<td>" . $row["patientID"] . "</td>";
				    echo "<td>" . $row["prescription"] . "</td>";
				    echo "</tr>";
			  }

				  echo "</table>";
				} else {
				  echo "No results found.";
			}



				}


			 ?>

			
		
	</fieldset>





	<center>
		<center><a href="adminlogin.php"><button>LOG OUT</button></a></center>
	</center>
	


</body>
</html>