<?php
	include 'config.php';


	$id=$_POST["id"];
	$name=$_POST["name"];
	$Specialization=$_POST["Specialization"];
	$experience=$_POST["experience"];
	$bio=$_POST["bio"];
		
		 $sql = "UPDATE `doctor` SET `docName` = '$name',`Specialization` = '$Specialization',`experience` = '$experience',`bio` = '$bio' WHERE `docId` = '$id' ";

		
		 if($con->query($sql))
		 {
			echo "Updated";

		}

		else
		{
			echo "error";
		}

?>