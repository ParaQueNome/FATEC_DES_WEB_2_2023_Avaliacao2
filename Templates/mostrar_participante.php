<?php
require_once('../Classes/Participante.php');

$participante = new Participante($servername, $username, $password,$dbname);

$participante->read();
unset($participante);
?>