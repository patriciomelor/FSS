<?php 
 include "config.php"; 
 
if(@session_start() == false){session_destroy();session_start();}
$nombre = $_POST['nom_admin'];
$clave = $_POST['pass_admin'];

$result = mysql_query("SELECT nombre, clave FROM usuarios WHERE nombre = '$nombre'");

$row = mysql_fetch_array($result);
if($clave == $row['clave']){
	$_SESSION['nombre'] = $row['nombre'];
		?>
		<script type="text/javascript">window.location.href="admin/admin.php";</script>
		<?php
}
else
{
 ?>
<script type="text/javascript">alert('Email o clave incorrecta');</script>
<?php
    ?> 
	<script>javascript:history.back();</script> 
	<?php
}
?>