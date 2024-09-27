<?php

    class Shape {

        private int $ample;
        private int $alt;

        function __construct($ample, $alt){
            $this->ample = $ample;
            $this->alt = $alt;
        }

        function getAmple(){
            return $this->ample;
        }
        function getAlt(){
            return $this->alt;
        }
        function setAmple($ample){
            $this->ample = $ample;
        }
        function setAlt($alt){
            $this->alt = $alt;
        }


    }



?>