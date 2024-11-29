const showIcon = document.querySelector('.eye')

function showPwd() {
    const pwdInput = document.querySelector('input[name="pwd"]')

    if (pwdInput.type === 'password') {
        pwdInput.type = 'text'
        return
    } 
    pwdInput.type = 'password'
}

showIcon.addEventListener('click', showPwd)
