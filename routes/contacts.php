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
<!-- Bootstrap stuff -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<link href="../assets/contacts.css" rel="stylesheet" />
<script type="text/javascript" src="../js/contactEvents.js"></script>
<div id="contact_container">

<?php
    if (isset($_POST["name"]) && strlen($_POST["name"]) > 0) {
        $allCurrentContacts = $_SESSION["arrContacts"];
        sort($allCurrentContacts);

        foreach ($allCurrentContacts as $index => $contact) {

?>
            <p id="<?php echo 'contact_info_' . $index ?>" class="contact_info" 
            onclick="contactEvents.initialClick()"> 
                <?php echo $index + 1 . " " . $contact->get_name() . " " . $contact->get_number()?>
            </p> 
            <div id="<?php echo 'edit_button_wrapper_' . $index ?>"class="edit_button_wrapper" style="display: none;">
                <button type="button" class="btn btn-small edit_button" onclick="contactEvents.showEditBox()">Edit</button>
                <button type="button" class="btn btn-outline-warning btn-small edit_button">Delete</button>
            </div> 

            <div id="edit_box_wrapper" style="display: none;">
                <form id ='edit_form' action="" method="post">
                    <label for="edit_name">Name:</label>
                    <input id="edit_name"type="text" name="name"/>

                    <label for="edit_number">Number:</label>
                    <input type="text" name="phone_number"/>

                    <input type="submit" value="submit"/>
                    <input type="submit" value="cancel"/>
                </form> 
            </div>
<?php  
        }
    } else {
        echo  '<p class="no_data"> No Contacts </p>';
    }

?>
</div>



    
