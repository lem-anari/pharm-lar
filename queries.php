<?php
require_once('conn.php');

  function statempfinesmonth($dbh, $usr_id, $month){
    $result = $dbh->query("select * from statempfinesmonth($usr_id, $month);");
    $array = array();
    while($data = $result->fetch(PDO::FETCH_ASSOC)){
      array_push($array, $data);
    }
    return $array;
   }
