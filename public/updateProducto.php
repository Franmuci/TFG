<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	
	require '../vendor/autoload.php';
	require '../src/boostrap.php';
	require '../src/updateProducto.php';
	require_login();
	?>
<?php view('header', ['title' => 'Inicio']) ?>

	

	
	<?php view('footer') ?>
