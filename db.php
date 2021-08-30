<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "Webpr";
$con = mysqli_connect($servername, $username, $password,$db);
if (!$con) {
    die("Konekcija nije uspela: " . mysqli_connect_error());
}


?>