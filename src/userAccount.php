<?php
    session_start();

    if(!isset($_SESSION['patient_id']))
    {
        echo '<script>alert("Log in");
         window.location.href = "signIn.php";</script>';
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>MediLink online</title>
	<link rel="stylesheet" href="styles/styles.css">
	<link rel="stylesheet" href="styles/userAccountStyles.css">
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


	<div id="userDetails">
		<div>
			<img src="images/user.png" class="profilepic">
			<button id="edit">Edit</button>
		</div>
		<div class="details">
			<?php
    include 'php/config.php';
    $patient_id = "{$_SESSION['patient_id']}"; 

    $sql = "SELECT `ID`, `firstName`, `lastName`, `age`, `telephoneNumber`, `address`, `gender`, `email`, `NIC`, `username`, `password` FROM `Patient` WHERE `ID` = $patient_id";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        
        $row = $result->fetch_assoc();
        echo "<h4>First Name: " . $row["firstName"] . "</h4>";
        echo "<h4>Last Name: " . $row["lastName"] . "</h4>";
        echo "<h4>Age: " . $row["age"] . "</h4>";
        echo "<h4>Telephone Number: " . $row["telephoneNumber"] . "</h4>";
        echo "<h4>Address: " . $row["address"] . "</h4>";
    } else {
        echo "0 results";
    }
    $con->close();
?>
		</div>
		<div class="details">
			<?php
    include 'php/config.php'; 

    $patient_id = "{$_SESSION['patient_id']}";  

    $sql = "SELECT `gender`, `email`, `NIC` FROM `Patient` WHERE `ID` = $patient_id";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<h4>Gender: " . $row["gender"] . "</h4>";
        echo "<h4>Email: " . $row["email"] . "</h4>";
        echo "<h4>NIC: " . $row["NIC"] . "</h4>";
    } else {
        echo "0 results";
    }
    $con->close();
?>
		</div>

		<div class="logout">

			<form method="post" action="userAccount.php">
    <input type="submit" name="submitBtn" value="LOGOUT">
</form>

<?php
    if(isset($_POST['submitBtn']))
    {
        unset($_SESSION['patient_id']);
        echo '<script>alert("Log out")</script>';
        header("Location: index.php");
    }
    
?>
	<form method="post" action="userAccountEdit.php">
		<input type="submit" value="Edit">
		
	</form>
		</div>
		
    </div>
    <center>
    	<h3>Past Medical History</h3>
  		<input type="date" name="date">
	</center>
    <div class="medicalHistory">
    	<div class="medicalDetails">
    		<h4>My Appointment </h4>
    <?php
session_start();
include 'php/config.php';


$patientID = $_SESSION['patient_id'];

// Construct the SQL query
$sql = "SELECT `appointmentID`, `doctorName`, `Specialization`, `date`, `time`, `Approved` FROM `Appointment` WHERE `patientID`= '$patientID'";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<center><h5>Appointment List</h5></center>";
    echo "<center><table border='1'>";
    echo "<tr>";
    echo "<th>Appointment ID</th><th>Doctor Name</th><th>Specialization</th><th>Date</th>";
    echo "<th>Time</th><th>Approved</th>";
    echo "</tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["appointmentID"] . "</td>";
        echo "<td>" . $row["doctorName"] . "</td>";
        echo "<td>" . $row["Specialization"] . "</td>";
        echo "<td>" . $row["date"] . "</td>";
        echo "<td>" . $row["time"] . "</td>";
        echo "<td>" . $row["Approved"] . "</td>";
        echo "</tr>";
    }

    echo "</table></center>";
} else {
    echo "No results found.";
}

// Close the database connection
$con->close();
?>
    	</div>

    	<div class="medicalDetails">
    		<h4>My Prescription</h4>

 <?php
			 	include 'php/config.php';

					$sql="SELECT * FROM `medicaHistory`";

				$result =$con->query($sql);

				if ($result->num_rows > 0) {
				  echo "<table border='1 '>";
				  echo "<tr>";
				  echo "<th>Patient ID</th>";
				  echo "<th>Prescription</th>";
				  echo "</tr>";

				  while ($row = $result->fetch_assoc()) {
				    echo "<tr>";
				    echo "<td>" . $row["patientID"] . "</td>";
				    echo "<td>" . $row["prescription"] . "</td>";
				    echo "</tr>";
			  }

				  echo "</table>";
				} else {
				  echo "No results found.";
			}


			 ?>
    	</div>
    	
    </div>
    






	<?php
	include "footer.php";
?>

</body>
</html>