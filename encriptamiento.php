<?php
$user =$_POST['user'];
$passwor = $_POST['password'];

$clave=md5 ($password);
$query="INSERT INTO USER(USER,PASWOORD,encriptado) values ('$correo','$contrasena','clave');
