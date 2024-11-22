<?php require ROOT . 'views/partials/head.php' ?>
<div class="register-cont">
    <h1>Register~</h1>
    <form action="/register" class="register-form" method="post">
        <div class="input-cont">
            <label for="email">Email</label>
            <input class="<?= $emailError[0] ?>" type="email" id="email" name="email" value="<?= old('_email') ?>"
                required placeholder="Please put a valid email address" />
            <?php if (isset($_SESSION['_flash']['email'])): ?>
            <small class="error"><?= $emailError[1] ?></small>
            <?php endif; ?>
        </div>
        <div class="input-cont">
            <label for="password">Password</label>
            <input class="<?= $passwordError[0] ?>" type="password" id="password" name="pwd" required
                placeholder="Password must be 8 characters more" />
            <?php if (isset($_SESSION['_flash']['password'])): ?>
            <small class="error"><?= $passwordError[1] ?></small>
            <?php endif; ?>
        </div>
        <div class="submit-btn">
            <button type="submit">Register</button>
        </div>
    </form>
    <nav class="page-links">
        <a href="/">Return to Home</a>
        <a href="/login">Login</a>
    </nav>
    <?php require ROOT . 'views/partials/footer.php' ?>