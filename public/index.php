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




$sql = "SELECT a.id, a.username, a.password, a.email, a.esAdmin
        FROM usuarios a
        ORDER BY a.id";

$result = db()->query($sql);


if ($result->rowCount() > 0) {


	echo '					<br>';


	while($row = $result->fetch(PDO::FETCH_ASSOC)) {

	    echo '	<div class="column">';
	    echo '			<div class="card">';
	    echo '				<div class="container">';
	    echo '					<h2 class="">' . $row["username"] . '</h2>';
	    echo '					<p class="center">' .$row["password"] . '</p>';
	    echo '					<p class="center">' . $row["email"] . '</p>';
	    echo '					<br>';
	    echo '				</div>';
	    echo '			</div>';
	    echo '		</div>';
		echo '      <br>';

	}

} else {
    echo '<br><p class="center">No hay almacen.</p>';
}
?>

</div>

	
	<?php view('footer') ?>
