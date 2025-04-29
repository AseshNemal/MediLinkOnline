<?php

	if(isset($_POST['delete'])
	{

		include 'config.php';

		$sql = "SELECT * FROM `Appointment`;";

		$result =$con->query($sql);

		if ($result->num_rows > 0) {
			echo "<center><h3>Appointment List</h3></center>";
		  	echo "<center><table border='1')>";
		 	echo "<tr>";
		  	echo "<th>Appointment ID<th>doctorName</th><th>Specialization</th><th>Date</th>";
		  	echo "<th>Time</th><th>Appoved</th>";
		  	echo "<th>Patient ID<th>";
		 

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