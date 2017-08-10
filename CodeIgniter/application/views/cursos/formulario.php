<?= form_open('/cursos/recibirDatos') ?>
<?=
	$nombre = array(
		'name' => 'nombre',
		'placeholder' => 'Escribe tu nombre'
		);

	$videos = array(
		'name' => 'videos',
		'placeholder' => 'Escribe numero de videos'
		);
?>
<?= form_label('Nombre: ', 'nombre') ?>
<?= form_input($nombre) ?>
<br>
<?= form_label('Numero videos: ', 'videos') ?>
<?= form_input($videos) ?>
<br>
<?= form_submit('', 'Subir curso') ?>
<?= form_close() ?>
</body>
</html>