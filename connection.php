<?php
$server = "localhost";
$username = "root";
$pass= "";
$db = "simakan";

$conn = new mysqli($server, $username, $pass, $db);

if ($conn->connect_error) {
   die("Koneksi gagal ". $conn->connect_error);
} 
else {
   echo "Connection berhasil";
}


?>