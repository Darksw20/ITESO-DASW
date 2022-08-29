<?php
$nombre = $_GET['name'];
$contacto = $_GET['contacto'];
$pass = $_GET['pass'];
$section = $_GET['section'];
$status = $_GET['status'];

echo $nombre ."$nombre con direccion $contacto es un $section con cargos $status"
?>