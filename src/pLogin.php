<?php
session_start();
require 'php/config.php';
    $username = $_POST["userName"];
    $password = $_POST["password"];

    $sql = "SELECT `password`, `ID` FROM `Patient` WHERE `username` = '$username'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if($row["password"] == $password)
        {
            $_SESSION['patient_id'] = $row['ID'];
            header("Location: userAccount.php");
        }
        else
        {
            echo "Invalid Password";
        }
    }
    else {
        echo "0 results";
    }
    $con->close();
?>