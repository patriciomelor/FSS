<?php
$servername='localhost';     // Nombre del servidor MySql o IP
$dbusername='fsscl_c9fss';                // Id usuario
$dbpassword='fbMgY@M4';                // Clave usuario
$dbname='fsscl_c9fssdb';     // Nombre de la base de datos
global $link;
connecttodb($servername,$dbname,$dbusername,$dbpassword);

function connecttodb($servername,$dbname,$dbuser,$dbpassword)
{
$link=mysql_connect ("$servername","$dbuser","$dbpassword");
if(!$link){die("No se puede conectar a la base de datos");}
mysql_select_db("$dbname",$link) or die ("Ocurrio un problema con la base de datos".mysql_error());
}


$host = 'localhost';
$dbname = 'fsscl_c9fssdb';
$username = 'fsscl_c9fss';
$password = 'fbMgY@M4';


class MySQL{

  private $conexion; private $total_consultas;

  public function MySQL(){ 
    if(!isset($this->conexion)){
      $this->conexion = (mysql_connect("localhost","fsscl_c9fss","fbMgY@M4"))
        or die(mysql_error());
      mysql_select_db("fsscl_c9fssdb",$this->conexion) or die(mysql_error());
    }
  }

  public function consulta($consulta){ 
    $this->total_consultas++; 
    $resultado = mysql_query($consulta,$this->conexion);
    if(!$resultado){ 
      echo 'MySQL Error: ' . mysql_error();
      exit;
    }
    return $resultado;
  }
	
  public function fetch_array($consulta){
   return mysql_fetch_array($consulta);
  }

  public function num_rows($consulta){
   return mysql_num_rows($consulta);
  }

  public function getTotalConsultas(){
   return $this->total_consultas; 
  }

}?>