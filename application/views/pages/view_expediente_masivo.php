<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('Expediente_masivo/insertar', $attributes); ?>

<p>
        <label for="id_masivo">id masivo: <span class="required">*</span></label>
        <?php echo form_error('id_masivo'); ?>
        <br /><input id="id_masivo" type="text" name="id_masivo" maxlength="3" value="<?php echo set_value('id_masivo'); ?>"  />
</p>

<p>
        <label for="id_pais">id pais: <span class="required">*</span></label>
        <?php echo form_error('id_pais'); ?>
        <br /><input id="id_pais" type="text" name="id_pais" maxlength="3" value="<?php echo set_value('id_pais'); ?>"  />
</p>

<p>
        <label for="id_institucion">id institucion: <span class="required">*</span></label>
        <?php echo form_error('id_institucion'); ?>
        <br /><input id="id_institucion" type="text" name="id_institucion" maxlength="3" value="<?php echo set_value('id_institucion'); ?>"  />
</p>

<p>
        <label for="expediente_id_masivo">expediente id masivo: <span class="required">*</span></label>
        <?php echo form_error('expediente_id_masivo'); ?>
        <br /><input id="expediente_id_masivo" type="text" name="expediente_id_masivo" maxlength="3" value="<?php echo set_value('expediente_id_masivo'); ?>"  />
</p>

<p>
        <label for="id_expediente">id expediente: <span class="required">*</span></label>
        <?php echo form_error('id_expediente'); ?>
        <br /><input id="id_expediente" type="text" name="id_expediente" maxlength="3" value="<?php echo set_value('id_expediente'); ?>"  />
</p>

<p>
        <label for="tipo_masivo">tipo masivo: <span class="required">*</span></label>
        <?php echo form_error('tipo_masivo'); ?>
        <br /><input id="tipo_masivo" type="text" name="tipo_masivo" maxlength="25" value="<?php echo set_value('tipo_masivo'); ?>"  />
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
        <label for="sexo">sexo: <span class="required">*</span></label>
        <?php echo form_error('sexo'); ?>
        <br /><input id="sexo" type="text" name="sexo" maxlength="10" value="<?php echo set_value('sexo'); ?>"  />
</p>

<p>
        <label for="fecha_de_emision">fecha de emision: <span class="required">*</span></label>
        <?php echo form_error('fecha_de_emision'); ?>
        <br /><input id="fecha_de_emision" type="text" name="fecha_de_emision"  value="<?php echo set_value('fecha_de_emision'); ?>"  />
</p>

<p>
        <label for="observacion_masiva">observacion masiva: <span class="required">*</span></label>
        <?php echo form_error('observacion_masiva'); ?>
        <br /><input id="observacion_masiva" type="text" name="observacion_masiva" maxlength="25" value="<?php echo set_value('observacion_masiva'); ?>"  />
</p>

<p>
        <label for="ruta_masiva">ruta masiva: <span class="required">*</span></label>
        <?php echo form_error('ruta_masiva'); ?>
        <br /><input id="ruta_masiva" type="text" name="ruta_masiva" maxlength="25" value="<?php echo set_value('ruta_masiva'); ?>"  />
</p>

<p>
        <label for="nombre_adoptivo">nombre adoptivo: <span class="required">*</span></label>
        <?php echo form_error('nombre_adoptivo'); ?>
        <br /><input id="nombre_adoptivo" type="text" name="nombre_adoptivo" maxlength="25" value="<?php echo set_value('nombre_adoptivo'); ?>"  />
</p>

<p>
        <label for="apellido_adoptivo">apellido adoptivo: <span class="required">*</span></label>
        <?php echo form_error('apellido_adoptivo'); ?>
        <br /><input id="apellido_adoptivo" type="text" name="apellido_adoptivo" maxlength="25" value="<?php echo set_value('apellido_adoptivo'); ?>"  />
</p>


<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
