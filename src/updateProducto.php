<?php

$inputs = [];
$errors = [];

if (is_post_request()) {

    [$inputs, $errors] = filter($_POST, [
        'id' => 'int | required',
        'cantidad' => 'int | required',
        'aviso' => 'int | required'
    ]);

    if ($errors) {
        redirect_with('almacen.php', ['errors' => $errors, 'inputs' => $inputs]);
    }

    // if login fails
    if (!updateProducto($inputs['id'], $inputs['cantidad'],$inputs['aviso'])) {

        $errors['almacen'] = 'Campos en blanco';

        redirect_with('almacen.php', [
            'errors' => $errors,
            'inputs' => $inputs
        ]);
    }
    // login successfully
    redirect_to('almacen.php');

} else if (is_get_request()) {
    [$errors, $inputs] = session_flash('errors', 'inputs');
}