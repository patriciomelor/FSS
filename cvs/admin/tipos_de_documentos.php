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
    <title>Tipos de documentos | ICCM</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
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
            Tipos de documentos<br>
            <small>Aqui se agregan y muestran los tipos de documentos<br><br></small>
          </h1>
		  <div class="row">
          <div class="col-md-6">
		   <div class="box box-success">
                <!-- form start -->
               <form  method="post" action="registro_tipos_de_documentos.php" role="form">
                  <div class="box-body">
                 <div class="form-group">
  <label for="nombre_tipo_documento">Nombre:</label>  
  <input id="nombre_tipo_documento" name="nombre_tipo_documento" type="text" placeholder="" class="form-control input-md" required="">
</div>

                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                  </div>
                </form>
              </div>
          </div>
		  
		  
		  <div class="col-md-6">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Tipos de estados actuales</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tbody>
					<tr>
                      <th>#</th>
                      <th>Tipos de documentos</th>
                    </tr>
                  
					<?php
					$db = new MySQL();
					$consulta = $db->consulta("select * from tipo_documento order by nombre_tipo_documento");
					if($db->num_rows($consulta)>0){
					  while($resultados = $db->fetch_array($consulta)){
					  ?>
					  <tr>
					  <td><?php echo $resultados['id_tipo_documento'] ?></td>
					  <td><?php echo $resultados['nombre_tipo_documento'] ?></td>
					  </tr>
					  <?php
					 }
					 }
					?>
                  </tbody></table>
                </div><!-- /.box-body -->
                
              </div><!-- /.box -->
            </div>
		  
          </div>
        </section>

        <!-- Main content -->
        <section class="content">
          
          <!-- Your Page Content Here -->

        </section><!-- /.content -->
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