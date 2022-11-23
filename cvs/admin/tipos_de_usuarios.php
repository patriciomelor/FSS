<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Tipos de usuarios ICCM </title>
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
          <div class="user-panel">
            <div class="pull-left info">
              <p>Hugo Fernandez</p>
              <!-- Status -->
            </div>
          </div>
          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">Herramientas</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="treeview">
              <a href="#"><span>Usuarios</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="agregar_usuarios.php">Agregar Usuarios</a></li>
                <li><a href="editar_usuarios.php">Editar Usuarios</a></li>
              </ul>
            </li>
			<li class="treeview">
              <a href="#"><span>Documentos</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="agregar_documentos.php">Agregar Documentos</a></li>
                <li><a href="editar_documentos.php">Editar Documentos</a></li>
              </ul>
            </li>
			<li class="header">Administrador de otros elementos</li>

			<li><a href="tipos_de_documentos.php"><span>Tipos de documentos</span></a></li>
			<li><a href="tipos_de_usuarios.php"><span>Tipos de usuarios</span></a></li>
			<li><a href="estados.php"><span>Estados</span></a></li>
			<li><a href="profesiones.php"><span>Profesiones</span></a></li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Tipos de usuarios<br>
            <small>Aqui se agregan y muestran los tipos de usuarios actuales<br><br></small>
          </h1>
		  <div class="row">
          <div class="col-md-6 col-xs-12">
		   <div class="box box-success">
                <!-- form start -->
                <form role="form">
                  <div class="box-body">
                 <div class="form-group">
  <label for="nombre_usuario">Nombre:</label>  
  <input id="nombre_usuario" name="nombre_usuario" type="text" placeholder="" class="form-control input-md" required="">
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
                  <h3 class="box-title">Tipos de usuarios actuales</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tbody><tr>
                      <th style="width: 10px">#</th>
                      <th>Tipo de usuario</th>
                    </tr>
                    <tr>
                      <td>1.</td>
                      <td>Administrador</td>
                    </tr>
                   
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