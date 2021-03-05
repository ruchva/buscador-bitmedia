<?php

require '../modelo/buscador.php';
$buscador = new Buscador();
$consulta = $buscador->listar_combo_busqueda();
echo json_encode($consulta);

?>
