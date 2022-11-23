
        <div class="col-md-3 colTra" style="padding-left: 0; "> 
                        <a href="#"  data-toggle="modal" data-target="#myModal">
                            <img src="img/banners/trabaje_con_nosotros.jpg" alt="Trabaje con Nosotros" class="hover"/></a>
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
                                                <input id="fecha" name="fecha" type="text" placeholder="" class="form-control input-md" required="" value="20<?php echo $fecha; ?>" style="display:none;">
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
                                                <select class="form-control" name="cargo" required>
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


