<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	
	require '../vendor/autoload.php';
	require '../src/boostrap.php';
	require_login();
	?>
<?php view('header', ['title' => 'Inicio']) ?>

	<div class="content">
		<?php




$sql = "SELECT a.id, a.proveedor, a.telefono, a.correo
        FROM proveedores a
        ORDER BY a.id";

$result = db()->query($sql);


if ($result->rowCount() > 0) {


	echo '					<br>';


	while($row = $result->fetch(PDO::FETCH_ASSOC)) {

	    echo '	<div class="column centro">';
	    echo '			<div class="card">';
	    echo '				<div class="container">';
	    echo '					<h2 class="">' . $row["proveedor"] . '</h2><br>';
	    echo '					<p class="center">' .$row["telefono"] . '</p>';
	    echo '					<p class="center">' . $row["correo"] . '</p>';
	    echo '					<br>';
	    echo '				</div>';
	    echo '			</div>';
	    echo '		</div>';
		echo '      <br>';

	}

} else {
    echo '<br><p class="center">No hay proveedores.</p>';
}
?>

<button><a class='add' href='addProveedor.php'>Añadir proveedor</a></button>
</div>

	
	<?php view('footer') ?>
