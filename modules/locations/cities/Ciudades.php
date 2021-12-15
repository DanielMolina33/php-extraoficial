<?php

    class Ciudades{

        public $nombre, $usuarioModifica, $departamento;


        public function __construct(){
            require 'conexion.php';
            $this->usuarioModifica = "";
        }

        public function consultar(){
            $connect = new Conexion();
            $connect->conectar();
            $sql = "select * from ciudades";
            $resultado = $connect->ejecutar($sql);
            $connect->cerrar();
            return $resultado;
        }

        public function guardar(){
            $connect=new Conexion();
            $connect->conectar();
            $sql = "insert into ciudades (nombre, usuarioModifica, departamento) values ('$this->nombre','$this->usuarioModifica',$this->departamento);";
            $resultado = $connect->ejecutar($sql);
            
            $connect->cerrar();
            return $resultado;
        }

        public function editar($id){
            $connect = new Conexion();
            $connect->conectar();
            $sql = "select * from 	ciudades where idCiudades = ".$id;
            $resultado = $connect->ejecutar($sql);
            $connect->cerrar();
            return $resultado;
        }

        public function actualizar($datos){
            $connect = new Conexion();
            $connect->conectar();
            $sql = "update ciudades set 
            nombre = '$datos[0]',
            usuarioModifica = '$this->usuarioModifica',
            departamento = $datos[1]
            where idCiudades = $datos[2]";
            $resultado = $connect->ejecutar($sql);

            echo $sql;

            echo $sql;
            $connect->cerrar();
            return $resultado;
        }

        public function eliminar($id){
            $connect = new Conexion();
            $connect->conectar();
            $sql = "delete from ciudades where idCiudades = ".$id;
            $resultado = $connect->ejecutar($sql);
            $connect->cerrar();
            return $resultado;
        }
    }

?>