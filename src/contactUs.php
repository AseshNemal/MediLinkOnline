<!DOCTYPE html>
<html>
<head>
    <!-- Title of the webpage -->
    <title>MediLink online</title>
    
    <!-- External stylesheet links -->
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" type="text/css" href="styles/contactus.css">
    
    <!-- Internal CSS styling for background image -->
    <style type="text/css">
        Body{
            background-image: url("images/background.jpg");background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
</head>

<body>
    <!-- Including the header.php file for consistency across pages -->
    <?php 
        include "header.php";
    ?>

    <!-- Section containing the map image -->
    <div class="col-12">
        <img class="map-img"  src="images/map.JPEG" alt="map" />
    </div>

    <!-- Container for the contact form and information -->
    <div class="container">
        <!-- Contact Form -->
        <div class="col-3">
            <h2>Contact Us</h2>
            <div>
                <!-- Contact form for users to submit inquiries -->
                <form action="contactUs.php" method="post">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">
                    
                    <label for="Email">Your Email</label>
                    <input type="text" id="email" name="emailaddress" placeholder="Your Email address..">
                    
                    <label for="telephone">Telephone</label>
                    <input type="text" id="telephone" name="telephone" placeholder="Your number..">
                    
                    <label for="massage">Your Message</label>
                    <textarea name="message"></textarea>
                    
                    <input type="submit" value="Send Message" name="submitBtn">
                </form>
                
                <?php
                    // PHP code to handle form submission
                    include 'php/config.php';
                    session_start();
                    if(isset($_POST['submitBtn'])) {    
                        $pID="1";
                        $name = $_POST["firstname"];
                        $email = $_POST["email"];
                        $telephone = $_POST["telephone"];
                        $message = $_POST["message"];
                        $pID = $_SESSION['patient_id'];
                        
                        // SQL query to insert inquiry into database
                        $sql = "INSERT INTO `inquiry` (`inquiryNo`, `patientID`, `patientName`, `email`, `telephone`, `inquiry`, `reply`) VALUES (NULL, '$pID', '$name', '$email', '$telephone', '$message', NULL)";
                        
                        // Execute SQL query and provide feedback
                        if ($con->query($sql)) {
                            echo '<script>alert("Successfully Sent an inquiry");</script>';
                        } else {
                            echo "error: ";
                        }
                        
                        $con->close();
                    }
                ?>
            </div>



        </div>
        
        <!-- Information about MediLink -->
        <div class="col-3">
            <div>
                <h2>MediLink</h2>
                <!-- Description of MediLink's services and communication options -->
                <p>At MediLink, we understand that reaching out for medical guidance can sometimes feel overwhelming. That's why we offer multiple ways to connect with us, whether you have a quick question or need to schedule an appointment. Feel free to browse our Frequently Asked Questions section for answers to common inquiries. Otherwise, you can reach us by phone, email, or through our secure contact form. Our friendly and knowledgeable staff is here to assist you!</p>
            </div>
            <div>
                <h2>Contact Number</h2>
                <!-- Contact numbers for emergency and general inquiries -->
                <p>Emergency Hotline-1566 / 011 553 0000</p>
                <p>General Line- 011 543 0000</p>
                <p>Fax-011 451 1199</p>
                <p>Email info@MediLink.com</p>
            </div>

                
            

        </div>
        
        <!-- More information about services -->
        <div class="col-3">
            <div>
                <h3>Highlighting Expertise and Personalized Care</h3>
                <!-- Description of personalized care and services provided by MediLink -->
                <p>We believe in providing exceptional care that goes beyond prescriptions and diagnoses. We're committed to building strong relationships with our patients. Our team of qualified healthcare professionals is here to listen to your concerns and provide personalized medical advice. If you have any questions or need to schedule an appointment, don't hesitate to contact us using the methods below. We look forward to connecting with you!</p>
            </div>
            <div>
                <!-- Further information about contacting MediLink for inquiries -->
                <p>Your health and well-being are our top priority at MediLink online. We understand that navigating healthcare concerns can be time-consuming. To ensure a smooth and efficient experience, we offer various contact options to best suit your needs. Our website's comprehensive FAQ section addresses common inquiries. For more specific questions or to schedule an appointment, feel free to reach out to our team via phone, email, or our secure online contact form. We value clear communication and will respond promptly to your inquiries.</p>
            </div>
        </div>
    </div>

    <!-- Including the footer.php file for consistency across pages -->
    <?php
        include "footer.php"
    ?>
</body>
</html>
```
