<?php 
 if (isset($_POST['username']) && isset($_POST['password'])) { 
 if ($_POST['username'] === 'John' && $_POST['password'] === 'JazzTor1') {
    header('Location: ../routes/contacts.php');
 } else {
   echo '<script> alert("Invalid Username and password"); </script>';
 }
}
?>