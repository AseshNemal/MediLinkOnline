<?php

	include 'config.php';

	$sql = "SELECT * FROM `doctor`;";

	$result =$con->query($sql);

	if ($result->num_rows > 0) {
	  echo "<table border='1 '>";
	  echo "<tr>";
	  echo "<th>Doctor ID</th>";
	  echo "<th>Doctor Name</th>";
	  echo "<th>Specialization</th>";
	  echo "<th>Eperience(years)</th>";
	  echo "<th>Bio</th>";
	  echo "</tr>";

	  while ($row = $result->fetch_assoc()) {
	    echo "<tr>";
	    echo "<td>" . $row["docId"] . "</td>";
	    echo "<td>" . $row["docName"] . "</td>";
	    echo "<td>" . $row["Specialization"] . "</td>";
	    echo "<td>" . $row["experience"] . "</td>";
	    echo "<td>" . $row["bio"] . "</td>";
	    echo "</tr>";
  }

	  echo "</table>";
	} else {
	  echo "No results found.";
}




?>