<?php
if(isset($_POST['Enviar'])):
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])):
		//your site secret key
        $secret = '6LcKzg8UAAAAAGHeCdvmce8Nj1e_LhzFBt8ZzTdb';
		//get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success):
			
			$nombre = $_POST['nombre'];
			$telefono = $_POST['telefono'];
			$email = $_POST['email'];
			$comentario = $_POST['mensaje'];
			$mensajeAviso= "";
			
			$nombre = trim($nombre);
			$email = trim ($email);
			$mensaje = trim($mensaje);
			
			if(strcmp($nombre, '')==0)
			{
				$mensajeAviso = "(*)Nombre En blanco";
				header("Location: http://www.fss.cl/landing.php?mensaje=". $mensajeAviso);
				die();
			}
			if(strcmp($email, '')==0)
			{
				$mensajeAviso = "(*)Email En blanco";
				header("Location: http://www.fss.cl/landing.php?mensaje=". $mensajeAviso);
				die();
			}
			 if(strcmp($comentario, '')==0)
			{
				$mensajeAviso = "(*)Mensaje En blanco";
				header("Location: http://www.fss.cl/landing.php?mensaje=". $mensajeAviso);
				die();
			}
			
			// Send the email
			$to = "ventas@fss.cl";
			//$to1 = "hugo@estudiografico.cl";
			$subject = "Contacto de: ".$_POST['email']."";

			$mensaje = "------------------------------------------------ \n";
			$mensaje.= "                 Contacto FSS                    \n";
			$mensaje.= "------------------------------------------------ \n";
			$mensaje.= "Nombre:   ".$nombre."\n";
			$mensaje.= "Telefono:   ".$_POST['telefono']."\n";
			$mensaje.= "Email:   ".$email."\n";
			$mensaje.= "Mensaje:   ".$comentario."\n";
			$mensaje.= "Fecha:    ".date("d/m/Y")."\n\n";
			$mensaje.= "Este mensaje a sido enviado por medio http://www.fss.cl\n";
			$mensaje.= "Muchas gracias por contactarse con nosotros, pronto nos comunicaremos con usted.";


			$headers = "contacto FSS";

			//mail($to, $subject, $mensaje, $headers);
			mail($to1, $subject, $mensaje, $headers);
			// Die with a success message
			$mensajeAviso = "(*)Mensaje Enviado Correctamente";
			header("Location: http://www.fss.cl/landing.php?mensaje=". $mensajeAviso);
		     die();
			
        else:
		     $mensajeAviso = "(*)Robot verification failed, please try again.";
		     header("Location: http://www.fss.cl/landing.php?mensaje=". $mensajeAviso);
			 die();
        endif;
    else:
	    $mensajeAviso = "(*)Please click on the reCAPTCHA box.";
		header("Location: http://www.fss.cl/landing.php?mensaje=". $mensajeAviso);
	    die();
    endif;
else:
 header("Location: http://www.fss.cl/landing.php");
endif;
?>
