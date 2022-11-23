 <div class="user-panel">
            <div class="pull-left info">
			 <?php
				$nombre = $_SESSION["nombre"];
				$db = new MySQL();
				$consulta = $db->consulta("SELECT * FROM usuarios where nombre = '$nombre'");
				$db->num_rows($consulta)>0;
				$resultados = $db->fetch_array($consulta);
			 ?>
			  <a href="cerrar.php">Cerrar sesi&oacute;n</a>
              <!-- Status -->
            </div>
          </div>