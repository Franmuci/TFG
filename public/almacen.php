<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	
	require '../vendor/autoload.php';
	require '../src/boostrap.php';
	require '../src/updateProducto.php';
	require_login();
	?>
<?php view('header', ['title' => 'Inicio']) ?>

	<div class="content">
		<?php




$sql = "SELECT a.id, a.producto, a.cantidad, b.proveedor, a.aviso
        FROM almacen a inner join proveedores b on a.proveedor=b.id
        ORDER BY a.id";

$result = db()->query($sql);


if ($result->rowCount() > 0) {


	echo '					<br>';


	while($row = $result->fetch(PDO::FETCH_ASSOC)) {

		echo ' <form action="updateProducto.php" class="centro" method="post">';
	    echo '	<div class="column">';
	    echo '			<div class="card">';
	    echo '				<div class="container">';
	    echo '					<h2 class="">' . $row["producto"] . '</h2>';
	    echo '					<p class="center">Cantidad: <input type="number" style="width:200px" name="cantidad" id="cantidad" value="' . $row["cantidad"] . '" > </p>';
	    echo '					<p class="center">Proveedor: <br>' . $row["proveedor"] . '</p>';
		echo '					<p class="center">Cantidad mínima para avisar por correo: <input type="number" style="width:200px" name="aviso" id="aviso" value="' . $row["aviso"] . '" ></p>';
	    echo '					<br>';
		echo '                   <input type="hidden" name="id" id="id" value="' . $row["id"] . '" >';
		echo '<section class="left">';
        echo '    <button type="submit">Guardar</button>';
        echo '</section>';
		echo ' <br>';
	    echo '				</div>';
	    echo '			</div>';
	    echo '		</div>';
		echo '      <br>';
		
        echo ' </form>';

	}

} else {
    echo '<br><p class="center">No hay almacen.</p>';
}
?>

<button><a class='add' href='addProducto.php'>Añadir producto</a></button>
</div>


	
	<?php view('footer') ?>
