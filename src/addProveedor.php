<?php

$inputs = [];
$errors = [];

if (is_post_request()) {

    [$inputs, $errors] = filter($_POST, [
        'proveedor' => 'string | required',
        'telefono' => 'int | required',
        'correo' => 'email | required'
    ]);

    if ($errors) {
        redirect_with('addProveedor.php', ['errors' => $errors, 'inputs' => $inputs]);
    }

    // if login fails
    if (!addProveedor($inputs['proveedor'], $inputs['correo'],$inputs['telefono'])) {

        $errors['proveedor'] = 'Campos en blanco';

        redirect_with('addProveedor.php', [
            'errors' => $errors,
            'inputs' => $inputs
        ]);
    }
    // login successfully
    redirect_to('proveedores.php');

} else if (is_get_request()) {
    [$errors, $inputs] = session_flash('errors', 'inputs');
}