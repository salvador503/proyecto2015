<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('partida', $attributes); ?>

<p>
        <label for="n">n_partida</label>
        <?php echo form_error('n'); ?>
        <br /><input id="n" type="text" name="n" maxlength="8" value="<?php echo set_value('n'); ?>"  />
</p>

<p>
        <label for="n_folio">n_folio</label>
        <?php echo form_error('n_folio'); ?>
        <br /><input id="n_folio" type="text" name="n_folio" maxlength="8" value="<?php echo set_value('n_folio'); ?>"  />
</p>

<p>
        <label for="n_libro">n_libro</label>
        <?php echo form_error('n_libro'); ?>
        <br /><input id="n_libro" type="text" name="n_libro" maxlength="8" value="<?php echo set_value('n_libro'); ?>"  />
</p>

<p>
        <label for="fecha_nacimiento">fecha_nacimiento</label>
        <?php echo form_error('fecha_nacimiento'); ?>
        <br /><input id="fecha_nacimiento" type="text" name="fecha_nacimiento"  value="<?php echo set_value('fecha_nacimiento'); ?>"  />
</p>


<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>