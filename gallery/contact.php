<?php
    $name = $_GET['nameoforg'];
    $emailid = $_GET['emailadd'];
    $address = $_GET['address'];
    $number = $_GET['phoneno'];
    $no_of_vol = $_GET['noofvolu'];
    $bootcamp = $_GET['bootcamp'];
    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "poudeL46@";
    $database = "blood";
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check the connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO contact VALUES ('$name','$emailid','$address','$number','$no_of_vol','$bootcamp')";

    if (mysqli_query($conn, $sql)) {
        echo "Record inserted successfully";
    } else {
        echo "Error inserting record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>
