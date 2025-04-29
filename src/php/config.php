<?php
$con=new mysqli("localhost","root","","MediLinkOnline");

if($con->conect_error)
{
	die("connectiopn failed".$con->conect_error);
}



?>