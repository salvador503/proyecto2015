<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('rol', $attributes); ?>

<p>
        <label for="tipo_rol">tipo_rol</label>
        <?php echo form_error('tipo_rol'); ?>
        <br /><input id="tipo_rol" type="text" name="tipo_rol" maxlength="15" value="<?php echo set_value('tipo_rol'); ?>"  />
</p>


<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
