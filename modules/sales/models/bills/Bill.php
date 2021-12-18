<?php
  include_once "../../utils/dbConnection.php";
  include_once "../../utils/SqlOperations.php";
  include_once "../../models/billsDetails/billDetails.php";

  class Bill {
    private $sqlOperations;

    function __construct(){
      $this->table = "facturas";
      $this->sqlOperations = new SqlOperations($this->table);
      $this->db = dbConnect();
      $this->details = new BillsDetails();
    }

    function create($data){
      $msg = "";

      $sql = $this->sqlOperations->insert(
        ["total", "perfil", "entidad"], 
        $data['total'], $data['profile'], "EMP"
      );

      $query = mysqli_query($this->db, $sql);

      if($query){
        $billId = mysqli_insert_id($this->db);
        $sn = $this->details->create($billId, $data['amount'], $data['product']);

        if($sn){
          $msg = "<font color = green>Factura creada correctamente</font>";
        } else {
          $msg = "<font color = red>Hubo un error creando el detalle de la factura, intentalo de nuevo</font>";
        }
      } else {
        $msg = "<font color = red>Hubo un error creando la factura, intentalo de nuevo</font>";
      }

      // echo $sql;
      return $msg;
    }

    function getBills($condition = ""){
      $billsList = [];

      $sql = $this->sqlOperations->select($condition);

      $query = mysqli_query($this->db, $sql);

      if($query){
        while($bill = mysqli_fetch_assoc($query)){
          array_push($billsList, $bill);
        }
      } else {
        return "Hubo un error al obtener los datos de las facturas";
      }

      return $billsList;
    }

    function deleteBill($condition = ""){
      $sql = $this->sqlOperations->delete($condition);
      $query = mysqli_query($this->db, $sql);
    }
  }
?>