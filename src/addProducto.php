<?php

$inputs = [];
$errors = [];

if (is_post_request()) {

    [$inputs, $errors] = filter($_POST, [
        'producto' => 'string | required',
        'cantidad' => 'int | required',
        'proveedor' => 'int | required',
        'aviso' => 'int | required'
    ]);

    if ($errors) {
        redirect_with('addProducto.php', ['errors' => $errors, 'inputs' => $inputs]);
    }

    // if login fails
    if (!addProducto($inputs['producto'], $inputs['cantidad'],$inputs['proveedor'],$inputs['aviso'])) {

        $errors['almacen'] = 'Campos en blanco';

        redirect_with('addProducto.php', [
            'errors' => $errors,
            'inputs' => $inputs
        ]);
    }
    // login successfully
    redirect_to('almacen.php');

} else if (is_get_request()) {
    [$errors, $inputs] = session_flash('errors', 'inputs');
}