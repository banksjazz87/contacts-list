<?php
  //initialize an empty array for storing all of the contacts
  $allContacts = [];
  $allContacts = array();
  $allContacts = (array) null;
?>
  

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
                return $this->name;
            }

            function get_number(){
                return $this->number;
            }
        }


        $currentName = $_POST["name"];
        //$_POST["name"];
        $currentNum = $_POST["number"];
        //$_POST["number"];
        $currentContact = new Contact($currentName, $currentNum);

        echo "Hello " . $currentContact->get_name();
        echo "<br/>";
        echo "Your Phone Number is " . $currentContact->get_number();


        array_push($allContacts, $currentContact); 

        echo var_dump($allContacts);
        echo "<br/>";
        echo count($allContacts);
    }
?>
        

