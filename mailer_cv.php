<?php
include "config2.php";
$allowedExts = array("doc", "docx", "pdf");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

$temp2 = explode(".", $_FILES["presentacion"]["name"]);
$extension2 = end($temp2);

$contador = 0;
$contador2 = 0;

/*VALIDACIONES TIPO POST*/

foreach ($allowedExts as $valor) 
{
	if (strcmp($extension, $valor) == 0) 
	{
		$contador = $contador + 1;
	}
	if(strcmp($extension2, $valor) == 0)
	{
		$contador2 = $contador2 + 1;
	}
}

/*si el contador es mayor a cero es uno de los tipos doc docx o PDF si no es invalido*/
if($contador > 0 && $contador2 > 0)
{
	//TAMAÑO EN MEGABYTES
	if($_FILES["file"]["size"] < (1048576 * 4) && $_FILES["presentacion"]["size"] < (1048576 * 4))
	{
	  //revisa el archivo seguridadarchivos.php ahi esta para ponerle seguridad cuando suben algo
// paso a variable el lugar donde iran los cv
	$directorio = $_SERVER['DOCUMENT_ROOT'].'/cvs/';
	$directorioCartas = $_SERVER['DOCUMENT_ROOT'].'/cartas/';
    
// rescato las partes del archivo	
	$file = $_FILES['file']['name'];
    $tipo = $_FILES['file']['type'];
    $tamano = $_FILES['file']['size'];
	
	
	$file2 = $_FILES['presentacion']['name'];
	$tipo2 = $_FILES['presentacion']['type'];
	$tamano2 = $_FILES['presentacion']['size'];
// rescato las variables del formulario

	$fecha = $_POST["fecha"];
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$direccion = $_POST["direccion"];
	$telefono = $_POST["telefono"];
	$email = $_POST["email"];
	$cargo = $_POST["cargo"];
	
			
	if(strcmp($nombre, '')==0)
	{
		print "<script type=\"text/javascript\">";
		print "alert('(*)Nombre en blanco')";
		print "</script>";
		print "<script>window.location.href='index.php';</script>";
		die();
	}
	if(strcmp($apellido, '')==0)
	{
		print "<script type=\"text/javascript\">";
		print "alert('(*)Apellido en blanco')";
		print "</script>";
		print "<script>window.location.href='index.php';</script>";
		die();
	}
	if(strcmp($telefono, '')==0)
	{
		print "<script type=\"text/javascript\">";
		print "alert('(*)Telefono en blanco')";
		print "</script>";
		print "<script>window.location.href='index.php';</script>";
		die();
	}

	
// muevo el archivo al directorio de destino

        $soloNombre = $temp[0];
		
		$db = new BBDD();
		$consultaCurr = $db->consulta("SELECT nom_cvs FROM curriculum where nom_cvs LIKE '$soloNombre%'");
		
		$soloNombre = $temp2[0];
		$consultaCarta = $db->consulta("SELECT presentacion FROM curriculum where presentacion LIKE '$soloNombre%'");
		
		try 
		{
			if($db->num_rows($consultaCurr)>0)
			{
				$num = $db->num_rows($consultaCurr);
				$file = $temp[0].'('.$num++.').'.$extension;
				
			}
			
			if($db->num_rows($consultaCarta)>0)
			{
				$num = $db->num_rows($consultaCarta);
				$file2 = $temp2[0].'('.$num++.').'.$extension2;
				
			}
			
			
		} catch (Exception $e) 
		{
			echo 'Excepción capturada: ',  $e->getMessage(), "\n";
			die();
		}
			

	move_uploaded_file($_FILES['file']['tmp_name'],$directorio.'/'.$file);
	move_uploaded_file($_FILES['presentacion']['tmp_name'],$directorioCartas.'/'.$file2);

	if (!empty($file) && !empty($file2))
	{ 
		// Aca guardo los datos en una tabla mysql esta comentado por q no existe, la debes crear
		 $valor = "insert into curriculum values ('null','$nombre','$apellido','$fecha','$direccion','$telefono','$email','$cargo','$file','$file2')";
		 $db-> consulta($valor);
		
		// email de destino
		//$mail = "empresasrrhhser@gmail.com";
		// asunto del email
		$subject = "CV FSS";	
		// Cuerpo del mensaje
		$mensaje = "------------------------------------------------ \n";
		$mensaje.= "              Curriculum Vitae            \n";
		$mensaje.= "------------------------------------------------ \n";
		$mensaje.= "Nombre:   ".$nombre."\n";
		$mensaje.= "Apellido:   ".$apellido."\n";
		$mensaje.= "Direccion:   ".$_POST['direccion']."\n";
		$mensaje.= "Telefono:    ".$telefono."\n";
		$mensaje.= "cargo:    ".$_POST['cargo']."\n";
		$mensaje.= "Email:    ".$_POST['email']."\n\n";
		$mensaje.= "-";
		$mensaje.= "Contacto directo: empresasrrhhser@gmail.com";
		
		
		// headers del email
		$headers = "From: Contacto CVs FSS \r\n";
		mail("empresasrrhhser@gmail.com", $subject, $mensaje, $headers);
		print "<script type=\"text/javascript\">";
		print "alert('Enviado correctamente')";
		print "</script>";
		print "<script>window.location.href='index.php'</script>";
		die();
		
		// Aca redireccion cuando esta todo ok
		//	 echo "<script>window.location.href='index.php'</script>" ;
	} 
	else
	{
		print "<script type=\"text/javascript\">";
		print "alert('Seleccione un archivo')";
		print "</script>";
		print "<script>window.location.href='index.php'</script>";
		die();
		
	}

	}
	else
	{
	  	print "<script type=\"text/javascript\">";
	    print "alert('Tamaño Excedido')";
	    print "</script>";
		print "<script>window.location.href='index.php'</script>";
	    die();
	}
}
else
{
	print "<script type=\"text/javascript\">";
	print "alert('Adjunte DOC, DOCX o PDF.')";
	print "</script>";
	print "<script>window.location.href='index.php'</script>";
	die();
}
?>