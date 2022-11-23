<?php
include "config.php";
$archivo = "ips.txt";                                                    //Esto creará el Archivo donde guarda las ips
$manejador = fopen($archivo,"a") or die("Imposible abrir el archivo\n");      //Esto abre el archivo
$ip = $_SERVER['REMOTE_ADDR'];                                                //Esto muestra la ip
$fecha= date("d-m-Y H:i:s")."";  
$salto = chr(13);                                                 //Esto muestra la fecha
fwrite($manejador,$ip.' '.$fecha.$salto);                              //Esto muestra la ip y la fecha en el archivo
fclose($manejador);  
// Clean up the input values
foreach($_POST as $key => $value) {
  if(ini_get('magic_quotes_gpc'))
    $_POST[$key] = stripslashes($_POST[$key]);

  $_POST[$key] = htmlspecialchars(strip_tags($_POST[$key]));
}

 $directorio = $_SERVER['DOCUMENT_ROOT'].'/adm/4stdy7wgtq63sadtg2/documentos/';
 
 
$nombre_imagen_novedad = $_FILES['nombre_imagen_novedad']['name'];
$tipo = $_FILES['nombre_imagen_novedad']['type'];
$tamano = $_FILES['nombre_imagen_novedad']['size'];	
$id_novedad = $_POST['id_novedad'];

move_uploaded_file($_FILES['nombre_imagen_novedad']['tmp_name'],$directorio. '/' .$_FILES['nombre_imagen_novedad']['name']);


if (!empty($_FILES['nombre_imagen_novedad']['name']))
	{
	mysql_query("insert into imagen_novedad values (id_imagen_novedad,'$nombre_imagen_novedad','$id_novedad	')")or die(mysql_error());
	
print "<script type=\"text/javascript\">"; 
	print "alert('Se agrego la nueva imagen para la novedad')";
	print "</script>";  
	 echo "<script>window.location.href='novedad.php'</script>" ;

	?><script type="text/javascript">window.location.href='editar_novedad.php';</script><?
	}
	else
	{
	print "<script type=\"text/javascript\">"; 
		print "alert('Seleccione un archivo')";
		print "</script>";  
	?><script type="text/javascript">window.location.href='editar_novedad.php';</script><?
	}
	
	 
	 
// A function that checks to see if
// an email is valid

?>