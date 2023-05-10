<?php
require_once('../Classes/Participante.php');

$participante = new Participante($servername, $username, $password,$dbname);

$participante->read();
unset($participante);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
    <title>Vestibulandos</title>
</head>
<body>


    <a href="index.php" class="btn btn-primary">Retornar</a>
</body>
</html>