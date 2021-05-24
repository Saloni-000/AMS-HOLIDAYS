<?php
    // Make Connection with Database & create a instance (object) of database
    $conn = new mysqli('mysqlhost', 'id10964034_ams', 'ams123', 'id10964034_ams');

    // For Error while Connecting
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Assigning GET values to variables.
    // GET Method NOT RECOMMENDED for SENSITIVE Information
    $username = $_GET["username"];
    $password = $_GET['password'];
    $email = $_GET["email"];

    // CHECK FOR THE RECORD FROM TABLE
    $query = "INSERT INTO `users` (username, password ,email) VALUES ('$username','$password','$email')";

    // Executing the Query,-> is for using the query method(acts like a dotproduct)
    if ($conn->query($query) === TRUE) {

        // Display Message and direct to Logout Page
        echo "<script type='text/javascript'> location.href='landing.html';alert('Registered Successfully!!');</script>";
    } 
    else {
        // Display Error Message
        echo "Error: ". $sql."<br>". $conn->error;
    }
