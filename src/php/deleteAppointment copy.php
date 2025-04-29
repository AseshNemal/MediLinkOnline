<?php
	require 'config.php';

	$id=$_POST["id"];

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

