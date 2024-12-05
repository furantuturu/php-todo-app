const avatarDDBtn = document.querySelector('.avatar-dropdown')
const addTodoBtn = document.querySelector('.add-todo-btn')
const todoBlock = document.querySelector('.todo-block')

function openAvatarDropdown() {
    const DDContent = document.querySelector('.dropdown-content')

    DDContent.classList.toggle('active')
}

function addTodoForm() {
    const dialog = document.createElement('dialog')
    const h1 = document.createElement('h1')
    const p = document.createElement('p')
    h1.textContent = "Hello World"
    p.textContent = "hello world"
    dialog.append(h1, p)
    todoBlock.append(dialog)
    dialog.showModal()
}

avatarDDBtn.addEventListener('click', openAvatarDropdown)
addTodoBtn.addEventListener('click', addTodoForm)