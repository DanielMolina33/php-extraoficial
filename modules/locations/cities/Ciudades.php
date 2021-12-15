<?php

    class Ciudades{

        public $nombre, $usuarioModifica, $fechaCreacion, $fechaModificacion, $pais;


        public function __construct(){
            require 'conexion.php';
            
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
            $sql = "insert into ciudades (nombre,fechaCreacion ,fechaModificacion, departamento) values ('$this->nombre','$this->fechaCreacion','$this->fechaModificacion',$this->departamento);";
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
            usuarioModifica = $datos[1],
            fechaCreacion = '$datos[2]',
            fechaModificacion = '$datos[3]',
            departamento = $datos[4]
            where idCiudades = $datos[5]";
            $resultado = $connect->ejecutar($sql);
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