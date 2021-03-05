<?php

require '../modelo/buscador.php';
$buscador = new Buscador();
$buscador->insertar_concepto($_POST['concepto-new']);

?>
