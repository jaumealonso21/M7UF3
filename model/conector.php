<?php 
// connectar al servidor 
$mysqli = new mysqli('localhost', 'root', '', 'WORLDCUP'); //No té contrasenya
// si la connexió és correcta 
if ($mysqli->connect_error) {
    die('Error de Conexió (' . $mysqli->connect_errno . ') '
        . $mysqli->connect_error);
}
?>