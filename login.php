<?php
// Includes the code of dbconnect.php in the current file 
require('dbconnect.php');

// Checks if the value is present or not
if (isset($_POST['username']) and isset($_POST['password'])) {

    // Assigning POST values to variables.
    //POST method Recommended when working with SENSITIVE Information
    $username = $_POST['username'];
    $password = $_POST['password'];

    // CHECK FOR THE RECORD FROM TABLE
    $query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";

    // Execute the Query
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

    // Returns Number of Rows in Result set
    $count = mysqli_num_rows($result);


    if ($count == 1) {

        // Display Message and direct to Logout Page
        echo "<script type='text/javascript'>location.href='landing.html';alert('Logged In Successfully!!');</script>";
    } else {

        // Display Message and direct to Login Page
        echo "<script type='text/javascript'>location.href='login.html';alert('Invalid Login Credentials!!')</script>";
    }
}
