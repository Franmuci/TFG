<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	
	require '../vendor/autoload.php';
	require '../src/boostrap.php';
	require '../src/addProveedor.php';
	require_login();
	?>
<?php view('header', ['title' => 'Inicio']) ?>

	<div id="mainContent" class="content">
	<form action="addProveedor.php" class="centro" method="post">
        <h1>Añadir un proveedor</h1>
        <div>
            <label for="proveedor">Nombre del proveedor:</label>
            <input type="text" name="proveedor" id="proveedor" value="<?= $inputs['proveedor'] ?? '' ?>">
            <small><?= $errors['proveedor'] ?? '' ?></small>
        </div>
        <div>
            <label for="telefono">Teléfono:</label>
            <input type="phone" name="telefono" id="telefono">
        </div>
		<div>
            <label for="correo">Correo:</label>
            <input type="text" name="correo" id="correo">
        </div>
        <section>
            <button type="submit">Añadir proveedor</button>
        </section>
    </form>

</div>

	
	<?php view('footer') ?>
