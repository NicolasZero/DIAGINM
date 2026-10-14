const showPass = () => {
    const eye = document.querySelector('.eye')
    const pass = document.getElementById('pass')

    if (eye.classList.contains('bi-eye-fill')) {
        eye.classList.replace('bi-eye-fill', 'bi-eye-slash-fill')
        pass.type = 'text'
    } else {
        eye.classList.replace('bi-eye-slash-fill', 'bi-eye-fill')
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

        const response = await fetch(`/api/auth/`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ user, pass, key: 'n1c0145' }),
        });

        const res = await response.json();

        if (res.data) {
            $("#alert").removeClass('danger');
            $("#msg-alert").html('Iniciando sesión. . .');
            $("#alert").removeClass('d-none');
            const rol = res.rol
            localStorage.setItem('inm-user', JSON.stringify({ user, pass, check, rol }))
            setInterval(() => {
                location.href = './page/registro'
            }, 1000);
        } else {
            $("#alert").addClass('danger');
            $("#msg-alert").html(res.error);
            $("#alert").removeClass('d-none');
        }

    } catch (error) {
        $("#alert").addClass('danger');
        $("#msg-alert").html('No se logro conectar con el servidor');
        $("#alert").removeClass('d-none');
        console.error('Error:', error);

    } finally {
        btn.disabled = false
        btn.innerHTML = 'Ingresar'
        setInterval(() => {
            $("#alert").addClass('d-none');
        }, 3000);
    }
}

const formulario = document.getElementById('login');

formulario.addEventListener('submit', function (e) {
    e.preventDefault();
    verification();
});

const show = document.getElementById('show');

show.addEventListener('click', () => {
    showPass()
});