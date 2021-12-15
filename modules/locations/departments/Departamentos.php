<?php

    class Departamentos{

        public $nombre, $usuarioModifica, $pais;


        public function __construct(){
            require 'conexion.php';
            $this->usuarioModifica = "";
        }

        public function consultar(){
            $connect = new Conexion();
            $connect->conectar();
            $sql = "select * from departamentos";
            $resultado = $connect->ejecutar($sql);
            $connect->cerrar();
            return $resultado;
        }

        public function guardar(){
            $connect=new Conexion();
            $connect->conectar();
            $sql = "insert into departamentos (nombre, usuarioModifica, pais) values ('$this->nombre','$this->usuarioModifica',$this->pais);";
            $resultado = $connect->ejecutar($sql);

            $connect->cerrar();
            return $resultado;
        }

        public function editar($id){
            $connect = new Conexion();
            $connect->conectar();
            $sql = "select * from 	departamentos where idDepartamentos = ".$id;
            $resultado = $connect->ejecutar($sql);
            $connect->cerrar();
            return $resultado;
        }

        public function actualizar($datos){
            $connect = new Conexion();
            $connect->conectar();
            $sql = "update departamentos set 
            nombre = '$datos[0]',
            usuarioModifica = '$this->usuarioModifica',
            pais = $datos[1]
            where idDepartamentos = $datos[2]";
            $resultado = $connect->ejecutar($sql);
            $connect->cerrar();
            return $resultado;
        }

        public function eliminar($id){
            $connect = new Conexion();
            $connect->conectar();
            $sql = "delete from departamentos where idDepartamentos = ".$id;
            
            $resultado = $connect->ejecutar($sql);
            $connect->cerrar();
            return $resultado;
        }
    }

?>