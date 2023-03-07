<?php
    // Get the form data
$name = $_GET['username'];
$emailid = $_GET['email'];
$address=$_GET['address'];
$blood_group=$_GET['bloodgroup'];
$passwrd=$_GET['pass'];
$confirm=$_GET['conf'];
// Connect to the database
  $mysqli = mysqli_init();
  $mysqli->ssl_set(NULL, NULL, "/etc/ssl/certs/ca-certificates.crt", NULL, NULL);
  $mysqli->real_connect($_ENV["HOST"], $_ENV["USERNAME"], $_ENV["PASSWORD"], $_ENV["DATABASE"]);
  $mysqli->close();
$conn = mysqli_connect($_ENV["HOST"], $_ENV["USERNAME"], $_ENV["PASSWORD"], $_ENV["DATABASE"];
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
