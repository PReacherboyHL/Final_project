<?php
/* Database credentials. Assuming you are running MySQL
 server with default setting (user 'root' with no password) */
 define("SERVER","Localhost");
 define("USERNAME","Harry");
 define("PASSWORD","Mixer4211");
 define("DB_NAME","learn_and_co_66522023");

/* Attempt to connect to MySQL database */
$link = mysqli_connect(SERVER, USERNAME, PASSWORD, DB_NAME);

// Check connection
if ($link === false) {
    die('ERROR: Could not connect. ' . mysqli_connect_error());
}

?>
