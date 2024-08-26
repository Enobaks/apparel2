<?php

// host
$host = "localhost";

// dbname
$dbname = 'cloth-store';

// User
$user = 'root';

// pass
$pass = '';

$conn = new PDO("mysql:host=$host;dbname=$dbname;", $user, $pass);

// if($conn == true) {
//     echo "it's working fine";
// } else {
//     echo "connection is wrong";
// }
// if($conn !== true) {
//     echo "connection is wrong";
// }



?>