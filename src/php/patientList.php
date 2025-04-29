<?php

	include 'config.php';

	$sql = "SELECT * FROM `patient`;";

	$result =$con->query($sql);

	if ($result->num_rows > 0) {
	  echo "<table border='1 '>";
	  echo "<tr>";
	  echo "<th>ID</th>";
	  echo "<th>First Name</th>";
	  echo "<th>Last Name</th>";
	  echo "<th>Age(years)</th>";
	  echo "<th>Telephone Number</th>";
	  echo "<th>Address</th>";
	  echo "<th>Gender</th>";
	  echo "<th>email</th>";
	  echo "<th>NIC</th>";
	  echo "<th>User Name</th>";
	  echo "<th>Password</th>";
	  
	  echo "</tr>";

	  while ($row = $result->fetch_assoc()) {
	    echo "<tr>";
	    echo "<td>" . $row["ID"] . "</td>";
	    echo "<td>" . $row["firstName"] . "</td>";
	    echo "<td>" . $row["lastName"] . "</td>";
	    echo "<td>" . $row["age"] . "</td>";
	    echo "<td>" . $row["telephoneNumber"] . "</td>";
	    echo "<td>" . $row["address"] . "</td>";
	    echo "<td>" . $row["gender"] . "</td>";
	    echo "<td>" . $row["email"] . "</td>";
	    echo "<td>" . $row["NIC"] . "</td>";
	    echo "<td>" . $row["username"] . "</td>";
	    echo "<td>" . $row["password"] . "</td>";
	    echo "</tr>";
  }

	  echo "</table>";
	} else {
	  echo "No results found.";
}
