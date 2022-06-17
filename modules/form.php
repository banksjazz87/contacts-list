<!DOCTYPE html>
<html>
<form method="post" action="/public/index.php">
    <label for="name">Name:</label>
    <input type="text" name="name"/>
    <br/>

    <label for="number">Phone Number:</label>
    <input type="text" name="number"/>
    <br/>

    <input type="submit" value="Submit"/>

    <?php 
        if (isset($_POST['submit'])) {
           echo "Yes";
        }
        
    ?>

</form>

</html>