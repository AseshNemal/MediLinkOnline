<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MediLInk Online</title>
    <link rel="stylesheet" href="styles/admin.css">
    <style type="text/css">
        Body{
    background-image: url("images/admin.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
        }
    </style>
</head>
<body>
    <!-- Logo -->
    <img src="images/logo.png" class="logo">
    <center><h3>Customer Support Representative</h3></center>

    <!-- Patient Inquiry Form -->
    <fieldset class="set">
        <h4>Patient Inquiry</h4>
        <h5>Reply Inquiry</h5>
        <form method="post" action="coustomerSupportRepresentative.php">
            Inquiry No: <input type="text" name="inquiryNo"><br>
            CSR Reply: <textarea name="reply"></textarea><br>
            <input type="submit" name="sreply">
            <input type="reset">
        </form>
    </fieldset>

    <!-- PHP Code to Handle Inquiry Reply -->
    <?php
        // Include configuration file
        include 'php/config.php';

        // Handle form submission for replying to inquiry
        if(isset($_POST['sreply'])) {
            $id = $_POST["inquiryNo"];
            $reply = $_POST["reply"];
        
            $sql = "UPDATE `inquiry` SET `reply`='$reply' WHERE `inquiryNo`= '$id' ";
        
            if($con->query($sql)) {
                echo "Updated";
            } else {
                echo "Error";
            }
        }
    ?>

    <!-- Delete Inquiry Form -->
    <fieldset class="set">
        <form method="post" action="coustomerSupportRepresentative.php">
            <h5>Delete Inquiry</h5>
            Inquiry No: <input type="text" name="inquiryNo"><br>
            <input type="submit" name="delete">
            <input type="reset">
        </form>

        <!-- PHP Code to Handle Inquiry Deletion -->
        <?php
            include 'php/config.php';
            if(isset($_POST['delete'])) {
                $id = $_POST["inquiryNo"];
                $sql = "DELETE FROM `inquiry` WHERE inquiryNo = '$id'";
                if($con->query($sql)) {
                    echo "Deleted";
                } else {
                    echo "Error";
                }
            }
        ?>
    </fieldset>

    <!-- Inquiry List -->
    <fieldset class="set">
        <form method="post" action="coustomerSupportRepresentative.php">
            <input type="submit" name="inquiryList" value="Inquiry List">
        </form>

        <!-- PHP Code to Display Inquiry List -->
        <?php
            include 'php/config.php';
            if(isset($_POST['inquiryList'])) {
                $pID = $_SESSION['patient_id'];
                $sql = "SELECT * FROM `inquiry`";
                $result = $con->query($sql);
                if ($result->num_rows > 0) {
                    echo "<table border='1'>";
                    echo "<tr>";
                    echo "<th>Inquiry No</th>";
                    echo "<th>Patient ID</th>";
                    echo "<th>Patient Name</th>";
                    echo "<th>Email</th>";
                    echo "<th>Telephone Number</th>";
                    echo "<th>Inquiry</th>";
                    echo "<th>Reply</th>";
                    echo "</tr>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["inquiryNo"] . "</td>";
                        echo "<td>" . $row["patientID"] . "</td>";
                        echo "<td>" . $row["patientName"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["telephone"] . "</td>";
                        echo "<td>" . $row["inquiry"] . "</td>";
                        echo "<td>" . $row["reply"] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "No results found.";
                }
            }
        ?>
    </fieldset>

    <br><br>

    <!-- Logout Button -->
    <center><a href="adminlogin.php"><button>LOG OUT</button></a></center>
</body>
</html>
