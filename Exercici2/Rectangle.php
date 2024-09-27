<?php

    class Rectangle extends Shape{

        function __construct($ample,$alt){
            parent::__construct($ample,$alt);

        }

        function area(){
            $area;

            $area = parent::getAmple() * parent::getAlt();

            return $area;

        }

        function toString(){

            return "Les mides del rectangle son " . parent::getAmple . 
            " de ample amb un alt de " . parent::getAlt . ", la seva area es " . 
            area();
        }
    }


?>