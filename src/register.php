<?php
	if(isset($_POST['submitBtn']))
	{
    include 'php/config.php';

    
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



    
    $sql = "INSERT INTO `Patient` (`firstName`, `lastName`, `age`, `telephoneNumber`, `address`, `gender`, `email`, `NIC`, `username`, `password`)VALUES ('$fname', '$lname', '$age', '$tnumber', '$address', '$gender', '$email', '$nic', '$username', '$password')";

    if ($con->query($sql)) 
    {
        echo '<script>alert("Account created Successfully");</script>';
       

    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    $con->close();
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>MediLink online</title>
	<link rel="stylesheet" href="styles/styles.css">
	<link rel="stylesheet" href="styles/signin.css">
	<style type="text/css">
		Body{
	background-image: url("images/background2.jpeg");background-repeat: no-repeat;
	
  background-size: cover;
	}
	</style>
	
</head>

<body>
<?php 
		include "header.php";
	?>


	<fieldset style="margin: auto;
		background-color: lightblue;
		width: 50%;
		padding: 50px;
		max-width: 560px;
		border-radius: 5px;
		margin-top: 150px;
		margin-bottom: 150px;
		">
		<legend style="text-align: center;font-weight: 500px;">
			<a href="signIn.php"><button>Login</button></a>
			<button>Register</button></legend>


			<form method="post" action="register.php">
				<center>
					<h4>Registration Form</h4>
				</center>
					<font >First Name:</font>
					<input type="text" name="fname" class="inputs"><br>
					<font>Last Name:</font>
					<input type="text" name="lname" class="inputs"><br>
					<font>Age :</font>
					<input type="text" name="age" class="inputs"><br>
					<font>Telephone Number :</font>
					<input type="text" name="tnumber" class="inputs"><br>
					<font>Address :</font>
					<input type="text" name="address" class="inputs"><br>
					<font>Gender :</font>
					<input type="text" name="gender" class="inputs"><br>
					<font>Email :</font>
					<input type="text" name="email"class="inputs"><br>
					<font>NIC :</font>
					<input type="text" name="nic" class="inputs"><br><br>


					<font>User name : </font><input type="text" name="userName" class="inputs"><br><br>
					<font>Password :</font> <input type="text" name="password" class="inputs"><br><br>
				
				<input type="submit" name="submitBtn">

				<p id="demo"></p>
			

				
			</form>
		</fieldset>

		<center><a href="adminLogin.php"><button id="stButton">Staff Login</button></a></center>
		<br><br><br><br>



<?php
	include "footer.php"
?>

</body>
</html>
