<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('Partida/insertar', $attributes); ?>

<p>
        <label for="codigo_masivo">Codigo masivo</label>
        <?php echo form_error('codigo_masivo'); ?>
        <br /><input id="codigo_masivo" type="text" name="codigo_masivo" maxlength="10" value="<?php echo set_value('codigo_masivo'); ?>"  />
</p>

<p>
        <label for="tipo_partida">Tipo de partida<span class="required">*</span></label>
        <?php echo form_error('tipo_partida'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  ''  => 'Please Select',
                                                  'nacimiento' => 'Nacimiento',
                                                  'matrimonio' => 'Matrimonio',
                                                  'defuncion' => 'Defuncion'
                                                ); ?>

        <br /><?php echo form_dropdown('tipo_partida', $options, set_value('tipo_partidas'))?>
</p>

                                            

<p>
        <label for="nombre">Nombre: <span class="required">*</span></label>
        <?php echo form_error('nombre'); ?>
        <br /><input id="nombre" type="text" name="nombre" maxlength="25" value="<?php echo set_value('nombre'); ?>"  />
</p>

<p>
        <label for="apellido">Apellido: <span class="required">*</span></label>
        <?php echo form_error('apellido'); ?>
        <br /><input id="apellido" type="text" name="apellido" maxlength="25" value="<?php echo set_value('apellido'); ?>"  />
</p>

<p>
        <label for="sexo">sexo: <span class="required">*</span></label>
        <?php echo form_error('sexo'); ?>
        <br />
                <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
                <input id="sexo" name="sexo" type="radio" class="" value="M" <?php echo $this->form_validation->set_radio('sexo', 'M'); ?> />
        		<label for="sexo" class="">Masculino</label>

        		<input id="sexo" name="sexo" type="radio" class="" value="F" <?php echo $this->form_validation->set_radio('sexo', 'F'); ?> />
        		<label for="sexo" class="">Femenino</label>
</p>

<p>
        <label for="pais">Pais origen<span class="required">*</span></label>
        <?php echo form_error('pais'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  ''  => 'Please Select',
                                                  1 => 'El Salvador'
                                                ); ?>

        <br /><?php echo form_dropdown('pais', $options, set_value('pais'))?>
</p>

<p>
        <label for="institucion">Institucion<span class="required">*</span></label>
        <?php echo form_error('institucion'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  ''  => 'Please Select',
                                                  1 => 'Aldeas SOS'
                                                ); ?>

        <br /><?php echo form_dropdown('institucion', $options, set_value('institucion'))?>
</p> 

<p>
        <label for="numero_de_partida">Numero de partida: <span class="required">*</span></label>
        <?php echo form_error('numero_de_partida'); ?>
        <br /><input id="numero_de_partida" type="text" name="numero_de_partida" maxlength="3" value="<?php echo set_value('numero_de_partida'); ?>"  />
</p>

<p>
        <label for="numero_de_folio">Numero de folio: <span class="required">*</span></label>
        <?php echo form_error('numero_de_folio'); ?>
        <br /><input id="numero_de_folio" type="text" name="numero_de_folio" maxlength="3" value="<?php echo set_value('numero_de_folio'); ?>"  />
</p>

<p>
        <label for="numero_de_libro">Numero de libro: <span class="required">*</span></label>
        <?php echo form_error('numero_de_libro'); ?>
        <br /><input id="numero_de_libro" type="text" name="numero_de_libro" maxlength="3" value="<?php echo set_value('numero_de_libro'); ?>"  />
</p>

<p>
        <label for="fecha_partida">Fecha de nacimiento: <span class="required">*</span></label>
        <?php echo form_error('fecha_partida'); ?>
        <br /><input id="fecha_partida" type="text" name="fecha_partida"  value="<?php echo set_value('fecha_partida'); ?>"  />
</p>

<p>
        <label for="nombre_adoptivo">Nombre adoptivo<span class="required">*</span></label>
        <?php echo form_error('nombre_adoptivo'); ?>
        <br /><input id="nombre_adoptivo" type="text" name="nombre_adoptivo" maxlength="25" value="<?php echo set_value('nombre_adoptivo'); ?>"  />
</p>

<p>
        <label for="apellido_adoptivo">Apellido adoptivo<span class="required">*</span></label>
        <?php echo form_error('apellido_adoptivo'); ?>
        <br /><input id="apellido_adoptivo" type="text" name="apellido_adoptivo" maxlength="25" value="<?php echo set_value('apellido_adoptivo'); ?>"  />
</p>  

<p>
        <label for="fecha_de_emision">Fecha de emision: <span class="required">*</span></label>
        <?php echo form_error('fecha_de_emision'); ?>
        <br /><input id="fecha_de_emision" type="text" name="fecha_de_emision"  value="<?php echo set_value('fecha_de_emision'); ?>"  />
</p>

<p>
        <label for="observacion_masivo">Observacion: <span class="required">*</span></label>
    <?php echo form_error('observacion_masivo'); ?>
    <br />
                            
    <?php echo form_textarea( array( 'name' => 'observacion_masivo', 'rows' => '5', 'cols' => '80', 'value' => set_value('observacion_masivo') ) )?>
</p>
<p>
        <label for="ruta_masivo">Ruta (archivo scaneado) <span class="required">*</span></label>
        <?php echo form_error('ruta_masivo'); ?>
        <br /><input id="ruta_masivo" type="text" name="ruta_masivo" maxlength="30" value="<?php echo set_value('ruta_masivo'); ?>"  />
</p>
<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
