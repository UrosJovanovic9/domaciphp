<?php

$server = "localhost:3307";
$username = "root";
$password = "";
$dbname = "bazaphp";

$conn = mysqli_connect($server,$username,$password,$dbname);

if(isset($_POST['submit'])){
    if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "insert into korisnik(ime,mejl,lozinka) values('$username','$email','$password')";

        $run = mysqli_query($conn,$query) or die(mysqli_error());

        if($run){
            echo "Uspesno ste se prijavili!";
        }else{
            echo "Podaci nisu potvrdjeni";
        }

    }else{
        echo "Sva polja su obavezna!";
    }
}

?>