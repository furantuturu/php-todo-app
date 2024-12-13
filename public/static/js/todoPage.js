const avatarDDBtn = document.querySelector('.avatar-dropdown')
const todoBlocks = document.querySelectorAll('.todo-block')
const colorPicker = document.querySelector('#colorpicker')
const addTodoBtn = document.querySelector('.add-todo-btn')
const addTodoModal = document.querySelector('.add-todo-modal')

function openAvatarDropdown() {
    const DDContent = document.querySelector('.dropdown-content')

    DDContent.classList.toggle('active')
}

function addTodoFormModal() {
    addTodoModal.showModal()
}

function todoColorBgChange() {
    todoBlocks.forEach(block => {
        block.style.backgroundColor = colorPicker.value
    })
}

avatarDDBtn.addEventListener('click', openAvatarDropdown)
addTodoBtn.addEventListener('click', addTodoFormModal)
colorPicker.addEventListener('change', todoColorBgChange)