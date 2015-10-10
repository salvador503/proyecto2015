<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('controller_archivo_expediente', $attributes); ?>

<p>
        <label for="id_archivo_expediente">id archivo expediente: <span class="required">*</span></label>
        <?php echo form_error('id_archivo_expediente'); ?>
        <br /><input id="id_archivo_expediente" type="text" name="id_archivo_expediente" maxlength="3" value="<?php echo set_value('id_archivo_expediente'); ?>"  />
</p>

<p>
        <label for="id_expediente">id expediente: <span class="required">*</span></label>
        <?php echo form_error('id_expediente'); ?>
        <br /><input id="id_expediente" type="text" name="id_expediente" maxlength="3" value="<?php echo set_value('id_expediente'); ?>"  />
</p>

<p>
        <label for="ruta">ruta: <span class="required">*</span></label>
        <?php echo form_error('ruta'); ?>
        <br /><input id="ruta" type="text" name="ruta" maxlength="25" value="<?php echo set_value('ruta'); ?>"  />
</p>

<p>
        <label for="tipo">tipo: <span class="required">*</span></label>
        <?php echo form_error('tipo'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  ''  => 'Please Select',
                                                  'example_value1'    => 'example option 1'
                                                ); ?>

        <br /><?php echo form_dropdown('tipo', $options, set_value('tipo'))?>
</p>                                             
                        

<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
