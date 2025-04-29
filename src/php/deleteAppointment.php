<?php
	include 'config.php';

	$id=$_POST["number"];

	$sql="DELETE FROM Appointment WHERE appointmentID='$id' ";

	 if($con->query($sql))
		 {
			echo "Deleted";

		}

		else
		{
			echo "error";
		}




	?>

