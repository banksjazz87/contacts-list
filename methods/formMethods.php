<?php
class FormHandler {
    function checkForCurrentContacts(){
        if (isset($_POST["name"]) && isset($_POST["number"])){

        if ( !isset($_SESSION["arrContacts"]) ) {
            $_SESSION["arrContacts"] = array();
            $currentContact = new Contact($_POST["name"], $_POST["number"]);
            array_push($_SESSION["arrContacts"], $currentContact);

        } else {
            if ( $this->searchForValue($_SESSION["arrContacts"], $_POST["name"] )){
                echo "<script type='text/javascript' language='javascript'>alert('Contact already exists in your contacts');</script>";

            } else {
            $currentContact = new Contact( $_POST["name"], $_POST["number"] );
            array_push($_SESSION["arrContacts"], $currentContact);
            }
        }
    }
}

    function searchForValue($arr, $value) {
        foreach ( $arr as $currentItem ) {
            $currentName = $currentItem->get_name();
            if ( $currentName == $value ) {
                return true;
            }
        } 
    }

    function checkForClearRequest(){
        if ( isset($_POST["clear"]) ) {
            session_destroy();
            unset($_POST["clear"]);
        }
    }
}
?>