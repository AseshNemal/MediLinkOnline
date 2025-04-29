<?php
	session_start();

    if(!isset($_SESSION['patient_id']))
    {
        echo '<script>alert("Log in"); window.location.href = "signIn.php";</script>';
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>MediLink online</title>
	<link rel="stylesheet" href="styles/styles.css">
	<link rel="stylesheet" type="text/css" href="styles/appointment.css">
	<script src="js/bookAppointment.js"></script>
	<style type="text/css">
		.appointmentBody{
	background-image: url("images/AppointmentBackground.jpg");
	background-repeat: no-repeat;
	background-attachment: fixed;
  background-size: cover;
	}
	</style>

</head>

<body>
<?php
	include "header.php"


?>


<div class="appointmentBody">
	<div class="appointment"><fieldset>
		<form method="post" action="bookAppointment.php">
			<h2>book an appointment</h2></br><br>
			Enter doctor name :
			<input type="text" name="doctorName" required>
			<br><br>
			Enter Specialization : 
			<select name="Specialization">
				<option value="Physicial">Physicial</option>
				<option value="Cardiologist">Cardiologist</option>
				<option value="Gynecologist">Gynecologist</option>
				<option value="Pediatrician">Pediatrician</option>
				<option value="Neurologist">Neurologist</option>
				<option value="Endocrinologist and Diabetologist">Endocrinologist and Diabetologist</option>
				<option value="Eye Surgeon">Eye Surgeon</option>
				<option value="Dermatologist">Dermatologist</option>
				<option value="Ayurvedic Physician">Ayurvedic Physician</option>
				<option value="Vascular and Trans plant Surgeon ">Vascular and Trans plant Surgeon(Liver and Kid ney)</option>
				<option value="Nephrologist">Nephrologist</option>
				<option value="Cardiothoracic Surgeon">Cardiothoracic Surgeon</option>
				<option value="Neuro Physician">Neuro Physician</option>
				<option value="Orthopedic Surgeon">Orthopedic Surgeon</option>
				<option value="Genito Urinary Surgeon">Genito Urinary Surgeon</option>
				<option value="Paediatric Dermatologist">Paediatric Dermatologist</option>
				<option value="Neonatal Paediatrician">Neonatal Paediatrician</option>
				<option value="Rheumatologist">Rheumatologist</option>
				<option value="Oncologist and Cancer Specialis">Oncologist and Cancer Specialis</option>
				<option value="Chest Specialist">Chest Specialist</option>
			</select><br><br>
			Select date : 
			<input type="date" name="date" required><br><br>
			Select perferred time slot :
			<select name="time">
				<option value="Morning">Morning</option>
				<option value="afternoon">afternoon</option>
				<option value="evening">evening</option>
				<option value="night">night</option>
				
			</select><br><br>
			
			<center><input type="submit" name="book"><input type="reset"></center>
		</form>
		<center>
	<?php
		session_start();
		include 'php/config.php';
		if(isset($_POST['book'])){


			$docName=$_POST["doctorName"];
			$Specialization=$_POST["Specialization"];
			$data=$_POST["date"];
			$time=$_POST["time"];
			$patientID=$_SESSION['patient_id'];


			 $sql="INSERT INTO `Appointment`(`appointmentID`, `doctorName`, `Specialization`, `date`, `time`, `Approved`, `docId`, `patientID`) VALUES (NULL, '$docName', '$Specialization', '$data', '$time', NULL,NULL,'$patientID')";

			 if($con->query($sql))
			 {
			 	echo "Appointment successful";
			 }

			 else
			 {
			 	echo "Error".$con->error;
			 }


    
    
		    $sql = "SELECT `appointmentID` FROM `Appointment` ORDER BY `appointmentID` DESC LIMIT 1";
		    $result = $con->query($sql);
		    
		    if ($result) {
		        $row = $result->fetch_assoc();
		        $appointmentID = $row['appointmentID'];
		        
		        echo "<br>Your appointment Number: $appointmentID";
		    } else {
		        echo "Error executing query: " . $con->error;
		    }



		}

		?>
	</center>




	</fieldset>
		
	</div>

	<fieldset>
	<p class="para">Once you make an appointment the system issues an appointment Id, If you want to make a payment on an appointment, you must go to pay online page, Enter the appointment ID and pay online
</p>

<p class="para">
	Once the payment is made the receptionist validates and approves the appointment
</p>
</fieldset>

	<center><h3>Doctors List</h3></center>

	<form method="post" action="bookAppointment.php">
		<center><input type="submit" name="list" value="Search Doctor"></center>
	</form>

	<center>
	<?php

	include 'php/config.php';
	if(isset($_POST['list']))
	{
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
		} else 
		{
		  echo "No results found.";
	}


}

?> </center>


	

<center><h3>Other Doctors</h3></center>
	<div id="searchDoctor ">
		<center>
		<button onclick="doctor()">Search Doctor</button><br><br>

		

</center>
		<div id="docSpecializan">
			<center>
			<button onclick="sp('sp1')" >Physicial</button>
			<button onclick="sp('sp2')">Cardiologis</button>
			<button onclick="sp('sp3')">Gynecologist</button>
			<button onclick="sp('sp4')">Pediatrician</button>
			<button onclick="sp('sp5')">Neurologist</button>
			<button onclick="sp('sp6')">Endocrinologist and Diabetologist</button>
			<button onclick="sp('sp7')">Eye Surgeon</button>
			<button onclick="sp('sp8')">Dermatologist</button>
			<button onclick="sp('sp9')">Ayurvedic Physici an</button>
			<button onclick="sp('sp10')">Other</button>
		</center>

			<h5 id="docName">Dr. Sophia Patel, MD</h5>
			<p id="docDetails">*Specialty: Cardiology <br>* Experience: 15 years. <br>*Bio: Dr. Sophia Patel is a board-certified cardiologist with expertise in diagnosing and treating heart conditions. She is dedicated to providing compassionate care and personalized treatment plans to her patients. </p>

			<h5 id="docName2">Dr. Michael Nguyen, MD</h5>
			<p id="docDetails2">*Specialty: Orthopedic Surgery<br>*Experience: 20 years<br>*Bio: Dr. Michael Nguyen is an experienced orthopedic surgeon specializing in joint replacements and sports medicine. He is committed to helping patients regain mobility and improve their quality of life.</p>

			<h5 id="docName3">Dr. Emily Chen, MD</h5>
			<p id="docDetails3">*Specialty: Neurology<br>*Experience: 12 years<br>*Bio: Dr. Emily Chen is a neurologist specializing in the diagnosis and treatment of neurological disorders, including epilepsy, multiple sclerosis, and migraines. She provides comprehensive care tailored to each patient's needs.</p>

			<h5 id="docName4">Dr. Jamal Khan, MD</h5>
			<p id="docDetails4">*Specialty: Gastroenterology<br>*Experience: 18 years<br>*Bio: Dr. Jamal Khan is a gastroenterologist with expertise in diagnosing and managing gastrointestinal conditions such as Crohn's disease, ulcerative colitis, and liver diseases. He is dedicated to providing high-quality care and improving digestive health.</p>


			
		</div>

	




	
	</div>




</div>




<?php
	include "footer.php"
?>

</body>
</html>