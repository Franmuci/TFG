<?php
require '../src/boostrap.php';
require '../src/register.php';
?>

<?php view('header', ['title' => 'Registro']) ?>

<form action="register.php" method="post">
    <h1>Sign Up</h1>

    <div>
        <label for="username">Nmbre de usuario:</label>
        <input type="text" name="username" id="username" value="<?= $inputs['username'] ?? '' ?>"
               class="<?= error_class($errors, 'username') ?>">
        <small><?= $errors['username'] ?? '' ?></small>
    </div>

    <div>
        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" id="email" value="<?= $inputs['email'] ?? '' ?>"
               class="<?= error_class($errors, 'email') ?>">
        <small><?= $errors['email'] ?? '' ?></small>
    </div>

    <div>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" value="<?= $inputs['password'] ?? '' ?>"
               class="<?= error_class($errors, 'password') ?>">
        <small><?= $errors['password'] ?? '' ?></small>
    </div>

    <div>
        <label for="password2">Contraseña de nuevo:</label>
        <input type="password" name="password2" id="password2" value="<?= $inputs['password2'] ?? '' ?>"
               class="<?= error_class($errors, 'password2') ?>">
        <small><?= $errors['password2'] ?? '' ?></small>
    </div>

    <div>
        <label for="agree">
            <input type="checkbox" name="agree" id="agree" value="checked" <?= $inputs['agree'] ?? '' ?> /> Acepto los 
            <a href="#" title="term of services">términos y condiciones.</a>
        </label>
        <small><?= $errors['agree'] ?? '' ?></small>
    </div>

    <button type="submit">Registrarse</button>

    <footer> <a href="login.php">Volver al login</a></footer>

</form>

</main>
</body>
</html>