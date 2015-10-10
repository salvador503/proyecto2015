<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('familiar_masivo/insertar', $attributes); ?>

<p>
        <label for="id_familiar">id familiar: <span class="required">*</span></label>
        <?php echo form_error('id_familiar'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  ''  => 'Please Select',
                                                  'example_value1'    => 'example option 1',
                                                  100 => 'El Salvador'
                                                ); ?>

        <br /><?php echo form_dropdown('id_familiar', $options, set_value('id_familiar'))?>
</p>                                             
                        
<p>
        <label for="numero_de_documento_familiar_masivo">numero de documento familiar masivo: <span class="required">*</span></label>
        <?php echo form_error('numero_de_documento_familiar_masivo'); ?>
        <br /><input id="numero_de_documento_familiar_masivo" type="text" name="numero_de_documento_familiar_masivo" maxlength="3" value="<?php echo set_value('numero_de_documento_familiar_masivo'); ?>"  />
</p>

<p>
        <label for="parentesco_masivo">parentesco masivo: <span class="required">*</span></label>
        <?php echo form_error('parentesco_masivo'); ?>
        <br /><input id="parentesco_masivo" type="text" name="parentesco_masivo" maxlength="25" value="<?php echo set_value('parentesco_masivo'); ?>"  />
</p>

<p>
        <label for="nombre_familiar_masivo">nombre familiar masivo: <span class="required">*</span></label>
        <?php echo form_error('nombre_familiar_masivo'); ?>
        <br /><input id="nombre_familiar_masivo" type="text" name="nombre_familiar_masivo" maxlength="25" value="<?php echo set_value('nombre_familiar_masivo'); ?>"  />
</p>

<p>
        <label for="apellido_familiar_masivo">apellido familiar masivo: <span class="required">*</span></label>
        <?php echo form_error('apellido_familiar_masivo'); ?>
        <br /><input id="apellido_familiar_masivo" type="text" name="apellido_familiar_masivo" maxlength="25" value="<?php echo set_value('apellido_familiar_masivo'); ?>"  />
</p>

<p>
        <label for="tipo_de_documento_familiar_masivo">tipo de documento familiar masivo: <span class="required">*</span></label>
        <?php echo form_error('tipo_de_documento_familiar_masivo'); ?>
        <br /><input id="tipo_de_documento_familiar_masivo" type="text" name="tipo_de_documento_familiar_masivo" maxlength="25" value="<?php echo set_value('tipo_de_documento_familiar_masivo'); ?>"  />
</p>


<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
