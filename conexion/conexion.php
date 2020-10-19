<?php

    //antes de insertar un dato, limpias el dato usando clean
    Class DataBase
    {
        private $con;
        private $name = "compumundo";
        private $host = "localhost";
        private $pass = "";
        private $user = "root";

        public function __construct()
        {
            $this->conectar();
        }

        public function conectar()
        {
            $this->con = mysqli_connect($this->host, $this->user, $this->pass, $this->name);
            if(mysqli_connect_error())
            {
                die("Error al conectar en la base de datos : " . mysqli_connect_errno() ." como ". mysqli_connect_error());
                
            }
        }
        //lmpiar var para insertarla
        public function clean($var)
        {
            return mysqli_real_escape_string($this->con, $var);
        }

        //insercion de datos
        public function insertarProducto($nombre, $descripcion,  $caracteristicas, $precio, $tipo)
        {
            $sql = "INSERT INTO producto(nom_prod, desc_prod, carac_prod, precio_prod, tipo_prod)
                        VALUES('$nombre', '$descripcion','$caracteristicas',$precio, '$tipo')";
            $res = mysqli_query($this->con, $sql) or die("error al insertar");
            return $res == 1;
        }

    }

?>