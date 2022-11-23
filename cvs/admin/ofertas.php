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
    <link href="plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
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
                  <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Agregar usuarios</a></li>
                  <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Buscar usuarios</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                  
          <h1>
            Agregar usuarios<br>
            <small>Aqui puede crear tanto administradores como clientes<br><br></small>
          </h1>
      
      <div class="row">
      <div class="col-md-6 col-xs-12">
       <div class="box box-success">
                <!-- form start -->
                <form action="subir_oferta.php" method="post">
				<div class="box-body">
        <div class="form-group">
          <label for="codigo">Codigo:</label>  
            <input id="codigo" name="codigo" type="text" placeholder="" class="form-control input-md" required="">
        </div>  
        <div class="form-group">
          <label for="Descripcion">Descripcion:</label>  
            <input id="Descripcion" name="Descripcion" type="text" placeholder="" class="form-control input-md" required="">
        </div>
        <div class="form-group">
          <label for="Moneda">Moneda:</label>  
            <input id="Moneda" name="Moneda" type="text" placeholder="" class="form-control input-md" required="">
        </div>
        <div class="form-group">
          <label for="Precio_lista">Precio lista: (sin $ ni puntos):</label>  
            <input id="Precio_lista" name="Precio_lista" type="text" placeholder="" class="form-control input-md" required="">
        </div>
        <div class="form-group">
          <label for="Precio_oferta">Precio oferta: (sin $ ni puntos):</label>  
            <input id="Precio_oferta" name="Precio_oferta" type="text" placeholder="" class="form-control input-md" required="">
        </div>
        <div class="form-group">
          <label for="Stock">Stock:</label>  
            <input id="Stock" name="Stock" type="text" placeholder="" class="form-control input-md" required="">
        </div>
        <div class="form-group">
          <label for="Stock">Valido Hasta:</label>  
            <input id="Stock" name="Stock" type="text" placeholder="" class="form-control input-md" required="">
        </div>
        <div class="form-group">
          <label for="Stock">Tipo de Producto:</label>  
          <select name="id_tipo" class="input_text_proy">
          <?php
          $resultado2 = mysql_query("select * from  tipo_oferta");
          $row2 = mysql_fetch_array($resultado2); 
          do 
          {  
          ?>
          <option value="<?php echo $row2['id_tipo']?>" ><?php echo $row2['nombre_tipo']?></option>
          <?php
          }
          while ($row2 = mysql_fetch_assoc($resultado2));
          ?>
          </select>
        </div>
        <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
    </div>
  </form>
                
              </div>
              </div>
              </div>
          
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                     <h1>
            Buscar Usuarios<br>
            <small>Aqui podras buscar la informaci&oacute;n de los usuarios</small>
          </h1>
      
     
                 <table id="example1" class="table table-bordered table-striped">
                    <thead>
                     <tr>
            <th>Nombre empresa</th>
                        <th>codigo_oferta</th>
                        <th>descripcion_oferta</th>
                        <th>moneda</th>
                        <th>precio_lista</th>
                        <th>precio_oferta</th>
                        <th>stock_oferta</th>
                        <th>valido_hasta_oferta</th>
                        <th>id_tipo</th>                      
                      </tr>
                    </thead>
                    <tbody>
                     <?php
            $db = new MySQL();
            $consulta = $db->consulta("select * from oferta o, tipo_oferta to es where o.id_tipo = to.id_tipo");
            if($db->num_rows($consulta)>0){
        
            
            
            while($resultados = $db->fetch_array($consulta)){
            
            
              echo'<tr class="'.$class.'">
              <td>'.$resultados['codigo_oferta'].'</td>
              <td>'.$resultados['descripcion_oferta'].'</td>
              <td>'.$resultados['moneda'].'</td>
              <td>'.$resultados['precio_lista'].'</td>
              <td>'.$resultados['precio_oferta'].'</span></td>
              <td>'.$resultados['stock_oferta'].'</span></td>  
              <td>'.$resultados['valido_hasta_oferta'].'</span></td>  
              <td>'.$resultados['nombre_tipo'].'</span></td> 
              </tr>';   
            }
            }
            ?>
                    </tbody>
                    <tfoot>
                       <tr>
                       <th>codigo_oferta</th>
                        <th>descripcion_oferta</th>
                        <th>moneda</th>
                        <th>precio_lista</th>
                        <th>precio_oferta</th>
                        <th>stock_oferta</th>
                        <th>valido_hasta_oferta</th>
                        <th>id_tipo</th>    
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