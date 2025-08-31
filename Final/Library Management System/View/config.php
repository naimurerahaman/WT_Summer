<?php
$host="localhost"; //database er server ke store kora
$user="root";  //database er ekta username oita store korbe
$pass=""; //database er password store korbe
$dbname= "web_tech"; // my DB name

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed!". $conn->connect_error);
}

?>