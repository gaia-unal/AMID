var password, password2;

password = document.getElementById('pass1');
password2 = document.getElementById('pass2');

password.onchange = password2.onkeyup = passwordMatch;

function passwordMatch() {
    if(password.value !== password2.value)
        password2.setCustomValidity('Las contraseñas no coinciden.');
    else
        password2.setCustomValidity('');
}

function remove(){
    document.getElementById('quit').style.display="none";
  }