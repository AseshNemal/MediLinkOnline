<?php
session_start();

if(isset($_POST['submitBtn']))
{
    include 'php/config.php';
    $username = $_POST["userName"];
    $password = $_POST["password"];

    $sql = "SELECT `password`, `ID` FROM `Patient` WHERE `username` = '$username'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if($row["password"] == $password)
        {
            $_SESSION['patient_id'] = $row['ID'];
            header('Location: userAccount.php');
        }
        else
        {
            echo "Invalid Password";
        }
    }
    else {
        echo "Invalid Username";
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
		.loginBody{
	background-image: url("images/background.jpg");background-repeat: no-repeat;
	background-attachment: fixed;
  background-size: cover;
	}
	</style>
	
</head>

<body>
	<div class="loginBody">
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
		<legend style="text-align: center;">
			<button>Login</button>
			<a href="register.php"><button>Register</button></a></legend>


			<form method="post" action="pLogin.php">
				<center>
				Enter user name: <input type="text" name="userName"><br><br>
				Enter Password: <input type="password" name="password"><br><br>
				<input type="submit" name="sumbitBtn">

				<p id="demo"></p>
			</center>

				
			</form>
		</fieldset>

		<center><a href="adminLogin.php"><button id="stButton">Staff Login</button></a></center>
		<br><br><br><br>



<?php
	include "footer.php"
?>
</div>

</body>
</html>
