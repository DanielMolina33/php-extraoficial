<?php

  class Tallas {

    public function __construct(){
      require_once 'conexion.php';
    }

    public function consultar(){
      $connect = new Conexion();
      $connect->conectar();
      $sql = "select idTipos, descripcion from tipos where tipo = 7";
      $resultado = $connect->ejecutar($sql);
      $connect->cerrar();
      return $resultado;
    }

    // public function guardar(){
    //     $connect=new Conexion();
    //   $connect->conectar();
    //   #$sql = "insert into productos (referencia, nombre, descripcion, precio, stock, color, talla, usuarioModifica, estado, subcategoria, precioDescuento) values ($this->referencia,'$this->nombre','$this->descripcion',$this->precio,$this->stock,$this->color,$this->talla,$this->usuarioModifica,$this->estado,$this->subcategoria,$this->precioDescuento);";
    //   $sql = "insert into productos (referencia, nombre, descripcion, precio, stock, subcategoria, precioDescuento) values ($this->referencia,'$this->nombre','$this->descripcion',$this->precio,$this->stock, '$this->subcategoria', $this->precioDescuento);";
    //   $resultado = $connect->ejecutar($sql);
    //   $connect->cerrar();
    //   return $resultado;
    // }

    // public function editar($id){
    //   $connect = new Conexion();
    //   $connect->conectar();
    //   $sql = "select * from productos where idProductos = ".$id;
    //   $resultado = $connect->ejecutar($sql);
    //   $connect->cerrar();
    //   return $resultado;
    // }

    // public function actualizar($datos){
    //   $connect = new Conexion();
    //   $connect->conectar();
    //   $sql = "update productos set 
    //   referencia = '$datos[0]',
    //   nombre = '$datos[1]',
    //   descripcion = '$datos[2]',
    //   precio = $datos[3],
    //   subcategoria = $datos[9],
    //   stock = $datos[4],
    //   precioDescuento = $datos[10]
    //   where idProductos = $datos[11]";

    //   $resultado = $connect->ejecutar($sql);
    //   $connect->cerrar();
    //   return $resultado;
    // }

    // public function eliminar($id){
    //   $connect = new Conexion();
    //   $connect->conectar();
    //   $sql = "delete from productos where idProductos = ".$id;
    //   $resultado = $connect->ejecutar($sql);
    //   $connect->cerrar();
    //   return $resultado;
    // }
  }
?>