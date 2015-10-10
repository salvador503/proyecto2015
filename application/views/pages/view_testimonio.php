<?php 

$attributes = array('class' => '', 'id' => '');
echo form_open('Testimonio/insertar'); ?>                                     
                        
<p>
        <label for="id_testigo">Id Testigo <span class="required">*</span></label>
        <?php echo form_error('id_testigo'); ?>
        
        <?php?>
        <?php $options = array(
                                                  ''  => 'Please Select',
                                                  'example_value1'    => 'example option 1',
                                                  1 => 'Testigo 1'
                                                ); ?>

        <br /><?php echo form_dropdown('id_testigo', $options, set_value('id_testigo'))?>
</p>                                             
                        
<p>
        <label for="testimonio">Testimonio: <span class="required">*</span></label>
	<?php echo form_error('testimonio'); ?>
	<br />
							
	<?php echo form_textarea( array( 'name' => 'testimonio', 'rows' => '5', 'cols' => '80', 'value' => set_value('testimonio') ) )?>
</p>

<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
