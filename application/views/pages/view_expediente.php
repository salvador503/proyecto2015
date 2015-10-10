<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('Expediente/insertar', $attributes); ?>

<p>
        <label for="id_expediente">id expediente: <span class="required">*</span></label>
        <?php echo form_error('id_expediente'); ?>
        <br /><input id="id_expediente" type="text" name="id_expediente" maxlength="3" value="<?php echo set_value('id_expediente'); ?>"  />
</p>


<!-- Nombre alias -->
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
        <label for="tipo">tipo: <span class="required">*</span></label>
        <?php echo form_error('tipo'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  'biologico'    => 'biologico',
                                                  'adoptivo' => 'adoptivo',
                                                  'conocido por' => 'conocido por'

                                                ); ?>

        <br /><?php echo form_dropdown('tipo', $options, set_value('tipo'))?>
</p> 


<!-- Datos desaparecido -->


<p>
        <label for="evento">Evento: <span class="required">*</span></label>
        <?php echo form_error('evento'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  1 => 'Guinda de Mayo'
                                                ); ?>

        <br /><?php echo form_dropdown('evento', $options, set_value('evento'))?>
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
        <label for="ano_de_desaparicion">a&ntildeo de desaparicion: <span class="required">*</span></label>
        <?php echo form_error('ano_de_desaparicion'); ?>
        <br /><input id="ano_de_desaparicion" type="text" name="ano_de_desaparicion" maxlength="2" value="<?php echo set_value('ano_de_desaparicion'); ?>"  />
</p>



<!--Desapararecido -->                                                           
                        
<p>
        <label for="id_pais">pais: <span class="required">*</span></label>
        <?php echo form_error('id_pais'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  1    => 'El Salvador'
                                                ); ?>

        <br /><?php echo form_dropdown('id_pais', $options, set_value('id_pais'))?>
</p>                                             
                        
<p>
        <label for="sexo">sexo: <span class="required">*</span></label>
        <?php echo form_error('sexo'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  'M'    => 'Masculino',
                                                  'F'    => 'Femenino'
                                                ); ?>

        <br /><?php echo form_dropdown('sexo', $options, set_value('sexo'))?>
</p>                                             
                        
<p>
        <label for="foto">foto: <span class="required">*</span></label>
        <?php echo form_error('foto'); ?>
        <br /><input id="foto" type="text" name="foto" maxlength="50" value="<?php echo set_value('foto'); ?>"  />
</p>

<p>
        <label for="fecha_de_nacimiento">fecha de nacimiento: <span class="required">*</span></label>
        <?php echo form_error('fecha_de_nacimiento'); ?>
        <br /><input id="fecha_de_nacimiento" type="text" name="fecha_de_nacimiento"  value="<?php echo set_value('fecha_de_nacimiento'); ?>"  />
</p>

<p>
        <label for="lugar_de_nacimiento">lugar de nacimiento: <span class="required">*</span></label>
        <?php echo form_error('lugar_de_nacimiento'); ?>
        <br /><input id="lugar_de_nacimiento" type="text" name="lugar_de_nacimiento" maxlength="25" value="<?php echo set_value('lugar_de_nacimiento'); ?>"  />
</p>

<p>
        <label for="estado_civil">estado civil: <span class="required">*</span></label>
        <?php echo form_error('estado_civil'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  'Soltero'    => 'Soltero',
                                                  'Casado'    => 'Casado',
                                                  'Divorciado'    => 'Divorciado',
                                                  'Acompaniado'    => 'Acompa&ntildeado',
                                                  'Viudo'    => 'Viudo'
                                                ); ?>

        <br /><?php echo form_dropdown('estado_civil', $options, set_value('estado_civil'))?>
</p>                                             
                        

<p>
        <label for="domicilio">domicilio</label>
        <?php echo form_error('domicilio'); ?>
        <br /><input id="domicilio" type="text" name="domicilio" maxlength="50" value="<?php echo set_value('domicilio'); ?>"  />
</p>

<p>
        <label for="caracteristicas_personales">caracteristicas personales: <span class="required">*</span></label>
    <?php echo form_error('caracteristicas_personales'); ?>
    <br />
                            
    <?php echo form_textarea( array( 'name' => 'caracteristicas_personales', 'rows' => '5', 'cols' => '80', 'value' => set_value('caracteristicas_personales') ) )?>
</p>


<!-- expediente -->                                           

<!--                         
<p>
        <label for="fecha_apertura">fecha apertura: <span class="required">*</span></label>
        <?php echo form_error('fecha_apertura'); ?>
        <br /><input id="fecha_apertura" type="text" name="fecha_apertura"  value="<?php echo set_value('fecha_apertura'); ?>"  />
</p>
-->

<p>
        <label for="investigador_designado">investigador designado: <span class="required">*</span></label>
        <?php echo form_error('investigador_designado'); ?>
        <br /><input id="investigador_designado" type="text" name="investigador_designado" maxlength="30" value="<?php echo set_value('investigador_designado'); ?>"  />
</p>

<p>
        <label for="clasificacion_del_caso">clasificacion del caso: <span class="required">*</span></label>
        <?php echo form_error('clasificacion_del_caso'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  'DSM'    => 'Desaparicion Forzada'
                                                ); ?>

        <br /><?php echo form_dropdown('clasificacion_del_caso', $options, set_value('clasificacion_del_caso'))?>
</p>                                             
                                                                  

<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
