<?php
$servername='localhost';     // Nombre del servidor MySql o IP
$dbusername='fsscl_c9fss';                // Id usuario
$dbpassword='fbMgY@M4';                // Clave usuario
$dbname='fsscl_c9fssdb';     // Nombre de la base de datos
global $link;
connecttodb($servername,$dbname,$dbusername,$dbpassword);


function connecttodb($servername,$dbname,$dbuser,$dbpassword)
{

$link=mysql_connect ("$servername","$dbuser","$dbpassword");
if(!$link){die("No se puede conectar a la base de datos");}
mysql_select_db("$dbname",$link) or die ("Ocurrio un problema con la base de datos".mysql_error());

}


?>