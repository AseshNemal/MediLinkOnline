<?php
	include 'php/config.php';
	session_start();
	if(isset($_POST['submitBtn']))
{    
	    

	    $name = $_POST["pname"];
	    $email = $_POST["pemail"];
	    $telephone = $_POST["pnumber"];
	    $message = $_POST["message"];
	    $pID = $_SESSION['patient_id'];

	     $sql = "INSERT INTO `inquiry` (`inquiryNo`, `patientID`, `patientName`, `email`, `telephone`, `inquiry`, `reply`) VALUES (NULL, '$pID', '$name', '$email', '$telephone', '$message', NULL)";

	    if ($con->query($sql))
	     {
	        echo '<script>alert("Successfully Sent an inquiry");</script>';
	    } 
	    else 
	    {
	        echo "error: ";
	    }

	    $con->close();

	}

    ?>


<!DOCTYPE html>
<html>
<head>
	<title>MediLink online</title>
	<link rel="stylesheet" href="styles/styles.css">
	<link rel="stylesheet" href="styles/admin.css">
	<style type="text/css">
		Body{
	background-image: url("images/background.jpg");background-repeat: no-repeat;
	background-attachment: fixed;
  background-size: cover;
	}
	</style>

</head>

<body>
<?php 
		include "header.php";
	?>

	<fieldset class="FAQ">
		<h5>What services does your medical portal offer?</h5>
		<p>
			Our portal offers a wide range of services including online consultations with healthcare professionals, appointment scheduling, prescription refills, medical advice, and access to health information resources.
		</p>
	</fieldset>

	<fieldset class="FAQ">
		<h5>What services does your medical portal offer?</h5>
		<p>
			Our portal offers a wide range of services including online consultations with healthcare professionals, appointment scheduling, prescription refills, medical advice, and access to health information resources.
		</p>
	</fieldset>

	<fieldset class="FAQ">
		<h5>How can I book an online consultation?</h5>
		<p>
			  Booking an online consultation is easy. Simply create an account on our portal, select a healthcare provider, choose a convenient time slot, and proceed with the booking. 
		</p>
	</fieldset>

	<fieldset class="FAQ">
		<h5>Are the online consultations secure and private?</h5>
		<p>
			Yes, we prioritize the security and privacy of our users. Our platform uses encrypted communication channels to ensure confidentiality during online consultations.
		</p>
	</fieldset>

	<fieldset class="FAQ">
		<h5>What types of healthcare professionals are available for online consultations?</h5>
		<p>
			 We have a diverse team of licensed physicians, specialists, therapists, and counselors available for online consultations to address a wide range of medical concerns.
		</p>
	</fieldset>

	<fieldset class="FAQ">
		<h5>Can I get prescriptions through online consultations?</h5>
		<p>
			 Yes, if deemed appropriate by the healthcare provider after the consultation, prescriptions can be issued electronically to your preferred pharmacy.
		</p>
	</fieldset>

	<fieldset class="FAQ">
		<h5>How do I refill my prescriptions online?</h5>
		<p>
			 You can easily request prescription refills through your account on our portal. Simply select the medication you need a refill for and follow the prompts to submit your request
		</p>
	</fieldset>

	<fieldset class="FAQ">
		<h5>Is there a fee for using the online consultation services?</h5>
		<p>
			 Fees vary depending on the type of service and healthcare provider. You can view the fee schedule before booking an appointment.
		</p>
	</fieldset>

	<fieldset class="FAQ">
		<h5>What if I need urgent medical assistance?</h5>
		<p>
			 For urgent medical assistance, please call emergency services or visit the nearest emergency room. Our platform is not intended for emergencies.
		</p>
	</fieldset>

	<fieldset class="FAQ">
		<h5>Can I access my medical records online?</h5>
		<p>
			 Yes, you can securely access your medical records, including consultation summaries, prescriptions, and test results, through your account on our portal.
		</p>
	</fieldset>

	<fieldset class="FAQ">
		<h5>How do I cancel or reschedule an appointment?</h5>
		<p>
			 You can easily cancel or reschedule appointments through your account on our portal. Simply navigate to your upcoming appointments and follow the prompts to make changes.
		</p>
	</fieldset>


	<fieldset>
		<center>
		<form method="post" action="faq.php">
			Your name :<input type="text" name="pname" ><br>
			Your Email :<input type="text" name="pemail"><br>
			TelePhone : <input type="text" name="pnumber"><br>
			Your Message : <textarea name="message"></textarea>

			<center><input type="submit" name="submitBtn"></center>
				
			</textarea>

		</form>
	</center>
	</fieldset>


		<fieldset>
		<center>
			<h5>MY Inqriy</h5>
			<form method="post" action="faq.php">
			<input type="submit" name="myInquriy" value="myInquriy">

		</form>
		<?php
			if(isset($_POST['myInquriy']))
			{
				$pID = $_SESSION['patient_id'];
				$sql="SELECT `inquiryNo`, `inquiry`, `reply` FROM `inquiry` WHERE `patientID`='$pID'";

				$result =$con->query($sql);

				if ($result->num_rows > 0) {
				  echo "<table border='1 '>";
				  echo "<tr>";
				  echo "<th>Inquir NO</th>";
				  echo "<th>Inquiry</th>";
				  echo "<th>Reply</th>";
				  echo "</tr>";

				  while ($row = $result->fetch_assoc()) {
				    echo "<tr>";
				    echo "<td>" . $row["inquiryNo"] . "</td>";
				    echo "<td>" . $row["inquiry"] . "</td>";
				    echo "<td>" . $row["reply"] . "</td>";
				    echo "</tr>";
			  }

				  echo "</table>";
				} else {
				  echo "No results found.";
			}




			}


		?>
	</center>
	</fieldset>




<?php
	include "footer.php"
?>

</body>
</html>