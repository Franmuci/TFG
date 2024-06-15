<?php

require '../src/boostrap.php';
require '../src/login.php';

?>

<?php view('header', ['title' => 'Login']) ?>

<?php if (isset($errors['login'])) : ?>
    <div class="alert alert-error">
        <?= $errors['login'] ?>
    </div>
<?php endif ?>

    <form action="login.php" method="post">
        <h1>Inicio de sesión</h1>
        <div>
            <label for="username">Nombre de usuario:</label>
            <input type="text" name="username" id="username" value="<?= $inputs['username'] ?? '' ?>">
            <small><?= $errors['username'] ?? '' ?></small>
        </div>
        <div>
            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password">
            <small><?= $errors['password'] ?? '' ?></small>
        </div>
        <section>
            <button type="submit">Iniciar sesión</button>
            <a href="register.php">Registrarse</a>
        </section>
    </form>

</main>
</body>
</html>