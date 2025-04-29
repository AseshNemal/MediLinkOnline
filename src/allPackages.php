<?php 

include 'php/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Check Packages</title>
    <link rel="stylesheet" href="styles/packages.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <?php
        include "header.php";

    ?>

    <div class="container">
        <section class="packages">
            <h3 class = "heading">Health Check Packages</h3>
            <div class="package_container">
                <?php
                    $select_packages = mysqli_query($con, "SELECT * FROM packages");
                    if(mysqli_num_rows($select_packages) > 0) {
                        while($fetch_package = mysqli_fetch_assoc($select_packages)){
                            
                ?>
                            <form>
                                <div class="edit_form">
                                <h3><?php echo $fetch_package['package_name'] ?></h3>
                                <h5><?php echo $fetch_package['package_description'] ?></h5>
                                <div class="price">Price : Rs. <?php echo $fetch_package['package_price'] ?>/=</div>
                                </div>
                            </form>
                <?php
                        }
                        
                    }else {
                        echo "No packages";
                    }
                ?>

            </div>

        </section>

    </div>

    <?php
        include "footer.php";
    ?>
    
</body>
</html>