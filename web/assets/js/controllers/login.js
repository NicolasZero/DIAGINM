import {HOSTNAME} from '../const/api.js';

const showPass = () =>{
    const eye = document.querySelector('.eye')
    const pass = document.getElementById('pass')

    if (eye.classList.contains('bi-eye-fill')) {
        eye.classList.remove('bi-eye-fill')
        eye.classList.add('bi-eye-slash-fill')
        pass.type = 'text'
    } else {
        eye.classList.remove('bi-eye-slash-fill')
        eye.classList.add('bi-eye-fill')
        pass.type = 'password'
    }
}

const verification = async () => {
    const btn = document.getElementById("btn-submit")
    btn.disabled = true
    btn.innerHTML = 'Verificando...'
    try {
        const user = $("#user").val()
        const pass = $("#pass").val()
        const check = document.getElementById("check").checked

        const response = await fetch(`${HOSTNAME}/auth/`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ user, pass, key: 'n1c0145' }),
        });

        const res = await response.json();

        if (res.data) {
            $("#alert").removeClass('alert-danger');
            $("#alert").addClass('alert-success');
            $("#alert").html('Iniciando sesión...');
            $("#alert").removeClass('d-none');
            const rol = res.rol
            localStorage.setItem('inm-user', JSON.stringify({ user, pass, check, rol }))
            location.href = './page/registro'
            // console.log(res.rol)
        } else {
            $("#alert").removeClass('alert-success');
            $("#alert").addClass('alert-danger');
            $("#alert").html(res.error);
            $("#alert").removeClass('d-none');
            btn.disabled = false
            btn.innerHTML = 'Ingresar'
            setTimeout(() => {
                $("#alert").addClass('d-none');
            }, 3000);
            // console.log(res);
        }
        // const data = res.data

    } catch (error) {
        $("#alert").removeClass('alert-success');
        $("#alert").addClass('alert-danger');
        $("#alert").html('No se logro conectar con el servidor');
        $("#alert").removeClass('d-none');
        btn.disabled = false
        btn.innerHTML = 'Ingresar'
        console.error('Error:', error);
    }
}

const formulario = document.getElementById('login');

formulario.addEventListener('submit', function (e) {
    e.preventDefault();
    verification();
});

const show = document.getElementById('show');

show.addEventListener('click', () =>{
    showPass()
});