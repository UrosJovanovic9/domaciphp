<?php

require "../dbBroker.php";
require "../model/kurs.php";
// require "../index.php";

session_start();

$idKorisnika = $_SESSION['korisnik_id'];

if(isset($_POST['kurs']) && isset($_POST['datum']) && isset($_POST['predavac']) && isset($_POST['mesto']) && isset($_POST['vremetrajanja'])){
    $kurs = new Kurs(null,$_POST['kurs'],$_POST['datum'],$_POST['predavac'],$_POST['mesto'],$_POST['vremetrajanja'],$idKorisnika);
    $status = Kurs::dodajKurs($kurs,$conn);
    if($status){
        echo "Uspesno dodavanje kursa";
    }else{
        echo "$status";
        echo "Neuspesno dodavanje kursa";
    }
}

exit();

?>