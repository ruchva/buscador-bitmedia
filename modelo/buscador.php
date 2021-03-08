<?php

    class Buscador{

        private $conexion;

        function __construct()
        {
            require_once 'conexion.php';
            $this->conexion = new conexion();
            $this->conexion->conectar();
        }

        function listar_combo_busqueda()
        {
            $sql = "call SP_LISTAR_COMBO_BUSQUEDA";
            $arreglo = array();

            if($consulta = $this->conexion->conexion->query($sql)){
                while($res = mysqli_fetch_array($consulta)){
                    $arreglo[] = $res;
                }
                return $arreglo;
                $this->conexion->cerrar();
            }
        }
        
        function insertar_concepto($concepto)
        {
            $sql = "INSERT INTO declaraciones (`declaraciones`, `fecha_creacion`, `usuario_creacion`) 
                    VALUES ('$concepto', CURRENT_DATE(), 'APP')";
            
            if($this->conexion->conexion->query($sql) === TRUE ) {
                echo "CORRECTO!!!";
            } else {
                echo "ERROR!!!";
            }
                        
            $this->conexion->cerrar();               
        }
    }

