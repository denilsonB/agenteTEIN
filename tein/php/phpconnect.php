<?php

$servername = "localhost";
$username = "id11182962_denilsonb";
$password = "123456";
$database = "id11182962_bancoadd";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Conectado ao banco corretamente";
?>