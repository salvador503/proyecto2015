<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('controller_departamento', $attributes); ?>

<p>
        <label for="id_departamento">id departamento: <span class="required">*</span></label>
        <?php echo form_error('id_departamento'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  ''  => 'Please Select',
                                                  'example_value1'    => 'example option 1'
                                                ); ?>

        <br /><?php echo form_dropdown('id_departamento', $options, set_value('id_departamento'))?>
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
        <label for="nombre_departamento">nombre departamento: <span class="required">*</span></label>
        <?php echo form_error('nombre_departamento'); ?>
        <br /><input id="nombre_departamento" type="text" name="nombre_departamento" maxlength="25" value="<?php echo set_value('nombre_departamento'); ?>"  />
</p>


<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
