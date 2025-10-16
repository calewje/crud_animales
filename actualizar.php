
<?php 
	include "./clases/Conexion.php";
	include "./clases/Crud.php";

	$crud = new Crud();
	$id = $_POST['id'];
	$datos = $crud->obtenerDocumento($id);
	$idMongo = $datos->_id;
?>


<?php include "./header.php"; ?>

<div class="container">
	<div class="row">
		<div class="col">
			<div class="card mt-4">
				<div class="card-body">

					<a href="index.php" class="btn btn-outline-info">
						<i class="fa-solid fa-angles-left"></i> Regresar
					</a>
					<h2>Actualizar registro</h2>

					<form action="./procesos/actualizar.php" method="POST">
						<input type="text" hidden value="<?php echo $idMongo ?>" name="id">
						<label for="paterno">Nombre de mascota</label>
						<input type="text" class="form-control" id="paterno" name="paterno" value="<?php echo $datos->mascota ?>">
						<label for="materno">Edad</label>
						<input type="text" class="form-control" id="materno" name="materno" value="<?php echo $datos->edad ?>">
						<label for="nombre">Especie</label>
						<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $datos->especie ?>">
						<label for="raza">Raza</label>
						<input type="text" class="form-control" id="raza" name="raza" value="<?php echo $datos->raza ?>">
						<label for="dueno">Nombre de dueño</label>
						<input type="text" class="form-control" id="dueno" name="dueno" value="<?php echo $datos->dueno ?>">
						<button class="btn btn-warning mt-3">
							<i class="fa-solid fa-floppy-disk"></i> Actualizar
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include "./scripts.php"; ?>