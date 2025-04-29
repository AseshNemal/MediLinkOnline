
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Receptionist</title>
	<link rel="stylesheet" href="styles/admin.css">
	<style type="text/css">
		Body{
	background-image: url("images/admin.jpg");background-repeat: no-repeat;
	background-attachment: fixed;
  background-size: cover;
	}
	</style>
</head>
<body>
	<img src="images/logo.png" class="logo">
	
	<center><h3>Receptionist</h3></center>
		<fieldset class="set">

		  <form method="post" action="php/appointmentAppove.php">

	        	<h4>Approve Appointment</h4>
	            Enter Appointment Number: <input type="text" name="Number"><br>
	            Approve :
	            <select name="approve">
	                <option value="yes">YES</option>
	                <option value="No">NO</option>
	            </select><br>
	            <input type="submit" name="submit"><br>
	        </form><br><br>

	        <form method="post" action="php/deleteAppointment.php">
				<h4>Delete Appointment</h4>
				Enter Appointment Number :
				<input type="text" name="id">
				<input type="submit" value="Delete Appointment">	
			</form><br><br>


			<form method="post" action="receptionist.php">
				<input type="submit" value="View Appointment" name="appointment">
			</form>
	<?php

	if(isset($_POST['appointment']))
	{

		include 'php/config.php';

		$sql = "SELECT * FROM `Appointment`";

		$result =$con->query($sql);

		if ($result->num_rows > 0) {
			echo "<center><h3>Appointment List</h3></center>";
		  	echo "<center><table border='1')>";
		 	echo "<tr>";
		  	echo "<th>Appointment ID<th>doctorName</th><th>Specialization</th><th>Date</th>";
		  	echo "<th>Time</th><th>Appoved</th>";
		  	echo "<th>Patient ID</th>";
		 

		  while ($row = $result->fetch_assoc()) {
		    echo "<tr>";
		    echo "<td>" . $row["appointmentID"] . "</td>";
		    echo "<td>" . $row["doctorName"] . "</td>";
		    echo "<td>" . $row["Specialization"] . "</td>";
		    echo "<td>" . $row["date"] . "</td>";
		    echo "<td>" . $row["time"] . "</td>";
		    echo "<td>" . $row["Approved"] . "</td>";
		    echo "<td>" . $row["patientID"] . "</td>"; 
		    echo "</tr>";
	  }

		  echo "</table></center>";
		} else {
		  echo "No results found.";
}
}

?>
			
		</fieldset>

		<fieldset class="set">
			<form method="post" action="receptionist.php">
				<input type="submit" value="Patient Payment Detiles" name="Paymentd">
			</form>
	<?php

	if(isset($_POST['Paymentd']))
	{

		include 'php/config.php';

		$sql = "SELECT * FROM `offlinePayment`";

		$result =$con->query($sql);

		if ($result->num_rows > 0) {
			echo "<center><h3>Appointment List</h3></center>";
		  	echo "<center><table border='1')>";
		 	echo "<tr>";
		  	echo "<th>Offline Payment Id ID<th>Patient ID</th><th>Appointment NO</th>";
		  	echo "<th>Amount</th><th>Bank Name</th>";
		  	echo "<th>Transaction ID</th>";
		  	echo "<th>Date</th>";
		 

		  while ($row = $result->fetch_assoc()) {
		    echo "<tr>";
		    echo "<td>" . $row["offlinePaymentID"] . "</td>";
		    echo "<td>" . $row["patientID"] . "</td>";
		    echo "<td>" . $row["appointmentNo"] . "</td>";
		    echo "<td>" . $row["amount"] . "</td>";
		    echo "<td>" . $row["bankName"] . "</td>";
		    echo "<td>" . $row["transactionID"] . "</td>";
		    echo "<td>" . $row["date"] . "</td>"; 
		    echo "</tr>";
	  }

		  echo "</table></center>";
		} else {
		  echo "No results found.";
}
}

?>


		</fieldset>


		<center><a href="adminlogin.php"><button>LOG OUT</button></a></center>

</body>
</html>