<html>
	<head>
		<title>Institucion</title>
	</head>
	<body>
		<div class="main">
		<div id="content">
		<h3 id='form_head'>Ingreso de institucion </h3><br/>
		
		<div id="form_input">
			<?php

			echo form_open('institucionCtl/getValue');

			echo form_label('Nombre Institucion:', 'nombre');
			$data= array(
				'name' => 'nombre',
				'placeholder' => 'Nombre de Institucion',
				'class' => 'input_box'
			);
			echo form_input($data);
			echo '<br><br>';

			echo form_label('Tipo Institucion:', 'tipo');
			$data= array(
				'name' => 'tipo',
				'placeholder' => 'Tipo de institucion',
				'class' => 'input_box'
			);
			echo form_input($data);
			?>
		</div>

		<div id="form_button">
			<?php
			$data = array(
				'type' => 'submit',
				'value'=> 'Guardar',
				'class'=> 'submit'
			);
			echo form_submit($data); ?>
		</div>

		<?php echo form_close();?>

	</body>
</html>