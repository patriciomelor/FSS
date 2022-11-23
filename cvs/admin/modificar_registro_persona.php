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
$id = $_POST['id'];
$nombre_persona = $_POST['nombre_persona'];
$apellido_paterno_persona = $_POST['apellido_paterno_persona'];
$apellido_materno_persona = $_POST['apellido_materno_persona'];
$rut_persona = $_POST['rut_persona'];
$fecha_de_nacimiento = $_POST['fecha_de_nacimiento'];
$email_persona = $_POST['email_persona'];
$telefono_persona = $_POST['telefono_persona'];
$clave_persona = $_POST['clave_persona'];
$genero_persona = $_POST['genero_persona'];
$direccion_persona = $_POST['direccion_persona'];
$id_comuna = $_POST['id_comuna'];
$id_profesion_oficio = $_POST['id_profesion_oficio'];
$id_prevision_social = $_POST['id_prevision_social'];
$id_prevision_salud = $_POST['id_prevision_salud'];
$id_estado_civil = $_POST['id_estado_civil'];
$id_tipo_persona = $_POST['id_tipo_persona'];
$comentarios = $_POST['comentarios'];
$id_estado = $_POST['id_estado'];

mysql_query("update persona set nombre_persona ='$nombre_persona',apellido_paterno_persona='$apellido_paterno_persona' ,
apellido_materno_persona ='$apellido_materno_persona'
,rut_persona='$rut_persona'
,email_persona ='$email_persona'
,telefono_persona='$telefono_persona'
,clave='$clave_persona'
,fecha_de_nacimiento='$fecha_de_nacimiento'
,direccion_persona='$direccion_persona'
,id_comuna='$id_comuna'
,id_profesion_oficio='$id_profesion_oficio'
,id_prevision_social='$id_prevision_social'
,id_prevision_salud='$id_prevision_salud'
,id_estado_civil='$id_estado_civil'
,id_tipo_persona='$id_tipo_persona'
,comentarios='$comentarios'
,id_estado='$id_estado' where id_persona = '$id'
")or die(mysql_error());


print "<script type=\"text/javascript\">"; 
	print "alert('Se modifico el usuario correctamente')";
	print "</script>";  
	 echo "<script>window.location.href='buscar_usuario.php'</script>" ;
	 
	 
// A function that checks to see if
// an email is valid
function validEmail($email_persona)
{
   $isValid = true;
   $atIndex = strrpos($email_persona, "@");
   if (is_bool($atIndex) && !$atIndex)
   {
      $isValid = false;
   }
   else
   {
      $domain = substr($email_persona, $atIndex+1);
      $local = substr($email_persona, 0, $atIndex);
      $localLen = strlen($local);
      $domainLen = strlen($domain);
      if ($localLen < 1 || $localLen > 64)
      {
         // local part length exceeded
         $isValid = false;
      }
      else if ($domainLen < 1 || $domainLen > 255)
      {
         // domain part length exceeded
         $isValid = false;
      }
      else if ($local[0] == '.' || $local[$localLen-1] == '.')
      {
         // local part starts or ends with '.'
         $isValid = false;
      }
      else if (preg_match('/\\.\\./', $local))
      {
         // local part has two consecutive dots
         $isValid = false;
      }
      else if (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain))
      {
         // character not valid in domain part
         $isValid = false;
      }
      else if (preg_match('/\\.\\./', $domain))
      {
         // domain part has two consecutive dots
         $isValid = false;
      }
      else if(!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/',
                 str_replace("\\\\","",$local)))
      {
         // character not valid in local part unless
         // local part is quoted
         if (!preg_match('/^"(\\\\"|[^"])+"$/',
             str_replace("\\\\","",$local)))
         {
            $isValid = false;
         }
      }
      if ($isValid && !(checkdnsrr($domain,"MX") || checkdnsrr($domain,"A")))
      {
         // domain not found in DNS
         $isValid = false;
      }
   }
   return $isValid;
}

?>