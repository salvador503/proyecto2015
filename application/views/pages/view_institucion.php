<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('Institucion/insertar', $attributes); ?>

<p>
        <label for="nombre_institucion">nombre institucion: <span class="required">*</span></label>
        <?php echo form_error('nombre_institucion'); ?>
        <br /><input id="nombre_institucion" type="text" name="nombre_institucion" maxlength="25" value="<?php echo set_value('nombre_institucion'); ?>"  />
</p>

<p>
        <label for="tipo">tipo: <span class="required">*</span></label>
        <?php echo form_error('tipo'); ?>
        <br /><input id="tipo" type="text" name="tipo"  value="<?php echo set_value('tipo'); ?>"  />
</p>


<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
