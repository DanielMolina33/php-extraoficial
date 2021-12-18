<?php

    class Producto{

        public $referencia, $nombre, $descripcion, $precio, $stock, $color, $talla, $usuarioModifica, $estado, $subcategoria, $precioDescuento;

        public function __construct(){
            require 'conexion.php';
            $this->usuarioModifica = "";
            $this->precioDescuento = 0;
        }

        public function consultar(){
            $connect = new Conexion();
            $connect->conectar();
            $sql = "select idProductos, referencia, nombre, descripcion, precio, stock, fechaCreacion, fechaModificacion, precioDescuento from productos";
            $resultado = $connect->ejecutar($sql);
            $connect->cerrar();
            return $resultado;
        }

        public function guardar(){
            $connect=new Conexion();
            $connect->conectar();
            $sql = "insert into productos (referencia, nombre, descripcion, precio, stock, color, talla, usuarioModifica, estado, subcategoria, precioDescuento) values ($this->referencia,'$this->nombre','$this->descripcion',$this->precio,$this->stock,$this->color,$this->talla,'$this->usuarioModifica',$this->estado,$this->subcategoria,$this->precioDescuento);";
            $resultado = $connect->ejecutar($sql);

            $connect->cerrar();
            return $resultado;
        }

        public function editar($id){
            $connect = new Conexion();
            $connect->conectar();
            $sql = "select * from productos where idProductos = ".$id;
            $resultado = $connect->ejecutar($sql);
            $connect->cerrar();
            return $resultado;
        }

        public function actualizar($datos){
            $connect = new Conexion();
            $connect->conectar();
            $sql = "update productos set 
            referencia = '$datos[0]',
            nombre = '$datos[1]',
            descripcion = '$datos[2]',
            precio = $datos[3],
            stock = $datos[4],
            color = $datos[5],
            talla = $datos[6],
            usuarioModifica = '$this->usuarioModifica',
            estado = $datos[9],
            subcategoria = $datos[7],
            precioDescuento = $datos[8]
            where idProductos = $datos[10]";
            
            $resultado = $connect->ejecutar($sql);
            $connect->cerrar();
            return $resultado;
        }

        public function eliminar($id){
            $connect = new Conexion();
            $connect->conectar();
            $sql = "delete from productos where idProductos = ".$id;
            $resultado = $connect->ejecutar($sql);
            $connect->cerrar();
            return $resultado;
        }
    }

?>