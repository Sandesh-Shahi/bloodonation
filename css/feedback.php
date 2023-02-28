<?php
    // Get the form data
$name = $_GET['username'];
$emailid = $_GET['usermail'];
$feedback=$_GET['userfeedback'];
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
$sql = "INSERT INTO feedback VALUES ('$name','$emailid','$feedback');";
if (mysqli_query($conn, $sql)) {
    echo "Record inserted successfully";
} else {
    echo "Error inserting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
<?php
  $mysqli = mysqli_init();
  $mysqli->ssl_set(NULL, NULL, "/etc/ssl/certs/ca-certificates.crt", NULL, NULL);
  $mysqli->real_connect($_ENV["HOST"], $_ENV["USERNAME"], $_ENV["PASSWORD"], $_ENV["DATABASE"]);
  $mysqli->close();
?>


