<?php require ROOT . 'views/partials/head.php' ?>
<nav class="todo-nav bg-design">
    <div class="home-nav">
        <a href="/" class="home-link">
            <h1 class="title todo-nav-title">NightShade~</h1>
        </a>
    </div>
    <div class="right-nav">
        <input type="color" name="colorpicker" id="colorpicker" value="#ffffff" title="Changes the bg color of the ToDos" />
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
                <form action="/logout" class="logout-form" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="logout-btn" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </div>
</nav>
<div class="todo-cont">
    <?php foreach($todos as $todo): ?>
    <div class="todo-block">
        <div class="todo-title">
            <form action="/todocheck" method="post" class="title-form">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_id" value="<?= $todo['todo_id'] ?>">
                <button class="title-btn" title="Click to mark ToDo done!">
                    <h1 class="<?= $checked ?>"><?= $todo['title'] ?></h1>
                </button>
            </form>
        </div>
        <div class="todo-controls <?= $checked ?>">
            <div class="expand-cont">
                <button class="control-btn expand-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#ffffff"><path d="M344 0L488 0c13.3 0 24 10.7 24 24l0 144c0 9.7-5.8 18.5-14.8 22.2s-19.3 1.7-26.2-5.2l-39-39-87 87c-9.4 9.4-24.6 9.4-33.9 0l-32-32c-9.4-9.4-9.4-24.6 0-33.9l87-87L327 41c-6.9-6.9-8.9-17.2-5.2-26.2S334.3 0 344 0zM168 512L24 512c-13.3 0-24-10.7-24-24L0 344c0-9.7 5.8-18.5 14.8-22.2s19.3-1.7 26.2 5.2l39 39 87-87c9.4-9.4 24.6-9.4 33.9 0l32 32c9.4 9.4 9.4 24.6 0 33.9l-87 87 39 39c6.9 6.9 8.9 17.2 5.2 26.2s-12.5 14.8-22.2 14.8z"/></svg>
                </button>
                <dialog class="expand-todo-modal">
                    <form class="expand-form" method="dialog">
                        <div class="todo-content">
                            <h1><?= $todo['title'] ?></h1>
                            <hr>
                            <p><?= $todo['description']  ?></p>
                        </div>
                        <button class="reject-btn close-btn" type="submit">Close</button>
                    </form>
                </dialog>
            </div>
            <div class="edit-cont">
                <button class="control-btn edit-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#ffffff"><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160L0 416c0 53 43 96 96 96l256 0c53 0 96-43 96-96l0-96c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 96c0 17.7-14.3 32-32 32L96 448c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l96 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 64z"/></svg>
                </button>
                <dialog class="post-todo-modal edit-todo-modal">
                    <h1>Edit ToDo~</h1>
                    <form action="/todo" class="edit-form" method="post">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_id" value="<?= $todo['todo_id'] ?>">
                        <div class="todo-title-input-cont">
                            <input class="<?= $titleError[0] ?>" type="text" name="todotitle"
                                value="<?= $todo['title'] ?>">
                            <br>
                            <?php if (isset($_SESSION['_flash']['title'])): ?>
                            <small class="error"><?= $titleError[1] ?></small>
                            <?php endif; ?>
                        </div>
                        <div class=" todo-desc-input-cont">
                            <textarea name="tododesc" rows="6" cols="50">
                                <?= $todo['description'] ?>
                            </textarea>
                        </div>
                        <div class="edit-todo-btns">
                            <button class="edit-todo-btn" type="submit">Edit</button>
                            <button class="reject-btn cancel-todo-btn" type="submit" formmethod="dialog">Cancel</button>
                        </div>
                    </form>
                </dialog>
            </div>
            <form action="/todo" class="delete-form" method="post">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_id" value="<?= $todo['todo_id'] ?>">
                <div type="submit" class="delete-cont">
                    <button class="control-btn delete-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="#ffffff"><path d="M135.2 17.7L128 32 32 32C14.3 32 0 46.3 0 64S14.3 96 32 96l384 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-96 0-7.2-14.3C307.4 6.8 296.3 0 284.2 0L163.8 0c-12.1 0-23.2 6.8-28.6 17.7zM416 128L32 128 53.2 467c1.6 25.3 22.6 45 47.9 45l245.8 0c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <?php endforeach; ?>
    <div class="add-todo-block">
        <button class="plus-todo-btn">
            <svg class="plus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="#ffffff">
                <path
                    d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z" />
            </svg>
        </button>
        <dialog class="post-todo-modal add-todo-modal">
            <h1>Add ToDo~</h1>
            <form action="/todo" method="post">
                <div class="todo-title-input-cont">
                    <input class="<?= $titleError[0] ?>" type="text" name="todotitle" placeholder="Title of your ToDo"
                        value="<?= old('_title') ?>">
                    <br>
                    <?php if (isset($_SESSION['_flash']['title'])): ?>
                    <small class="error"><?= $titleError[1] ?></small>
                    <?php endif; ?>
                </div>
                <div class=" todo-desc-input-cont">
                    <textarea name="tododesc" placeholder="Description of your ToDo (optional)" rows="6" cols="50"
                        value="<?= old('_desc') ?>"></textarea>
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