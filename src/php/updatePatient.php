<?php
	include 'config.php';


	$id=$_POST["id"];
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$age=$_POST["age"];
	$tnumber=$_POST["tnumber"];
	$address=$_POST["address"];
	$gender=$_POST["gender"];
	$email=$_POST["email"];
	$nic=$_POST["nic"];

		 
	$sql = "UPDATE `Patient` SET `firstName` = '$fname', `lastName` = '$lname', `age` = '$age', `telephoneNumber` = '$tnumber', `address` = '$address', `gender` = '$gender', `email` = '$email', `NIC` = '$nic' WHERE `ID` = '$id'";

	
		
		 if($con->query($sql))
		 {
			echo "Updated";


		}

		else
		{
			echo "error";
		}

?>