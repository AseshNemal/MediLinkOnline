<?php 
include 'php/config.php';
if(isset($_GET['delete'])) {

    $delete_id = $_GET['delete'];
    $delete_query = mysqli_query($con, "DELETE FROM packages WHERE package_id = $delete_id") or
    die("Query failed!");
    if($delete_query) {
        echo "Package deleted";
        header('location:view_packages.php');
    }else {
        echo "Package not delected";
        header('location:view_packages.php');
    }
}

?>