<?php
$connect = new mysqli('localhost', 'root', '', 'sectla2');

if($connect->connect_errno){
  echo "(".$connect->connect_errno.")".$connect->connect_error;
}
?>
