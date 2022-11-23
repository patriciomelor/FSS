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
    <title>Agregar Empresa | ICCM</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="dist/css/skins/skin-blue.min.css" rel="stylesheet" type="text/css" />
	<link href="dist/css/skins/skin-blue.min.css" rel="stylesheet" type="text/css" />

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
            Agregar empresa<br>
            <small>Aqui puede crear una empresa para los contratos interempresa<br><br></small>
          </h1>
		  <div class="row">
          <div class="col-md-6 col-xs-12">
		   <div class="box box-success">
                <!-- form start -->
              <form  method="post" action="registro_empresa.php" role="form">
                  <div class="box-body">
                 <div class="form-group">
  <label for="nombre_empresa">Nombre empresa:</label>  
  <input id="nombre_empresa" name="nombre_empresa" type="text" placeholder="" class="form-control input-md" required="">
</div>

<!-- Text input-->
<div class="form-group">
  <label for="rut_empresa">Rut empresa:</label>  
  <input id="rut_empresa" name="rut_empresa" type="text" placeholder="" class="form-control input-md" required="">
</div>

<!-- Text input-->
<div class="form-group">
  <label for="nombre_representante">Nombre representante:</label>  
  <input id="nombre_representante" name="nombre_representante" type="text" placeholder="" class="form-control input-md" required="">
</div>

<!-- Text input-->
<div class="form-group">
  <label for="rut_representante">Rut representante:</label>  
  <input id="rut_representante" name="rut_representante" type="text" placeholder="" class="form-control input-md" required="">
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


<div class="form-group">
  <label for="id_profesion_oficio">Profesi&oacute;n u oficio:</label>
    <select id="id_profesion" name="id_profesion" class="form-control">
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


<!-- Text input-->
<div class="form-group">
  <label for="giro">Giro:</label>  
  <input id="giro" name="giro" type="text" placeholder="" class="form-control input-md" required="">
</div>




<!-- Select Basic -->
<div class="form-group">
  <label for="id_tipo_empresa">Tipo empresa:</label>
    <select id="id_tipo_empresa" name="id_tipo_empresa" class="form-control">
	<?php
	$db = new MySQL();
	$consulta = $db->consulta("select * from tipo_empresa order by nombre_tipo_empresa");
	if($db->num_rows($consulta)>0){
	  while($resultados = $db->fetch_array($consulta)){
	  ?>
	 <option value="<?php echo $resultados['id_tipo_empresa'] ?>"><?php echo $resultados['nombre_tipo_empresa'] ?></option>
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
	<script src="plugins/jQuery/jquery.Rut.min.js" type="text/javascript"></script>
		
	<script>
	    $('#rut_empresa').Rut({
		 on_error: function(){ alert('Rut incorrecto'); },
		 format_on: 'keyup'
		});
		$('#rut_representante').Rut({
		 on_error: function(){ alert('Rut incorrecto'); },
		 format_on: 'keyup'
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