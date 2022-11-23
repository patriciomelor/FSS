<?php

if(isset($_POST['Enviar'])){

		$secretKey = '6Le3AWAUAAAAAJkhEFOpnTtdGAilIQcU2aFjlW-Z';
		$responseKey = $_POST['g-recaptcha-response'];
		$userIP = $_SERVER['REMOTE_ADDR'];
		$url = 'https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$responseKey.'&remoteip='.$userIP;
		$response = file_get_contents($url);
		$response = json_decode($response);

		if($response->success){
		


			$nombre = $_POST['nombre'];
			$telefono = $_POST['telefono'];
			$email = $_POST['email'];
			$comentario = $_POST['mensaje'];
			$mensajeAviso= "";


			$txtRut = $_POST['txtRut'];
			$txtRazon = $_POST['txtRazon'];
			$cboClausula = $_POST['cboClausula'];
			$valorMercaderia = $_POST['txtValorMercaderia'];
			$cboMedio = $_POST['cboMedio'];
			$txtPuerto1 = $_POST['txtPuerto1'];
			$txtPuerto2 = $_POST['txtPuerto2'];
			$txtTipoEmbalaje = $_POST['txtTipoEmbalaje'];
			$txtRiesgo = $_POST['txtRiesgo'];

			
			$nombre = trim($nombre);
			$email = trim($email);
			$mensaje = trim($mensaje);

			if(strcmp($nombre, '')==0)
			{
				$mensajeAviso = "(*)Nombre En blanco";
				header("Location: contacto.php?mensaje=". $mensajeAviso);
				die();
			}
			if(strcmp($email, '')==0)
			{
				$mensajeAviso = "(*)Email En blanco";
				header("Location: contacto.php?mensaje=". $mensajeAviso);
				die();
			}
			 if(strcmp($comentario, '')==0)
			{
				$mensajeAviso = "(*)Mensaje En blanco";
				header("Location: contacto.php?mensaje=". $mensajeAviso);
				die();
			}
			
			// Send the email
			$to = "ventas@fss.cl";
			
			$subject = "Contacto de: ".$_POST['email']."";

			$mensaje = "------------------------------------------------ \n";
			$mensaje.= "                 Contacto FSS                    \n";
			$mensaje.= "------------------------------------------------ \n";
			$mensaje.= "Nombre:   ".$nombre."\n";
			$mensaje.= "Telefono:   ".$_POST['telefono']."\n";
			$mensaje.= "Email:   ".$email."\n";
			$mensaje.= "Mensaje:   ".$comentario."\n";
			$mensaje.= "Fecha:    ".date("d/m/Y")."\n";
			if($txtRut){
			 $mensaje.= "Rut Empresa:   ".$txtRut."\n";
			}
			if($txtRazon){
			 $mensaje.= "Razón Social:   ".$txtRazon."\n";
			}
			if($cboClausula != "0"){
			 $mensaje.= "Cláusula compra venta:   ".$cboClausula."\n";
			}
			if($txtValorMercaderia){
			 $mensaje.= "Valor mercadería:   ".$txtValorMercaderia."\n";
			}

			if($cboMedio != "0"){
			 $mensaje.= "Medio de transporte:   ".$cboMedio."\n";
			}

			if($txtPuerto1){
			 $mensaje.= "Puerto de origen:   ".$txtPuerto1."\n";
			}
			if($txtPuerto2){
			 $mensaje.= "Puerto de destino:   ".$txtPuerto2."\n";
			}

			if($txtTipoEmbalaje){
			 $mensaje.= "Tipo de embalaje:   ".$txtTipoEmbalaje."\n";
			}

			if($txtRiesgo){
			 $mensaje.= "Información de riesgo:   ".$txtRiesgo."\n";
			}



			$mensaje.= "\nEste mensaje a sido enviado por medio http://www.fss.cl\n";
			$mensaje.= "Muchas gracias por contactarse con nosotros, pronto nos comunicaremos con usted.";


			$headers = "contacto FSS";

			mail($to, $subject, $mensaje, $headers);
			//mail($to1, $subject, $mensaje, $headers);
			// Die with a success message
			$mensajeAviso = "(*)Mensaje Enviado Correctamente";
			header("Location:contacto.php?mensaje=". $mensajeAviso);


			}else{
			$mensajeAviso = "(*)RECAPTCHA INVALIDO";
			header("Location:contacto.php?mensaje=". $mensajeAviso);
		}
    
}else{
	$mensajeAviso = "(*)Por favor inténtelo de nuevo o contáctese con el staff";
			header("Location:contacto.php?mensaje=". $mensajeAviso);
}