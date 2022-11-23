<?php
include "config.php";

$id_imagen_novedad = $_GET['id_imagen_novedad'];

mysql_query("DELETE FROM imagen_novedad WHERE id_imagen_novedad='$id_imagen_novedad'")or die(mysql_error());

print "<script type=\"text/javascript\">"; 
	print "alert('Se eliminoo la imagen de la novedad')";
	print "</script>";  
	 echo "<script>window.location.href='novedad.php'</script>" ;
	 
?>