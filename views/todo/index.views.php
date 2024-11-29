<?php require ROOT . 'views/partials/head.php' ?>
<nav class="todo-nav home-bg bg-design">
    <a href="/" class="home-link">
        <h1 class="title todo-nav-title">NightShade~</h1>
    </a>
</nav>
<form action="/logout" method="post">
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Logout</button>
</form>
<?php require ROOT . 'views/partials/footer.php' ?>