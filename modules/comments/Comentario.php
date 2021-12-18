<?php

  class Comentario {

    public $descripcion, $producto, $perfil;

    public function __construct(){
      require 'conexion.php';
      $this->perfil = 4;
    }

    public function consultar(){
      $connect = new Conexion();
      $connect->conectar();
      $sql = "select * from comentarios";
      $resultado = $connect->ejecutar($sql);
      $connect->cerrar();
      return $resultado;
    }

    public function guardar(){
      $connect=new Conexion();
      $connect->conectar();
      $sql = "insert into comentarios (descripcion, producto, perfil) values ('$this->descripcion',$this->producto, $this->perfil);";
      $resultado = $connect->ejecutar($sql);

      $connect->cerrar();
      return $resultado;
    }

    public function eliminar($id){
      $connect = new Conexion();
      $connect->conectar();
      $sql = "delete from comentarios where idComentarios = ".$id;
      $resultado = $connect->ejecutar($sql);
      $connect->cerrar();
      return $resultado;
    }
  }
?>