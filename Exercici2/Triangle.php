<?php

    class Triangle extends Shape{

        function __construct($ample, $alt){
            parent::__construct($ample,$alt);

        }

        function area(){

            return (parent::getAmple() * parent::getAlt())/2;

        }


        function toString(){

            return "Calculem l'area d'un triangle amb base " . parent::getAmple() . " i un alt de " . 
            parent::getAlt() . " la seva area es " . $this->area();
        }

    }

?>