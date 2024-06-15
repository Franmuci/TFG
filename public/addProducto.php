<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	
	require '../vendor/autoload.php';
	require '../src/boostrap.php';
	require '../src/addProducto.php';
	require_login();
	?>
<?php view('header', ['title' => 'Inicio']) ?>

	<div class="content">
	<form action="addProducto.php" class='centro' method="post">
        <h1>Añadir un producto</h1>
        <div>
            <label for="producto">Nombre del producto:</label>
            <input type="text" name="producto" id="producto" value="<?= $inputs['producto'] ?? '' ?>">
            <small><?= $errors['almacen'] ?? '' ?></small>
        </div>
        <div>
            <label for="cantidad">Cantidad:</label>
            <input type="number" name="cantidad" id="cantidad">
        </div>
		<div>
            <label for="proveedor">Proveedor:</label>
            <input type="number" name="proveedor" id="proveedor">
        </div>
        <div>
            <label for="aviso">Cantidad mínima:</label>
            <input type="number" name="aviso" id="aviso">
        </div>
        <section>
            <button type="submit">Añadir producto</button>
            <button><a class='add' href='addProveedor.php'>Añadir proveedor</a></button>
        </section>
    </form>

</div>

	
	<?php view('footer') ?>
