<?php
include("config.php");
if($_GET['id'] and $_GET['data'] and $_GET['tipo'])
{
	$id = $_GET['id'];
	$data = $_GET['data'];
	$tipo = $_GET['tipo'];
	$db = new MySQL();
	if($db->consulta("update persona set $tipo='$data' where id_persona='$id'"))
	echo 'success';
}
?>