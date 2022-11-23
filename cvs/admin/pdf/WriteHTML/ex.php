<?php
require('WriteHTML.php');
include "../../../config.php"; 


$db = new MySQL();
$id_persona = $_POST['id_persona'];
$consulta = $db->consulta("select * from persona where id_persona = 1");
$db->num_rows($consulta)>0;
$resultados = $db->fetch_array($consulta);
$nombre_persona = $resultados['nombre_persona'];
$apellido_paterno_persona = $resultados['apellido_paterno_persona'];
$apellido_materno_persona = $resultados['apellido_materno_persona'];
$rut_persona = $resultados['rut_persona'];
$fecha_de_nacimiento = $resultados['fecha_de_nacimiento'];
$direccion_persona = $resultados['direccion_persona'];



$fecha_contrato = $_POST['fecha_contrato'];
$id_trabajo = $_POST['id_trabajo'];
$valor_moneda_trabajo = $_POST['valor_moneda_trabajo'];
$valor_en_palabras = $_POST['valor_en_palabras'];
$id_tipo_contrato = $_POST['id_tipo_contrato'];
$dia_inicio_servicios = $_POST['dia_inicio_servicios'];
$id_estado = $_POST['id_estado'];

$pdf=new PDF_HTML();
$pdf->AddPage();

$pdf->SetFont('Arial');
$html = '<span style="text-align:justify;">'.$nombre_persona.'<br>'.$apellido_paterno_persona.'<br>'.$apellido_materno_persona .'</span>';

$pdf->WriteHTML($html);
$pdf->Output('contrato_'.$rut_persona.'.pdf', 'I');  
?>
