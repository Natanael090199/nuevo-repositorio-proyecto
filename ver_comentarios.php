<?php
	include "conn.php";
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	///consultamos a la base
	$consulta = "SELECT `Tabla_Comentarios_16_Mensaje` FROM `tabla_comentarios_16`order by `Tabla_Comentarios_16_Id` DESC limit 7";
	$ejecutar = $conn->query($consulta); 
	$fila = ['Tabla_Comentarios_16_Mensaje'];
	while($fila = $ejecutar->fetch_array()) : 
?>
	<div id="datos-chat">

		<span style="color: #848484;"><?php echo $fila['Tabla_Comentarios_16_Mensaje']; ?></span>

	</div>
	
	<?php endwhile; ?>