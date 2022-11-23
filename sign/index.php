<!doctype html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>FSS - Pie de firma</title>
    </head>
    <?php
    //setear variables
    if(!isset($_POST['nombre']))
    {
        $_POST['nombre'] = '';
    }
    if(!isset($_POST['cargo']))
    {
        $_POST['cargo'] = '';
    }
    if(!isset($_POST['email']))
    {
        $_POST['email'] = '';
    }
    if(!isset($_POST['fono']))
    {
        $_POST['fono'] = '';
    }
    if(!isset($_POST['fono2']))
    {
        $_POST['fono2'] = '';
    }
    if(!isset($_POST['tipo_firma']))
    {
        $tipo_firmas =  [];
    }else{
        $tipo_firmas = $_POST['tipo_firma'];
    }
    ?>
<body>
    <div class="container"><br>
        <center><h1>Generador Pie de Firmas FSS Group</h1></center><br><br>
        <form method="POST">
            <div class="form-group">
                <input type="text" name="nombre" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="Nombre Apellido" value="<?php echo $_POST['nombre'] ?>" require>
            </div>
            <div class="form-group">
                <input type="text" name="cargo" class="form-control form-control-sm" id="exampleFormControlInput2" placeholder="Cargo" value="<?php echo $_POST['cargo'] ?>" require>
            </div>
            <div class="form-group">
                <input type="text" name="fono" class="form-control form-control-sm" id="exampleFormControlInput3" placeholder="fono" value="<?php echo $_POST['fono'] ?>" require>
            </div>
            <div class="form-group">
                <input type="text" name="fono2" class="form-control form-control-sm" id="exampleFormControlInput4" placeholder="celular" value="<?php echo $_POST['fono2'] ?>" require>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@</span>
                </div>
                <input type="text" name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" value="<?php echo $_POST['email'] ?>" require>
            </div>
            <!--<div class="form-group">
                <label for="exampleFormControlSelect1">Example select</label>
                <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                </select>
            </div> -->
            <div class="form-group">
                <label for="exampleFormControlSelect2">Seleccione pie de firma a generar</label>
                <select name="tipo_firma[]" multiple class="form-control" id="exampleFormControlSelect2">
                <option value=1 selected>FSS</option>
                <option value=2>ECO-TRANS</option>
                </select>
            </div>
            <!--<div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div> -->
            <center><button type="submit" name="generar" class="btn btn-primary">Generar</button></center>
        </form>
        <br>
        <?php
        if(isset($_POST['generar']))
        {
            include("plantilla.php");  
        
            if($_POST['tipo_firma'] != '')
            {
                for ($i=0;$i<count($tipo_firmas);$i++)
                {
                    if ($tipo_firmas[$i] == 1)
                    {
                        //al Pasar como parametro fss, asumimos que en la carpeta plantillas existe un archivo de nombre fss.html
                        //si existe fono2 se usa plantilla con fono2
                        if($_POST['fono2'] == '')
                        {
                            $Contenido=new Plantilla("fss");  
                            $Contenido->asigna_variables(array(  
                                    "nombre" => $_POST['nombre']
                                    ,"cargo" => $_POST['cargo']
                                    ,"email" => $_POST['email']
                                    ,"fono" => $_POST['fono']
                            )); 
                        }else{
                            $Contenido=new Plantilla("fss2");  
                            $Contenido->asigna_variables(array(  
                                    "nombre" => $_POST['nombre']
                                    ,"cargo" => $_POST['cargo']
                                    ,"email" => $_POST['email']
                                    ,"fono" => $_POST['fono']
                                    ,"fono2" => $_POST['fono2']
                            )); 
                        }
                        
                        //$ContenidoString contiene nuestra plantilla, ya con las variables asignadas, fácil no?  
                        $ContenidoString = $Contenido->muestra();

                        echo "<hr><div><center>";
                        echo $ContenidoString;
                        
                        echo '<br><button type="button" class="btn btn-secondary" onclick="javascript: selectElementContents( document.getElementById(\'fss\') )">Copiar</button><br>';
                        echo '</center></div>';

                    }
                    if ($tipo_firmas[$i] == 2)
                    {
                        //al Pasar como parametro fss, asumimos que en la carpeta plantillas existe un archivo de nombre fss.html
                        $Contenido=new Plantilla("ecotrans");  
                        $Contenido->asigna_variables(array(  
                                "nombre" => $_POST['nombre']
                                ,"cargo" => $_POST['cargo']
                                ,"email" => $_POST['email']
                                ,"fono" => $_POST['fono']
                                ,"fono2" => $_POST['fono2']
                        ));  
                        
                        //$ContenidoString contiene nuestra plantilla, ya con las variables asignadas, fácil no?  
                        $ContenidoString = $Contenido->muestra();  
                        echo "<hr><div><center>";
                        echo $ContenidoString;
                        
                        echo '<br><button type="button" class="btn btn-secondary" onclick="javascript: selectElementContents( document.getElementById(\'eco\'))">Copiar</button><br>';
                        echo "<center></div><br>";

                    }
                }
            }      
        }
        ?>  
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script type='text/javascript'>
            function copiarAlPortapapeles(id_elemento) {
                    var aux = document.createElement("input");
                    aux.setAttribute("value", document.getElementById(id_elemento).innerHTML);
                    document.body.appendChild(aux);
                    aux.select();
                    document.execCommand("copy");
                    document.body.removeChild(aux);
                }
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



<!--<input type="button" value="select table"
   onclick="selectElementContents( document.getElementById('tableId') );">-->

    </div>
  </body>
</html>


