<?php
if(isset($_POST['Enviar'])):
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])):
		//your site secret key
        $secret = '6LcKzg8UAAAAAGHeCdvmce8Nj1e_LhzFBt8ZzTdb';
		//get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
		
        if($responseData->success):
			
			// Assign the input values to variables for easy reference
			$nombre = $_POST["nombre"];
			$telefono = $_POST["telefono"];
			$email = $_POST["email"];
			$comentario = $_POST["mensaje"];
			$mensajeAviso= "";
			
			$nombre = trim($nombre);
			$email = trim ($email);
			$mensaje = trim($mensaje);
			
			if(strcmp($nombre, '')==0)
			{
				$mensajeAviso = "(*)Nombre En blanco";
				header("Location: http://www.fss.cl/cotizacion.php?mensaje=". $mensajeAviso);
				die();
			}
			if(strcmp($email, '')==0)
			{
				$mensajeAviso = "(*)Email En blanco";
				header("Location: http://www.fss.cl/cotizacion.php?mensaje=". $mensajeAviso);
				die();
			}
			 if(strcmp($comentario, '')==0)
			{
				$mensajeAviso = "(*)Mensaje En blanco";
				header("Location: http://www.fss.cl/cotizacion.php?mensaje=". $mensajeAviso);
				die();
			}

			// Send the email

			$to4 = "ventas@fss.cl";

			$subject = "Cotizacion FSS";

			$mensaje = "------------------------------------------------ \n";
			$mensaje.= "                  Cotizacion FSS                 \n";
			$mensaje.= "------------------------------------------------ \n";
			$mensaje.= "Nombre:   ".$nombre."\n";
			$mensaje.= "Telefono:   ".$telefono."\n";
			$mensaje.= "Email:   ".$email."\n";
			$mensaje.= "Mensaje:   ".$comentario."\n";
			$mensaje.= "Fecha:    ".date("d/m/Y")."\n\n";
			$mensaje.= "Este mensaje ha sido enviado por medio http://www.fss.cl\n";
			$mensaje.= "Muchas gracias por contactarse con nosotros.";


			$headers = "From: $email";

			mail($to4, $subject, $mensaje, $headers);

			// Die with a success message
			$mensajeAviso = "(*)Mensaje enviado correctamente";
		    header("Location: http://www.fss.cl/cotizacion.php?mensaje=". $mensajeAviso);
			die();
			
        else:
		     $mensajeAviso = "(*)Robot verification failed, please try again.";
		     header("Location: http://www.fss.cl/cotizacion.php?mensaje=". $mensajeAviso);
			 die();
        endif;
    else:
	    $mensajeAviso = "(*)Please click on the reCAPTCHA box.";
		header("Location: http://www.fss.cl/cotizacion.php?mensaje=". $mensajeAviso);
	    die();
    endif;
else:
 header("Location: http://www.fss.cl/cotizacion.php");
endif;
?>