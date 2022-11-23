
<?php
include("config.php");
      $user = $_POST['b'];
       
      if(!empty($user)) {
            comprobar($user);
      }
       
      function comprobar($b) {
           
		   $db = new MySQL();
			$consulta = $db->consulta("SELECT * FROM persona WHERE rut_persona = '".$b."'");
             
            $contar = mysql_num_rows($consulta);
             
            if($contar == 0){
                  echo "<span style='font-weight:bold;color:green;'>Disponible.</span>";
            }else{
                  echo "<span style='font-weight:bold;color:red;'>El rut ingresado ya existe.</span>";
            }
      }     
?>