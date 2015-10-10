<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('ficha_adopcion', $attributes); ?>

<!--
<p>
        <label for="tipo_masivo">tipo_masivo</label>
        <?php echo form_error('tipo_masivo'); ?>
        <br /><input id="tipo_masivo" type="text" name="tipo_masivo" maxlength="20" value="<?php echo set_value('tipo_masivo'); ?>"  />
</p>
-->

<p>
        <label for="codigo_masivo">Codigo masivo</label>
        <?php echo form_error('codigo_masivo'); ?>
        <br /><input id="codigo_masivo" type="text" name="codigo_masivo" maxlength="10" value="<?php echo set_value('codigo_masivo'); ?>"  />
</p>
<p>
        <label for="n_ficha_adopcion">Numero de ficha</label>
        <?php echo form_error('n_ficha_adopcion'); ?>
        <br /><input id="n_ficha_adopcion" type="text" name="n_ficha_adopcion" maxlength="10" value="<?php echo set_value('n_ficha_adopcion'); ?>"  />
</p>

<p>
        <label for="institucion">Institucion<span class="required">*</span></label>
        <?php echo form_error('institucion'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  ''  => 'Please Select',
                                                  1 => 'Aldeas SOS'
                                                ); ?>

        <br /><?php echo form_dropdown('institucion', $options, set_value('institucion'))?>
</p> 

<p>
        <label for="nombre_masivo">Nombre</label>
        <?php echo form_error('nombre_masivo'); ?>
        <br /><input id="nombre_masivo" type="text" name="nombre_masivo" maxlength="25" value="<?php echo set_value('nombre_masivo'); ?>"  />
</p>

<p>
        <label for="apellido_persona">Apellido</label>
        <?php echo form_error('apellido_persona'); ?>
        <br /><input id="apellido_persona" type="text" name="apellido_persona" maxlength="25" value="<?php echo set_value('apellido_persona'); ?>"  />
</p>

<p>
        <label for="sexo">Sexo</label>
        <?php echo form_error('sexo'); ?>
        <br />
                <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
                <input id="sexo" name="sexo" type="radio" class="" value="M" <?php echo $this->form_validation->set_radio('sexo', 'option1'); ?> />
                        <label for="sexo" class="">Masculino</label>

                        <input id="sexo" name="sexo" type="radio" class="" value="F" <?php echo $this->form_validation->set_radio('sexo', 'option2'); ?> />
                        <label for="sexo" class="">Femenino</label>
</p>

<p>
        <label for="pais">Pais origen<span class="required">*</span></label>
        <?php echo form_error('pais'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  ''  => 'Please Select',
                                                  1 => 'El Salvador'
                                                ); ?>

        <br /><?php echo form_dropdown('pais', $options, set_value('pais'))?>
</p> 

<p>
        <label for="nombre_adop">Nombre adopivo</label>
        <?php echo form_error('nombre_adop'); ?>
        <br /><input id="nombre_adop" type="text" name="nombre_adop" maxlength="25" value="<?php echo set_value('nombre_adop'); ?>"  />
</p>

<p>
        <label for="apellido_adop">Apellido adoptivo</label>
        <?php echo form_error('apellido_adop'); ?>
        <br /><input id="apellido_adop" type="text" name="apellido_adop" maxlength="25" value="<?php echo set_value('apellido_adop'); ?>"  />
</p>

<p>
        <label for="fecha_ingreso">Fecha ingreso</label>
        <?php echo form_error('fecha_ingreso'); ?>
        <br /><input id="fecha_ingreso" type="text" name="fecha_ingreso"  value="<?php echo set_value('fecha_ingreso'); ?>"  />
</p>

<p>
        <label for="fecha_egreso">Fecha egreso</label>
        <?php echo form_error('fecha_egreso'); ?>
        <br /><input id="fecha_egreso" type="text" name="fecha_egreso"  value="<?php echo set_value('fecha_egreso'); ?>"  />
</p>

<p>
        <label for="fecha_inscripcion">Fecha inscripcion</label>
        <?php echo form_error('fecha_inscripcion'); ?>
        <br /><input id="fecha_inscripcion" type="text" name="fecha_inscripcion"  value="<?php echo set_value('fecha_inscripcion'); ?>"  />
</p>

<p>
        <label for="motivo_entrada">Motivo entrada</label>
        <?php echo form_error('motivo_entrada'); ?>
        <br /><input id="motivo_entrada" type="text" name="motivo_entrada" maxlength="30" value="<?php echo set_value('motivo_entrada'); ?>"  />
</p>

<p>
        <label for="motivo_salida">Motivo salida</label>
        <?php echo form_error('motivo_salida'); ?>
        <br /><input id="motivo_salida" type="text" name="motivo_salida" maxlength="30" value="<?php echo set_value('motivo_salida'); ?>"  />
</p>

<p>
        <label for="fecha_adopcion">Fecha adopcion</label>
        <?php echo form_error('fecha_adopcion'); ?>
        <br /><input id="fecha_adopcion" type="text" name="fecha_adopcion"  value="<?php echo set_value('fecha_adopcion'); ?>"  />
</p>

<p>
        <label for="declaratoria_abandono">Declaratoria abandono</label>
        <?php echo form_error('declaratoria_abandono'); ?>
        <br /><input id="declaratoria_abandono" type="text" name="declaratoria_abandono"  value="<?php echo set_value('declaratoria_abandono'); ?>"  />
</p>

<p>
        <label for="abogado">Abogado</label>
        <?php echo form_error('abogado'); ?>
        <br /><input id="abogado" type="text" name="abogado" maxlength="50" value="<?php echo set_value('abogado'); ?>"  />
</p>

<p>
        <label for="notario">Notario</label>
        <?php echo form_error('notario'); ?>
        <br /><input id="notario" type="text" name="notario" maxlength="50" value="<?php echo set_value('notario'); ?>"  />
</p>

<p>
        <label for="apoderado_adoptantes">Apoderado adoptantes</label>
        <?php echo form_error('apoderado_adoptantes'); ?>
        <br /><input id="apoderado_adoptantes" type="text" name="apoderado_adoptantes" maxlength="50" value="<?php echo set_value('apoderado_adoptantes'); ?>"  />
</p>

<p>
        <label for="juez">Juez</label>
        <?php echo form_error('juez'); ?>
        <br /><input id="juez" type="text" name="juez" maxlength="50" value="<?php echo set_value('juez'); ?>"  />
</p>

<p>
        <label for="fecha_pronunciamiento">Fecha pronunciamiento</label>
        <?php echo form_error('fecha_pronunciamiento'); ?>
        <br /><input id="fecha_pronunciamiento" type="text" name="fecha_pronunciamiento"  value="<?php echo set_value('fecha_pronunciamiento'); ?>"  />
</p>

<p>
        <label for="fecha_otorgamiento">Fecha otorgamiento</label>
        <?php echo form_error('fecha_otorgamiento'); ?>
        <br /><input id="fecha_otorgamiento" type="text" name="fecha_otorgamiento"  value="<?php echo set_value('fecha_otorgamiento'); ?>"  />
</p>

<p>
        <label for="jefe_registro_civil">Jefe registro civil</label>
        <?php echo form_error('jefe_registro_civil'); ?>
        <br /><input id="jefe_registro_civil" type="text" name="jefe_registro_civil" maxlength="50" value="<?php echo set_value('jefe_registro_civil'); ?>"  />
</p>

<p>
        <label for="alcalde">Alcalde</label>
        <?php echo form_error('alcalde'); ?>
        <br /><input id="alcalde" type="text" name="alcalde" maxlength="50" value="<?php echo set_value('alcalde'); ?>"  />
</p>


<p>
        <label for="fecha_emision">Fecha de emision</label>
        <?php echo form_error('fecha_emision'); ?>
        <br /><input id="fecha_emision" type="text" name="fecha_emision"  value="<?php echo set_value('fecha_emision'); ?>"  />
</p>

<p>
        <label for="observacion_masivo">Observacion</label>
        <?php echo form_error('observacion_masivo'); ?>
        <br />
                                                        
        <?php echo form_textarea( array( 'name' => 'observacion_masivo', 'rows' => '5', 'cols' => '80', 'value' => set_value('observacion_masivo'), 'readonly'=>'true' ) )?>
</p>
<p>
        <label for="ruta_masivo">Ruta (archivo scaneado)</label>
        <?php echo form_error('ruta_masivo'); ?>
        <br />
                                                        
        <?php echo form_textarea( array( 'name' => 'ruta_masivo', 'rows' => '5', 'cols' => '80', 'value' => set_value('ruta_masivo'), 'readonly'=>'true' ) )?>
</p>


<p>
        <?php echo form_submit( 'submit', 'Guardar'); ?>
</p>

<?php echo form_close(); ?>