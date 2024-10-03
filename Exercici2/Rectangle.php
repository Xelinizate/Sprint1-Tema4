<?php

    class Rectangle extends Shape{

        function __construct($ample,$alt){
            parent::__construct($ample,$alt);

        }

        function area(){

            return parent::getAmple() * parent::getAlt();

        }

        function toString(){

            return "Les mides del rectangle son " . parent::getAmple() . 
            " de ample amb un alt de " . parent::getAlt() . ", la seva area es " . 
            $this->area();
        }
    }


?>