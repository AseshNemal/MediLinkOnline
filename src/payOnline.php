<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Online medical portel</title>
	<link rel="stylesheet" href="styles/styles.css">
	<link rel="stylesheet" href="styles/payOnline.css">
	<style type="text/css">
		Body{
	background-image: url("images/AppointmentBackground.jpg");
	background-repeat: no-repeat;
	background-attachment: fixed;
  background-size: cover;
	}
	</style>
</head>
<body>
	<?php 
		include "header.php";
	?> 




	<center><h3>Online Payment</h3></center>
	<fieldset>
		<form method="post" action="payOnline.php">
			Appointment NO: <input type="text" name="Ano" required>
			<br><br>
			<div id="oPayment">
				<div id="p1">
					Card Type :<select name="cType" required>
						<option value="visa">Visa Card</option>
						<option value="master">Master Card</option>
					</select><br><br>

					Card Number : <input type="text" name="cNumber" required><br><br>

					Expire : <select name="cEpireMonth" required>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
					</select>
					<select name="cEpireYear" required>
						<option value="2024">2024</option>
						<option value="2025">2025</option>
						<option value="2026">2026</option>
						<option value="2027">2027</option>
						<option value="2028">2028</option>
						<option value="2029">2029</option>
					</select><br><br>

					Security Code : <input type="text" name="sCode" required><br><br>
				</div>

				<div id="p2">
					Address : <input type="text" name="address" required><br><br>

					City : <input type="text" name="city" required><br><br>

					States : <input type="text" name="State" required><br><br>

					<input type="checkbox" name="" required> I Agree 

				</div>			
			</div>
			<center><input type="submit" value="pay" name="pay"><input type="reset"></center>
		</form>
		<?php

			include 'php/config.php';
			if(isset($_POST['pay'])){


				$pID=$_SESSION['patient_id'];
				$aNo=$_POST["Ano"];
				$cType=$_POST["cType"];
				$cNumber=$_POST["cNumber"];
				$cEpireMonth=$_POST["cEpireMonth"];
				$cEpireYear=$_POST["cEpireYear"];
				$sCode=$_POST["sCode"];
				$address=$_POST["address"];
				$city=$_POST["city"];
				$State=$_POST["State"];

				$sql = "INSERT INTO `onlinePayment`(`patientID`, `appointmentNO`, `cardType`, `CardNumber`, `cEpireMonth`, `cEpireYear`, `securityCode`, `address`, `city`, `state`) VALUES ('$pID','$aNo','$cType','$cNumber','$cEpireMonth','$cEpireYear','$sCode','$address','$city','$State')";

				if($con->query($sql))
			 {
			 	echo "Payment successful";
			 }

			 else
			 {
			 	echo "Error".$con->error;
			 }
			}
				




		?>


	</fieldset>


	<center><h3>Offline Payment</h3></center>

	<fieldset>
		<form method="post" action="">
			
			Appointment NO: <input type="text" name="Ano" required>
			<br><br>

			Amount : <input type="text" name="amount" required><br><br>
			Bank Name : <input type="text" name="bName" required><br><br>
			Transaction ID : <input type="text" name="transactionID" required><br><br>

			Date : <input type="date" name="date" required><br><br>

			<input type="checkbox" name="" required> I agree<br><br>

			<center>
				<input type="submit" name="offpay">
				<input type="reset" name="">
			</center>
			
		</form>
		<?php
			session_start();

			include 'php/config.php';
			if(isset($_POST['offpay'])){


				$pID=$_SESSION['patient_id'];
				$aNo=$_POST["Ano"];
				$amount=$_POST["amount"];
				$bName=$_POST["bName"];
				$transactionID=$_POST["transactionID"];
				$date=$_POST["date"];
			
				$sql = "INSERT INTO `offlinePayment`(`offlinePaymentID`, `patientID`, `appointmentNo`, `amount`, `bankName`, `transactionID`, `date`) VALUES (NULL,'$pID','$aNo','$amount','$bName','$transactionID','$date')";

				if($con->query($sql))
			 {
			 	echo "Payment successful";
			 }

			 else
			 {
			 	echo "Error".$con->error;
			 }
			}

		?>
	</fieldset><br><br><br>


	<?php
	include "footer.php"
?>
</body>
</html>