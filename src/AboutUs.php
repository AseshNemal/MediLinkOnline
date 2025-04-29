
<!DOCTYPE html>
<html>
<head>
	<title>MediLink online</title>
	<link rel="stylesheet" href="styles/styles.css"> <!-- Include the main stylesheet -->
	<link rel="stylesheet" type="text/css" href="styles/appointment.css"> <!-- Include additional stylesheet for appointment -->
	<link rel="stylesheet" type="text/css" href="styles/AboutUs.css"> <!-- Include stylesheet for About Us section -->
 
	<style type="text/css">
		Body{
	background-image: url("images/bgpic.jpg"); /* Set background image for appointment section */
		}
	</style>
</head>

<body >
<?php
    include "header.php";

  ?>


<div class="container">
  <section class="col-12 flex-align">
    <div class="col-6">
      <img src="images/about us.JPEG" class="img"> <!-- Display image for About Us section -->
    </div>

    <div class="col-6 align-vertical">
      <h1 class="about-us__heading">About Us</h1>
      <p class="about-us__text">MediLink Online is a leading online medical portal that provides a variety of healthcare solutions to patients. We are committed to providing our patients with high-quality care, convenience, and affordability.At MediLink Online, our mission is to revolutionize access to healthcare by providing a secure and user-friendly online platform. We connect patients with a dedicated team of qualified doctors, nurses, and other healthcare professionals, all committed to providing exceptional care. Our team boasts extensive experience and diverse specializations, ensuring we cater to a wide range of healthcare needs.</p> <!-- About Us content -->
    </div>

  </section>
</div>

<div class="container">
  <section class="col-12 flex-align">
    <div class="col-6 align-vertical">
      <h2 class="about-us__heading">We offer a wide range of services, including</h2>
        <ul>
          <li>
            <p class="about-us__text">Online doctor consultations</p> <!-- List of services provided -->
          </li>
          <li>
            <p class="about-us__text">Prescription refills</p>
          </li>
          <li>
            <p class="about-us__text">Appointment scheduling</p>
          </li>
          <li>
            <p class="about-us__text">Health information and resources.</p>
          </li>
        </ul>
        <p class="about-us__text">Our team of qualified healthcare professionals is dedicated to providing you with the best possible care. We are here to answer your questions and help you manage your health.</p> <!-- Additional information -->
    </div>
    
    <div class="col-6">
      <img src="images/med.jpeg" class="img"> <!-- Display image for services -->
    </div>

  </section>
</div>

<div class="container">
  <section class="col-12 flex-align">
    <div class="col-6">
     <div class="box">
      <h3>Company Profile</h3>
      <p class="box_text">
        A pioneer in providing a complete ecommerce-based service, MediLink Online was launched in 2021 becoming the first software development and ICT service provider to enter the digital healthcare industry in Sri Lanka. Over the last 2 decades, MediLink Online has revolutionized the Sri Lankan healthcare sector with its innovative doctor channeling service.Strengthening the country's healthcare offerings with cutting-edge technologies, it has been bridged the gap between healthcare service providers and the public, by improving effectiveness and efficiency in a user-friendly manner. The company's dominance over this domain over the last 2 decades has seen it carve a large market share, with the brand undoubtedly at the forefront when it comes to doctor channeling in Sri Lanka.
      </p> <!-- Company profile content -->
     </div>
    </div>
    
    <div class="col-6">
     <div class="box">
      <h3>Empowering Patients</h3>
      <p class="box_text">
        We leverage cutting-edge technology to empower patients. Our platform allows for secure video consultations, convenient appointment booking, prescription refills, and access to electronic health records. We prioritize data security and privacy, implementing robust measures to safeguard your information, adhering strictly to HIPAA compliance standards. We've been recognized for our innovation and patient-centric approach, receiving the 5 Awards. Join thousands of satisfied patients who have benefited from MediLink Online's services. Take control of your health today and experience the future of healthcare! expand_more.
      </p> <!-- Information about empowering patients -->
     </div>
    </div>

  </section>
</div>

<div class="container">
  <section class="col-12">
    <div class="align-horizontal">
      <h2>Our Hospital Partners</h2>
      <p class="partners__text">
        Nawaloka Hospital
        <br>
        Asiri Hospital
        <br>
        Lanka Hospital
        <br>
        Royal Hospital
        <br>
        Kings Hospital
        <br>
        Durdans Hospital
      </p> <!-- List of hospital partners -->
    </div>
  </section>
</div>
<?php
  include "footer.php";
?>


</body>
</html>