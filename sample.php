<?xml version="1.0" encoding="iso-8859-1"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Validación con expresión regular</title>
<script type="text/javascript">
function validaCorreoElectronico(correoElectronico){
    var patron = /^([0-9]+[+])*$/;
    if(!correoElectronico.search(patron))
      return true;
    else
      return false;
}
</script>
</head>
<body>
<form id="miForm" action="" method="get">
<p>
Matrícula: <input type="text" id="matricula" onkeypress="return validaCorreoElectronico();" />
<br />

<input type="button" value="Literal"  />

</p>
</form>
</body>
</html>