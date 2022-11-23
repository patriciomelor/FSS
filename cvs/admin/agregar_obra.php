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
    <title>Agregar Obra | ICCM</title>
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
            Agregar Obra<br>
            <small>Aqui puede crear una nueva obra<br><br></small>
          </h1>
		  <div class="row">
          <div class="col-md-6">
		   <div class="box box-success">
                <!-- form start -->
                <form  method="post" action="registro_obra.php" role="form">
                  <div class="box-body">
                
<!-- Text input-->
<div class="form-group">
  <label for="nombre_obra">Nombre Obra:</label>  
  <input id="nombre_obra" name="nombre_obra" type="text" placeholder="" class="form-control input-md" required="">
</div>

<div class="form-group">
  <label for="descripcion_obra">Descripci&oacute;n:</label>  
  <textarea id="descripcion_obra" name="descripcion_obra" placeholder="" class="form-control input-md"></textarea>
</div>

<!-- Text input-->
<div class="form-group">
  <label for="ubicacion_obra">Ubicaci&oacute;n:</label>  
  <input id="ubicacion_obra" name="ubicacion_obra" type="text" placeholder="" class="form-control input-md" required="">
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

<!-- Text input-->
<div class="form-group">
  <label for="fecha_inicio_obra">Fecha inicio:</label>  
  <input id="fecha_inicio_obra" name="fecha_inicio_obra" type="text" placeholder="" class="form-control input-md" required="">
</div>

<!-- Text input-->
<div class="form-group">
  <label for="fecha_fin_obra_aproximada">Fecha fin aproximada:</label>  
  <input id="fecha_fin_obra_aproximada" name="fecha_fin_obra_aproximada" type="text" placeholder="" class="form-control input-md" required="">
</div>

<!-- Text input-->
<div class="form-group">
  <label for="nombre_cliente_obra">Nombre cliente:</label>  
  <input id="nombre_cliente_obra" name="nombre_cliente_obra" type="text" placeholder="" class="form-control input-md" required="">
</div>



<div class="form-group">
  <label for="id_persona_responsable">Persona responsable:</label>
    <select id="id_persona_responsable" name="id_persona_responsable" class="form-control">
	<?php
	$db = new MySQL();
	$consulta = $db->consulta("select * from persona order by apellido_paterno_persona");
	if($db->num_rows($consulta)>0){
	  while($resultados = $db->fetch_array($consulta)){
	  ?>
	 <option value="<?php echo $resultados['id_persona'] ?>"><?php echo $resultados['apellido_paterno_persona'] ?> <?php echo $resultados['apellido_materno_persona'] ?>, <?php echo $resultados['nombre_persona'] ?></option>
	  <?php
	 }
	 }
	?>
	</select>
	
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
    
    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
	<script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
	<script>
		$(function () {
         //Date range picker
        $('#fecha_inicio_obra').datepicker();
        $('#fecha_fin_obra_aproximada').datepicker();
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