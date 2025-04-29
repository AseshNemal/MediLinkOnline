
<!DOCTYPE html>
<html>
<head>
	<title>MediLink online</title>
	<link rel="stylesheet" href="styles/styles.css">
	 <link rel="stylesheet" href="styles/admin.css">
	 <style type="text/css">
		Body{
	background-image: url("images/bgpic.jpg"); 
		}
	</style>
</head>

<body>
	<?php
		include "header.php";

	?>


	<fieldset>
		<legend>Update Account</legend>
		<form class="edituser" method="post" action="userAccountEdit.php">
			First Name : <input type="text" name="fname"> <br>
			Last Name : <input type="text" name="lname"><br>
			Age : <input type="text" name="age"><br>
			Telephone Number : <input type="text" name="tnumber"><br>
			Address : <input type="text" name="address"><br>
			Gender : <input type="text" name="gender"><br>
			Email : <input type="text" name="email"><br>
			NIC : <input type="text" name="nic"><br>
			

			User name :<input type="text" name="userName"><br><br>
			Password :<input type="text" name="password"><br><br>

			<center><input type="submit" value="edit" name="edit">
			<input type="reset"></center>
			
		</form>
		<?php
			
			if(isset($_POST['edit']))
			{    
				session_start();
				
				include 'php/config.php';

				$id=$_SESSION['patient_id'];
				$fname = $_POST["fname"];
			    $lname = $_POST["lname"];
			    $age = $_POST["age"];
			    $tnumber = $_POST["tnumber"];
			    $address = $_POST["address"];
			    $gender = $_POST["gender"];
			    $email = $_POST["email"];
			    $nic = $_POST["nic"];
			    $username = $_POST["userName"];
			    $password = $_POST["password"];

			  

			    $sql = "UPDATE `Patient` SET `firstName`='$fname',`lastName`='$lname',`age`='$age',`telephoneNumber`='$tnumber',`address`='$address',`gender`='$gender',`email`='$email',`NIC`='$nic',`username`='$username',`password`='$password' WHERE `ID` = '$id'";

			    if ($con->query($sql)) 
				    {
				        echo '<script>alert("Account updated Successfully");</script>';
				    } 
				    else 
				    {
				        echo "Error: " . $sql . "<br>" . $con->error;
				    }

				    $con->close();


			}
		?>



	</fieldset>

	<fieldset>
		<form method="post" action="userAccountEdit.php">
			<h5>Delete Account</h5>

			<input type="submit" name="delete" value="Delete">


		</form>	
		<?php
		session_start();
		include 'php/config.php';
		if(isset($_POST['delete'])){

			$id=$_SESSION['patient_id'];

			$sql="DELETE FROM `Patient` WHERE `ID` = '$id'";

			 if($con->query($sql))
				 {
					echo '<script>alert("Account deleted Successfully ");</script>';

				}

				else
				{
					echo "error";
				}
		}

		?>

	</fieldset>


		<?php
		include "footer.php"
	?>

</body>
</html>
