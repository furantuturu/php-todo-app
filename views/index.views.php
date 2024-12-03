<?php require 'partials/head.php' ?>
<div class="home-cont">
    <h1 class="title">NightShade~</h1>
    <p class="desc">A simple ToDo website for casual ToDo enjoyers.</p>
    <div class="user-admission-btns-cont">
        <?php if(isset($_SESSION['auth_user'])): ?>
        <a href="/todo" class="login-btn" type="button">Go make ToDos!</a>
        <?php else: ?>
        <a href="/login" class="login-btn" type="button">Login</a>
        <a href="/register" class="register-btn" type="button">Register</a>
        <?php endif; ?>
    </div>
</div>
<?php require 'partials/footer.php' ?>