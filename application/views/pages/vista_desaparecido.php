<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('conntroller_desaparecido', $attributes); ?>

<p>
        <label for="id_desaparecido">id desaparecido: <span class="required">*</span></label>
        <?php echo form_error('id_desaparecido'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  ''  => 'Please Select',
                                                  'example_value1'    => 'example option 1'
                                                ); ?>

        <br /><?php echo form_dropdown('id_desaparecido', $options, set_value('id_desaparecido'))?>
</p>                                             
                        
<p>
        <label for="id_datos">id datos: <span class="required">*</span></label>
        <?php echo form_error('id_datos'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  ''  => 'Please Select',
                                                  'example_value1'    => 'example option 1'
                                                ); ?>

        <br /><?php echo form_dropdown('id_datos', $options, set_value('id_datos'))?>
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
        <label for="foto">foto: <span class="required">*</span></label>
        <?php echo form_error('foto'); ?>
        <br /><input id="foto" type="text" name="foto" maxlength="50" value="<?php echo set_value('foto'); ?>"  />
</p>

<p>
        <label for="fecha_de_nacimiento">fecha de nacimiento: <span class="required">*</span></label>
        <?php echo form_error('fecha_de_nacimiento'); ?>
        <br /><input id="fecha_de_nacimiento" type="text" name="fecha_de_nacimiento"  value="<?php echo set_value('fecha_de_nacimiento'); ?>"  />
</p>

<p>
        <label for="lugar_de_nacimiento">lugar de nacimiento: <span class="required">*</span></label>
        <?php echo form_error('lugar_de_nacimiento'); ?>
        <br /><input id="lugar_de_nacimiento" type="text" name="lugar_de_nacimiento" maxlength="25" value="<?php echo set_value('lugar_de_nacimiento'); ?>"  />
</p>

<p>
        <label for="estado_civil">estado civil: <span class="required">*</span></label>
        <?php echo form_error('estado_civil'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  ''  => 'Please Select',
                                                  'example_value1'    => 'example option 1'
                                                ); ?>

        <br /><?php echo form_dropdown('estado_civil', $options, set_value('estado_civil'))?>
</p>                                             
                        
<p>
        <label for="caracteristicas_personales">caracteristicas personales: <span class="required">*</span></label>
	<?php echo form_error('caracteristicas_personales'); ?>
	<br />
							
	<?php echo form_textarea( array( 'name' => 'caracteristicas_personales', 'rows' => '5', 'cols' => '80', 'value' => set_value('caracteristicas_personales') ) )?>
</p>
<p>
        <label for="domicilio">domicilio</label>
        <?php echo form_error('domicilio'); ?>
        <br /><input id="domicilio" type="text" name="domicilio" maxlength="50" value="<?php echo set_value('domicilio'); ?>"  />
</p>

<p>
        <label for="observaciones_datos">observaciones datos: <span class="required">*</span></label>
	<?php echo form_error('observaciones_datos'); ?>
	<br />
							
	<?php echo form_textarea( array( 'name' => 'observaciones_datos', 'rows' => '5', 'cols' => '80', 'value' => set_value('observaciones_datos') ) )?>
</p>

<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
