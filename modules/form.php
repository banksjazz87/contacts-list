<!DOCTYPE html>
<html>
<form method="get" action="index.php">
    <label for="name">Name:</label>
    <input type="text" name="name"/>
    <br/>

    <label for="number">Phone Number:</label>
    <input type="text" name="number"/>
    <br/>

    <input type="submit" value="Submit"/>

    <?php 
        if (isset($__POST['submit'])) {
            echo '<p>Chris</p>';
        }
    ?>

</form>

</html>