<?php require ROOT . 'views/partials/head.php' ?>
<div class="login-cont">
    <h1>Login~</h1>
    <form class="login-form" method="post">
        <div class="input-cont">
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
        </div>
        <div class="input-cont">
            <label for="password">Password</label>
            <input type="password" id="password" name="pwd">
        </div>
        <div class="submit-btn">
            <button type="submit">Login</button>
        </div>
    </form>
    <!-- add text that return to page to directly register -->
</div>
<?php require ROOT . 'views/partials/footer.php' ?>