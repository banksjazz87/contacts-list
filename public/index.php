<?php
    require('../modules/contact.php');

    function searchForValue($arr, $value) {
        foreach ( $arr as $currentItem ) {
            $currentName = $currentItem->get_name();
            if ( $currentName == $value ) {
                return true;
            }
        } 
    }
    session_start();

    function checkForCurrentContacts(){
    if ( !isset($_SESSION["arrContacts"]) ) {
        $_SESSION["arrContacts"] = array();
        $currentContact = new Contact($_POST["name"], $_POST["number"]);
        array_push($_SESSION["arrContacts"], $currentContact);
    } else {
        if ( searchForValue($_SESSION["arrContacts"], $_POST["name"] )){
            echo "<script type='text/javascript' language='javascript'>alert('Contact already exists in your contacts');</script>";
        } else {
        $currentContact = new Contact( $_POST["name"], $_POST["number"] );
        array_push($_SESSION["arrContacts"], $currentContact);
       
        }
    }
}


    checkForCurrentContacts();

    function checkForClearRequest(){
        if ( isset($_POST["clear"]) ) {
            session_destroy();
            unset($_POST["clear"]);
        }
    }

    checkForClearRequest();

?>
<?php
    //declare(strict_types=1);
   // require_once dirname(__DIR__) . '/vendor/autoload.php';
    require('../modules/header.php');
    require('../modules/footer.php');
    echo "<h1>hello World</h1>";
    require('../modules/form.php');

    function allUniqueNames($arr) {
        $namesArray = array();
        foreach ( $arr as $name ) {
            $currentName = $name->get_name();
            array_push($namesArray, $currentName);
        }
        
        return array_unique($namesArray);
    }

    if (isset($_POST["name"]) && strlen($_POST["name"]) > 0) {
        $allCurrentContacts = $_SESSION["arrContacts"];
        sort($allCurrentContacts);

        foreach ($allCurrentContacts as $contact) {
            echo '<p class="contact_name">'. $contact->get_name() .'</p>' ;
            echo '<p class="contact_number">' . $contact->get_number() . '</p>';
        }
    } else {
        echo 'no data';
    }

?>
        

