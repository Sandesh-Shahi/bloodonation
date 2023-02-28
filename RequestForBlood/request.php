<?php
    // Get the form data
$name = $_GET['Patient'];
$emailid = $_GET['email'];
$age = $_GET['age'];
$add = $_GET['address'];
$mobile = $_GET['phone'];
$quantity = $_GET['quantity'];
$blood_grp = $_GET['blood_group'];
$gender = $_GET['Gender'];

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
$sql = "INSERT INTO request VALUES ('$name','$age','$add','$mobile','$blood_grp','$gender','$emailid');";
if (mysqli_query($conn, $sql)) {
    echo "Record inserted successfully";
} else {
    echo "Error inserting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>