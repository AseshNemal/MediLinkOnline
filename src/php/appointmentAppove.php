<?php
	include 'config.php';

	$no=$_POST["Number"];
	$approve=$_POST["approve"];

		
		 $sql = "UPDATE `Appointment` SET `Approved` = '$approve' WHERE `appointmentID` = '$no'";

		
		 if($con->query($sql))
		 {
			
			echo '<script>alert("Appoved");</script>';

		}

		else
		{
			echo "error";
		}




	

?>

