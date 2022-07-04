<?php 
require('../modules/loginCheck.php');
    session_start()
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
      <link href="../assets/index.css" rel="stylesheet" />
    </head>
    <body id="login_body">
    <?php 
    require('../modules/footer.php');
    require('../modules/loginHeader.php');
?>
        <form id="login_form" method="post" typeaction="/modules/loginCheck.php">
            <h1>Login</h1>
            <input type="text" name="username" placeholder="Username" class="input" />
            <input type="password" name="password" placeholder="password" class="input"/>
            <input type="submit" value="Submit" class="submit"/>
        </form>
        
    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>