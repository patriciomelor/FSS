<html>      <head>
          <title>Generador de Firmas</title>
       </head>
  <body>
    <form method="post" action="firma.php">
     Ingrese Nombre:
     <input type="text" name="nombre">
      <br>
     Ingrese Apellido:
     <input type="text" name="apellido">
      <br>
      Ingrese Cargo:
     <input type="text" name="cargo">
      <br>
       Ingrese telefono:
     <input type="text" name="fono">
      <br>
        Ingrese Mail:
     <input type="text" name="mail">
      <br>
    <input type="submit" value="confirmar">
   </form>
  </body>
</html>
<?php
  $nombre;
  $nombre = $_REQUEST['nombre'];
  $apellido;
  $apellido = $_REQUEST['apellido'];
  $cargo;
  $cargo = $_REQUEST['cargo'];
 $fono;
  $fono = $_REQUEST['fono'];
     $mail;
  $mail = $_REQUEST['mail'];
  ?>
 


<p class=MsoNormal><o:p>&nbsp;</o:p></p>

</div>

</body>

<style type="text/css"> 
a
	{
		text-decoration: none; 
    	color: black;
	}
strong
	{ 
		color: #1A505B;
		font-size:23px;
	}
</style>
<style type="text/css">
body,td,th {
	color: #000000;
	font-family: Arial;
}
</style>


<table id="tableId" width="753" border="0" bgcolor="#FFFFFF">
  <tr>
    <td colspan="5"><img src="https://www.fss.cl/sign/ecotrans/up.png" width="730" height="7"></td>
  </tr>
  <tr>
    <td width="182" rowspan="4"><img src="https://www.fss.cl/sign/ecotrans/ecotrans.png" width="173" height="60"></td>
    <td rowspan="4" width="35"><img src="https://www.fss.cl/sign/ecotrans/center.png" width="33" height="95"></td>
    <td width="201">&nbsp;</td>
    <td width="28"><img src="https://www.fss.cl/sign/ecotrans/fono.png" width="20" height="20"></td>
    <td><a href="tel:<?php
 
 
 echo  "".$fono;  
    
  ?>"><font size="3"><?php
 
 
 echo  "".$fono; 
    
  ?></font></a></td>
  </tr>
  <tr>
    <td><strong><?php
 
 
 echo  "".$nombre; echo " ".$apellido; 
    
  ?></strong></td>
    <td><img src="https://www.fss.cl/sign/ecotrans/mail.png" width="20" height="20"></td>
    <td width="273"><a href="mailto:<?php
 
 
 echo  "".$mail;  
    
  ?>"><font size="3"><?php
 
 
 echo  "".$mail;  
    
  ?></font></a></td>
    
  </tr>
  <tr>
    <td><span class="MsoNormal" style="margin-bottom: 0cm; line-height: normal; color: #000000;"><font size="3"><?php
 
 
 echo  "".$cargo;  
    
  ?></font></span></td>
    <td><img src="https://www.fss.cl/sign/ecotrans/direccion.png" width="20" height="20"></td>
    <td><font size="3">Av. Luis Thayer Ojeda 166, Ofic. 603</font></td>    
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><img src="https://www.fss.cl/sign/ecotrans/web.png" width="20" height="20"></td>
    <td><a href="https://eco-trans.cl/"><font size="3">www.eco-trans.cl</font></a></td>
  </tr>
  <tr>
    <td colspan="5"><img src="https://www.fss.cl/sign/ecotrans/down.png" width="730" height="7"></td>
  </tr>

</table>



<script type="text/javascript">
    function selectElementContents(el) {
        var body = document.body, range, sel;
        if (document.createRange && window.getSelection) {
            range = document.createRange();
            sel = window.getSelection();
            sel.removeAllRanges();
            try {
                range.selectNodeContents(el);
                sel.addRange(range);
            } catch (e) {
                range.selectNode(el);
                sel.addRange(range);
            }
            document.execCommand("copy");

        } else if (body.createTextRange) {
            range = body.createTextRange();
            range.moveToElementText(el);
            range.select();
            range.execCommand("Copy");
        }
    }
</script>



<input type="button" value="select table"
   onclick="selectElementContents( document.getElementById('tableId') );">