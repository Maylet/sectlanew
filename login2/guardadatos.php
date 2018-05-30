<?php

  
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("sectla2") or die(mysql_error());




   
   $propietario=$_POST["propietario"];  
   $servicio=$_POST["servicio"]; 
   $nombre_servicio=$_POST["nombre_servicio"];
   $calle =$_POST["calle"]; 
   $colonia=$_POST["colonia"]; 
   $correo=$_POST["correo"]; 
   $telefono=$_POST["telefono"]; 
   $referencia=$_POST["referencia"]; 




$resultado=@mysql_query("INSERT INTO `registros`( `propietario`, `servicio`, `nombre_servicio`, 
  `calle`, `colonia`, `correo`, `telefono`, `referencia`) VALUES 
  (   '$propietario'   ,     '$servicio'  ,  '$nombre_servicio',  '$calle' ,  '$colonia', '$correo'
    ,  '$telefono',   '$referencia')");
if ($resultado) {
  header("Location:index.php");exit();

}else{
  header("Location:index.php");exit();
}


?>