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
    if (!isset($_SESSION["arrContacts"])) {
        $_SESSION["arrContacts"] = array();
    } else {
        if ( searchForValue($_SESSION["arrContacts"], $_POST["name"] )){
            echo "<script>alert('Contact already exists in your contacts');</script>";
        } else {
        $currentContact = new Contact($_POST["name"], $_POST["number"]);
        array_push($_SESSION["arrContacts"], $currentContact);
       
        }
    }
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

        foreach (allUniqueNames($allCurrentContacts) as $contact) {
            echo $contact;
            echo '<br/>';
            echo '<br/>';
        }
    } else {
        echo 'no data';
    }
?>
        

