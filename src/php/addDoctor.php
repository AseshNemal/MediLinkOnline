<?php
	include 'config.php';

	$name=$_POST["name"];
	$Specialization=$_POST["Specialization"];
	$experience=$_POST["experience"];
	$bio=$_POST["bio"];

		
		 $sql="INSERT INTO `doctor` (`docId`, `docName`, `Specialization`,`experience`,`bio`) VALUES (NULL, '$name','$Specialization','$experience','$bio')";
		
		 if($con->query($sql))
		 {
			echo "added";

		}

		else
		{
			echo "error";
		}
?>
