<?php
    //declare(strict_types=1);
    require_once dirname(__DIR__) . '/vendor/autoload.php';
    require('../modules/header.php');
    require('../modules/footer.php');
    echo "<h1>hello World</h1>";
    require('../modules/form.php');
    
    if (isset($_POST["name"]) && strlen($_POST["name"]) > 0) {
      
        class Contact {
            public $name;
            public $number;

            function __construct($name, $number){
                $this->name = $name;
                $this->number = $number;
            }

            public function getAll(){
                var_dump($this->name);
            }

            function get_name(){
                echo $this->name;
            }

            function get_number(){
                echo $this->number;
            }
        }


        $currentName = $_POST["name"];
        $currentNum = $_POST["number"];
        $currentContact = new Contact($currentName, $currentNum);

        echo $currentContact->getAll();
       
        /*echo "Yo num num is" . $currentContact->get_number();
        echo "<br/>";
        echo $currentContact->get_name();*/
    }
?>
        

