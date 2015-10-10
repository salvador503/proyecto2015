<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('observacion', $attributes); ?>

<p>
        <label for="fecha">fecha</label>
        <?php echo form_error('fecha'); ?>
        <br /><input id="fecha" type="text" name="fecha"  value="<?php echo set_value('fecha'); ?>"  />
</p>

<p>
        <label for="descripcion_observacion">descripcion_observacion</label>
	<?php echo form_error('descripcion_observacion'); ?>
	<br />
							
	<?php echo form_textarea( array( 'name' => 'descripcion_observacion', 'rows' => '5', 'cols' => '80', 'value' => set_value('descripcion_observacion') ) )?>
</p>
<p>
        <label for="prioridad">prioridad</label>
        <?php echo form_error('prioridad'); ?>
        <br /><input id="prioridad" type="text" name="prioridad" maxlength="4" value="<?php echo set_value('prioridad'); ?>"  />
</p>


<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
