<?php
if(@session_start() == false){session_destroy();session_start();}
include "config.php"; 
if(isset($_SESSION['nombre']))
{
?>
<!DOCTYPE html>
<html>
  <head>
	
	<meta charset="ISO-8859-1">
    <title>Gestionar Documentos | FSS</title>
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
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71936087-1', 'auto');
  ga('send', 'pageview');

</script>
  </head>
  <body class="skin-green">
    <div class="wrapper">
      
      <header class="main-header">

        <!-- Logo -->
        <a href="admin.php" class="logo"><b>FSS</b></a>

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
          <div class="user-panel">
            <div class="pull-left info">
			 <?php
				$nombre = $_SESSION["nombre"];
				$db = new MySQL();
				$consulta = $db->consulta("SELECT * FROM usuarios where nombre = '$nombre'");
				$db->num_rows($consulta)>0;
				$resultados = $db->fetch_array($consulta);
			 ?>
              <p><b>Usuario: </b><?php echo $resultados['nombre'] ?></p>
			  <a href="cerrar.php">Cerrar sesi&oacute;n</a>
              <!-- Status -->
            </div>
          </div>
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
            Gestionar Documentos<br>
            <small>Aqui podras gestionar los documentos que estan en el sistema</small>
          </h1>
        
        </section>

        <!-- Main content -->
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
                        <th>Apellido</th>
						<th>Fecha Creaci&oacute;n</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th>Email</th>
						<th>Cargo</th>
						<th>Archivo</th>
                        <th>Carta Pres.</th>
                        <th>Eliminar</th>						
                      </tr>
                    </thead>
                    <tbody>
                     <?php
						$db = new MySQL();
						$consulta = $db->consulta("select * from curriculum order by id_cvs desc");
						if($db->num_rows($consulta)>0){
						while($resultados = $db->fetch_array($consulta)){
						?>
						<tr>
							<td><?php echo $resultados['id_cvs'];?></td>
							<td><?php echo $resultados['nombre'];?></td>
							<td><?php echo $resultados['apellido'];?></td>
							<td><?php echo $resultados['fecha'];?></td>
							<td><?php echo $resultados['direccion'];?> </td>
							<td><?php echo $resultados['telefono'];?></td>
							<td><?php echo $resultados['email'];?></td>
							<td><?php echo $resultados['cargo'];?></td>
							<td>
							
							<a href="../<?php echo $resultados['nom_cvs'];?>" target="_blank" title="Abrir en una nueva pesta&ntilde;a">
							<?php echo $resultados['nom_cvs'];?>
							</a>
							</td>
							<td>
							<?php
							 if($resultados['presentacion'] != null)
							 {
							?>
							<a href="/cartas/<?php echo $resultados['presentacion'];?>" target="_blank" title="Abrir en una nueva pesta&ntilde;a">
							Ver Presentacion
							</a>
							<?php
							 }
							?>
							</td>
							<td>
							<form method="post" action="eliminarReg.php">
							<input type="hidden" name="eliminar" value="<?php echo $resultados['id_cvs'];?>" />
							<input type="hidden" name="curriculum" value="../<?php echo $resultados['nom_cvs'];?>" />
							<input type="hidden" name="carta" value="/cartas/<?php echo $resultados['presentacion'];?>" />
							<button type="submit">X</button>
							</form>
							</td>
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
								<th>Apellido</th>
								<th>Fecha Creaci&oacute;n</th>
								<th>Direccion</th>
								<th>Telefono</th>
								<th>Email</th>
								<th>Cargo</th>
								<th>Archivo</th>
								<th>Carta Pres.</th>
								<th>Eliminar</th>	
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
         Ilumina360
        </div>
        <!-- Default to the left --> 
        <strong>&copy; 2016 <a href="http://www.fss.cl" target="_blank">FSS</a>.</strong>
      </footer>
    </div><!-- ./wrapper -->

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
<script>window.location.href='http://www.fss.cl'</script>
<?php
}
?>