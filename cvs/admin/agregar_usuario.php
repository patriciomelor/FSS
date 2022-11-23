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
    <title>Agregar Usuarios | ICCM</title>
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
	
	
	<script>
	</script>
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
            Agregar usuarios<br>
            <small>Aqui puede crear tanto administradores como clientes<br><br></small>
          </h1>
		  <div class="row">
          <div class="col-md-6 col-xs-12">
		   <div class="box box-success">
                <!-- form start -->
                <form  method="post" action="registro_persona.php" role="form">
                  <div class="box-body">
				  
				  

<div class="form-group">
  <label for="id_tipo_persona">Tipo de usuario:</label>
    <select id="id_tipo_persona" name="id_tipo_persona" class="form-control">
	<?php
	$db = new MySQL();
	$consulta = $db->consulta("select * from tipo_persona order by nombre_tipo_persona");
	if($db->num_rows($consulta)>0){
	  while($resultados = $db->fetch_array($consulta)){
	  ?>
	 <option value="<?php echo $resultados['id_tipo_persona'] ?>"><?php echo $resultados['nombre_tipo_persona'] ?></option>
	  <?php
	 }
	 }
	?>
	</select>
</div>
                 <div class="form-group">
  <label for="nombre_persona">Nombre:</label>  
  <input id="nombre_persona" name="nombre_persona" type="text" placeholder="" class="form-control input-md" required="">
</div>

<!-- Text input-->
<div class="form-group">
  <label for="apellido_paterno_persona">Apellido paterno:</label>  
  <input id="apellido_paterno_persona" name="apellido_paterno_persona" type="text" placeholder="" class="form-control input-md" required="">
</div>

<!-- Text input-->
<div class="form-group">
  <label for="apellido_materno_persona">Apellido materno:</label>  
  <input id="apellido_materno_persona" name="apellido_materno_persona" type="text" placeholder="" class="form-control input-md" required="">
</div>

<!-- Text input-->
<div class="form-group" >
  <label for="rut_persona">Rut:</label>  
  <input type="text" id="rut_persona" name="rut_persona"  class="form-control input-md" required="">
<div class="form-group" id ="rut1"></div>
  </div>

<!-- Text input-->
<div class="form-group">
  <label for="email_persona">Email:</label>  
  <input id="email_persona" name="email_persona" type="text" placeholder="" class="form-control input-md">
</div>

<!-- Text input-->
<div class="form-group">
  <label for="telefono_persona">Tel&eacute;fono:</label>  
  <input id="telefono_persona" name="telefono_persona" type="text" placeholder="" class="form-control input-md" required=""
   data-inputmask="'mask': ['+56 9 99999999']" data-mask="">
    
</div>

<!-- Password input-->
<div class="form-group">
  <label for="clave_persona">Clave:</label>
    <input id="clave_persona" name="clave_persona" type="password" placeholder="" class="form-control input-md">
</div>

<!-- Text input-->
<div class="form-group">
  <label for="fecha_de_nacimiento">Fecha de nacimiento:</label>  
  <input id="fecha_de_nacimiento" name="fecha_de_nacimiento" type="text" placeholder="" class="form-control input-md" required="">
</div>


<!-- Select Basic -->
<div class="form-group">
  <label for="genero_persona">Genero:</label>
    <select id="genero_persona" name="genero_persona" class="form-control">
      <option value="Masculino">Masculino</option>
      <option value="Femenino">Femenino</option>
    </select>
</div>

<!-- Text input-->
<div class="form-group">
  <label for="direccion_persona">Direcci&oacute;n:</label>  
  <input id="direccion_persona" name="direccion_persona" type="text" placeholder="" class="form-control input-md">
</div>

<!-- Select Basic -->
<div class="form-group">
  <label for="id_comuna">Comuna:</label>
    <select id="id_comuna" name="id_comuna" class="form-control">
	<?php
	$db = new MySQL();
	$consulta = $db->consulta("select * from comunas order by comuna_nombre");
	if($db->num_rows($consulta)>0){
	  while($resultados = $db->fetch_array($consulta)){
	  ?>
	 <option value="<?php echo $resultados['comuna_id'] ?>"><?php echo $resultados['comuna_nombre'] ?></option>
	  <?php
	 }
	 }
	?>
	</select>
	
</div>

<div class="form-group">
  <label for="id_profesion_oficio">Profesi&oacute;n u oficio:</label>
    <select id="id_profesion_oficio" name="id_profesion_oficio" class="form-control">
	<?php
	$db = new MySQL();
	$consulta = $db->consulta("select * from profesion_oficio order by nombre_profesion_oficio");
	if($db->num_rows($consulta)>0){
	  while($resultados = $db->fetch_array($consulta)){
	  ?>
	 <option value="<?php echo $resultados['id_profesion_oficio'] ?>"><?php echo $resultados['nombre_profesion_oficio'] ?></option>
	  <?php
	 }
	 }
	?>
	</select>
</div>


<div class="form-group">
  <label for="id_prevision_social">Previsi&oacute;n social:</label>
    <select id="id_prevision_social" name="id_prevision_social" class="form-control">
	<?php
	$db = new MySQL();
	$consulta = $db->consulta("select * from prevision_social order by nombre_prevision_social");
	if($db->num_rows($consulta)>0){
	  while($resultados = $db->fetch_array($consulta)){
	  ?>
	 <option value="<?php echo $resultados['id_prevision_social'] ?>"><?php echo $resultados['nombre_prevision_social'] ?></option>
	  <?php
	 }
	 }
	?>
	</select>
</div>

<div class="form-group">
  <label for="id_prevision_salud">Previsi&oacute;n salud:</label>
    <select id="id_prevision_salud" name="id_prevision_salud" class="form-control">
	<?php
	$db = new MySQL();
	$consulta = $db->consulta("select * from prevision_salud order by nombre_prevision_salud");
	if($db->num_rows($consulta)>0){
	  while($resultados = $db->fetch_array($consulta)){
	  ?>
	 <option value="<?php echo $resultados['id_prevision_salud'] ?>"><?php echo $resultados['nombre_prevision_salud'] ?></option>
	  <?php
	 }
	 }
	?>
	</select>
</div>




<div class="form-group">
  <label for="id_estado_civil">Estado civil:</label>
    <select id="id_estado_civil" name="id_estado_civil" class="form-control">
	<?php
	$db = new MySQL();
	$consulta = $db->consulta("select * from estado_civil order by nombre_estado_civil");
	if($db->num_rows($consulta)>0){
	  while($resultados = $db->fetch_array($consulta)){
	  ?>
	 <option value="<?php echo $resultados['id_estado_civil'] ?>"><?php echo $resultados['nombre_estado_civil'] ?></option>
	  <?php
	 }
	 }
	?>
	</select>
</div>




<!-- Text input-->
<div class="form-group">
  <label for="comentarios">Comentarios:</label>  
  <textarea id="comentarios" name="comentarios" placeholder="" class="form-control input-md"></textarea>
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
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                  </div>
                </form>
              </div>
          </div>
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
    
   	
	<script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
 	<script src="plugins/jQuery/jquery.Rut.min.js" type="text/javascript"></script>
	<!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
	<!-- date-range-picker -->		
    <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
	<script src="plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
		
	<script>
	   
		
		 $(document).ready(function(){
			  $('#rut_persona').Rut({
		 on_error: function(){ alert('Rut incorrecto'); },
		 format_on: 'keyup'
		});
                          var consulta;
             
      //hacemos focus
                                                 
      //comprobamos si se pulsa una tecla
      $("#rut_persona").keyup(function(e){
             //obtenemos el texto introducido en el campo
             consulta = $("#rut_persona").val();
                                      
             //hace la búsqueda
             $("#rut1").delay(1000).queue(function(n) {      
                                           
                                           
                        $.ajax({
                              type: "POST",
                              url: "valExistencia.php",
                              data: "b="+consulta,
                              dataType: "html",
                              error: function(){
                                    alert("error petición ajax");
                              },
                              success: function(data){                                                      
                                    $("#rut1").html(data);
                                    n();
                              }
                  });
                                           
             });
                                
      });
                          
});
     
		
		$(function () {
         //Date range picker
        $('#fecha_de_nacimiento').datepicker();
	 $("[data-mask]").inputmask();
        
       
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