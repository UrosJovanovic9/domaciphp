<?php

class Korisnik {
    public $id;
    public $ime;
    public $lozinka;

    public function __construct($id =null,$ime=null,$lozinka=null){
        $this->id = $id;
        $this->ime = $ime;
        $this->lozinka = $lozinka;
    }

    public static function logInKorisnik($ime,$lozinka, mysqli $conn){
        $upit = "SELECT ime,lozinka FROM korisniktabela WHERE ime='$ime' AND lozinka = '$lozinka'";
        // echo"$upit";
        return $conn->query($upit);
        
    }

    public static function vratiIdKorisnika($ime, $lozinka, mysqli $conn){
        $upit = "SELECT id FROM korisniktabela WHERE ime = '$ime' AND lozinka = '$lozinka'";
        return $conn->query($upit);
    }
}

?>