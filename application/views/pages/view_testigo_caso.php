<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('Testigo_caso/insertar', $attributes); ?>
                                                                
<p>
        <label for="nombre">Nombre <span class="required">*</span></label>
        <?php echo form_error('nombre'); ?>
        <br /><input id="nombre" type="text" name="nombre" maxlength="25" value="<?php echo set_value('nombre'); ?>"  />
</p>

<p>
        <label for="apellido">Apellido <span class="required">*</span></label>
        <?php echo form_error('apellido'); ?>
        <br /><input id="apellido" type="text" name="apellido" maxlength="25" value="<?php echo set_value('apellido'); ?>"  />
</p>

<p>
        <label for="sexo">Sexo <span class="required">*</span></label>
        <?php echo form_error('sexo'); ?>
        <br />
                <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
                <input id="sexo" name="sexo" type="radio" class="" value="M" <?php echo $this->form_validation->set_radio('sexo', 'M'); ?> />
        		<label for="sexo" class="">Masculino</label>

        		<input id="sexo" name="sexo" type="radio" class="" value="F" <?php echo $this->form_validation->set_radio('sexo', 'F'); ?> />
        		<label for="sexo" class="">Femenino</label>
</p>


<p>
        <label for="documento_de_identidad">Documento de identidad <span class="required">*</span></label>
        <?php echo form_error('documento_de_identidad'); ?>
        <br /><input id="documento_de_identidad" type="text" name="documento_de_identidad" maxlength="9" value="<?php echo set_value('documento_de_identidad'); ?>"  />
</p>

<p>
        <label for="originario_de">Originario de <span class="required">*</span></label>
        <?php echo form_error('originario_de'); ?>
        <br /><input id="originario_de" type="text" name="originario_de" maxlength="25" value="<?php echo set_value('originario_de'); ?>"  />
</p>

<p>
        <label for="telefono">Telefono <span class="required">*</span></label>
        <?php echo form_error('telefono'); ?>
        <br /><input id="telefono" type="text" name="telefono" maxlength="11" value="<?php echo set_value('telefono'); ?>"  />
</p>


<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
