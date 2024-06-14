function inputContrasenia() {
    var tipo = document.getElementById('password')

    if (tipo.type === 'password') {
        tipo.type = 'text'
        $('#ojo-contrasenia').removeClass('fa-solid fa-eye').addClass('fa-solid fa-eye-slash')
    } else {
        tipo.type = 'password'
        $('#ojo-contrasenia').removeClass('fa-solid fa-eye-slash').addClass('fa-solid fa-eye')
    }
}
