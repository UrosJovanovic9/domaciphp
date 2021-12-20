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

    public static function logInKorisnik($kor,mysqli $conn){
        $upit = "SELECT ime,lozinka FROM korisniktabela WHERE ime='$kor->ime'  AND lozinka = '$kor->lozinka'";
        // echo"$upit";
        return $conn->query($upit);
        
    }
}

?>