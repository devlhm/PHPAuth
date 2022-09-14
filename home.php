<?php
include "config.php";

if(!isset($_SESSION['username'])){
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Home</title>
    </head>
    <body>
        <h1>Logado!</h1>
    </body>
</html>