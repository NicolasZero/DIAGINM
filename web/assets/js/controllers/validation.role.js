if (!localStorage.getItem('inm-user')) {
    location.replace("/web/")
} else {
    const user = JSON.parse(localStorage.getItem('inm-user'))
    if (user.rol != "administrador") {
        location.replace("/web/registro")
    }
    $(window).on('load', function () {
        $(".loader-page").css({
            visibility: "hidden",
            opacity: "0"
        })
    });
}