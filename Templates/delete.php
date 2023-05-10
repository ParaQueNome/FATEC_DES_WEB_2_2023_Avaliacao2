<?php
require_once('../Classes/Participante.php');
// Verificando se a requisicao de dados acontece via metodo POST
if ($_SERVER["REQUEST_METHOD"] == "POST"){
// Instancia objeto Participante para conectar ao banco de dados
$participante = new Participante($servername, $username, $password,$dbname);


// Recebe cpf via POST
$cpf = $_POST['cpf'];
// Chama o metodo Deletar de participante
$participante->delete($cpf);
// Destroi o objeto e encerra a conexao com o banco de dados
unset($participante);

header('location:index.php');

}

?>