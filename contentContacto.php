<section id="formContacto" style="padding-top: 100px; padding-bottom: 150px;">
            <script>
    function DigitoV(id) 
    {
       var numero = document.getElementById(id).value;
       numero = numero.toString().replace(/[^a-z0-9]/, "");
       document.getElementById(id).value  = numero;  
    }
     function Mail(id) 
    {
       var numero = document.getElementById(id).value;
       numero = numero.toString().replace(" ", "");
       document.getElementById(id).value  = numero;  
    }
    </script>

            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="well well-sm">
                            <form id="contact" method="post" class="form" action="mailer.php" role="form">
                                <fieldset>
                                    <legend class="text-center">Contáctanos</legend>
                                    
                                    <!-- Name input-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">Nombre</label>
                                        <div class="col-md-12">
                                            <input class="form-control"  id="nombre" name="nombre" placeholder="Nombre y Apellido: " type="text" required autofocus >
                                        </div>
                                    </div>


                                    <!-- Name input-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">Teléfono</label>
                                        <div class="col-md-12">
                                            <input class="form-control" id="telefono"  name="telefono" placeholder="Tel&eacute;fono" type="number" min="1000000" required>
                                        </div>
                                    </div>

                                    <!-- Email input-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="email">E-Mail</label>
                                        <div class="col-md-12">
                                            <input  class="form-control" id="email"  oninput="Mail('email')" name="email" placeholder="Email:" type="email" required>
                                        </div>
                                    </div>

                                    <!-- Message body -->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="message">Tu mensaje</label>
                                        <div class="col-md-12">
                                           <textarea class="form-control" required id="mensaje" name="mensaje" placeholder="Mensaje: " rows="5"></textarea>
                                        </div>
                                    </div>

                                    <div id="ocultoCoti" style="display: none;">
                                        <!-- RS input-->
                                        <div class="form-group">
                                            <label class="col-md-6 control-label" for="name">Rut empresa</label>
                                            <div class="col-md-8">
                                                <input id="name" name="txtRut" type="text" placeholder="" class="form-control">
                                            </div>
                                        </div>

                                        <!-- RS input-->
                                        <div class="form-group">
                                            <label class="col-md-6 control-label" for="name">Razón social</label>
                                            <div class="col-md-8">
                                                <input id="name" name="txtRazon" type="text" placeholder="" class="form-control">
                                            </div>
                                        </div>


                                        <!-- RS input-->
                                        <div class="form-group">
                                            <label class="col-md-6 control-label" for="name">Clausula compra venta</label>
                                            <div class="col-md-8">
                                                <select class="custom-select" name="cboClausula">
                                                    <option value="0">Seleccione</option>
                                                    <option value="CIF">CIF</option>
                                                    <option value="CIP">CIP</option>
                                                    <option value="CDP">CDP</option>
                                                    <option value="DDP">DDP</option>
                                                    <option value="DAT">DAT</option>
                                                    <option value="DAP">DAP</option>
                                                    <option value="EXW">EXW</option>
                                                    <option value="FAS">FAS</option>
                                                    <option value="FCA">FCA</option>
                                                    <option value="FOB">FOB</option>
                                                </select>
                                            </div>
                                        </div>
                                            
                                         <!-- RS input-->
                                        <div class="form-group">
                                            <label class="col-md-6 control-label" for="name">Valor mercadería</label>
                                            <div class="col-md-8">
                                                <input id="name" name="txtValorMercaderia" type="text" placeholder=" " class="form-control">
                                            </div>
                                        </div>   
                                         
                                         
                                         <!-- RS input-->
                                        <div class="form-group">
                                            <label class="col-md-6 control-label" for="name">Medio de transporte</label>
                                            <div class="col-md-10">
                                                <select class="custom-select" name="cboMedio">
                                                     <option value="0">Seleccione</option>
                                                    <option value="Maritimo">Marítimo</option>
                                                    <option value="Terrestre">Terrestre</option>
                                                    <option value="Aereo">Aéreo</option>
                                                    <option value="Maritimo y Aereo">Marítimo y Aéreo</option>
                                                    <option value="Maritimo y Terrestre">Marítimo y Terrestre</option>
                                                    <option value="Terrestre y Marítimo">Terrestre y Marítimo</option>
                                                    <option value="Terrestre y Aéreo">Terrestre y Aéreo</option>
                                                    <option value="FAS">Aéreo y Marítimo</option>
                                                    <option value="FCA">Aéreo y Terrestre</option>
                                                    <option value="FOB">Todas</option>
                                                </select>
                                            </div>
                                        </div>
                                        

                                          <!-- RS input-->
                                        <div class="form-group">
                                            <label class="col-md-6 control-label" for="name">Puerto de origen</label>
                                            <div class="col-md-8">
                                                <input id="name" name="txtPuerto1" type="text" placeholder="" class="form-control">
                                            </div>
                                        </div>

                                        <!-- RS input-->
                                        <div class="form-group">
                                            <label class="col-md-6 control-label" for="name">Puerto de destino</label>
                                            <div class="col-md-8">
                                                <input id="name" name="txtPuerto2" type="text" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                         
                                         
                                          <!-- Message body -->
                                    <div class="form-group">
                                        <label class="col-md-6 control-label" for="message">Tipo de embalaje</label>
                                        <div class="col-md-12">
                                            <textarea class="form-control" id="message" name="txtTipoEmbalaje" placeholder="Embalaje: Pallet, cajón o caja; Incluir peso bruto y dimensión (Largo x ancho x alto)." rows="5"></textarea>
                                        </div>
                                    </div>
                                          
                                                <!-- Message body -->
                                    <div class="form-group">
                                        <label class="col-md-6 control-label" for="message">Información de riesgo</label>
                                        <div class="col-md-12">
                                            <textarea class="form-control" id="message" name="txtRiesgo" placeholder="Embalaje: Pallet, cajón o caja; Incluir peso bruto y dimensión (Largo x ancho x alto)." rows="5"></textarea>
                                        </div>
                                    </div>
                                   
                                         
                                         
                                         
                                    </div>


                                    <!-- check body -->
                                    <br>
                                    <div class="form-check" style="    padding-left: 10%;">
                                        <input class="form-check-input" type="checkbox" value="" id="chkbox1" style="transform: scale(2.5);    padding-left: 20px;"  onclick="mostrar();">
                                        <label class="form-check-label" for="defaultCheck1">
                                            &nbsp;&nbsp;Cotización?
                                        </label>
                                    </div>
                                    <br>
                                    <!-- Form actions -->
                                    <div class="form-group">
                                        <div class="col-md-12 text-right">
                                            <input value="Enviar" name="Enviar" type="submit" class="btn btn-primary btn-lg colorBtnVerdeFSS" style="float: right">
                                          
                                              <div class="g-recaptcha" data-sitekey="6Le3AWAUAAAAAEevDYFdejn8u5FZWLhrad9zGgv8"></div>
                                        </div>
                                    </div>
                                    <br><br>
                                    
                                </fieldset>
                            </form>
                            <script src='https://www.google.com/recaptcha/api.js'></script>
                        </div>
                    </div>

                    <div class="col-md-6 col-md-offset-3">
                        <iframe  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13318.8250279078!2d-70.6181174!3d-33.4309018!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb50b6826232e18f6!2sAgencia+De+Aduanas+Felipe+Serrano!5e0!3m2!1ses-419!2scl!4v1524707453323" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                   
        <div class="col-md-3 colTra" style="padding-left: 0; "> 
                        <a href="#"  data-toggle="modal" data-target="#myModal">
                            <img src="img/icons/banner_cv.png" alt="Trabaje con Nosotros" class="hover"/></a>
                    </div>
        
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                        <h4 class="modal-title">Completa con tus datos y adjunta tu CV</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-1">
                            </div>
                            <div class="col-md-10">
                                <div class="contact-form">
                                        <form id="contact" method="post" class="form" action="mailer_cv.php" role="form" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="form-group">
                                                <!--< ?php $fecha= date("d/m/Y"); ?>-->
<?php $fecha = date("y/m/d"); ?>
                                                <input id="fecha" name="fecha" type="text" placeholder="" class="form-control input-md" required value="20<?php echo $fecha; ?>" style="display:none;">
                                            </div>
                                            <div class="form-group">
                                                <label> Campos obligatorios(*)</label>

                                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="* Nombre: " size="20" MAXLENGTH="20" onkeypress="return justLetras(event);" required autofocus />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="* Apellidos: " size="20" MAXLENGTH="20" onkeypress="return justLetras(event);" required />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direcci&oacute;n" size="150" MAXLENGTH="150"/>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" id="telefono" name="telefono" placeholder="Tel&eacute;fono" type="number" min="1000000" max="99999999"/>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="email" name="email" placeholder="* Email:" required />
                                            </div>
                                            <div class="form-group">
                                                <label>* Cargo al que aspira:</label>
                                                <select class="form-control" required name="cargo" >
                                                    <!--<option>Administrativo</option>
                                                    <option>Ejecutivo</option>
                                                    <option>Operaciones</option>
                                                    <option>Ventas</option>
                                                    <option>Operario o Conductor</option>
                                                    <option>Comercial</option>
                                                    <option>Gerencia</option>
                                                    -->
                                                    <option>DEPARTAMENTO DE IMPORTACIONES</option>
                                                    <option>DEPARTAMENTO TECNICO</option>
                                                    <option>DEPARTAMENTO DE EXPORTACIONES</option>
                                                    <option>DEPARTAMENTO DE CONTABILIDAD Y FACTURACION</option>
                                                    <option>SUCURSALES</option>
                                                    <option>RRHH</option>
                                                    <option>DEPARTAMENTO COMERCIAL</option>
                                                    <option>ADMINISTRATIVOS Y ESTAFETAS</option>
                                                    <option>TRANSPORTE Y LOGISTICA</option>

                                                    <option>OTRO</option>
                                                </select>
                                            </div>		

                                            <div class="form-group">
                                                <label>* CV</label><br>
                                                <i>Solo se permiten archivos .doc, .docx, .pdf (Max 4 MB)</i>
                                                <input type="hidden" name="MAX_FILE_SIZE" value="4194304" /> 
                                                <input type="file" id="exampleInputFile" name="file"><br>
                                                <label>* Carta de Presentacion</label><br>
                                                <i>Solo se permiten archivos .doc, .docx, .pdf (Max 4 MB)</i>
                                                <input type="hidden" name="MAX_FILE_SIZE" value="4194304" /> 
                                                <input type="file" id="carta" name="presentacion">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-md-12 form-group">
                                                <button type="submit" class="btn btn-success pull-right">Enviar <span class="glyphicon glyphicon-play-circle"></span></button>
                                                </form>
                                            </div>
                                        </div>		
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>



                    
                    </div>
                </div>
            </div>
        </div>


    </section>
