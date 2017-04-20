<?php


    class usuario {

        private $name;

        public function setName($n){

            $this->name = $n;
        }

        public function getName(){

            return $this->name;

        }
}