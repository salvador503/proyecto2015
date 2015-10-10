<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('Ficha_adopcion/insertar', $attributes); ?>

<p>
        <label for="id_masivo">id masivo: <span class="required">*</span></label>
        <?php echo form_error('id_masivo'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  ''  => 'Please Select',
                                                  'example_value1'    => 'example option 1'
                                                ); ?>

        <br /><?php echo form_dropdown('id_masivo', $options, set_value('id_masivo'))?>
</p>                                             
                        
<p>
        <label for="id_ficha_adopcion">id ficha adopcion: <span class="required">*</span></label>
        <?php echo form_error('id_ficha_adopcion'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  ''  => 'Please Select',
                                                  'example_value1'    => 'example option 1'
                                                ); ?>

        <br /><?php echo form_dropdown('id_ficha_adopcion', $options, set_value('id_ficha_adopcion'))?>
</p>                                             
                        
<p>
        <label for="id_pais">id pais: <span class="required">*</span></label>
        <?php echo form_error('id_pais'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  ''  => 'Please Select',
                                                  'example_value1'    => 'example option 1'
                                                ); ?>

        <br /><?php echo form_dropdown('id_pais', $options, set_value('id_pais'))?>
</p>                                             
                        
<p>
        <label for="id_institucion">id_institucion:</label>
        <?php echo form_error('id_institucion'); ?>
        <br /><input id="id_institucion" type="text" name="id_institucion" maxlength="3" value="<?php echo set_value('id_institucion'); ?>"  />
</p>

<p>
        <label for="id_expediente_masivo">id expediente masivo: <span class="required">*</span></label>
        <?php echo form_error('id_expediente_masivo'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  ''  => 'Please Select',
                                                  'example_value1'    => 'example option 1'
                                                ); ?>

        <br /><?php echo form_dropdown('id_expediente_masivo', $options, set_value('id_expediente_masivo'))?>
</p>                                             
                        
<p>
        <label for="id_expediente">id expediente: <span class="required">*</span></label>
        <?php echo form_error('id_expediente'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  ''  => 'Please Select',
                                                  'example_value1'    => 'example option 1'
                                                ); ?>

        <br /><?php echo form_dropdown('id_expediente', $options, set_value('id_expediente'))?>
</p>                                             
                        
<p>
        <label for="tipo_masivo">tipo masivo: <span class="required">*</span></label>
        <?php echo form_error('tipo_masivo'); ?>
        <br /><input id="tipo_masivo" type="text" name="tipo_masivo" maxlength="15" value="<?php echo set_value('tipo_masivo'); ?>"  />
</p>

<p>
        <label for="nombre">nombre: <span class="required">*</span></label>
        <?php echo form_error('nombre'); ?>
        <br /><input id="nombre" type="text" name="nombre" maxlength="25" value="<?php echo set_value('nombre'); ?>"  />
</p>

<p>
        <label for="apellido">apellido: <span class="required">*</span></label>
        <?php echo form_error('apellido'); ?>
        <br /><input id="apellido" type="text" name="apellido" maxlength="25" value="<?php echo set_value('apellido'); ?>"  />
</p>

<p>
        <label for="sexo">sexo: <span class="required">*</span></label>
        <?php echo form_error('sexo'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  ''  => 'Please Select',
                                                  'example_value1'    => 'example option 1'
                                                ); ?>

        <br /><?php echo form_dropdown('sexo', $options, set_value('sexo'))?>
</p>                                             
                        
<p>
        <label for="fecha_emision">fecha emision: <span class="required">*</span></label>
        <?php echo form_error('fecha_emision'); ?>
        <br /><input id="fecha_emision" type="text" name="fecha_emision"  value="<?php echo set_value('fecha_emision'); ?>"  />
</p>

<p>
        <label for="observacion_masiva">observacion masiva: <span class="required">*</span></label>
	<?php echo form_error('observacion_masiva'); ?>
	<br />
							
	<?php echo form_textarea( array( 'name' => 'observacion_masiva', 'rows' => '5', 'cols' => '80', 'value' => set_value('observacion_masiva') ) )?>
</p>
<p>
        <label for="ruta_masivo">ruta masivo: <span class="required">*</span></label>
        <?php echo form_error('ruta_masivo'); ?>
        <br /><input id="ruta_masivo" type="text" name="ruta_masivo" maxlength="25" value="<?php echo set_value('ruta_masivo'); ?>"  />
</p>

<p>
        <label for="nombre_adoptivo">nombre adoptivo: <span class="required">*</span></label>
        <?php echo form_error('nombre_adoptivo'); ?>
        <br /><input id="nombre_adoptivo" type="text" name="nombre_adoptivo" maxlength="25" value="<?php echo set_value('nombre_adoptivo'); ?>"  />
</p>

<p>
        <label for="apellido_adoptivo">apellido adoptivo: <span class="required">*</span></label>
        <?php echo form_error('apellido_adoptivo'); ?>
        <br /><input id="apellido_adoptivo" type="text" name="apellido_adoptivo" maxlength="25" value="<?php echo set_value('apellido_adoptivo'); ?>"  />
</p>

<p>
        <label for="numero_de_ficha_de_adopcion">numero de ficha de adopcion: <span class="required">*</span></label>
        <?php echo form_error('numero_de_ficha_de_adopcion'); ?>
        <br /><input id="numero_de_ficha_de_adopcion" type="text" name="numero_de_ficha_de_adopcion" maxlength="6" value="<?php echo set_value('numero_de_ficha_de_adopcion'); ?>"  />
</p>

<p>
        <label for="fecha_de_ingreso">fecha de ingreso: <span class="required">*</span></label>
        <?php echo form_error('fecha_de_ingreso'); ?>
        <br /><input id="fecha_de_ingreso" type="text" name="fecha_de_ingreso"  value="<?php echo set_value('fecha_de_ingreso'); ?>"  />
</p>

<p>
        <label for="fecha_de_egreso">fecha de egreso: <span class="required">*</span></label>
        <?php echo form_error('fecha_de_egreso'); ?>
        <br /><input id="fecha_de_egreso" type="text" name="fecha_de_egreso"  value="<?php echo set_value('fecha_de_egreso'); ?>"  />
</p>

<p>
        <label for="fecha_inscripcion">fecha inscripcion: <span class="required">*</span></label>
        <?php echo form_error('fecha_inscripcion'); ?>
        <br /><input id="fecha_inscripcion" type="text" name="fecha_inscripcion"  value="<?php echo set_value('fecha_inscripcion'); ?>"  />
</p>

<p>
        <label for="motivo_de_entrada">motivo de entrada: <span class="required">*</span></label>
        <?php echo form_error('motivo_de_entrada'); ?>
        <br /><input id="motivo_de_entrada" type="text" name="motivo_de_entrada" maxlength="25" value="<?php echo set_value('motivo_de_entrada'); ?>"  />
</p>

<p>
        <label for="motivo_de_salida">motivo de salida: <span class="required">*</span></label>
        <?php echo form_error('motivo_de_salida'); ?>
        <br /><input id="motivo_de_salida" type="text" name="motivo_de_salida" maxlength="20" value="<?php echo set_value('motivo_de_salida'); ?>"  />
</p>

<p>
        <label for="fecha_adopcion">fecha adopcion: <span class="required">*</span></label>
        <?php echo form_error('fecha_adopcion'); ?>
        <br /><input id="fecha_adopcion" type="text" name="fecha_adopcion"  value="<?php echo set_value('fecha_adopcion'); ?>"  />
</p>

<p>
        <label for="declaratoria_de_abandono">declaratoria de abandono:</label>
	<?php echo form_error('declaratoria_de_abandono'); ?>
	<br />
							
	<?php echo form_textarea( array( 'name' => 'declaratoria_de_abandono', 'rows' => '5', 'cols' => '80', 'value' => set_value('declaratoria_de_abandono') ) )?>
</p>
<p>
        <label for="abogado">abogado:</label>
        <?php echo form_error('abogado'); ?>
        <br /><input id="abogado" type="text" name="abogado" maxlength="25" value="<?php echo set_value('abogado'); ?>"  />
</p>

<p>
        <label for="notario">notario:</label>
        <?php echo form_error('notario'); ?>
        <br /><input id="notario" type="text" name="notario" maxlength="25" value="<?php echo set_value('notario'); ?>"  />
</p>

<p>
        <label for="apoderado_adoptante">apoderado adoptante:</label>
        <?php echo form_error('apoderado_adoptante'); ?>
        <br /><input id="apoderado_adoptante" type="text" name="apoderado_adoptante" maxlength="25" value="<?php echo set_value('apoderado_adoptante'); ?>"  />
</p>

<p>
        <label for="juez">juez:</label>
        <?php echo form_error('juez'); ?>
        <br /><input id="juez" type="text" name="juez" maxlength="25" value="<?php echo set_value('juez'); ?>"  />
</p>

<p>
        <label for="fecha_pronunciamiento">fecha pronunciamiento</label>
        <?php echo form_error('fecha_pronunciamiento'); ?>
        <br /><input id="fecha_pronunciamiento" type="text" name="fecha_pronunciamiento"  value="<?php echo set_value('fecha_pronunciamiento'); ?>"  />
</p>

<p>
        <label for="fecha_de_otorgamiento">fecha de otorgamiento:</label>
        <?php echo form_error('fecha_de_otorgamiento'); ?>
        <br /><input id="fecha_de_otorgamiento" type="text" name="fecha_de_otorgamiento"  value="<?php echo set_value('fecha_de_otorgamiento'); ?>"  />
</p>

<p>
        <label for="fecha_de_registro_civil">fecha de registro civil:</label>
        <?php echo form_error('fecha_de_registro_civil'); ?>
        <br /><input id="fecha_de_registro_civil" type="text" name="fecha_de_registro_civil"  value="<?php echo set_value('fecha_de_registro_civil'); ?>"  />
</p>

<p>
        <label for="alcalde">alcalde:</label>
        <?php echo form_error('alcalde'); ?>
        <br /><input id="alcalde" type="text" name="alcalde"  value="<?php echo set_value('alcalde'); ?>"  />
</p>


<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
