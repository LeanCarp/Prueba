<?php
	foreach ($cursos->result() as $curso)
	{
		?>
		<br><?php echo $curso->nombreCurso ?><?php
	}
?>
</body>
</html>