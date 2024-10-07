<?php

    require_once 'Shape.php';

    class Triangle extends Shape{


        function area(){

            return ( $this->ample * $this->alt)/2;

        }


        function toString(){

            return "Calculem l'area d'un triangle amb base " . $this->ample . " i un alt de " . 
            $this->alt . " la seva area es " . $this->area();
        }

    }

?>