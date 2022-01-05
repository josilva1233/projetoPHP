<?php
 if(!isset($_SESSION)){
   session_start();
 }
 elseif (!session_start()) {
    include("protect.php");
    protect();
 }

 //return exit("Location: index.php")
  
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="css/bulma.min.css" />
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <title>Painel</title>
    </head>

    <body>
        <h6>Benvindo ao Sistema Web <br> </h6>
        Usuário: <?php echo $_SESSION['nome']; ?>
        <div class="d-grid gap-2 d-md-block">
            <a class="btn btn-primary" href="logout.php">Entrar</a>
            <a class="btn btn-primary" href="logout.php">Sair</a>
        </div>
    </body>

</html>