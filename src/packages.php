<?php include 'php/config.php';
if (isset($_POST['add_package'])) {
    $package_name = $_POST['package_name'];
    $package_description = $_POST['package_description'];
    $package_price = $_POST['package_price'];
    
    $insert_query = mysqli_query($con, "INSERT INTO packages (package_name, package_description, package_price) VALUES ('$package_name', '$package_description', '$package_price')") or die ("Insertion Failed!");
    if($insert_query) {
        echo '<script>alert("Package Added Successfully!");</script>';
    }else {
        echo "Error insertion!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Packages</title>
    <link rel="stylesheet" href="styles/packages.css">
</head>
<body>
    
    <?php include ('connect.php') ?>

    <div class="container">
        <section>
            <h3 class = "heading">Add Packages</h3>
            <form action="" class = "add_packages" method = "post">
                <input type="text" name = "package_name" placeholder="Enter Package Name" class = "input_fields" required>
                <textarea name = "package_description" placeholder="Enter Package Description" class = "text_area" required></textarea>
                <input type="text" name = "package_price" placeholder="Enter Package Price" class = "input_fields" required>
                <input type="submit" name = "add_package" class = "submit_btn" value = "Add Package">
            </form>
        </section>
        <center><a href="admin.php"><button>Back</button></a></center>
    </div>

</body>
</html>