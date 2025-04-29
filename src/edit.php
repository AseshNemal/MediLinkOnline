<?php include 'php/config.php';

if(isset($_POST['edit_package'])){
    $update_package_id = $_POST['update_package_id'];
    $update_package_name = $_POST['update_package_name'];
    $update_package_description = $_POST['update_package_description'];
    $update_package_price = $_POST['update_package_price'];

    $update_packages = mysqli_query($con,"UPDATE packages SET package_name = '$update_package_name', package_description = '$update_package_description', package_price = '$update_package_price' WHERE package_id = $update_package_id");
    if($update_packages) {
        echo '<script>alert("Package Updated Successfully!");</script>';
    }else {
        echo "Error";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Package Details</title>
    <link rel="stylesheet" href="styles/packages.css">
</head>
<body>
    <section class="edit_container">
        <?php 
            if(isset($_GET['edit'])) {
                $edit_id = $_GET['edit'];
                $edit_query = mysqli_query($con, "SELECT * FROM packages WHERE package_id = $edit_id");
                if(mysqli_num_rows($edit_query) > 0) {
                    $fetch_data = mysqli_fetch_assoc($edit_query);
                        
                    ?>
            <form action="" method = "post" class = "edit_package package_container_box">
            <input type="hidden" value = "<?php echo $fetch_data['package_id']?>" name = "update_package_id">
            <input type="text" class = "input_fields fields" value = "<?php echo $fetch_data['package_name']?>" name = "update_package_name" required>
            <textarea class = "input_fields fields" name = "update_package_description" required><?php echo $fetch_data['package_description']?></textarea>
            <input type="text" class = "input_fields fields" value = "<?php echo $fetch_data['package_price']?>" name = "update_package_price" required>
            <div class="btns">
                <input type="submit" class = "edit_btn" value = "Edit Package" name = "edit_package">
                <input type="reset" id = "close-edit" class = "cancel_btn" value = "Cancel">
            </div>
        </form>
        <?php
            
                
            }
            }
        ?>
        
    </section>
    <center><a href="view_packages.php"><button>Back</button></a></center>
</body>
</html>