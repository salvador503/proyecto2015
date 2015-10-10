<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('Familiar', $attributes); ?>

<p>
        <label for="id_familiar">id familiar: <span class="required">*</span></label>
        <?php echo form_error('id_familiar'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  ''  => 'Please Select',
                                                  'example_value1'    => 'example option 1'
                                                ); ?>

        <br /><?php echo form_dropdown('id_familiar', $options, set_value('id_familiar'))?>
</p>                                             
                        
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
        <label for="relacion">relacion: <span class="required">*</span></label>
        <?php echo form_error('relacion'); ?>
        <br /><input id="relacion" type="text" name="relacion" maxlength="15" value="<?php echo set_value('relacion'); ?>"  />
</p>

<p>
        <label for="telefono">telefono: <span class="required">*</span></label>
        <?php echo form_error('telefono'); ?>
        <br /><input id="telefono" type="text" name="telefono" maxlength="15" value="<?php echo set_value('telefono'); ?>"  />
</p>

<p>
        <label for="correo">correo: <span class="required">*</span></label>
        <?php echo form_error('correo'); ?>
        <br /><input id="correo" type="text" name="correo" maxlength="25" value="<?php echo set_value('correo'); ?>"  />
</p>

<p>
        <label for="domicilio">domicilio: <span class="required">*</span></label>
	<?php echo form_error('domicilio'); ?>
	<br />
							
	<?php echo form_textarea( array( 'name' => 'domicilio', 'rows' => '5', 'cols' => '80', 'value' => set_value('domicilio') ) )?>
</p>
<p>
        <label for="sexo">sexo: <span class="required">*</span></label>
        <?php echo form_error('sexo'); ?>
        <br /><input id="sexo" type="text" name="sexo" maxlength="10" value="<?php echo set_value('sexo'); ?>"  />
</p>

<p>
        <label for="tipo_de_documento">tipo de documento: <span class="required">*</span></label>
        <?php echo form_error('tipo_de_documento'); ?>
        <br /><input id="tipo_de_documento" type="text" name="tipo_de_documento" maxlength="25" value="<?php echo set_value('tipo_de_documento'); ?>"  />
</p>

<p>
        <label for="numero_de_documento">numero de documento: <span class="required">*</span></label>
        <?php echo form_error('numero_de_documento'); ?>
        <br /><input id="numero_de_documento" type="text" name="numero_de_documento" maxlength="20" value="<?php echo set_value('numero_de_documento'); ?>"  />
</p>


<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
