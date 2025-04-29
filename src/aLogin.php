<?php

    $username = $_POST["userName"];
    $password = $_POST["password"];

    $user = "admin";

    if ($username == $user && $password == $user) {
        
        header("Location: admin.php");
        exit();
    } 

    else if($username == "receptionist" && $password == "receptionist")
    {
        header("Location: receptionist.php");
    }

    else if($username == "doctor" && $password == "doctor")
    {
        header("Location: doctor.php");
    }

    else if($username =="csr" && $password =="csr")
    {
        header("Location: coustomerSupportRepresentative.php");
    }


    else {
        echo "error";
        exit();
    }

?>