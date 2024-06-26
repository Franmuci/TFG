<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title><?= $title ?? 'Inicio' ?></title>
</head>
<body>
<main>

<div id="header" class="mainHeader">

		<div class="center">Franmuci S.L.</div>
	</div>
	<br>
	<p class="d-flex justify-content-end">Bienvenido  <?= current_user() ?>  &nbsp;   <a href="logout.php"> Cerrar sesión </a></p>

	<div class="topnav">
		<a href="index.php">Inicio</a>
		<a href="almacen.php">Almacén</a>
		<a href="proveedores.php">Proveedores</a>
	</div>

<?php flash() ?>