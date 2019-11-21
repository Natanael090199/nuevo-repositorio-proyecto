<!doctype html>
<html lang="en">
  <head>
    <title>Proyecto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"">
	<link rel="stylesheet" href="css/custom.css">
  </head>

  <body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">		
					<div class="editcard">
						<div class="profilebox">
							<br> 
							<h2>Rellene los datos de su proyecto</h2>
									<br>
									<br>
									<form action="proyectoformu_1.php" method="POST">  
										<div class="form-row">
												<div class="form-group col-md-6">
												  <label for="Nombre a su emprendimiento">Nombre de la actividad</label>
												  <input type="text" class="form-control" name="ActivNombre" placeholder="Nombre de la actividad" required>
												</div>
											  </div>
											  <div class="form-group">
												<label for="">Describa su actividad</label>
												<input type="text" class="form-control" name="ActivDescripcion" placeholder="Descripcion de la actividad" required>
											  </div>
											  <div class="form-group">
												<label for="Objetivo de la actividad">Objetivo de la actividad</label>
												<input type="text" class="form-control" name="ActivObjetivo" placeholder="Objetivo de la actividad" required>
											  </div>
											  <div class="form-group">
												<label for="Describa su objetivo">Describa su objetivo</label>
												<input type="text" class="form-control" name="ObjeDescripcion" placeholder="Descripcion del objetivo" required>
											  </div>
											  <div class="form-group">
												<label for="Razon Social">Razon Social</label>
												<input type="text" class="form-control" name="RazonSocial" placeholder="Razon Social" required>
											  </div>
											  <div class="form-group">
												<label for="Ingrese su codigo nacional de actividades">Ingrese su codigo nacional de actividades</label>
												<input type="text" class="form-control" name="CodActivNacional" placeholder="Codigo de" required>
											  </div>
											  
											</div>
											  <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
											  
								</form>
													
<!-- 							<hr><p>Quieres ver los proyectos de otros? <a href="bibliotecaTextos.html" title="biblioteca"></a>.</p>								
 -->						</div>	
					</div>
				</div>
			</div>
		</div>
<!-- 		include: 'galeria/subir.php';
 -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>	
	</body>
</html>	