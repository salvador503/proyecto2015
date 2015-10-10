<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('controller_biologico', $attributes); ?>

<p>
        <label for="id_familiar">id familiar: <span class="required">*</span></label>
        <?php echo form_error('id_familiar'); ?>
        <br /><input id="id_familiar" type="text" name="id_familiar" maxlength="3" value="<?php echo set_value('id_familiar'); ?>"  />
</p>

<p>
        <label for="id_biologico">id biologico: <span class="required">*</span></label>
        <?php echo form_error('id_biologico'); ?>
        <br /><input id="id_biologico" type="text" name="id_biologico" maxlength="3" value="<?php echo set_value('id_biologico'); ?>"  />
</p>

<p>
        <label for="id_desaparecido">id desaparecido: <span class="required">*</span></label>
        <?php echo form_error('id_desaparecido'); ?>
        <br /><input id="id_desaparecido" type="text" name="id_desaparecido" maxlength="3" value="<?php echo set_value('id_desaparecido'); ?>"  />
</p>

<p>
        <label for="id_pais">id pais: <span class="required">*</span></label>
        <?php echo form_error('id_pais'); ?>
        <br /><input id="id_pais" type="text" name="id_pais" maxlength="3" value="<?php echo set_value('id_pais'); ?>"  />
</p>

<p>
        <label for="relacion">relacion: <span class="required">*</span></label>
        <?php echo form_error('relacion'); ?>
        <br /><input id="relacion" type="text" name="relacion" maxlength="25" value="<?php echo set_value('relacion'); ?>"  />
</p>

<p>
        <label for="telefono">telefono: <span class="required">*</span></label>
        <?php echo form_error('telefono'); ?>
        <br /><input id="telefono" type="text" name="telefono" maxlength="15" value="<?php echo set_value('telefono'); ?>"  />
</p>

<p>
        <label for="correo">correo: <span class="required">*</span></label>
        <?php echo form_error('correo'); ?>
        <br /><input id="correo" type="text" name="correo" maxlength="25" value="<?php echo set_value('correo'); ?>"  />
</p>

<p>
        <label for="domicilio">domicilio: <span class="required">*</span></label>
        <?php echo form_error('domicilio'); ?>
        <br /><input id="domicilio" type="text" name="domicilio" maxlength="50" value="<?php echo set_value('domicilio'); ?>"  />
</p>

<p>
        <label for="sexo">sexo: <span class="required">*</span></label>
        <?php echo form_error('sexo'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  ''  => 'Please Select',
                                                  'example_value1'    => 'example option 1'
                                                ); ?>

        <br /><?php echo form_dropdown('sexo', $options, set_value('sexo'))?>
</p>                                             
                        
<p>
        <label for="tipo_de_documento">tipo de documento: <span class="required">*</span></label>
        <?php echo form_error('tipo_de_documento'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  ''  => 'Please Select',
                                                  'example_value1'    => 'example option 1'
                                                ); ?>

        <br /><?php echo form_dropdown('tipo_de_documento', $options, set_value('tipo_de_documento'))?>
</p>                                             
                        
<p>
        <label for="numero_de_documento">numero de documento: <span class="required">*</span></label>
        <?php echo form_error('numero_de_documento'); ?>
        <br /><input id="numero_de_documento" type="text" name="numero_de_documento" maxlength="25" value="<?php echo set_value('numero_de_documento'); ?>"  />
</p>

<p>
        <label for="originario_de">originario de: <span class="required">*</span></label>
        <?php echo form_error('originario_de'); ?>
        <br /><input id="originario_de" type="text" name="originario_de" maxlength="25" value="<?php echo set_value('originario_de'); ?>"  />
</p>


<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
