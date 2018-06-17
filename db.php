<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
$servername = "localhost";
$usernam = "root";
$passwor = "";
$dbname = "angular";
$conn = new mysqli($servername, $usernam, $passwor, $dbname);
?>