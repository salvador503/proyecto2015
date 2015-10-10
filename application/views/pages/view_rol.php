<?php

$attributes = array('class' => '', 'id' => '');
echo form_open('Rol', $attributes); ?>

<p>
        <label for="id_rol">Id Rol: <span class="required">*</span></label>
        <?php echo form_error('id_rol'); ?>
        
        <?php  ?>
        <?php $options = array(
                                                  ''  => 'Please Select',
                                                  'example_value1'    => 'example option 1',
                                                  1 => 'Rol01'
                                                ); ?>

        <br /><?php echo form_dropdown('id_rol', $options, set_value('id_rol'))?>
</p>                                             
                        
<p>
        <label for="tipo_rol">Tipo Rol <span class="required">*</span></label>
        <?php echo form_error('tipo_rol'); ?>
        
        <?php?>
        <?php $options = array(
                                                  ''  => 'Please Select',
                                                  'example_value1'    => 'example option 1'
                                                ); ?>

        <br /><?php echo form_dropdown('tipo_rol', $options, set_value('tipo_rol'))?>
</p>                                             
                        

<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
