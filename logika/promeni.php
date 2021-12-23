 <?php

require "../dbBroker.php";
require "../model/kurs.php";

if(isset($_POST['idizmeni']) && isset($_POST['kursizmeni']) && isset($_POST['datumizmeni']) && isset($_POST['predavacizmeni']) && isset($_POST['mestoizmeni']) && isset($_POST['vremetrajanjaizmeni'])){
    $noviKurs = new Kurs($_POST['idizmeni'],$_POST['kursizmeni'],$_POST['datumizmeni'],$_POST['predavacizmeni'],$_POST['mestoizmeni'],$_POST['vremetrajanjaizmeni']);
    $rezultat = $noviKurs->promeni($conn);
    // echo  "$rezultat";
    if($rezultat){
        echo "Uspesno";
    }else{
        echo "$rezultat";
        echo "Neuspesno dodavanje kursa";
    }
}


?>