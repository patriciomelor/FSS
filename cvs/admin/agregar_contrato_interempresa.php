<?php
if(@session_start() == false){session_destroy();session_start();}
include "config.php"; 
if(isset($_SESSION['email_persona']))
{
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="iso-8859-1">
    <title>Agregar Contrato Interempresa | ICCM</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="dist/css/skins/skin-blue.min.css" rel="stylesheet" type="text/css" />	
    <link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="administrador.php" class="logo"><b>ICCM</b></a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>          
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel (optional) -->
		 <?php
			include "user_panel.php"; 
		?>		  
          <!-- Sidebar Menu -->
		   <?php
			include "menu_principal.php"; 
		?>		  
		  <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Nuevo contrato interempresa<br>
            <small>Aqui puedes agregar los datos necesarios para el nuevo contrato interempresa<br><br></small>
          </h1>
		  <div class="row">
          <div class="col-md-6 col-xs-12">
		   <div class="box box-success">
                <!-- form start -->
               <form  method="post" action="registro_contrato_interempresa.php" role="form">
                  <div class="box-body">
				  
	
	<div class="form-group">
  <label for="id_empresa">Empresa:</label>
    <select id="id_empresa" name="id_empresa" class="form-control">
	<?php
	$db = new MySQL();
	$consulta = $db->consulta("select * from empresa order by nombre_empresa");
	if($db->num_rows($consulta)>0){
	  while($resultados = $db->fetch_array($consulta)){
	  ?>
	 <option value="<?php echo $resultados['id_empresa'] ?>"><?php echo $resultados['rut_empresa'] ?> <?php echo $resultados['nombre_empresa'] ?></option>
	  <?php
	 }
	 }
	?>
	</select>
	
</div>

<!-- Text input-->
<div class="form-group">
  <label for="tipo_de_trabajo">Tipo de trabajo:</label>  
  <textarea id="tipo_de_trabajo" name="tipo_de_trabajo" placeholder="" class="form-control input-md"></textarea>
</div>

<!-- Text input-->
<div class="form-group">
  <label for="detalle_trabajo">Detalle del trabajo:</label>  
  <textarea id="detalle_trabajo" name="detalle_trabajo" placeholder="" class="form-control input-md"></textarea>
</div>

<!-- Text input-->
<div class="form-group">
  <label for="valor_moneda_trabajo">Valor (Moneda) del trabajo:</label>  
  <input id="valor_moneda_trabajo" name="valor_moneda_trabajo" type="text" placeholder="" class="form-control input-md" required="" onchange="applyFormatCurrency(this);">
</div>

<!-- Text input-->
<div class="form-group">
  <label for="valor_en_palabras">Valor (En palabras) del trabajo:</label>  
  <input id="valor_en_palabras" name="valor_en_palabras" type="text" placeholder="" class="form-control input-md" required="">
</div>

<div class="form-group">
<label for="duracion_fecha">Duraci&oacute;n:</label>  
<input id="duracion_fecha" name="duracion_fecha" type="text" placeholder="" class="form-control input-md" required="">
</div>		

<div class="form-group">
<label for="personeria">Personeria:</label>  
<input id="personeria" name="personeria" type="text" placeholder="" class="form-control input-md" required="">
</div>		

<div class="form-group">
<label for="repertorio">Repertorio:</label>  
<input id="repertorio" name="repertorio" type="text" placeholder="" class="form-control input-md" required="">
</div>			  
				  	  
	 	<div class="form-group">
  <label for="fecha_contrato_inter">Fecha de contrato:</label>  
  <input id="fecha_contrato_inter" name="fecha_contrato_inter" type="text" placeholder="" class="form-control input-md" required="" value="<?php echo  $fecha= date("d/m/Y").""; ?>">
</div>


<!-- Text input-->
<div class="form-group">
  <label for="notario_que_otorga">Notario que otorga:</label>  
  <input id="notario_que_otorga" name="notario_que_otorga" type="text" placeholder="" class="form-control input-md" required="">
</div>



<div class="form-group">
  <label for="id_estado">Estado:</label>
    <select id="id_estado" name="id_estado" class="form-control">
	<?php
	$db = new MySQL();
	$consulta = $db->consulta("select * from estado order by nombre_estado");
	if($db->num_rows($consulta)>0){
	  while($resultados = $db->fetch_array($consulta)){
	  ?>
	 <option value="<?php echo $resultados['id_estado'] ?>"><?php echo $resultados['nombre_estado'] ?></option>
	  <?php
	 }
	 }
	?>
	</select>
</div>

	<div name="checkAnexos">
		<div>
			<label for="dia_inicio_servicios">Anexo 1:</label> 
			<input type="checkbox" name="colorCheckbox" value="red">
		</div>
		<div>
			<label for="dia_inicio_servicios">Anexo 2:</label>  
			<input type="checkbox" name="colorCheckbox" value="green">
		</div>
		<div>
			<label for="dia_inicio_servicios">Anexo 3:</label>  
			<input type="checkbox" name="colorCheckbox" value="blue">
		</div>
	</div>
</div><!-- /.box-body --> 

<div name="anexos">
		<div class="red box" style="display:none" >
		<section class="content-header">
		<h1>
			<small>Anexo 1.</small>
		</h1>
		<div class="row">         
        <div class="box-body">	
		<div class="form-group">
		<label for="objeto_del_contrato">Objeto del Contrato:</label>  
		<textarea id="objeto_del_contrato" name="objeto_del_contrato" placeholder="" class="form-control input-md"></textarea>
		</div>
		<div class="form-group">
		<label for="extension_del_contrato">Extensi&oacute;ndel Contrato:</label>  
		<textarea id="extension_del_contrato" name="extension_del_contrato" placeholder="" class="form-control input-md"></textarea>
		</div>
		</div> 
		</div> 
		</section>
		</div> 

		<div class="green box" style="display:none" >
		<section class="content-header">
		<h1>
			<small>Anexo 2.</small>
		</h1>
		<div class="row">               
        <div class="box-body">  
		<div class="form-group">
		<label for="precio_de_los_servicios">Precio de los servicios:</label>  
		<input id="precio_de_los_servicios" name="precio_de_los_servicios" type="text" placeholder="" class="form-control input-md" required="">
		</div> 
		<div class="form-group">
		<label for="forma_de_pago">Forma de pago:</label>  
		<input id="forma_de_pago" name="forma_de_pago" type="text" placeholder="" class="form-control input-md" required="">
		</div> <div class="form-group">
		<label for="impuestos_asociados">Impuetos Asociados:</label>  
		<input id="impuestos_asociados" name="impuestos_asociados" type="text" placeholder="" class="form-control input-md" required="">
		</div>
		</div>
		</div>
		</section>
		</div>

		<div class="blue box" style="display:none" >
		<section class="content-header">
		<h1>
			<small>Anexo 3.</small>
		</h1>
		<div class="row">
        <div class="box-body">
		<div class="form-group">
		<label for="han_convenido_en">Han convenido en:</label>  
		<input id="han_convenido_en" name="han_convenido_en" type="text" placeholder="" class="form-control input-md" required="">
		</div>
		<div class="form-group">
  <label for="observacion_y_fundamento">Observaci&oacute;n y Fundamento:</label>  
  <textarea id="observacion_y_fundamento" name="observacion_y_fundamento" placeholder="" class="form-control input-md"></textarea>
</div>
		</div>
		</div>
		</section>
		</div>
</div>
			
<div class="box-footer">
<button type="submit" class="btn btn-primary">Enviar</button>
</div>
</form>
</div>
</section>
</div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
         EstudioGrafico
        </div>
        <!-- Default to the left --> 
        <strong>&copy; 2015 <a href="http://www.iccm.cl" target="_blank">ICCM</a>.</strong>
      </footer>

    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->
    
    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>    
	<script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
	<script src="plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>	
	<script src="plugins/jQuery/jquery.formatCurrency-1.4.0.js" type="text/javascript"></script>
	<script src="plugins/jQuery/jquery.formatCurrency.es-CL.js" type="text/javascript"></script>
	
	<script>
	$(document).ready(function(){
    $('input[type="checkbox"]').click(function(){
        if($(this).attr("value")=="red"){
            $(".red").toggle();
        }
        if($(this).attr("value")=="green"){
            $(".green").toggle();
        }
        if($(this).attr("value")=="blue"){
            $(".blue").toggle();
        }
    });
	});
		function applyFormatCurrency(sender) {
		$(sender).formatCurrency({
			region: 'es-CL'
			, roundToDecimalPlace: -1
		});
			}
		
	  	$(function () 
		{
			$('#dia_inicio_servicios').datepicker();
			$('#fecha_contrato').datepicker();
		});
	  
	</script>
	
    <!-- Optionally, you can add Slimscroll and FastClick plugins. 
          Both of these plugins are recommended to enhance the 
          user experience -->
  </body>
</html>
<?php
}
else
{
?>
<script>window.location.href='http://www.iccm.cl/adm'</script>
<?
}
?>