
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> 
    </head>
<style>
    <?php require "../assets/form.css" ?>
</style>
<form id="main_form" method="post" action="/public/index.php" class="col-lg-1" >
    <input type="text" name="name" placeholder="Name"/>
    <br/>

    <input type="text" name="number" placeholder="Number"/>
    <br/>

    <input type="submit" value="Submit" class="submit"/>
    <input type="submit" value="Clear" name="clear" class="submit"/>

</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>