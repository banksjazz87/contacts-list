<?php 
    require('../modules/contact.php');
    session_start();
?>
<?php
    //declare(strict_types=1);
   // require_once dirname(__DIR__) . '/vendor/autoload.php';
   require('../modules/header.php');

   require('../modules/footer.php');
   require('../modules/form.php');
   require('../methods/formMethods.php');

    //Instatiate a new instance of the the formHandler found in the formMethods file in the methods folder
    $formTests = new FormHandler();
    $formTests->checkForCurrentContacts();
    $formTests->checkForClearRequest();
?>

<link href="../assets/contacts.css" rel="stylesheet" />
<script type="text/javascript" src="../js/contactEvents.js"></script>
<div id="contact_container">

<?php
    if (isset($_POST["name"]) && strlen($_POST["name"]) > 0) {
        $allCurrentContacts = $_SESSION["arrContacts"];
        sort($allCurrentContacts);

        foreach ($allCurrentContacts as $contact) {

?>
            <p class="contact_info" onclick="contactEvents.initialClick()"> <?php echo $contact->get_name() . " " . $contact->get_number()?></p> 
            <div id="edit_button_wrapper" style="display: none;">
                <button>Edit</button>
                <button>Delete</button>
            </div> 
<?php  
        }
    } else {
        echo  '<p class="no_data"> No Contacts </p>';
    }

?>
</div>



    
