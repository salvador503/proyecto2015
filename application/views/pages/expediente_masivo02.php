<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('expediente_masivo', $attributes); ?>

<p>
        <label for="tipo_masivo">tipo_masivo</label>
        <?php echo form_error('tipo_masivo'); ?>
        <br /><input id="tipo_masivo" type="text" name="tipo_masivo" maxlength="20" value="<?php echo set_value('tipo_masivo'); ?>"  />
</p>

<p>
        <label for="nombre_masivo">nombre_masivo</label>
        <?php echo form_error('nombre_masivo'); ?>
        <br /><input id="nombre_masivo" type="text" name="nombre_masivo" maxlength="25" value="<?php echo set_value('nombre_masivo'); ?>"  />
</p>

<p>
        <label for="apellido_persona">apellido_persona</label>
        <?php echo form_error('apellido_persona'); ?>
        <br /><input id="apellido_persona" type="text" name="apellido_persona" maxlength="25" value="<?php echo set_value('apellido_persona'); ?>"  />
</p>

<p>
        <label for="sexo_persona">sexo_persona</label>
        <?php echo form_error('sexo_persona'); ?>
        <br />
                <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
                <input id="sexo_persona" name="sexo_persona" type="radio" class="" value="option1" <?php echo $this->form_validation->set_radio('sexo_persona', 'option1'); ?> />
        		<label for="sexo_persona" class="">Radio option 1</label>

        		<input id="sexo_persona" name="sexo_persona" type="radio" class="" value="option2" <?php echo $this->form_validation->set_radio('sexo_persona', 'option2'); ?> />
        		<label for="sexo_persona" class="">Radio option 2</label>
</p>


<p>
        <label for="fecha_emision">fecha_emision</label>
        <?php echo form_error('fecha_emision'); ?>
        <br /><input id="fecha_emision" type="text" name="fecha_emision"  value="<?php echo set_value('fecha_emision'); ?>"  />
</p>

<p>
        <label for="observacion_masivo">observacion_masivo</label>
	<?php echo form_error('observacion_masivo'); ?>
	<br />
							
	<?php echo form_textarea( array( 'name' => 'observacion_masivo', 'rows' => '5', 'cols' => '80', 'value' => set_value('observacion_masivo') ) )?>
</p>
<p>
        <label for="ruta_masivo">ruta_masivo</label>
	<?php echo form_error('ruta_masivo'); ?>
	<br />
							
	<?php echo form_textarea( array( 'name' => 'ruta_masivo', 'rows' => '5', 'cols' => '80', 'value' => set_value('ruta_masivo') ) )?>
</p>
<p>
        <label for="nombre_adop">nombre_adop</label>
        <?php echo form_error('nombre_adop'); ?>
        <br /><input id="nombre_adop" type="text" name="nombre_adop" maxlength="25" value="<?php echo set_value('nombre_adop'); ?>"  />
</p>

<p>
        <label for="apellido_adop">apellido_adop</label>
        <?php echo form_error('apellido_adop'); ?>
        <br /><input id="apellido_adop" type="text" name="apellido_adop" maxlength="25" value="<?php echo set_value('apellido_adop'); ?>"  />
</p>


<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
