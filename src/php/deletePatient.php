<?php
	include 'config.php';

	$id=$_POST["id"];

	$sql="DELETE FROM patient WHERE ID='$id' ";

	 if($con->query($sql))
		 {
			echo "Deleted";

		}

		else
		{
			echo "error";
		}

	?>