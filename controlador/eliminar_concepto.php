<?php

require '../modelo/buscador.php';
$buscador = new Buscador();
$buscador->eliminar_concepto($_POST['concepto-del']);

?>