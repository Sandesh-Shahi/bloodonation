<?php
    // Get the form data
$name = $_GET['username'];
$emailid = $_GET['email'];
$address=$_GET['address'];
$blood_group=$_GET['bloodgroup'];
$passwrd=$_GET['pass'];
$confirm=$_GET['conf'];
// Connect to the database
$servername = "sql105.epizy.com";
$username = "epiz_33731055";
$password = "8T6FXTViFCG3U5V";
$database = "epiz_33731055_blood";
$conn = mysqli_connect($servername, $username, $password, $database);
// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO signup VALUES ('$name','$emailid','$address','$blood_group','$passwrd','$confirm');";
if (mysqli_query($conn, $sql)) {
    echo "Account Created Sucessfull";
} else {
    echo "Error inserting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
