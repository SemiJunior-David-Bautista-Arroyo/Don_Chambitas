<?php session_start();
// una vez que le da en cerrar sesión se usa este archivo y se cierra sesión.

session_destroy();
$_SESSION = array();

header('Location: index.php');

?>
