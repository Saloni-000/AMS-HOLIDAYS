<?php
// Establish connection with the MySQL
$connection = mysqli_connect('mysqlhost', 'id10964034_ams', 'ams123');
if (!$connection) {
    // Display Error Message & Exit the script
    die("Database Connection Failed" . mysqli_error($connection));
}

// Selects the Database within MySQL
$select_db = mysqli_select_db($connection, 'id10964034_ams');
if (!$select_db) {
    // Display Error Message & Exit the script
    die("Database Selection Failed" . mysqli_error($connection));
}
