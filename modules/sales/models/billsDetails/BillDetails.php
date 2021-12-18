<?php
  include_once "../../utils/dbConnection.php";
  include_once "../../utils/SqlOperations.php";

  class BillsDetails {
    private $sqlOperations;

    function __construct(){
      $this->table = "detallefacturas";
      $this->sqlOperations = new SqlOperations($this->table);
      $this->db = dbConnect();
    }

    function create($idFactura, $amount, $product){
      $sn = "";

      $sql = $this->sqlOperations->insert(
        ["idFactura", "cantidad", "producto"], 
       $idFactura, $amount, $product
      );

      $query = mysqli_query($this->db, $sql);

      if($query){
        $sn = true;
      } else {
        $sn = false;
      }

      // echo $sql;
      return $sn;
    }

    function getBillsDetails($condition = ""){
      $billsDetailList = [];

      $sql = $this->sqlOperations->select($condition, "");

      $query = mysqli_query($this->db, $sql);

      if($query){
        while($billDetail = mysqli_fetch_assoc($query)){
          array_push($billsDetailList, $billDetail);
        }
      } else {
        return false;
      }

      // echo $sql;
      return $billsDetailList;
    }

    function deleteBillDetail($condition = ""){
      $sql = $this->sqlOperations->delete($condition);
      $query = mysqli_query($this->db, $sql);
    }
  }
?>