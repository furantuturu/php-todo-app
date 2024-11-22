<?php require ROOT . 'views/partials/head.php' ?>
<div class="login-cont">
    <h1>Login~</h1>
    <?php if (isset($_SESSION['_flash']['success'])): ?>
    <small class="success"><?= $registerSuccess ?></small>
    <?php endif; ?>
    <form action="/login" class="login-form" method="post">
        <div class="input-cont">
            <label for="email">Email</label>
            <input class="<?= $emailError[0] ?>" type="email" id="email" name="email" value="<?= old('_email') ?>"
                required />
            <?php if (isset($_SESSION['_flash']['email'])): ?>
            <small class="error"><?= $emailError[1] ?></small>
            <?php endif; ?>
        </div>
        <div class="input-cont">
            <label for="password">Password</label>
            <input class="<?= $passwordError[0] ?>" type="password" id="password" name="pwd" required />
            <?php if (isset($_SESSION['_flash']['password'])): ?>
            <small class="error"><?= $passwordError[1] ?></small>
            <?php endif; ?>
        </div>
        <div class="submit-btn">
            <button type="submit">Login</button>
        </div>
    </form>
    <nav class="page-links">
        <a href="/">Return to Home</a>
        <a href="/register">Register</a>
    </nav>
</div>
<?php require ROOT . 'views/partials/footer.php' ?>