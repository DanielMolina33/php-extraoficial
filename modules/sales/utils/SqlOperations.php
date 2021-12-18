<?php
  class SqlOperations {
    private $table;

    function __construct($table){
      $this->table = $table;
    }

    function insert($cols, ...$data){
      $values = "";
      $columns = "";
      $sn = false;

      foreach($data as $item){
        if(gettype($item) == "integer"){
          // $values .= $this->divideByCommas($item);
          $values .= $item . ", ";
        } else {
          $values .= "'" . $item . "', ";
        }
      }

      if(count($cols) > 0){
        $columns = rtrim($this->divideByCommas($cols), ', ');
        $sn = true;
      }

      $values = rtrim($values, ', ');
      $sql = "insert into $this->table " . ($sn ? "($columns) " : " ") . "values($values);";

      return $sql;
    }

    function select($condition = "", ...$data){
      $values = "";

      if(count($data) > 0){
        $values = rtrim($this->divideByCommas($data), ', ');
      }

      if(count($data) == 0){
        $sql = "select * from $this->table;";
      } else if($condition != ""){
        $sql = "select " . ($values ? $values : '*') . " from $this->table where $condition;";
      } else {
        $sql = "select $values from $this->table;";
      }

      return $sql;
    }

    function update($condition, ...$data){
      $columns = "";

      foreach($data as $item){
        foreach($item as $key => $value){
          if(gettype($value) == "integer"){
            $columns .= $key . "=" . $value . ", ";
          } else {
            $columns .= $key . "='" . $value . "', ";
          }
        }
      }

      $columns = rtrim($columns, ", ");
      $sql = "update $this->table set $columns where $condition;";

      return $sql;
    }

    // function delete($status, $condition = ""){
    //   $sql = "update $this->table set status=$status where $condition;";

    //   return $sql;
    // }

    function delete($condition){
      $sql = "delete from $this->table where $condition;";

      return $sql;
    }

    private function divideByCommas($data){
      $values = "";

      foreach($data as $value){
        $values .= $value . ", ";
      }

      return $values;
    }
  }
?>