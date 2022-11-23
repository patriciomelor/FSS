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
    <title>Editar Contrato Interempresa| ICCM</title>
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
            Editar Contratos Interempresa<br>
            <small>Aqui podras editar la informaci&oacute;n de los Contratos Interempresa</small>
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
                        <th>Nombre empresa</th>
                        <th>Rut empresa</th>
                        <th>Nombre representante</th>
                        <th>Tipo de trabajo</th>
                        <th>Valor moneda</th>
                        <th>Duracion</th>
                        <th>Fecha contrato</th>
                        <th>Estado</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php
						$db = new MySQL();
						$consulta = $db->consulta("Select * from contrato_interempresas ci,empresa e,  estado es where es.id_estado = ci.id_estado and ci.id_empresa = e.id_empresa");
						if($db->num_rows($consulta)>0){
						while($resultados = $db->fetch_array($consulta)){
							echo'<tr class="'.$class.'">
							<td>'.$resultados['nombre_empresa'].'</td>
							<td>'.$resultados['rut_empresa'].'</td>
							<td>'.$resultados['nombre_representante'].'</td>
							<td>'.$resultados['tipo_de_trabajo'].'</td>
							<td>'.$resultados['valor_moneda_trabajo'].'</span></td>
							<td>'.$resultados['duracion_fecha'].'</span></td>
							<td>'.$resultados['fecha_contrato_inter'].'</span></td>				
							<td><span class= "xestado" data-type="select"  data-pk="'.$resultados['id_contrato_interempresas'].'" >'.$resultados['nombre_estado'].'</span></td>
							</tr>';		
						}
						}
						?>
						
						
                    </tbody>
                    <tfoot>
                       <tr>
                        <th>Nombre empresa</th>
                        <th>Rut empresa</th>
                        <th>Nombre representante</th>
                        <th>Tipo de trabajo</th>
                        <th>Valor moneda</th>
                        <th>Duracion</th>
                        <th>Fecha contrato</th>
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
	<script src="plugins/jQuery/bootstrap-editable.js" type="text/javascript"></script>
     <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
		
      });
	     jQuery(document).ready(function() {  
		

        $.fn.editable.defaults.mode = 'popup';
			
		$('.xestado').editable({
        type: 'select',
        source: [
			{value: 1, text: 'Activo'},
			{value: 2, text: 'Inactivo'},
			{value: 3, text: 'Pendiente de revision'} ]
		,pk: 1
        ,url: 'econtratoi.php'
		});
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