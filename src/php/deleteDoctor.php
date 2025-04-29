<?php
	include 'config.php';

	$id=$_POST["id"];

	$sql="DELETE FROM doctor WHERE docID='$id' ";

	 if($con->query($sql))
		 {
			echo "Deleted";

		}

		else
		{
			echo "error";
		}




	?>

