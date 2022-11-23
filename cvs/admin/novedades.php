<?php
if(@session_start() == false){session_destroy();session_start();}
include "config.php"; 
if(isset($_SESSION['nom_admin']))
{
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="iso-8859-1">
    <title>Administrador Tecnipak </title>
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
        <a href="administrador.php" class="logo"><b>Tecnipak</b></a>

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

        <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
		<div class="row">
          <div class="col-md-12 col-xs-12">
		<div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Agregar Novedades</a></li>
                  <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Buscar Novedades</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                  
          <h1>
            Agregar Novedades<br>
            <small>Aqui puede crear tanto administradores como clientes<br><br></small>
          </h1>
		  
		  <div class="row">
		  <div class="col-md-6 col-xs-12">
	
	<?php
	if(isset($_POST['btn-save'])){	
	//print_r($_POST);
	$file 		= rand(1000,100000)."-".$_FILES['imagen']['name'];    
	$file_loc 	= $_FILES['imagen']['tmp_name'];	
	$file_size 	= $_FILES['imagen']['size'];	
	$file_type 	= $_FILES['imagen']['type'];	
	$folder		= "dist/img/novedades/";

	$titulo_noticia 	= $_POST['titulo_noticia'];
	$descrip_noticia 	= $_POST['descrip_noticia'];
	$nombre_imagen 		= $_POST['nombre_imagen'];	
	$fecha_noticia 		= $_POST['fecha_noticia'];
	//$imagen 			= $_POST['imagen'];

	$new_size 		= round($file_size/1024, 2, PHP_ROUND_HALF_UP); 
	$new_file_name 	= strtolower($file);
	$final_file		= str_replace(' ','-',$new_file_name);
	if(move_uploaded_file($file_loc,$folder.$final_file)){	
		$sql="INSERT INTO noticias (titulo_noticia, descrip_noticia, nombre_imagen, fecha_noticia, file, type, size) 
		VALUES ('".$titulo_noticia."','".$descrip_noticia."','".$nombre_imagen."','".$fecha_noticia."','".$file."','".$file_type."','".$new_size."')";
		//echo $sql;
		mysql_query($sql);
		//header("Location: add-data.php?inserted");
		?>		
		<script>		
		alert('successfully uploaded');        
		window.location.href='add-data.php';        
		</script>		
		<?php
	}	
	else{		
		//header("Location: add-data.php?failure");
		?>		
		<script>		
		alert('error while uploading file');        
		window.location.href='add-data.php?failure';        
		</script>		
		<?php
	}
}
?>
<?php
	if(isset($_GET['inserted'])){	
	?>
	<div class="alert alert-info">  
	<strong>WOW!</strong> Record was inserted successfully <a href="index.php">HOME</a>!	
	</div>
	
	<?php
	}
	else if(isset($_GET['failure'])){	
	?>  
	
	<div class="alert alert-warning">    
	<strong>SORRY!</strong> ERROR while inserting record !	
	</div>
	<?php
	}
	?>
	<div class="clearfix"></div><br />
		<div class="box box-success">
		<form method='post' enctype="multipart/form-data">
		<div class="box-body">
		<div class="form-group">
			<label for="codigo">Codigo:</label>  
			<input id="codigo" name="codigo" type="text" placeholder="" class="form-control input-md" required="">
		</div>
	
	<table class='table table-bordered'>       
	<tr>     
		<td>Titulo</td>
		<td><input type="text" name='titulo_noticia' class='form-control' required></td>        
	</tr>       
	<tr>            
		<td>Descripcion</td>            
		<td><input type="text" name='descrip_noticia' class='form-control' required></td>        
	</tr>         
	<tr>
		<td>Fecha</td>            
		<td><input type="text" name='nombre_imagen' class='form-control' required></td>        
	</tr>  
	<tr>
		<td>Imagen</td>
		<td><input type="file" name="imagen" value="" required style="text-transform: lowercase;"></td>
	</tr>
	<tr>            
		<td>fecha noticia</td>            
		<td><input type="text" name='fecha_noticia' class='form-control' required></td>        
	</tr>      
	<tr>         
		<td colspan="2"> 
		<button type="submit" class="btn btn-primary" name="btn-save">    		
		<span class="glyphicon glyphicon-plus"></span> Create New Record</button>
		<a href="novedades.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Back to index</a>
		</td> 
	</tr> 
	</table>
	</div>
	</form>
			  </div>
              </div>
              </div>
          
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                     <h1>
            Buscar Novedades<br>
            <small>Aqui podras buscar la informaci&oacute;n de los Novedades</small>
          </h1>
			<table id="example1" class="table table-bordered table-striped">
                    <thead>
                     <tr>
                        <th>Rut</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Comuna</th>
                      </tr>
                    </thead>
                    <tbody>
                     						<tr>
							<td><a href="modificar_usuario.php?id=1">17769347-2</a></td>
							<td>Hugo Claudio</td>
							<td>Fernandez  Martinez</td>
							<td>93995605</td>	
							<td>hugo@estudiografico.cl</td>	
							<td>Lampa</td>	
						</tr>
												<tr>
							<td><a href="modificar_usuario.php?id=13">1-9</a></td>
							<td>pedro</td>
							<td>quezada .</td>
							<td>1111111</td>	
							<td>pq@496.cl</td>	
							<td>Aisén</td>	
						</tr>
												<tr>
							<td><a href="modificar_usuario.php?id=14">12474400-8</a></td>
							<td>pedro</td>
							<td>quezada c</td>
							<td>5332644</td>	
							<td>pq@496.cl</td>	
							<td>Aisén</td>	
						</tr>
						                    </tbody>
                    <tfoot>
                       <tr>
                        <th>Rut</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Comuna</th>
                      </tr>
                    </tfoot>
                  </table>
              
			  
			  
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div>
              </div>
              </div> 
        </section>
      </div><!-- /.content-wrapper -->
     
	 <!-- /.content-wrapper -->

	
	
      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
         www.Ilumina360.cl
        </div>
        <!-- Default to the left --> 
        <strong>&copy; 2015 <a href="http://www.Tecnipak.com" target="_blank">Tecnipak</a>.</strong>
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
        $('.xedit').editable();		
		$(document).on('click','.editable-submit',function(){
			var x = $(this).closest('td').children('span').attr('id');
			var t = $(this).closest('td').children('span').attr('idd');
			var y = $('.input-sm').val();
			var z = $(this).closest('td').children('span');
			$.ajax({
				url: "process.php?id="+x+"&data="+y+"&tipo="+t,
				type: 'GET',
				success: function(s){
					if(s == 'status'){
					}
					if(s == 'error') {
					alert('Error Processing your Request!');}
				},
				error: function(e){
					alert('Error Processing your Request!!');
				}
			});
		});
});

    </script>
</html>
<?php
}
else
{
?>
<script>window.location.href='http://www.agricola.tecnipak.cl/administrador'</script>
<?
}
?>