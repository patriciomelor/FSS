<script src='build/pdfmake.min.js'></script>
<script src='build/vfs_fonts.js'></script>
<?php
include "../../../config.php"; 



$db = new MySQL();
$id_persona = $_POST['id_persona'];
$consulta = $db->consulta("select * from persona where id_persona = '$id_persona'");
$db->num_rows($consulta)>0;
$resultados = $db->fetch_array($consulta);
$nombre_persona = $resultados['nombre_persona'];
$apellido_paterno_persona = $resultados['apellido_paterno_persona'];
$apellido_materno_persona = $resultados['apellido_materno_persona'];
$rut_persona = $resultados['rut_persona'];
$fecha_de_nacimiento = $resultados['fecha_de_nacimiento'];
$direccion_persona = $resultados['direccion_persona'];




$fecha_contrato = $_POST['fecha_contrato'];
$id_trabajo = $_POST['id_trabajo'];
$valor_moneda_trabajo = $_POST['valor_moneda_trabajo'];
$valor_en_palabras = $_POST['valor_en_palabras'];
$id_tipo_contrato = $_POST['id_tipo_contrato'];
$dia_inicio_servicios = $_POST['dia_inicio_servicios'];
$id_estado = $_POST['id_estado'];


$consulta2 = $db->consulta2("
select  
ec.nombre_estado_civil, 
po.nombre_profesion_oficio, 
cu.comuna_nombre, 
ps.nombre_prevision_social,
psa.nombre_prevision_salud 

from 
persona p, 
comunas cu, 
profesion_oficio po, 
prevision_social ps, 
estado_civil ec, 
prevision_salud psa

where p.id_persona = = '$id_persona' and
p.id_estado_civil = ec.id_estado_civil and
p.id_profesion_oficio = po.id_profesion_oficio and
p.id_prevision_social = ps.id_prevision_social and
p.id_prevision_salud = psa.id_prevision_salud and
p.id_comuna = cu.comuna_id");
$db->num_rows($consulta2)>0;
$resultados2 = $db->fetch_array($consulta2);
$nombre_estado_civil = $resultados2['nombre_estado_civil'];
$nombre_profesion = $resultados2['nombre_profesion'];
$comuna_nombre = $resultados2['comuna_nombre'];
$nombre_prevision_social = $resultados2['nombre_prevision_social'];
$nombre_prevision_salud = $resultados2['nombre_prevision_salud'];
?>


<script>
var docDefinition = {
	content: [
		{ 
			text: 'Contrato de trabajo', 
			style: 'header', 
			alignment: 'justify'
		},
		{ 
			text: [
			
				'En Santiago, a <?php echo $fecha_contrato;?>, comparecen INGENIERÍA Y',
				'CONSTRUCCIÓN C.M. LIMITADA, RUT 76.061.073-9, empresa del giro de su',
				'denominación, representada por don Fernando Alfonso Casas Manghi, cédula de',
				'identidad 8.012.603-4, ambos domiciliados para estos efectos legales en calle Madrid',
				'1409, ciudad y comuna de Santiago, Santiago en adelante el “Empleador”, y, Don',
				'<?php echo $nombre_persona;?> <?php echo $apellido_paterno_persona;?> <?php echo $apellido_materno_persona;?> chileno, estado civil',
				'<?php echo $nombre_estado_civil;?>, profesión <?php echo $nombre_profesion;?>, cédula de Identidad <?php echo $rut_persona;?>',
				'domiciliado en  <?php echo $direccion_persona;?>, comuna de <?php echo $comuna_nombre;?>, Santiago, nacido con fecha <?php echo $fecha_de_nacimiento;?>, AFP',
				'<?php echo $nombre_prevision_social;?>, ISAPRE-FONASA <?php echo $nombre_prevision_salud;?> en adelante “El Trabajador”,  ambos mayores de edad y expresan',
				'que han convenido en el siguiente contrato de trabajo, que es del siguiente tenor:'
				
				],
			style: 'header', 
			bold: false 
		}
	],
	styles: {
		header: {
			fontSize: 18,
			bold: true,
			alignment: 'justify'
		}
	}
	
}
 pdfMake.createPdf(docDefinition).download('optionalName.pdf');

</script>

