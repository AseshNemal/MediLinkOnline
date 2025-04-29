<!DOCTYPE html>
<html>
<head>
	<title>Admin login</title>
	<link rel="stylesheet" href="styles/styles.css">
	<style type="text/css">
		Body{
	background-image: url("images/admin.jpg");background-repeat: no-repeat;
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
		<legend style="text-align: center;">Admin Login</legend>
			<form method="post" action="aLogin.php">
				<center>
				Enter user name: <input type="text" name="userName"><br><br>
				Enter Password: <input type="password" name="password"><br><br>
				<input type="submit">
			</center>

				
			</form>

		</fieldset>

	


		<?php
	include "footer.php"
?>
</div>

</body>
</html>