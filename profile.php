<?php
    session_start();
    if($_SESSION["email"] && $_SESSION["password"]){
        $email = "thantkaung501@gmail.com";
        $password = "KaungThant@24";
        if($_SESSION["email"] == $email && $_SESSION["password"] == $password){
            $_SESSION["name"] = "GayAdmin";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>PROFILE</title>
</head>
<body>
    <div class="container my-5">
        <h1>My email is <?php echo $_SESSION["name"] ?></h1>
        <a href="logout.php" class="btn btn-dagner">LOG OUT</a>
    </div>
</body>
</html>