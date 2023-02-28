<?php
    //Getting data from form tag
    $email_add=$_POST['email'];
    $password=$_POST['pass'];
    // Database Connectivity
    $conn = new mysqli('localhost','root','poudeL46@','blood')
    if($conn->connect_error){
        die('Connection Failed':'$conn->connect_error')
    }
    else{
        $stmt=$conn->prepare("SELECT * FROM login WHERE email='email' and password='password'")
    }

?>