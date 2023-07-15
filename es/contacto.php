<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/iconos/favicon-xilion.svg">
    <link rel="stylesheet" href="/styles-kioscos.css">
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PNNQNVT');
    </script>
    <!-- End Google Tag Manager -->
    <script>
        function setEmail() {
            var email;
            email = localStorage.getItem('MAIL');
            document.getElementById('email').value = email;
        }
        function setSolution() {
            var sol = window.location.href.split('?')[1];
            if (window.location.href.split('?')[1] != undefined && !(window.location.href.split('?')[1].includes('gclid'))) {
                var solution = '';
                if (sol.includes('%20')) {
                    for (let i = 0; i < sol.split('%20').length; i++) {
                        solution += `${sol.split('%20')[i]} `;
                    }
                } else {
                    solution = sol;
                }
                document.getElementById('mensaje').value = 'Estoy interesado en ' + solution + 'y me gustaría saber más información.';
                // history.replaceState('', '', 'contacto.php')
            } else {
                document.getElementById('mensaje').value = '';
            }
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Contáctanos - Xilion | Software Factory, Kioscos y Cajeros digitales, Ecommerce, Movilidad, Apps, Innovación y más</title>
    <meta name="description" content="Emprende con nosotros y haz que el mundo adopte tus ideas, productos y servicios, creando soluciones extraordinarias.">
    <meta property="og:title" content="Xilion | Software Factory, Kioscos y Cajeros digitales, Ecommerce, Movilidad, Apps, Innovación y más">
    <meta property="og:description" content="Emprende con nosotros y haz que el mundo adopte tus ideas, productos y servicios, creando productos y soluciones extraordinarias.">
    <meta property="og:image" content="/img/iconos/favicon-xilion.svg">
    <meta name="keywords" content="xilion, diseño, desarrollo, startup, innovación, kioscos digitales, cajeros digitales, kioscos interactivos, kioscos autoservicio, php, node, javascript, java, angularjs, reactjs, ios, android, app, mantenimiento, mejoras, desarrollo de hardware, hardware, outsourcing de desarrollo de software, desarrollo de software, desarrollo web, consultoría de ecommerce, integraciones de ecommerce, consultores de ecommerce, ecommerce, desarrollo de sitios web, react native, desarrollo de aplicaciones react native, desarrollo de aplicaciones móviles, gestión de productos, diseño ux, diseño ui, descubrimiento ux, auditoría ux, test de usabilidad, control de calidad, qa, marketing digital, Sistema de cobro, Yimi, parking, Yimi Gov"/>
    <meta name="robots" content="index,follow"/>
    <meta property="og:url" content="https://xilion.io/es/index.php">
    <meta property="og:type" content="website">
    <meta property=”og:site_name” content=”Xilion”>
    <meta property="twitter:title" content="Xilion | Software Factory, Kioscos y Cajeros digitales, Ecommerce, Movilidad, Apps, Innovación y más">
    <meta property="twitter:description" content="Emprende con nosotros y haz que el mundo adopte tus ideas, productos y servicios, creando productos y soluciones extraordinarias.">
    <meta content="summary_large_image" name="twitter:card">
    <meta name=”twitter:image” content=”https://www.xilion.io/img/iconos/favicon-xilion.svg”>
    <link rel="icon" type="favicon/x-icon" alt="xilion logo pequeño" href="https://www.xilion.io/img/xilion-logo.svg">

    <style>
        #nav-contact {
            display: none!important;
        }
    </style>
</head>

<body style="background-color: #1A75CF;" onload="setEmail(); setSolution()">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PNNQNVT"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php  include_once '../includes/templates/nav-wrap.php'?>
    <?php  include_once '../includes/templates/nav-mobile.php'?>
    <nav class="nav-normal">
        <?php  include_once '../includes/templates/nav-standard-es.php'?>
    </nav>
    <section class="header">
        <h1>¿En qué te podemos ayudar?</h1>
        <p>Llena el formulario de aquí abajo y enseguida nos pondremos en contacto contigo.</p>
    </section>
    <div class="flex-c">
        <section class="formu container flex-c" style="margin-left: 2rem; margin-right: 2rem;">
            <div class="form-image">
                <img src="/assets-landings/assets-contacto/contact-us.svg" alt="image">
                <section class="contact-buttons">
                    <a href="mailto:sales@xilion.io?subject=SOLICITUD%20DE%20COTIZACIÓN%20XILION&body=Hola!%20Quiero%20informacion%20sobre%20sus%20soluciones!">
                        <img src="/assets-landings/assets-contacto/contact-email.svg" alt="Icono de email">
                        <p>sales@xilion.io</p>
                    </a>
                    <a href="tel:3334009635">
                        <img src="/assets-landings/assets-contacto/contact-call.svg" alt="Icono de teléfono">
                        <p>333 400 9635</p>
                    </a>
                </section>
            </div>
            <div class="form-inputs">
                <div class="input-container">
                    <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre" maxlength="50" required>
                    <label for="nombre">Nombre *</label>
                </div>
                <div class="input-container">
                    <input type="text" id="email" name="email" placeholder="Ingresa tu correo electrónico de empresa" required>
                    <label for="email">Email de trabajo *</label>
                </div>
                <div class="input-container">
                    <input type="tel" id="telefono" name="telefono" placeholder="Ingresa tu teléfono" maxlength="10" required>
                    <label for="telefono">Teléfono *</label>
                </div>
                <div class="input-container">
                    <textarea id="mensaje" name="mensaje" placeholder="" required></textarea>
                    <label for="mensaje">Descríbenos tu proyecto</label>
                </div>
                <div class="send-container">
                    <div class="online">
                        <div></div>
                        <p>En línea</p>
                    </div>
                    <div class="send-form" id="enviarForm">
                        <p>Continuar</p>
                    </div>
                </div>
            </div>
            <!-- <div class="contactfield">
                <form>
                    <div>
                        <input type="text" id="nombre" required="" placeholder="Nombre">
                    </div>
                    <div>
                        <input type="email" id="email" required="" placeholder="E-mail">
                    </div>
                    <div>
                        <input type="tel" id="telefono" placeholder="Teléfono (Opcional)">
                    </div>
                    <div>
                        <textarea id="mensaje" placeholder="Descríbenos tu proyecto (Opcional)"></textarea>
                    </div>
                    <input type="file" id="actual-btn" aria-label="Archivo" hidden/>
                    <label class="projectfileupload flex-c pointer" for="actual-btn" id="project">Adjuntar archivo</label>
                    <button id="enviarForm" type="button" value="Enviar" class="boton-contacto pointer">
                      Enviar
                </button>
                </form>
            </div> -->
        </section>
    </div>
    

    <div>
        <section class="footer flex-c" style="background: none;">
            <div class="footer-title">Trabajemos juntos</div>
            <div class="footer-p">Nos emociona la idea de conocerte y trabajar juntos. ¡Contáctanos, estamos a tus órdenes!</div>
            <div class="footer-contact flex-c">
                <form action="/es/contacto.php">
                    <input class="footer-input" id="correo" type="email" placeholder="Correo electrónico" required>
                    <button href="/es/contacto.php" class="footer-button" type="input" onclick="llevar();">Cotiza tu proyecto</button>
                </form>
            </div>
            <div class="footer-more container">
                <ul class="more-list">
                    <h5>Contáctanos</h5>
                    <li>
                        <a class="flex-c tel bottom-line" href="tel:3334009635"><img src="/assets-landings/assets-kioscos/phone.svg" alt="phone"> 333 400 9635</a>
                    </li>
                    <li>
                        <a class="flex-c tel bottom-line" href="mailto:sales@xilion.io?subject=SOLICITUD%20DE%20COTIZACIÓN%20XILION&body=Hola!%20Quiero%20informacion%20sobre%20sus%20soluciones!"><img src="/assets-landings/assets-kioscos/mail.svg" alt="mail"> sales@xilion.io</a>
                    </li>
                </ul>
                <ul class="more-list">
                    <h5>Productos</h5>
                    <li class="pointer"><a class="bottom-line" href="/es/software.php">Software</a></li>
                    <li class="pointer"><a class="bottom-line" href="/es/sistemadetransporte.php">Sistema de transporte</a></li>
                    <li class="pointer"><a class="bottom-line" href="/es/arcos.php">Arcos REPUVE</a></li>
                    <li class="pointer"><a class="bottom-line" href="/es/kioscos.php">Kioscos electrónicos</a></li>
                    <li class="pointer"><a class="bottom-line" href="/es/cad.php">CAD 911</a></li>
                </ul>
                <ul class="more-list">
                    <h5>Empresa</h5>
                    <li class="pointer"><a class="bottom-line" href="/es/nosotros.php">Nosotros</a></li>
                    <li class="pointer"><a class="bottom-line" href="/es/portafolio.php">Casos de éxito</a></li>
                    <li class="pointer"><a class="bottom-line contactar" href="/es/contacto.php">Contáctanos</a></li>
                </ul>
                <ul class="more-list">
                    <h5>Soporte</h5>
                    <li><a class="bottom-line" href="/privacidad.php">Aviso de privacidad</a></li>
                    <!-- <li><a class="bottom-line" href="">Términos y condiciones</a></li> -->
                </ul>
            </div>
            <div class="footer-footer container" style="padding-left: 0!important; padding-right: 0!important;">
                <div class="flex-c logo">
                    <a href="/es/index.php"><img src="/assets-landings/assets-kioscos/logo-xilion.svg" alt="Xilion"></a>
                    <p>©2022 Xilion Co. Todos los derechos reservados</p>
                </div>
                <div class="flex-c socials">
                    <a target="_blank" href="https://api.whatsapp.com/send?phone=+523334009635&text=Hola!%20Quiero%20informacion%20sobre%20sus%20soluciones!"><img src="/assets-landings/assets-kioscos/whats-bco.svg" alt="WhatsApp"></a>
                    <a target="_blank" href="https://www.linkedin.com/company/xilionio"><img src="/assets-landings/assets-kioscos/linkedin.svg" alt="Linkedin"></a>
                </div>
            </div>
        </section>
    </div>
    <script>
        function myFunction(x) {
            x.classList.toggle("change");
        }

        function toggleNav() {
            navSize = document.getElementById("myNav").style.height;
            if (navSize == '100%') {
                return closeNav();
            }
            return openNav();
        }

        function openNav() {
            document.getElementById("myNav").style.height = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.height = "0%";
        }

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
                    document.getElementById("nav-wrap").style.display = "block";
                } else {
                    document.getElementById("nav-wrap").style.display = "none";
                }

            }
            // Change to file name
        // const actualBtn = document.getElementById('actual-btn');

        // const fileChosen = document.getElementById('project');

        // actualBtn.addEventListener('change', function() {
        //     fileChosen.innerHTML = this.files[0].name
        // })
    </script>
    <script type="text/javascript" src="/script-landings.js"></script>
</body>

</html>