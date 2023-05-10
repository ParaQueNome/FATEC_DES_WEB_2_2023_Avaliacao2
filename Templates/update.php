<?php
require_once('../Classes/Participante.php');
// Criando objeto participante
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $participante = new Participante($servername, $username, $password,$dbname);
// Declarando variaveis via POST
    $nome = $_POST['name'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $origem = $_POST['checkbox'];
    $participante->update($nome, $cpf, $telefone,$origem);

    unset($participante);
    header('location:index.php');

}


?>
