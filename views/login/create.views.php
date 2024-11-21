<?php require ROOT . 'views/partials/head.php' ?>
<div class="login-cont">
    <h1>Login~</h1>
    <form class="login-form" method="post">
        <div class="input-cont">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="input-cont">
            <label for="password">Password</label>
            <input type="password" id="password" name="pwd" required>
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