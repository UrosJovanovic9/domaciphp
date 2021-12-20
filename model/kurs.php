<?php

class Kurs{
    public $id;
    public $naziv;
    public $datum;
    public $predavac;
    public $mesto;
    public $vremeTrajanja;
    public $korisnikId;

    public function __construct($id=null,$naziv=null,$datum=null,$predavac=null,$mesto=null,$vremeTrajanja=null,$korisnikId=null){
        $this->id = $id;
        $this->naziv = $naziv;
        $this->datum = $datum;
        $this->predavac = $predavac;
        $this->mesto = $mesto;
        $this->vremeTrajanja = $vremeTrajanja;
        $this->korisnikId = $korisnikId;
    }

    public static function uzmiSve (mysqli $conn){
        $upit = "SELECT * FROM kurstabela";
        return $conn->query($upit);
    }



    public static function uzmiPoId($id, mysqli $conn){
        $upit = "SELECT * FROM kurstabela WHERE id = $id";

        return $conn->query($upit);
    }


    public static function obrisiPoId(mysqli $conn){
        $upit = "DELETE FROM kurstabela WHERE id = $this->id";
        return $conn->query($upit);
    }

    public static function dodajKurs(Kurs $kurs,mysqli $conn,){
        $upit = "INSERT INTO kurstabela (naziv,datum,predavac,mesto,vremetrajanja) VALUES ('$kurs->naziv','$kurs->datum','$kurs->predavac','$kurs->mesto','$kurs->vremeTrajanja')";
        return $conn->query($upit);
    }


    public function promeni(mysqli $conn){
        $upit = "UPDATE kurstabela SET naziv = '$this->naziv', datum = '$this->datum',predavac = '$this->predavac', '$this->mesto','$this->vremeTrajanja'";
        return $conn->query($upit);
    }
}

?>