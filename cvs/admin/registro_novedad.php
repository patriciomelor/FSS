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

$titulo_novedad = $_POST['titulo_novedad'];
$descrip_novedad = $_POST['descrip_novedad'];
$fecha_novedad = $_POST['fecha_novedad'];

mysql_query("insert into novedad values (id_novedad,'$titulo_novedad','$descrip_novedad','$fecha_novedad')")or die(mysql_error());

print "<script type=\"text/javascript\">"; 
	print "alert('Se agrego la nueva novedad')";
	print "</script>";  
	 echo "<script>window.location.href='estados.php'</script>" ;
	 
	 
// A function that checks to see if
// an email is valid

?>