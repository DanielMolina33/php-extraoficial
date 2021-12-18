<?php
  include_once "../../utils/dbConnection.php";
  include_once "../../utils/SqlOperations.php";

  class Items{
    private $sqlOperations;

    function __construct($table){
      $this->sqlOperations = new SqlOperations($table);
      $this->db = dbConnect();
    }

    function getProfiles($condition = ""){
      $profilesList = [];

      $sql = $this->sqlOperations->select($condition);
      $query = mysqli_query($this->db, $sql);
      mysqli_close($this->db);

      if($query){
        while($profile = mysqli_fetch_assoc($query)){
          array_push($profilesList, $profile);
        }
      } else {
        return "Hubo un error obteniendo los perfiles, recargue la pagina";
      }

      return $profilesList;
    }

    function getProducts($condition=""){
      $productsList = [];

      $sql = $this->sqlOperations->select($condition, "");
      $query = mysqli_query($this->db, $sql);
      mysqli_close($this->db);

      if($query){
        while($product = mysqli_fetch_assoc($query)){
          array_push($productsList, $product);
        }
      } else {
        return "Hubo un error obteniendo los productos, recargue la pagina";
      }

      return $productsList;
    }

    function getEntity(){
      $entityList = [];

      $sql = $this->sqlOperations->select();
      $query = mysqli_query($this->db, $sql);
      mysqli_close($this->db);

      if($query){
        while($entity = mysqli_fetch_assoc($query)){
          array_push($entityList, $entity);
        }
      } else {
        return "Hubo un error obteniendo la entidad, recargue la pagina";
      }

      return $entityList;
    }
  }
?>  