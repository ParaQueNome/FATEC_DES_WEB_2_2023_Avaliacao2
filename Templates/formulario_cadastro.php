<?php
require_once('../Classes/Participante.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {


    //Declarando as variaveis
    $nome = $_POST['name'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $origem = $_POST['checkbox'];

    $participante = new Participante($servername, $username, $password, $dbname);
    $participante->insert($nome, $cpf, $telefone, $origem);
    unset($participante);
    header('location: index.php');
}
?>
