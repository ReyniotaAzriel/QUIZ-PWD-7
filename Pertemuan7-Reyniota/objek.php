<?php
    class Kendaraan{
        private $merk="";
        private $model="";
        private $warna="";
        private $roda=0;

        function Klakson(){
            echo "HONK! <br>";
        }

        //set
        function setMerk($brand){
            $this->merk = $brand;
        }
        function setModel($series){
            $this->model = $series;
        }
        function setWarna($color){
            $this->warna = $color;
        }
        function setRoda($tire){
            $this->roda = $tire;
        }

        //get
        function getMerk(){
            return $this->merk;
        }
        function getModel(){
            return $this->model;
        }
        function getWarna(){
            return $this->warna;
        }
        function getRoda(){
            return $this->roda;
        }

        function setAllData($brand, $series, $color, $tire){
            $this->merk = $brand;   
            $this->model = $series;   
            $this->warna = $color;   
            $this->roda = $tire;   
        }
        
        function getAllData(){
            return $this->merk;   
            return $this->model;   
            return $this->warna;   
            return $this->roda;
        }
        // function __construct(){
        //     print "Data sebuah kendaraan <br><br>";
        // }

        // function __destruct(){
        //     print "Contact  .   About   .   Home";
        // }
    }

    class Motor extends Kendaraan{
        

        function StandardOn(){
            print "ON";
        }
        function StandardOff(){
            print "OFF";
        }
    }

    class Segitiga{
        private $tinggi=0;
        private $alas=0;
        private $sisi=0;

        function setTinggi($tinggi){
            $this->tinggi = $tinggi;
        }
        function setAlas($alas){
            $this->alas = $alas;
        }
        function setSisi($sisi){
            $this->sisi = $sisi;
        }
        
        function getTinggi(){
            return $this->tinggi;
        }
        function getAlas(){
            return $this->alas;
        }
        function getSisi(){
            return $this->sisi;
        }

        function tampilkan(){
            print "Tinggi : ".$this->tinggi."<br>";
            print "alas : ".$this->alas."<br>";
            print "sisi : ".$this->sisi."<br>";
        }
    }

    class SegitigaSamaKaki extends Segitiga{
        function hitungLuasSamaKaki(){
            print "Luas segitiga sama kaki : ". 1/2 * $alas * $tinggi;
        }

        function hitungKelilingSamaKaki(){
            print "Keliling segitiga sama kaki : ". $sisi + $sisi + $sisi;
        }
    }

    class SegitigaSikuSiku extends Segitiga{
        function hitungLuasSikuSiku(){
            print "Luas segitiga siku siku : ". 1/2 * $alas * $tinggi;
        }

        function hitungKelilingSikuSiku(){
            print "Keliling segitiga siku siku : ". $sisi + $sisi + $sisi;
        }
    }

    class SegitigaSamaSisi extends Segitiga{
        function hitungLuasSamaSisi(){
            print "Luas segitiga sama sisi : ". 1/2 * $alas * $tinggi;
        }

        function hitungKelilingSamaSisi(){
            print "Keliling segitiga sama sisi : ". $sisi + $sisi + $sisi;
        }

    }

    $segitigaGua = new Segitiga();
    $segitigaGua->setTinggi(10);
    $segitigaGua->setAlas(5);
    $segitigaGua->setSisi(15);
    $segitigaGua->tampilkan();
    $segitigaGua->hitungLuasSamaKaki();











    // $mobil = new Kendaraan();
    
    // $mobil->setMerk("Honda");
    // $mobil->setModel("Civic");
    // $mobil->setWarna("Midnight Purple");
    // $mobil->setRoda(4);
    // print "Merk Mobil : ".$mobil->getMerk()."<br>";
    // print "Model Mobil : ".$mobil->getModel()."<br>";
    // print "Warna Mobil : ".$mobil->getWarna()."<br>";
    // print "Roda Mobil : ".$mobil->getRoda()."<br>";
    // $mobil->Klakson();
    

    // $motor = new Motor();
    // $motor->setMerk("Yamaha");
    // $motor->setModel("Vixion");
    // $motor->setWarna("PUTIH (Milik Arif Edan)");
    // $motor->setRoda(2);
    // print "<br>";
    // print "Merk Motor : ".$motor->getMerk()."<br>";
    // print "Model Motor : ".$motor->getModel()."<br>";
    // print "Warna Motor : ".$motor->getWarna()."<br>";
    // print "Roda Motor : ".$motor->getRoda()."<br>";
    // $motor->StandardOn();

    // $kapalLaut = new Kendaraan();
    // $kapalLaut->setAllData("Holland America Line", "Ryndam", "Blue Cobalto", 0);
    // $kapalLaut->getAllData();