<?php
$servername = "localhost";
$username = "root";
$password = "root";      
$dbname = "muhammad_rafi_irfan";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>