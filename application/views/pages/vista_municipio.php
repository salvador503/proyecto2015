<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('controller_municipio', $attributes); ?>

<p>
        <label for="id_municipio">id municipio: <span class="required">*</span></label>
        <?php echo form_error('id_municipio'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  ''  => 'Please Select',
                                                  'example_value1'    => 'example option 1'
                                                ); ?>

        <br /><?php echo form_dropdown('id_municipio', $options, set_value('id_municipio'))?>
</p>                                             
                        
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
        <label for="nombre">nombre: <span class="required">*</span></label>
        <?php echo form_error('nombre'); ?>
        <br /><input id="nombre" type="text" name="nombre" maxlength="25" value="<?php echo set_value('nombre'); ?>"  />
</p>


<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
