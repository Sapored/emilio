$('.trigger').on('click', function() {
    $('.trigger').removeClass('active').removeAttr('style');
    $(this).addClass('active');
    $(this).attr('style', `max-height: ${$(this).get(0).scrollHeight}px`);
    $(this).closest('.jque').find('.img-box').fadeOut(200);
    setTimeout(() => {
        $(this).closest('.jque').find('.img-box').eq($(this).index()).fadeIn();
    }, 200);

});
$('.trigger.active').click();

$('.yimi').on('click', function() {
    $('.yimi').removeClass('active').removeAttr('style');
    $(this).addClass('active');
    $(this).closest('.jque').find('.img-box').fadeOut(200);
    setTimeout(() => {
        $(this).closest('.jque').find('.img-box').eq($(this).index()).fadeIn();
    }, 200);
});
$('.yimi.active').click();


function solution(sol) {
    localStorage.setItem("SOLUTION", sol);
    console.log(sol);
};

function myFunction(x) {
    x.classList.toggle("change");
}

function leftNav() {
    navSize = document.getElementById("sidebar").style.left;
    if (navSize == '0px') {
        return closeNav();
    }
    return openNav();
}

function openLan() {
    document.getElementById('nav-contact').style.display = "none";
    document.getElementById('lanNew').style.display = "block";
}

function closeLan() {
    document.getElementById('nav-contact').style.display = "block";
    document.getElementById('lanNew').style.display = "none";
}

function openNav() {
    document.getElementById("sidebar").style.left = "0px";
    document.getElementsByTagName('body')[0].style.overflowY = 'hidden';
    $('#sidebarBlur').fadeIn();
    openLan();
}

function closeNav() {
    document.getElementById("sidebar").style.left = "-100%";
    document.getElementsByTagName('body')[0].style.overflowY = 'visible';
    $('#sidebarBlur').fadeOut();
    closeLan();
}


function clickBlur() {
    document.getElementById("sidebar").style.left = "-100%";
    document.getElementsByTagName('body')[0].style.overflowY = 'visible';
    document.getElementById('dropdown').classList.toggle("change");
    $('#sidebarBlur').fadeOut();
    closeLan();
}

// function scrollFunctiona() {
//     if (document.body.scrollTop > vh || document.documentElement.scrollTop > vh) {
//         document.getElementById("nav-wrap").style.display = "block";
//     } else {
//         document.getElementById("nav-wrap").style.display = "none";
//     }
// }

var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("nav-down").style.top = "0";
    } else {
        document.getElementById("nav-down").style.top = "-78px";
    }
    prevScrollpos = currentScrollPos;
    var vh = (self.innerHeight * 0.7);
    if (document.body.scrollTop > vh || document.documentElement.scrollTop > vh) {
        document.getElementById("nav-contact").setAttribute('style', 'color: white!important; background-color: #0080FF;');
    } else {
        document.getElementById("nav-contact").setAttribute('style', '');
    }
    if (document.body.scrollTop > vh || document.documentElement.scrollTop > vh) {
        document.getElementById("nav-wrap").style.display = "block";
    } else {
        document.getElementById("nav-wrap").style.display = "none";
    }

}

function llevar() {

    const mail = document.getElementById('correo').value;

    if (mail === "") {
        return null;
    } else {
        localStorage.setItem("MAIL", mail)
        return;
    }
}

$(".cad-tab-selector div").click(function() {
    // $(".cad-tab-selector div").removeClass('active');
    // $(this).toggleClass('active');
    $(".cad-tab-content").removeClass('active');
    $(`.${$(this).attr('data-tab')}`).toggleClass('active');
    $('#tab-name').text($(this).attr('data-tab-name'));
    $('#cadTabContainer').attr('class', `cad-tab-selector position${$(this).attr('data-tab-num')}`);
});

$(".optimizeBlock").click(function() {
    $(this).toggleClass('active');
});

function borderRed(input) {
    input.style.borderColor = "#CC0000";
    input.parentElement.querySelector('label').style.color = "#CC0000";
    setTimeout(() => {
        input.removeAttribute('style');
        input.parentElement.querySelector('label').removeAttribute('style');
    }, 3000);
}

$("#enviarForm").click(function() {

    //alert("jo");

    var nombre = $('#nombre').val();

    var email = $('#email').val();

    var telefono = $('#telefono').val();

    var descripcion = $('#mensaje').val();

    var archivo = $('#actual-btn').val();

    var firstName = nombre.split(" ");
    localStorage.setItem("NAME", firstName[0]);
    sessionStorage.setItem("NAME", firstName[0]);
    var expReg = /(?:[a-zA-Z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?|\[(?:(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9]))\.){3}(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9])|[a-zA-Z0-9-]*[a-zA-Z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/;

    if (nombre == '') {
        borderRed(document.querySelector('#nombre'));
        alert('Nombre no válido');
        return;
    }
    if (!expReg.test(email)) {
        borderRed(document.querySelector('#email'));
        alert('Correo no válido');
        return;
    }

    if (telefono == '' || telefono.length < 10) {
        borderRed(document.querySelector('#telefono'));
        alert('Ingresa un número válido (10 dígitos)');
        return;
    }

    if (descripcion == '') {
        descripcion = 'El usuario no proporcionó descripción';
    }

    if (nombre !== '' && email !== '' && telefono != '') {
        var settings = {
            "url": "https://yimimobility.com/restaurant/sendEmail",
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            "data": {
                "texto": `Nombre: ${nombre}, Teléfono móvil: ${telefono}, E-mail: ${email}, Descripción: ${descripcion}`
            }
        };

        $.ajax(settings).done(function(response) {
            console.log(response);
            window.location.href = 'http://xilion.io/es/gracias.php';
        });
        // $.ajax({
        //         type: "POST",
        //         url: "https://35.232.203.226:4000/restaurant/sendEmail",
        //         data: { texto: `Nombre: ${nombre}, Teléfono móvil: ${telefono}, E-mail: ${email}, Descripción: ${descripcion}` },
        //         success: function(datos) {
        //             console.log("Se envió el whatsapp");
        //             window.location.href = 'http://xilion.io/es/gracias.php';
        //         },
        //         dataType: 'json'
        //     })
        // $.ajax({

        //     type: "POST", // la variable type guarda el tipo de la peticion GET,POST,..

        //     url: "https://yimimobility.com/xilion/contactForm", //url guarda la ruta hacia donde se hace la peticion

        //     data: { customerName: nombre, mobilePhone: telefono, email: email, phone: "", description: descripcion, file: archivo }, // data recive un objeto con la informacion que se enviara al servidor

        //     success: function(datos) { //success es una funcion que se utiliza si el servidor retorna informacion
        //         console.log(datos);
        //         window.location.href = 'http://xilion.io/es/gracias.php';
        //     },

        //     dataType: 'json' // El tipo de datos esperados del servidor. Valor predeterminado: Intelligent Guess (xml, json, script, text, html).
        // })

    }
});