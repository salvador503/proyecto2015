<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('controller_datos_desaparecido', $attributes); ?>

<p>
        <label for="id_datos">id datos: <span class="required">*</span></label>
        <?php echo form_error('id_datos'); ?>
        <br /><input id="id_datos" type="text" name="id_datos" maxlength="3" value="<?php echo set_value('id_datos'); ?>"  />
</p>

<p>
        <label for="id_evento">id evento: <span class="required">*</span></label>
        <?php echo form_error('id_evento'); ?>
        <br /><input id="id_evento" type="text" name="id_evento" maxlength="3" value="<?php echo set_value('id_evento'); ?>"  />
</p>

<p>
        <label for="lugar_de_desaparicion">lugar de desaparicion: <span class="required">*</span></label>
        <?php echo form_error('lugar_de_desaparicion'); ?>
        <br /><input id="lugar_de_desaparicion" type="text" name="lugar_de_desaparicion" maxlength="25" value="<?php echo set_value('lugar_de_desaparicion'); ?>"  />
</p>

<p>
        <label for="dia_desaparicion">dia desaparicion: <span class="required">*</span></label>
        <?php echo form_error('dia_desaparicion'); ?>
        <br /><input id="dia_desaparicion" type="text" name="dia_desaparicion" maxlength="2" value="<?php echo set_value('dia_desaparicion'); ?>"  />
</p>

<p>
        <label for="mes_desaparicion">mes desaparicion: <span class="required">*</span></label>
        <?php echo form_error('mes_desaparicion'); ?>
        <br /><input id="mes_desaparicion" type="text" name="mes_desaparicion" maxlength="2" value="<?php echo set_value('mes_desaparicion'); ?>"  />
</p>

<p>
        <label for="ano_de_desaparicion">año de desaparicion: <span class="required">*</span></label>
        <?php echo form_error('ano_de_desaparicion'); ?>
        <br /><input id="ano_de_desaparicion" type="text" name="ano_de_desaparicion" maxlength="2" value="<?php echo set_value('ano_de_desaparicion'); ?>"  />
</p>

<p>
        <label for="observaciones_sobre_datos">observaciones sobre datos:</label>
	<?php echo form_error('observaciones_sobre_datos'); ?>
	<br />
							
	<?php echo form_textarea( array( 'name' => 'observaciones_sobre_datos', 'rows' => '5', 'cols' => '80', 'value' => set_value('observaciones_sobre_datos') ) )?>
</p>

<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
