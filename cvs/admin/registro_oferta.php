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

$codigo_oferta = $_POST['codigo_oferta'];
$descripcion_oferta = $_POST['descripcion_oferta'];
$moneda = $_POST['moneda'];
$precio_lista = $_POST['precio_lista'];
$precio_oferta = $_POST['precio_oferta'];
$stock_oferta = $_POST['stock_oferta'];
$valido_hasta_oferta = $_POST['valido_hasta_oferta'];
$id_tipo = $_POST['id_tipo'];


mysql_query("insert into oferta values (id_oferta,'$codigo_oferta','$descripcion_oferta','$moneda','$precio_lista','$precio_oferta','$stock_oferta','$valido_hasta_oferta','$id_tipo')")or die(mysql_error());

print "<script type=\"text/javascript\">"; 
	print "alert('Se agrego la nueva oferta')";
	print "</script>";  
	 echo "<script>window.location.href='oferta.php'</script>" ;
	 
	 
// A function that checks to see if
// an email is valid
 

?>