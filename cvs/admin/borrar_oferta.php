<?php
include "config.php";

$id_oferta = $_GET['id_oferta'];

mysql_query("DELETE FROM oferta WHERE id_oferta='$id_oferta'")or die(mysql_error());

print "<script type=\"text/javascript\">"; 
	print "alert('Se eliminoo la oferta')";
	print "</script>";  
	 echo "<script>window.location.href='oferta.php'</script>" ;
	 
?>