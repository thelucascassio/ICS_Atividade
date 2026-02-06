<?php
$host = "192.168.56.20";
$user = "admin";
$pass = "admin";
$db = "projeto_ics";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {die("Erro: " . $conn->connect_error);}
?>
