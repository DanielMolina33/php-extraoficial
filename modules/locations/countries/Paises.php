<?php
  class Paises{

    public $nombre, $abreviatura, $indicativo, $usuarioModifica, $fechaModificacion;

    public function __construct(){
      require 'conexion.php';
    }

    public function consultar(){
      $connect = new Conexion();
      $connect->conectar();
      $sql = "select * from paises";
      $resultado = $connect->ejecutar($sql);
      $connect->cerrar();
      return $resultado;
    }

    // PENDIENTE
    // public function guardar(){
    //   $connect=new Conexion();
    //   $connect->conectar();
    //   $sql = "insert into departamentos (nombre,fechaCreacion ,fechaModificacion, pais) values ('$this->nombre','$this->fechaCreacion','$this->fechaModificacion',$this->pais);";
    //   $resultado = $connect->ejecutar($sql);
    
    //   $connect->cerrar();
    //   return $resultado;
    // }

    // public function editar($id){
    //   $connect = new Conexion();
    //   $connect->conectar();
    //   $sql = "select * from 	departamentos where idDepartamentos = ".$id;
    //   $resultado = $connect->ejecutar($sql);
    //   $connect->cerrar();
    //   return $resultado;
    // }

    // public function actualizar($datos){
    //   $connect = new Conexion();
    //   $connect->conectar();
    //   $sql = "update departamentos set 
    //   nombre = '$datos[0]',
    //   usuarioModifica = $datos[1],
    //   fechaCreacion = '$datos[2]',
    //   fechaModificacion = '$datos[3]',
    //   pais = $datos[4]
    //   where idDepartamentos = $datos[5]";
    //   $resultado = $connect->ejecutar($sql);
    //   echo $sql;
    //   $connect->cerrar();
    //   return $resultado;
    // }

    // public function eliminar($id){
    //   $connect = new Conexion();
    //   $connect->conectar();
    //   $sql = "delete from departamentos where idDepartamentos = ".$id;
    //   $resultado = $connect->ejecutar($sql);
    //   $connect->cerrar();
    //   return $resultado;
    // }
  }
?>