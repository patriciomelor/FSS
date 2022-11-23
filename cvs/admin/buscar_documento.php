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
    <title>Buscar Documento | ICCM</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
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
            Buscar Documento<br>
            <small>Aqui podras buscar los documentos que estan en el sistema</small>
          </h1>
        
        </section>
	  
      <!-- Content Wrapper. Contains page content -->
         <section class="content">
          <div class="row">
            <div class="col-xs-12">
              
              <div class="box">
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                     <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Fecha</th>
                        <th>Tipo de documento</th>
                        <th>Destinatario</th>
                        <th>Estado</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php
						$db = new MySQL();
						$consulta = $db->consulta("Select * from documento d, tipo_documento td, persona p, estado e where d.id_tipo_documento = td.id_tipo_documento and p.id_persona = d.id_para_persona and d.id_estado = e.id_estado");
						if($db->num_rows($consulta)>0){
						while($resultados = $db->fetch_array($consulta)){
						?>
						<tr>
							<td><?php echo $resultados['id_documento'] ?></td>
							<td><a href="documentos/<?php echo $resultados['file']?>" target="_blank"><?php echo $resultados['nombre_documento'] ?></a></td>
							<td><?php echo $resultados['fecha_subida_documento'] ?></td>
							<td><?php echo $resultados['nombre_tipo_documento'] ?></td>
							<td><?php echo $resultados['rut_persona'] ?> | <?php echo $resultados['apellido_paterno_persona'] ?> <?php echo $resultados['apellido_materno_persona'] ?>, <?php echo $resultados['nombre_persona'] ?></td>	
							<td><?php echo $resultados['nombre_estado'] ?></td>	
						</tr>
						<?php
						}
						}
						?>
                    </tbody>
                    <tfoot>
                       <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Fecha</th>
                        <th>Tipo de documento</th>
                        <th>Destinatario</th>
                        <th>Estado</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
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
    
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
      });
    </script>
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