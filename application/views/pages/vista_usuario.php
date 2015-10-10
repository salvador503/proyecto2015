<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('controller_usuario', $attributes); ?>

<p>
        <label for="codigo">codigo: <span class="required">*</span></label>
        <?php echo form_error('codigo'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  ''  => 'Please Select',
                                                  'example_value1'    => 'example option 1'
                                                ); ?>

        <br /><?php echo form_dropdown('codigo', $options, set_value('codigo'))?>
</p>                                             
                        
<p>
        <label for="id_bitacora">id bitacora: <span class="required">*</span></label>
        <?php echo form_error('id_bitacora'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  ''  => 'Please Select',
                                                  'example_value1'    => 'example option 1'
                                                ); ?>

        <br /><?php echo form_dropdown('id_bitacora', $options, set_value('id_bitacora'))?>
</p>                                             
                        
<p>
        <label for="id_rol">id rol: <span class="required">*</span></label>
        <?php echo form_error('id_rol'); ?>
        <br /><input id="id_rol" type="text" name="id_rol" maxlength="3" value="<?php echo set_value('id_rol'); ?>"  />
</p>

<p>
        <label for="contrasena">contraseña: <span class="required">*</span></label>
        <?php echo form_error('contrasena'); ?>
        <br /><input id="contrasena" type="password" name="contrasena" maxlength="15" value="<?php echo set_value('contrasena'); ?>"  />
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
        <label for="telefono">telefono: <span class="required">*</span></label>
        <?php echo form_error('telefono'); ?>
        <br /><input id="telefono" type="text" name="telefono" maxlength="15" value="<?php echo set_value('telefono'); ?>"  />
</p>

<p>
        <label for="e_mail">e-mail: <span class="required">*</span></label>
        <?php echo form_error('e_mail'); ?>
        <br /><input id="e_mail" type="text" name="e_mail" maxlength="20" value="<?php echo set_value('e_mail'); ?>"  />
</p>

<p>
        <label for="direccion">dirección: <span class="required">*</span></label>
        <?php echo form_error('direccion'); ?>
        <br /><input id="direccion" type="text" name="direccion" maxlength="150" value="<?php echo set_value('direccion'); ?>"  />
</p>

<p>
        <label for="proviene_de">proviene de: <span class="required">*</span></label>
        <?php echo form_error('proviene_de'); ?>
        <br /><input id="proviene_de" type="text" name="proviene_de" maxlength="25" value="<?php echo set_value('proviene_de'); ?>"  />
</p>


<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>