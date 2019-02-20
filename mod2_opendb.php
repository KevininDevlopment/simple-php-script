<?php

// Make a MySQL Connection
$con=mysqli_connect($servername, $username, $password, $db_name);
// check for connection error
if ($con->connect_errno) {
    echo $mysqli->connect_error;
    exit();
}

?>