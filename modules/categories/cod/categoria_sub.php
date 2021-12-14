<?php

class Categorias{
    public $estado, $fechaCreacion, $descripcion, $tipo;
    

    public function __construct(){
        require 'conexion.php';
    }
    
    public function consulta(){
        $connect = new conexion();
        $connect->conectar();
        $query = "select * from subcategorias";
        $resultado = $connect->ejecutar($query);
        $connect -> cerrar();
        return $resultado;
    }
    public function consultacategorias(){
        $connect = new conexion();
        $connect->conectar();
        $query = "select * from tipos WHERE tipo = 5";
        $resultado = $connect->ejecutar($query);
        $connect -> cerrar();
        return $resultado;
    }
    public function filtrarcategorias($id){
        $connect = new conexion();
        $connect->conectar();
        $query = "select * from subcategorias WHERE categoria =".$id;
        $resultado = $connect->ejecutar($query);
        $connect -> cerrar();
        return $resultado;
    }
    public function filtrarproductos($id){
        $connect = new conexion();
        $connect->conectar();
        $query = "select * from productos WHERE subcategoria =".$id;
        $resultado = $connect->ejecutar($query);
        $connect -> cerrar();
        return $resultado;
    }
    public function guardarcategoria() {
            $connect=new Conexion();
            $connect->conectar();
            #$sql = "insert into tipos (idTipos, descripcion, usuarioModifica, fechaCreacion, fechaModificacion, tipo) 
            #values (null,'$this->descripcion','$this->estado',null,$this->fechaCreacion,null,'5');";
            $sql = "insert into tipos (descripcion, estado, fechaCreacion, tipo) values ('$this->descripcion',$this->estado,'$this->fechaCreacion',5);";
            $resultado = $connect->ejecutar($sql);
            $connect->cerrar();
            return $resultado;
        }
    public function guardarSubcategoria() {
        $connect=new Conexion();
        $connect->conectar();
        $sql = "insert into subcategorias (idSubcategorias, nombre, usuarioModifica, fechaCreacion, fechaModificacion, categoria, estado) VALUES (NULL, '$this->nombre', NULL, '$this->fechaCreacion', NULL, $this->categoria, $this->estado);";
        $resultado = $connect->ejecutar($sql);
        $connect->cerrar();
           return $resultado;
        }
    public function eliminarCategoria($id){
        $connect = new Conexion();
        $connect->conectar();   
        $sql = "delete from tipos WHERE  idTipos=".$id;
        $resultado = $connect->ejecutar($sql);
        $connect->cerrar();
        return $resultado;
        }
    public function eliminarSubCategoria($id){
            $connect = new Conexion();
            $connect->conectar();   
            $sql = "delete from subcategorias WHERE  idSubcategorias=".$id;
            $resultado = $connect->ejecutar($sql);
            $connect->cerrar();
            return $resultado;
            }
    }

?>