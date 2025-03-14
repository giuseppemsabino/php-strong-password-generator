<?php
   
require_once 'functions.php';

if ($password != "") {
    session_start();
    $_SESSION['password'] = $password;
    header("Location: ./password.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Password Generator</title>
</head>
<body>
    <div class="container my-5">

        <h1>Generatore di Password</h1>
        
        <form action="">
            <input type="number" name="length" class="form-control m-2" placeholder="Lunghezza Password" value="5" min="2" max="20">

            <div>

                <input id='letters' type="checkbox" name="letters"  class="m-2"> <label for='letters'>Lettere</label>
                <input id='numbers' type="checkbox" name="numbers"  class="m-2"> <label for='numbers'>Numeri</label>                
                <input id='symbols' type="checkbox" name="symbols"  class="m-2"> <label for='sybols'>Simboli</label>
            </div>
            <button class="btn btn-primary m-2">genera</button>
        </form>


        <?php if(isset($password)) { ?>
        <h2>questa è la tua password</h2>
        <strong><?php echo $password ?></strong>
        <?php } ?>
    </div>
</body>
</html>