<?php include 'php/config.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package View (Admin)</title>
    <link rel="stylesheet" href="styles/packages.css">
</head>
<body>
    <div class="container">
        <section class = "display_packages">
            <table>
                <thead>
                    <th>PackageID</th>
                    <th>Package Name</th>
                    <th>Package Description</th>
                    <th>Package Price</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    <!-- php code -->
                    <?php 
                         $display_packages = mysqli_query($con, "SELECT * FROM packages");
                         $num = 1;
                         if(mysqli_num_rows($display_packages) > 0) {
                            while($row = mysqli_fetch_assoc($display_packages)) {
                                ?>
                                <tr>
                                    <td><?php echo $num ?></td>
                                    <td><?php echo $row['package_name'] ?></td>
                                    <td><?php echo $row['package_description'] ?></td>
                                    <td><?php echo $row['package_price'] ?></td>
                                    <td>
                                        <a href="edit.php?edit=<?php echo $row['package_id'] ?>">Edit</a>
                                    </td>
                                    <td>
                                        <a href="delete.php?delete=<?php echo $row['package_id'] ?>" 
                                        onclick = "return confirm('Are you sure you want to delete this package');">Delete</a>
                                    </td>
                                </tr>
                        <?php
                        $num++;
                            }
                            
                         }else {
                            echo "No packages available";
                         }
                    ?>
                    
                </tbody>
            </table>
        </section>
        <center><a href="admin.php"><button>Back</button></a></center>
    </div>
</body>
</html>