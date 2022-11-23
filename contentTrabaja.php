<section id="formTrabaja" style="padding-top: 100px; padding-bottom: 150px;">

            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="well well-sm">
                        <form id="contact" method="post" class="form" action="mailer_cv.php" role="form" enctype="multipart/form-data">
                                <fieldset>
                                <legend class="text-center">Completa con tus datos y adjunta tu CV</legend>
                                <div class="col-md-12">
                                    <label>Campos obligatorios(*)</label><br>
                                </div>    
                                        <div class="form-group">
                                            <!--< ?php $fecha= date("d/m/Y"); ?>-->
                                            <?php $fecha = date("y/m/d"); ?>
                                            <input id="fecha" name="fecha" type="text" placeholder="" class="form-control input-md" required value="20<?php echo $fecha; ?>" style="display:none;">
                                        </div>
                                    <!-- Name input-->
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="name">Nombre</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="* Nombre: " size="20" MAXLENGTH="20" onkeypress="return justLetras(event);" required autofocus />
                                        </div>
                                    </div>

                                    <!-- Last name input-->
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="name">Apellidos</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="* Apellidos: " size="20" MAXLENGTH="20" onkeypress="return justLetras(event);" required />                                        
                                        </div>
                                    </div>

                                    <!-- Adress input-->
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="name">Dirección</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direcci&oacute;n" size="150" MAXLENGTH="150"/>                                        
                                        </div>
                                    </div>

                                    <!-- Phone input-->
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="name">Teléfono</label>
                                        <div class="col-md-12">
                                            <input class="form-control" id="telefono" name="telefono" placeholder="Tel&eacute;fono" type="number" min="1000000" max="999999999"/>
                                        </div>
                                    </div>

                                    <!-- Email input-->
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="email">E-Mail</label>
                                        <div class="col-md-12">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="* Email:" required />
                                        </div>
                                    </div>

                                    <!-- Message body -->
                                    <div class="form-group">
                                                <label class="col-md-12 control-label">* Cargo al que aspira:</label>
                                                <div class="col-md-12">
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
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12 control-label">* CV</label><br>
                                        <div class="col-md-12">
                                            <i>Solo se permiten archivos .doc, .docx, .pdf (Max 4 MB)</i>
                                            <input type="hidden" name="MAX_FILE_SIZE" value="4194304" /> 
                                            <input type="file" id="exampleInputFile" name="file"><br>
                                            <label>* Carta de Presentacion</label><br>
                                            <i>Solo se permiten archivos .doc, .docx, .pdf (Max 4 MB)</i>
                                            <input type="hidden" name="MAX_FILE_SIZE" value="4194304" /> 
                                            <input type="file" id="carta" name="presentacion">
                                        </div>    
                                    </div>
                                    
                                </fieldset>
                                <div class="row">
                                            <div class="col-xs-12 col-md-12 form-group">
                                                <button type="submit" class="btn btn-success pull-right">Enviar <span class="glyphicon glyphicon-play-circle"></span></button>
                                                </form>
                                            </div>
                                        </div>
                            </div>
                    </div>