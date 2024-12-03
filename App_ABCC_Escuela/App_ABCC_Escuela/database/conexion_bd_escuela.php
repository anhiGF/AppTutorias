<!--
    Funciones MYSQLi

    Funciones PDO
        Estas funciones permiten cambiar la conectividad a diversos GESTORES DE BD

-->

<?php

    class ConexionBDEscuela{

        private $conexion;
        private $host = "localhost:3306";
        private $usuario = "root";
        private $password = "Kitsune-sama08";
        private $bd = "Escuela_web_2024";

        public function __construct(){

            $this->conexion = mysqli_connect($this->host, $this->usuario, $this->password, $this->bd);

            if(!$this->conexion)

                die("Error en conexion a la BD:" . musqli_connect_error());


        }

        public function getConexion(){

            return $this->conexion;
            
        }

    }

?>