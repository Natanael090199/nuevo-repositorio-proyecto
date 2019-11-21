<!doctype html>
<html lang="en">
  <head>
    <title>Perfil</title>
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
							<h2>Rellene con sus Datos</h2>
									<br>
									<br>
							<form action="userProfile.php" method="POST">  
									<div class="form-row">
											<div class="form-group col-md-6">
											  <label for="provincia">Provincia</label>
											  <input type="text" class="form-control" name="provincia" placeholder="Provincia e.j: Formosa" required>
											</div>
										  </div>
										  <div class="form-group">
											<label for="">Departamento</label>
											<input type="text" class="form-control" name="departamento" placeholder="Departamento e.j: Pirané" required>
										  </div>
										  <div class="form-group">
											<label for="direccion_empresa">Localidad</label>
											<input type="text" class="form-control" name="localidad" placeholder="Localidad e.j: El Colorado">
										  </div>
										  <div class="form-group">
											<label for="direccion_empresa">Barrio</label>
											<input type="text" class="form-control" name="barrio" placeholder="Barrio e.j: Barrio San Jose">
										  </div>
										  <div class="form-group">
											<label for="direccion_empresa">Calle</label>
											<input type="text" class="form-control" name="calle" placeholder="Calle e.j: San Martin y Mitre">
										  </div>
										  <div class="form-group">
											<label for="direccion_empresa">Casa</label>
											<input type="text" class="form-control" name="casa" placeholder="Casa n° 1">
										  </div>
										</div>
										<br> <br>
										  <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
										  
							</form>
													
<!-- 							<hr><p>Quieres ver los proyectos de otros? <a href="bibliotecaTextos.html" title="biblioteca"></a>.</p>								
 -->						</div>	
					</div>
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>	
	</body>
</html>	