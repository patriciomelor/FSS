<?php
require_once('tcpdf_include.php');
include "../../../config.php"; 



$db = new MySQL();
$id_persona = $_POST['id_persona'];
$consulta = $db->consulta("select * from persona where id_persona = '$id_persona'");
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

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, false, 'UTF-8', false);




// ---------------------------------------------------------

// add a page
$pdf->AddPage();

// set font
$pdf->SetFont('helvetica', 'B', 15);

$pdf->Write(1, 'ANEXO 1', '', 0, 'L', true, 100, true, true, 100);
// create some HTML content
$html = '<span style="text-align:justify;">'.$nombre_persona.'<br>'.$apellido_paterno_persona.'<br>'.$apellido_materno_persona .'</span>';


// set UTF-8 Unicode font
$pdf->SetFont('dejavusans', '', 10);

// output the HTML content
$pdf->writeHTML($html, true, 0, true, true);

// reset pointer to the last page
$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_039.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
