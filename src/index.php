<?php 
	function displayGreeting()
	{
		include 'php/config.php';
		session_start();
		$name="";

		if(isset($_SESSION['patient_id']))
		{
			
			
			$id=$_SESSION['patient_id'];
			$sql = "SELECT `firstName` FROM `Patient` WHERE `ID`='$id'";
			$result = $con->query($sql); 
			
			if($result->num_rows > 0)
			{
				$row = $result->fetch_assoc();
				$name = $row['firstName']; 
			}

		
	}
		

		$hour = date('hour');
		if ($hour = 0 && $hour <= 12)
		{
			echo "Good Morning ! <br>". $name ;
		}
		else if ($hour >= 12 && $hour <= 17)
		{
			echo "Good Afternoon ! <br>". $name;
		}
		else
		{
			echo "Good Evening ! <br>". $name ;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>MediLink online</title>
	<link rel="stylesheet" href="styles/styles.css">
	<script src="js/home.js"></script>
</head>

<body>
	
<!--- Heder --->
	<img src="images/logo.png" class="logo">

	<ul id="naviUL">
		<li class="naviLI"><a href="#">Home</a></li>
		<li class="naviLI"><a href="payOnline.php">Pay Online</a></li>
		<li class="naviLI"><a href="bookAppointment.php">Book Appointment</a></li>
		<li class="naviLI"><a href="bookAppointment.php">Health Check Packages</a></li>
		<li class="naviLI"><a href="signin.php">Sign In</a></li>
		<li class="naviLI"><a href="aboutUs.php">About Us</a></li>

		<li style="float: right;"><a href="userAccount.php"><img src="images/user.png" width="25px" align="userLogo" style="padding: -10px;
		margin: -10px;"></a></li>

		<li style="float:right; padding-top: 15px; padding-right: 20px; color: green"><?php displayGreeting(); ?></li>

	</ul>


<!---End Header---> 

	
	<div class="banner">
		<img src="images/banner1.jpg" id="banner1">
		<div  class="bannerText">
			<h1>We are leading Healthcare <br> solutions company</h1>
			<p>We are committed to delivering our products and service to<br> an ever-widening base of customers.</p>
			<button style="background-color: lightgray; border-radius: 12px;"><a href="aboutUs.html">Know more</a></button>


		</div>

<center>
	<h1>Welcome to MediLink online</h1>
	<p>Welcome to our comprehensive online medical portal, your trusted source for all things health-related. From informative articles and expert advice to personalized health tools and resources, our platform is designed to empower you on your wellness journey. Whether you&#39;re seeking medical information, looking for healthcare providers, or managing your health records, we&#39;ve got you covered. Join our community today and take control of your health with ease and confidence.<p>
</center>

<div class="servies">
	<div class="servieslist">
		<img src="images/appointmentBooking.png" class="serviesimg">
		<h3>Appointment Booking</h3>
		<p>Schedule appointments with doctors, specialists,<br> or healthcare facilities conveniently online.</p>
	</div>

	<div class="servieslist">
		<img src="images/Records.webp" class="serviesimg">
		<h3>Health Records Management</h3>
		<p>Store and manage personal health records securely, including medical history, test results, and immunizations.</p>
	</div>

	<div class="servieslist">
		<img src="images/Emergency.png" class="serviesimg">
		<h3>Emergency Services</h3>
		<p>Access emergency medical assistance, urgent care information, or emergency contact details directly through the portal in case of medical emergencies.</p>
	</div>

	<div class="servieslist">
		<img src="images/MentalHealth.png" class="serviesimg">
		<h3>Mental Health Support</h3>
		<p> Access resources, therapy sessions, or counseling services for mental health concerns such as anxiety, depression, or stress management.<p>
	</div>

	<div class="servieslist">
		<img src="images/LocalDir.webp" class="serviesimg">
		<h3>Local Healthcare Provider Directory</h3>
		<p> Access a directory of healthcare providers, hospitals, clinics, and pharmacies in Sri Lanka, with detailed information on specialties, services offered, and contact details.</p>
	</div>

	<div class="servieslist">
		<img src="images/TraditionalMedi.webp" class="serviesimg">
		<h3>Traditional Medicine Resources</h3>
		<p> Explore information on traditional Sri Lankan medicine practices, herbal remedies, and alternative therapies, along with guidance on integrating traditional and modern healthcare approaches.</p>
	</div>
</div>

<fieldset id="opd">
	<legend>OPD HOURS</legend>
	<h3>MONDAY TO SATURDAY</h3>
	<h4>09:00AM TO 10:00PM</h4>
	<p>All facilties user MediLink Group of hospitals are equipped with state-of-the-art equipment and focused on providing services of the highest quality</p>
</fieldset>


<h2>Top Specialists</h2>

<div class="specializes">
	<div class="specializeslist">
		<h3>Channel a Physicial</h3>
		<p>A Physician is a Medical Practitioner who specializes in General or internal medicine(diagnosing & treatment) other than surgical means.</p>
	</div>

	<div class="specializeslist">
		<h3>Channel a Cardiologist</h3>
		<p>A Cardiologist specializes in the structure, functions and diseases of the heart and blood vessels.</p>
	</div>

	<div class="specializeslist">
		<h3>Channel a Gynecologist</h3>
		<p>A Gynecologist is a medical specialist who has specialized in the diseases of women & girls,particularly of their female reproductive system</p>
	</div>

	<div class="specializeslist">
		<h3>Channel a Pediatrician</h3>
		<p>A Pediatrician is a medical practitioner specializing in children and their diseases.</p>
	</div>

	<div class="specializeslist">
		<h3>Channel a Neurologist</h3>
		<p>A Neurologist is a medical doctor who specializes on diseases of the nervous system of diseases of the nervous system including the brain and spinal cord.</p>
	</div>

	<div class="specializeslist">
		<h3>Channel an Endocrinologist and Diabetologist</h3>
		<p>A Physician specializing on the structures and functions of the endocrine glands and the substances they secrete-hormones. including
		insulin, thyroxin etc.</p>
	</div>

	<div class="specializeslist">
	<h3>Channel an Eye Surgeon</h3>
	<p>An Eye Surgeon is a medical professional who specializes on the surgical intervention & other remedies for the diseases/disorders of the Eye.</p>
	</div>

	<div class="specializeslist">
		<h3>Channel a Dermatologist</h3>
		<p>A Dermatologist is a Medical Specialist concerned with the diagnosis and treatment of skin disorders including hairs.</p>
	</div>

	<div class="specializeslist">
		<h3>Channel an Ayurvedic Physici an</h3>
		<p>This refers to a Medical Practitioner who specializes in general or internal medicine (diagnosing & treatment of
		Ayurveda).</p>
	</div>

	<div class="specializeslist">
		<h3>Channel a Vascular and Trans plant Surgeon (Liver and Kid ney)</h3>
		<p>A Vascular surgeon is a medical professional who has experience in liver & kidney transplants</p>
	</div>

	<div class="specializeslist">
		<h3>Channel a Nephrologist</h3>
		<p>A Nephrologist is a medical professional specializing in the investigations and management of diseases of the kidney.</p>
	</div>

	<div class="specializeslist">
		<h3>Channel a Cardiothoracic Surgeon</h3>
		<p>This refers to a thoracic surgeon who specializes in the surgical intervention for the treatment of heart disorders.</p>

	</div>

	<div class="specializeslist">
		<h3>Channel a Neuro Physician</h3>
		<p>This refers to a Physician specializing on the structure, functioning and diseases of the nervous system including the brain and spinal cord.<p>
	</div>

	<div class="specializeslist">
		<h3>Channel an Orthopedic Surgeon</h3>
		<p>This refers to a Surgeon who specializes on practice of correcting deformities caused by disease, injuries or damage to the joints or bones.</p>
	</div>

	<div class="specializeslist">
		<h3>Channel a Genito Urinary Surgeon</h3>
		<p>This refers to a Surgeon who specializes in genital and urinary organs. (Urogenital, urinosexual)</p>
	</div>

	<div class="specializeslist">
		<h3>Channel a Paediatric Dermatologist</h3>
		<p>Pediatric dermatologists are doctors who specialize in treating children's skin, hair, and nails.</p>
	</div>

	<div class="specializeslist">
		<h3>Channel a Neonatal Paediatrician</h3>
		<p>This is a pediatrician who specializes in the treatment of an infant at any time during the first 28 days, and also babies born pre-mature.</p>
	</div>

	<div class="specializeslist">
		<h3>Channel a Rheumatologist</h3>
		<p>A Rheumatologist is a medical professional specializing in the diagnosis and management of diseases involving joints, tendons, muscles, ligaments and associated structures (eg: Arthritis, Rheumatism).</p>
	</div>

	<div class="specializeslist">
		<h3>Channel an Oncologist and Cancer Specialist</h3>
		<p>This refers to a Physician specializing in the diagnosis, treatment and rehabilitation of patient with malignant tumors (cancers).</p>
	</div>

	<div class="specializeslist">
		<h3>Channel a Chest Specialist</h3>
		<p>This refers to a physician specializing in the diseases of the respiratory system (breathing system) including the lungs.</p>
	</div>




</div>

<hr>
<h3>Our Hospital Departments</h3>

<div class="department">
	<div class="departmentList">
	<button class=departmentB type="button" id="btn1" onclick="loadData('btn1')">DENTAL SCIENCES</button><br>

   <button class=departmentB type="button" id="btn2" onclick="loadData('btn2')">RENAL MEDICINE</button><br>

   <button class=departmentB type="button" id="btn3" onclick="loadData('btn3')">ORTHOPEDICS AND JOINT REPLACEMENT</button><br>

   <button class=departmentB type="button" id="btn4" onclick="loadData('btn4')">PAEDIATRICS AND NEONATOLOGY</button><br>

   <button class=departmentB type="button" id="btn5" onclick="loadData('btn5')">SURGERY</button><br>

   <button class=departmentB type="button" id="btn6" onclick="loadData('btn6')">RESPIRATORY MEDICINE</button><br>

   <button class=departmentB type="button" id="btn7" onclick="loadData('btn7')">UROLOGY</button><br>
	</div>

	<div class="departmentList">
		<h4 id="depH">DENTAL SCIENCES</h4>
		<img id="depIMG" src="images/department/d1.png">
		<p id="depP">The department comprises of a rich team of exceptionally talented and highly skilled dental surgeons offering the entire spectrum of routine and specialised dental care such as oral and maxillofacial surgery, advanced conservative treatment, orthodontics, periodontics, dental implants, paedodontics, aesthetic dentistry, endodontics and restorative dentistry.</p>
		
	</div>

</div>

<?php
include "footer.php"


?>

</body>
</html>
