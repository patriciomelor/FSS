<?php
include("config.php");


$value = $_POST['value'];
$pk =$_REQUEST['pk']; 
$db = new MySQL();
	if($db->consulta("update obra set id_estado='$value' where id_obra = '$pk'"))
		
/*
if($_GET['id'] and $_GET['data'] and $_GET['tipo'])
{
	$id = $_GET['id'];
	$data = $_GET['data'];
	$tipo = $_GET['tipo'];
	$db = new MySQL();
	if($db->consulta("update documento set $tipo='$data' where id_documento='$id'"))

}*/
?>