<?php
    session_start();
    
    if (!isset($_SESSION["arrContacts"])) {
        $_SESSION["arrContacts"] = array();
    } else {
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

        $currentContact = new Contact($_POST["name"], $_POST["number"]);
        array_push($_SESSION["arrContacts"], $currentContact);
    }
?>
<?php
    //declare(strict_types=1);
    require_once dirname(__DIR__) . '/vendor/autoload.php';
    require('../modules/header.php');
    require('../modules/footer.php');
    echo "<h1>hello World</h1>";
    require('../modules/form.php');

    class TestObj {
        public $color;
        public $name;

        function __construct($color, $name){
            $this->color = $color;
            $this->name = $name;
        }

        function get_name(){
            return $this->name;
        }

        function get_color(){
            return $this->color;
        }

        function return_all(){
            return "{name: ".$this->name.", color: ".$this->color."}";
        }
    }

    $chris = new TestObj("blue", "Chris");

    echo $chris->return_all();
    
    if (isset($_POST["name"]) && strlen($_POST["name"]) > 0) {
      
        /*class Contact {
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


        $currentName = explode(',', $_POST["name"]);
        //$_POST["name"];
        $currentNum = explode(',', $_POST["number"]);
        //$_POST["number"];
        $pastAll = explode(',', $_POST["allContacts"]);
        $currentContact = new Contact($currentName, $currentNum);

        echo "Hello " . $currentContact->get_name();
        echo "<br/>";
        echo "Your Phone Number is " . $currentContact->get_number();


        //array_push($_POST["allContacts"], $currentName); 
        $currentAll = array_merge($pastAll, $currentName);

        var_dump($currentAll);
        echo "<br/>";
        echo count($currentAll);
        echo "<br/>";*/
        echo var_dump($_SESSION["arrContacts"]);

        for ($i = 0; $i < count($_SESSION["arrContacts"]); $i++) {
            echo "name: ";
            echo $_SESSION["arrContacts"]::$i->$currentContact->get_name();
    }
}
?>
        

