<?php
include "config.php";

$id_novedad = $_GET['id_novedad'];

mysql_query("DELETE FROM novedad WHERE id_novedad='$id_novedad'")or die(mysql_error());

print "<script type=\"text/javascript\">"; 
	print "alert('Se eliminoo la novedad')";
	print "</script>";  
	 echo "<script>window.location.href='oferta.php'</script>" ;
	 
?>