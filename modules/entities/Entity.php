<?php

    class Entity{

        public $nombre, $numeroDocumento, $tipoDocumento, $estado, $id;

        public function __construct(){
            require '../categories/cod/conexion.php';
        }

        public function consultar(){
            $connect = new Conexion();
            $connect->conectar();
            $sql = "SELECT (@i := @i + 1) AS contador, x.idEntidad,
            x.nombre, td.descripcion AS tdocumento, x.numeroDocumento, x.fechaCreacion, 
            COALESCE(x.fechaModificacion,'No registra') AS fechaModificacion, e.descripcion AS estado 
            FROM entidades x
            INNER JOIN tipos e ON e.idTipos = x.estado
            INNER JOIN tipos td ON td.idTipos = x.tipoDocumento
            cross join (select @i := 0) r";
            $resultado = $connect->ejecutar($sql);
            $connect->cerrar();
            return $resultado;
        }

        public function tipoDocumento(){
            $connect = new Conexion();
            $connect->conectar();
            $sql = "SELECT idTipos, descripcion FROM tipos WHERE tipo = 1 ";
            $resultado = $connect->ejecutar($sql);
            $connect->cerrar();
            return $resultado;
        }

        public function queryUpdateEntity($id){
            $connect = new Conexion();
            $connect->conectar();
            $sql = "select * from entidades where idEntidad = ".$id;
            $resultado = $connect->ejecutar($sql);
            $connect->cerrar();
            return $resultado;
        }

        public function estado(){
            $connect = new Conexion();
            $connect->conectar();
            $sql = "SELECT idTipos, descripcion FROM tipos WHERE idTipos in(8,9) ";
            $resultado = $connect->ejecutar($sql);
            $connect->cerrar();
            return $resultado;
        }

        public function guardar(){
            $connect=new Conexion();
            $connect->conectar();
            $sql = "insert into entidades (nombre, tipoDocumento, numeroDocumento, estado) 
            values ('$this->nombre', $this->tipoDocumento, '$this->numeroDocumento', $this->estado);";
            $resultado = $connect->ejecutar($sql);
            $connect->cerrar();
            return $resultado;
        }

        public function actualizar($datos){
            $connect = new Conexion();
            $connect->conectar();
            $sql = "update entidades set 
            nombre = '$datos[0]',
            tipoDocumento = '$datos[1]',
            numeroDocumento = '$datos[2]',
            estado = $datos[3]
            where idEntidad = $datos[4]";

            $resultado = $connect->ejecutar($sql);
            $connect->cerrar();
            return $resultado;
        }

        public function delete($id){
            $connect = new Conexion();
            $connect->conectar();
            $sql = "delete from entidades where idEntidad = ".$id;
            $resultado = $connect->ejecutar($sql);
            $connect->cerrar();
            return $resultado;
        }
    }

?>