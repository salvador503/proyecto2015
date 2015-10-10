<?php 

$attributes = array('class' => '', 'id' => '');
echo form_open('controllerUsuario', $attributes); ?>

<p>
        <label for="nombre">Nombre: <span class="required">*</span></label>
        <?php echo form_error('nombre'); ?>
        <br /><input id="nombre" type="text" name="nombre" maxlength="50" value="<?php echo set_value('nombre'); ?>"  />
</p>

<p>
        <label for="apelllido">Apelllido: <span class="required">*</span></label>
        <?php echo form_error('apelllido'); ?>
        <br /><input id="apelllido" type="text" name="apelllido" maxlength="50" value="<?php echo set_value('apelllido'); ?>"  />
</p>

<p>
        <label for="telefono">Telefono:</label>
        <?php echo form_error('telefono'); ?>
        <br /><input id="telefono" type="text" name="telefono"  value="<?php echo set_value('telefono'); ?>"  />
</p>

<p>
        <label for="e_mail">E-mail <span class="required">*</span></label>
        <?php echo form_error('e_mail'); ?>
        <br /><input id="e_mail" type="text" name="e_mail"  value="<?php echo set_value('e_mail'); ?>"  />
</p>

<p>
        <label for="direccion">Direccion <span class="required">*</span></label>
        <?php echo form_error('direccion'); ?>
        <br /><input id="direccion" type="text" name="direccion" maxlength="150" value="<?php echo set_value('direccion'); ?>"  />
</p>


<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
