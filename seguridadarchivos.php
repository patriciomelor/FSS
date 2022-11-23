<?php

$allowedExts = array("doc", "docx", "pdf");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

$contador = 0;


foreach ($allowedExts as $valor) 
{
	if (strcmp($extension, $valor) == 0) 
	{
		$contador = $contador + 1;
	}
}

if($_FILES["file"]["size"] < 10000)
{
	print("TAMANO ADECUADO");
}
else
{
	print("TAMANO INCORRECTO");
}


if($contador > 0)
{
	header("Location: http://www.fss.cl/cotizacion.php");
	die();*/
}
else
{

	$mensajeAviso = "Adjunte doc, docx ó pdf!"
	header("Location: http://www.fss.cl");
	die();
	*/
}

/*
if ((($_FILES["file"]["type"] == "cv/doc") || ($_FILES["file"]["type"] == "cv/docx") || ($_FILES["file"]["type"] == "cv/pdf")
&& ($_FILES["file"]["size"] < 20000)
&& in_array($extension, $allowedExts)) 
{
  if ($_FILES["file"]["error"] > 0) {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
  } else {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
    if (file_exists("cvs/" . $_FILES["file"]["name"])) {
      echo $_FILES["file"]["name"] . " Ya existe un archivo con ese nombre. ";
    } else {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "cvs/" . $_FILES["file"]["name"]);
    }
  }
} else 
{
  echo "Por favor adjunte cv en doc, docx o pdf.";
}
*/
?>
