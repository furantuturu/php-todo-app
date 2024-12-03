<?php require ROOT . 'views/partials/head.php' ?>
<nav class="todo-nav bg-design">
    <a href="/" class="home-link">
        <h1 class="title todo-nav-title">NightShade~</h1>
    </a>
    <form action="/logout" method="post">
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">Logout</button>
    </form>
</nav>
<div class="todo-cont">
    <div class="todo-block">
        <button>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="#111111">
                <path
                    d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z" />
            </svg>
        </button>
    </div>
    <div class="todo-block"></div>
    <div class="todo-block"></div>
    <div class="todo-block"></div>
    <div class="todo-block"></div>
    <div class="todo-block"></div>
    <div class="todo-block"></div>
    <div class="todo-block"></div>
    <div class="todo-block"></div>
    <div class="todo-block"></div>
    <div class="todo-block"></div>
    <div class="todo-block"></div>
</div>
<?php require ROOT . 'views/partials/footer.php' ?>