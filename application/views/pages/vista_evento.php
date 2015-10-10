<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('Evento', $attributes); ?>

<p>
        <label for="id_evento">id evento: <span class="required">*</span></label>
        <?php echo form_error('id_evento'); ?>
        <br /><input id="id_evento" type="text" name="id_evento" maxlength="3" value="<?php echo set_value('id_evento'); ?>"  />
</p>

<p>
        <label for="dia_inicio">dia inicio: <span class="required">*</span></label>
        <?php echo form_error('dia_inicio'); ?>
        <br /><input id="dia_inicio" type="text" name="dia_inicio" maxlength="5" value="<?php echo set_value('dia_inicio'); ?>"  />
</p>

<p>
        <label for="mes_inicio">mes inicio: <span class="required">*</span></label>
        <?php echo form_error('mes_inicio'); ?>
        <br /><input id="mes_inicio" type="text" name="mes_inicio" maxlength="10" value="<?php echo set_value('mes_inicio'); ?>"  />
</p>

<p>
        <label for="ano_inicio">año inicio: <span class="required">*</span></label>
        <?php echo form_error('ano_inicio'); ?>
        <br /><input id="ano_inicio" type="text" name="ano_inicio" maxlength="5" value="<?php echo set_value('ano_inicio'); ?>"  />
</p>

<p>
        <label for="dia_fin">dia fin:</label>
        <?php echo form_error('dia_fin'); ?>
        <br /><input id="dia_fin" type="text" name="dia_fin" maxlength="5" value="<?php echo set_value('dia_fin'); ?>"  />
</p>

<p>
        <label for="mes_fin">mes fin <span class="required">*</span></label>
        <?php echo form_error('mes_fin'); ?>
        <br /><input id="mes_fin" type="text" name="mes_fin" maxlength="10" value="<?php echo set_value('mes_fin'); ?>"  />
</p>

<p>
        <label for="ano_fin">año fin:</label>
        <?php echo form_error('ano_fin'); ?>
        <br /><input id="ano_fin" type="text" name="ano_fin" maxlength="5" value="<?php echo set_value('ano_fin'); ?>"  />
</p>

<p>
        <label for="descripcion_de_evento">descripcion de evento: <span class="required">*</span></label>
	<?php echo form_error('descripcion_de_evento'); ?>
	<br />
							
	<?php echo form_textarea( array( 'name' => 'descripcion_de_evento', 'rows' => '5', 'cols' => '80', 'value' => set_value('descripcion_de_evento') ) )?>
</p>
<p>
        <label for="lugar_de_evento">lugar de evento: <span class="required">*</span></label>
        <?php echo form_error('lugar_de_evento'); ?>
        <br /><input id="lugar_de_evento" type="text" name="lugar_de_evento" maxlength="25" value="<?php echo set_value('lugar_de_evento'); ?>"  />
</p>

<p>
        <label for="unidad_responsable">unidad responsable: <span class="required">*</span></label>
        <?php echo form_error('unidad_responsable'); ?>
        <br /><input id="unidad_responsable" type="text" name="unidad_responsable" maxlength="25" value="<?php echo set_value('unidad_responsable'); ?>"  />
</p>

<p>
        <label for="responsable_evento">responsable evento: <span class="required">*</span></label>
        <?php echo form_error('responsable_evento'); ?>
        <br /><input id="responsable_evento" type="text" name="responsable_evento" maxlength="25" value="<?php echo set_value('responsable_evento'); ?>"  />
</p>


<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
