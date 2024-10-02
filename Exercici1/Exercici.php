<?php

    class Employee{

        private string $nom;
        private int $sou;

        function __construct($nom, $sou){
            $this->nom = $nom;
            $this->sou = $sou;
        }

        function getNom(){
            return $this->nom;
        }
        function getSou(){
            return $this->sou;
        }

        function impost(){

            if($this->sou >= 6000):
                $respon = "Has de pagar impostos.";
            else:
                $respon= "No has de pagar impostos.";
            endif;

            return $respon;
            
        }

        function toString(){

            return "El nom del treballador es " . $this->nom . ", el sou es " . 
                $this->sou . "Ha de pagar impostos?" . $this->impost();
        }


    }

?>