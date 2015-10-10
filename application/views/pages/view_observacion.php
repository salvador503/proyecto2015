<?php 
$attributes = array('class' => '', 'id' => '');
echo form_open('Observacion/insertar'); ?>                                           
                        
<p>
        <label for="id_expediente">Expediente <span class="required">*</span></label>
        <?php echo form_error('id_expediente'); ?>
        <br /><input id="id_expediente" type="text" name="id_expediente"  value="<?php echo set_value('id_expediente'); ?>" readonly />
</p>

<p>
        <label for="descripcionde_observacion">Descripcion de observacion: <span class="required">*</span></label>
	<?php echo form_error('descripcionde_observacion'); ?>
	<br />
							
	<?php echo form_textarea( array( 'name' => 'descripcionde_observacion', 'rows' => '5', 'cols' => '80', 'value' => set_value('descripcionde_observacion') ) )?>
</p>
<p>
        <label for="prioridad">Prioridad <span class="required">*</span></label>
        <?php echo form_error('prioridad'); ?>
        
        <?php  ?>
        <?php $options = array(
                                                  ''  => 'Please Select',
                                                   1 => 'Alta',
                                                   2 => 'Media',
                                                   3 => 'Baja'
                                                ); ?>

        <br /><?php echo form_dropdown('prioridad', $options, set_value('prioridad'))?>
</p>                                             
                        

<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>