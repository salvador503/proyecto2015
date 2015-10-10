<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('Nombre_alias/insertar', $attributes); ?>

<p>
        <label for="id_nombre">id nombre: <span class="required">*</span></label>
        <?php echo form_error('id_nombre'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  ''  => 'Please Select',
                                                  'example_value1'    => 'example option 1'
                                                ); ?>

        <br /><?php echo form_dropdown('id_nombre', $options, set_value('id_nombre'))?>
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
