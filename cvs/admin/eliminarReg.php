<?php
include "config.php";

$reg = $_POST["eliminar"];
$curriculum = $_POST["curriculum"];
$carta = $_POST["carta"];

$del = "delete from curriculum where id_cvs = '$reg'";

if(is_file($curriculum))
{
   unlink($curriculum);
}

if(is_file($carta))
{
   unlink($carta);
}

$db = new MySQL();

$consulta = $db->consulta($del);

header("Location: http://www.fss.cl/cvs/admin/ver-cvs.php");
die();




?>