<?php
session_start();
include 'config.php';

$docName=$_POST["doctorName"];
$Specialization=$_POST["Specialization"];
$data=$_POST["date"];
$time=$_POST["time"];
$patientID=$_SESSION['patient_id'];


 $sql="INSERT INTO `Appointment`(`appointmentID`, `doctorName`, `Specialization`, `date`, `time`, `Approved`, `docId`, `patientID`) VALUES (NULL, '$docName', '$Specialization', '$data', '$time', NULL,NULL,'$patientID')";

 if($con->query($sql))
 {
 	echo '<script>alert("Appointment successful ");</script>';


 }

 else
 {
 	echo "Error".$con->error;
 }


?>