<?php require ROOT . 'views/partials/head.php' ?>
<nav class="todo-nav bg-design">
    <div class="home-nav">
        <a href="/" class="home-link">
            <h1 class="title todo-nav-title">NightShade~</h1>
        </a>
    </div>
    <div class="right-nav">
        <input type="color" name="colorpicker" id="colorpicker" title="Changes the bg color of the ToDos" />
        <div class="avatar-nav">
            <button class="avatar-dropdown">
                <svg class="user" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="#ffffff">
                    <path
                        d="M96 128a128 128 0 1 0 256 0A128 128 0 1 0 96 128zm94.5 200.2l18.6 31L175.8 483.1l-36-146.9c-2-8.1-9.8-13.4-17.9-11.3C51.9 342.4 0 405.8 0 481.3c0 17 13.8 30.7 30.7 30.7l131.7 0c0 0 0 0 .1 0l5.5 0 112 0 5.5 0c0 0 0 0 .1 0l131.7 0c17 0 30.7-13.8 30.7-30.7c0-75.5-51.9-138.9-121.9-156.4c-8.1-2-15.9 3.3-17.9 11.3l-36 146.9L238.9 359.2l18.6-31c6.4-10.7-1.3-24.2-13.7-24.2L224 304l-19.7 0c-12.4 0-20.1 13.6-13.7 24.2z" />
                </svg>
            </button>
            <div class="dropdown-content">
                <h5><?= $_SESSION["auth_user"]["email"] ?></h5>
                <hr>
                <form action="/logout" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="logout-btn" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </div>
</nav>
<div class="todo-cont">
    <div class="todo-block">
        <div class="todo-title">
            <h1></h1>
        </div>
        <div class="todo-controls"></div>
    </div>
    <div class="add-todo-block">
        <button class="add-todo-btn">
            <svg class="plus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="#ffffff">
                <path
                    d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z" />
            </svg>
        </button>
        <dialog class="add-todo-modal">
            <h1>Add ToDo~</h1>
            <form action="/todo" method="post">
                <div class="todo-title-input-cont">
                    <input class="<?= $titleError[0] ?>" type="text" name="todotitle" placeholder="Title of your ToDo"
                        value="<?= old('title') ?>">
                </div>
                <?php if (isset($_SESSION['_flash']['title'])): ?>
                <small class="error"><?= $titleError[1] ?></small>
                <?php endif; ?>
                <div class=" todo-desc-input-cont">
                    <textarea name="tododesc" placeholder="Description of your ToDo" rows="6" cols="50"
                        value="<?= old('desc') ?>"></textarea>
                </div>
                <div class="add-todo-btns">
                    <button class="add-todo-btn" type="submit">Add</button>
                    <button class="cancel-todo-btn" type="submit" formmethod="dialog">Cancel</button>
                </div>
            </form>
        </dialog>
    </div>
</div>
<script src="static/js/todoPage.js"></script>
<?php require ROOT . 'views/partials/footer.php' ?>