const form = document.getElementById('form')
const email = document.getElementById('log')
const user = document.getElementById('name')
const password = document.getElementById('sen')
const confpassword = document.getElementById('conf-sen')
 
function checkInputs(){
    const emailValue = email.value.trim()
    const userValue = user.value.trim()
    const passwordValue = password.value.trim()
    const confpasswordValue = confpassword.value.trim()

    if(emailValue == ''){
        // mostrar erro
        // adicionar a classe error
        errorValidation(email, 'Preencha o campo de e-mail')
        return false
    } else{
        // adicionar a classe success
        successValidation(email)
    }
    if(userValue == ''){
        errorValidation(user, 'Preencha o campo com o nome')
        return false
    } else{
        successValidation(user)   
    }
    if(passwordValue == ''){
        errorValidation(password, 'Preencha o campo com a senha')
        return false
    } else if(passwordValue.length < 8){
        errorValidation(password, 'Senha deve conter pelo menos 8 caracteres')
        return false
    } else{
        successValidation(password) 
    }
    if(confpasswordValue == ''){
        errorValidation(confpassword, 'Confirme a senha')
        return false
    } else if(confpasswordValue != passwordValue){
        errorValidation(confpassword, 'As senhas devem ser iguais')
        return false
    } else{
        successValidation(confpassword) 
        return true;
    }
}

function errorValidation(input, message){
    const formControl = input.parentElement;
    const small = formControl.querySelector('small')

    small.innerText = message

    formControl.className = 'form-control error'

}

function successValidation(input){
    const formControl = input.parentElement;

    formControl.className = 'form-control success'
    
}
    
function retornar(){
    location.href = 'login.html';
}