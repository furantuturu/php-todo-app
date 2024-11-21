<?php require ROOT . 'views/partials/head.php' ?>
<div class="register-cont">
    <h1>Register~</h1>
    <form class="register-form" method="post">
        <div class="input-cont">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="input-cont">
            <label for="password">Password</label>
            <input type="password" id="password" name="pwd" required>
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