<?php

    class Area extends Shape{

        private $base;

        function __construct($ample, $alt, $base){
            parent::__construct($ample,$alt);
            $this->base = $base;

        }

        function getBase(){
            return $this->base;
        }

        function triangle(){

            $area = ($this->base * parent::getAlt())/2;

            return $area;

        }

        function rectangle(){

            $area = parent::getAmple() * parent::getAlt();

            return $area;

        }

        
        function toString(){

            return "Calculem l'area d'un triangle amb base " . $this->base . " i un alt de " . 
            parent::getAlt() . " la seva area es " . $this->triangle() . "<br>" . 
            "Les mides del rectangle son " . parent::getAmple() . 
            " de ample amb un alt de " . parent::getAlt() . ", la seva area es " . 
            $this->rectangle();;
        }


    }


?>