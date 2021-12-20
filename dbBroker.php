<?php

$host = "localhost:3307";
$username = "root";
$password = "";
$dbname = "bazaphp";

$conn = new mysqli($host,$username,$password,$dbname);

if($conn->connect_errno){
    exit("Konekcija nije uspela!");
}
// echo "Connected successfully";

?>