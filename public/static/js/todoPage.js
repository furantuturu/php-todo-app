const avatarDDBtn = document.querySelector('.avatar-dropdown')
const todoBlocks = document.querySelectorAll('.todo-block')
const colorPicker = document.querySelector('#colorpicker')
const addTodoBtn = document.querySelector('.plus-todo-btn')
const addTodoModal = document.querySelector('.add-todo-modal')
const expandTodoBtns = document.querySelectorAll('.expand-btn')
const expandTodoModals = document.querySelectorAll('.expand-todo-modal')
const editTodoBtns = document.querySelectorAll('.edit-btn')
const editTodoModals = document.querySelectorAll('.edit-todo-modal')

function openAvatarDropdown() {
    const DDContent = document.querySelector('.dropdown-content')

    DDContent.classList.toggle('active')
}

function showAddTodoFormModal() {
    addTodoModal.showModal()
}

function todoColorBgChange() {
    todoBlocks.forEach(block => {
        block.style.backgroundColor = colorPicker.value
    })
}

function showExpandTodoModal(idx) {
    expandTodoModals[idx].showModal()
}

function showEditTodoModal(idx) {
    editTodoModals[idx].showModal()
}

avatarDDBtn.addEventListener('click', openAvatarDropdown)
addTodoBtn.addEventListener('click', showAddTodoFormModal)
colorPicker.addEventListener('change', todoColorBgChange)

expandTodoBtns.forEach((btn, i) => {
    btn.addEventListener('click', () => {
        showExpandTodoModal(i)
    })
})
editTodoBtns.forEach((btn, i) => {
    btn.addEventListener('click', () => {
        showEditTodoModal(i)
    })
})