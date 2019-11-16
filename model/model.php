<?php

    class model{
        private $conexion;

        function __construct(){
            //$this->conexion=mysqli_connect("localhost", "root", "onepiece", "fisica1");
            //$this->conexion=mysqli_connect("localhost", "root", "laboratorio", "fisica1");
            $this->conexion=mysqli_connect("sql109.byetcluster.com", "epiz_22023296", "nhTzG0mchZZM", "epiz_22023296_fmovil");
        }

        public function cerrar(){
            mysqli_close($this->conexion);
        }

        public function mostrarCombos(){
            $query="select medida from medida ";
            $rs=mysqli_query($this->conexion, $query);
            return $rs;
        }

        public function ejecutar($query) {       
            $rs=mysqli_query($this->conexion,$query);
            return $rs;  
        }

        public function getMagnitud($id_magnitud) {       
            $query="select magnitud from magnitud where id_magnitud=".$id_magnitud." ";
            $rs=mysqli_query($this->conexion, $query);
            return $rs;
        }
    }
?>
