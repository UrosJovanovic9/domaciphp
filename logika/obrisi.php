<?php

require "../dbBroker.php";
require "../model/kurs.php";


if(isset($_POST['id'])){
    $kursZaBrisanje = new Kurs($_POST['id']);
    $rezultat = $kursZaBrisanje->obrisiPoId($conn);
    if($rezultat){
        echo "Uspesno obrisan izabrani kurs";
    }else{
        echo "Kurs nije uspesno obrisan";
    }
}

?>