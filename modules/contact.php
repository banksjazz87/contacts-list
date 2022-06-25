<?php   
    class Contact {
        public $name;
        public $number;

        function __construct($name, $number){
            $this->name = $name;
            $this->number = $number;
        }

        function get_name(){
            return $this->name;
        }

        function get_number(){
            return $this->number;
        }
    }
?>