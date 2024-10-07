<?php

    require_once 'Shape.php';

    class Rectangle extends Shape{


        function area(){

            return $this->ample * $this->alt;

        }

        function toString(){

            return "Les mides del rectangle son " . $this->ample . 
            " de ample amb un alt de " . $this->alt . ", la seva area es " . 
            $this->area();
        }
    }


?>