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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        .blue {
            position: unset!important;
            height: 100vh;
            background: linear-gradient(180deg, #07192B 43.82%, #07192B 100%), #FFFFFF;
            display: block;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        @media(max-width: 600px) {
            .blue {
                height: fit-content;
            }
            .wappicon {
                bottom: 12rem;
            }
        }
    </style>

    <title>Xilion | Fabricante Experto en Kioscos y Cajeros Digitales</title>
    <meta name="description" content="Somos especialistas con más de 20 años de experiencia en Kioscos y Cajeros Interactivos. Emprende con nosotros y haz que el mundo adopte tus ideas, productos y servicios, creando soluciones extraordinarias.">
    <meta property="og:title" content="Xilion | Software Factory, Kioscos y Cajeros digitales, Ecommerce, Movilidad, Apps, Innovación y más">
    <meta property="og:description" content="Somos especialistas con más de 20 años de experiencia en Kioscos y Cajeros Interactivos. Emprende con nosotros y haz que el mundo adopte tus ideas, productos y servicios, creando productos y soluciones extraordinarias.">
    <meta property="og:image" content="/img/iconos/favicon-xilion.svg">
    <meta name="keywords" content="xilion, diseño, desarrollo, startup, innovación, kioscos digitales, cajeros digitales, kioscos interactivos, kioscos autoservicio, php, node, javascript, java, angularjs, reactjs, ios, android, app, mantenimiento, mejoras, desarrollo de hardware, hardware, outsourcing de desarrollo de software, desarrollo de software, desarrollo web, consultoría de ecommerce, integraciones de ecommerce, consultores de ecommerce, ecommerce, desarrollo de sitios web, react native, desarrollo de aplicaciones react native, desarrollo de aplicaciones móviles, gestión de productos, diseño ux, diseño ui, descubrimiento ux, auditoría ux, test de usabilidad, control de calidad, qa, marketing digital, Sistema de cobro, Yimi, parking, Yimi Gov"
    />
    <meta name="robots" content="index,follow" />
    <meta property="og:url" content="https://xilion.io/es/index.php">
    <meta property="og:type" content="website">
    <meta property=”og:site_name” content=”Xilion”>
    <meta property="twitter:title" content="Xilion | Software Factory, Kioscos y Cajeros digitales, Ecommerce, Movilidad, Apps, Innovación y más">
    <meta property="twitter:description" content="Somos especialistas con más de 20 años de experiencia en Kioscos y Cajeros Interactivos. Emprende con nosotros y haz que el mundo adopte tus ideas, productos y servicios, creando productos y soluciones extraordinarias.">
    <meta content="summary_large_image" name="twitter:card">
    <meta name=”twitter:image” content=”https://www.xilion.io/img/iconos/favicon-xilion.svg”>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PNNQNVT"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php  include_once '../includes/templates/header.php'?>
    <div class="kioscos-first">
        <div class="kioscos-header">
            <p class="title"><span>Ordena</span> y paga</p>
            <p class="text"><span>Agiliza tu servicio</span> para tus clientes y empleados con un kiosco conectado a un <b>punto de venta.</b></p>
            <a class="yellow-button" href="/es/contacto.php?Kioscos">
                <p>Solicitar cotización</p>
            </a>
            <p class="small-text">Más de +5,000 kioscos instalados</p>
            <div style="display: flex; gap: 2rem">
                <a target="_blank" href="https://apps.apple.com/us/app/yimi-pos-pdv-y-tienda-online/id1637487132"><img src="https://business.yimiglobal.com/assets/footer/appstore.svg" alt="AppStore"></a>
                <a target="_blank" href="https://play.google.com/store/apps/details?id=com.kio.yimitpv"><img src="https://business.yimiglobal.com/assets/footer/playstore.svg" alt="PlayStore"></a>
            </div>
            <!-- <p class="small-text">Más de +1,000 usan nuestro sistema</p> -->
        </div>
        <img class="outlineBg" style="opacity: 0.2;" src="../assets-landings/assets-kioscos/lineback.svg" alt="">
        <img class="kiosco-shown active" src="../assets-landings/assets-kioscos/hkioscos/kiosco-yimi.png" alt="">
    </div>
    </div>
   
    <!-- <div class="exp flex-c">
        <section class="exp flex-c container" style="gap: 2rem;padding-bottom: 6rem;">
            <h1>Puedes usar kioscos para</h1>
            <div class="adapt-tab-selector" data-id="tabsPdvApp">
                <div class="adapt-tab-button active">
                    <p>Mostrar información</p>
                </div>
                <div class="adapt-tab-button">
                    <p>Activar usuarios</p>
                </div>
                <div class="adapt-tab-button">
                    <p>Pagos y servicios</p>
                </div>
                <div class="back-slide"></div>
            </div>
            <div class="tabs-frame" style="max-width: 120rem;">
                <div class="tabs-container" id="tabsPdvApp">
                    <div>
                        <div class="kiosk-features">
                            <div class="kfeat-block">
                                <div>
                                    <img src="/assets-landings/assets-kioscos/can-use/publicity.webp" alt="">
                                </div>
                                <p>Publicidad</p>
                            </div>
                            <div class="kfeat-block">
                                <div>
                                    <img src="/assets-landings/assets-kioscos/can-use/wayfinding.webp" alt="">
                                </div>
                                <p>Orientación/ Wayfinding</p>
                            </div>
                            <div class="kfeat-block">
                                <div>
                                    <img src="/assets-landings/assets-kioscos/can-use/check-in.svg" alt="">
                                </div>
                                <p>Check-in</p>
                            </div>
                            <div class="kfeat-block">
                                <div>
                                    <img src="/assets-landings/assets-kioscos/can-use/selfservice.svg" alt="">
                                </div>
                                <p>Self-service</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="kiosk-features">
                            <div class="kfeat-block">
                                <div>
                                    <img src="/assets-landings/assets-kioscos/can-use/pedidos.webp" alt="">
                                </div>
                                <p>Recibir pedidos con <a href="https://www.yimi.com.mx/negocio" target="_blank">Yimi</a></p>
                            </div>
                            <div class="kfeat-block">
                                <div>
                                    <img src="/assets-landings/assets-kioscos/can-use/tomaturnos.svg" alt="">
                                </div>
                                <p>Tomaturnos</p>
                            </div>
                            <div class="kfeat-block">
                                <div>
                                    <img src="/assets-landings/assets-kioscos/can-use/satisfaction.svg" alt="">
                                </div>
                                <p>Satisfacción</p>
                            </div>
                            <div class="kfeat-block">
                                <div>
                                    <img src="/assets-landings/assets-kioscos/can-use/encuestas.svg" alt="">
                                </div>
                                <p>Encuesta</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="kiosk-features">
                            <div class="kfeat-block">
                                <div>
                                    <img src="/assets-landings/assets-kioscos/can-use/RRHH.webp" alt="">
                                </div>
                                <p>Servicios de empleados</p>
                            </div>
                            <div class="kfeat-block">
                                <div>
                                    <img src="/assets-landings/assets-kioscos/can-use/Nomina.svg" alt="">
                                </div>
                                <p>Recibos de nómina</p>
                            </div>
                            <div class="kfeat-block">
                                <div>
                                    <img src="/assets-landings/assets-kioscos/can-use/tramites_gub.svg" alt="">
                                </div>
                                <p>Trámites gubernamentales</p>
                            </div>
                            <div class="kfeat-block">
                                <div>
                                    <img src="/assets-landings/assets-kioscos/can-use/vender_tickets.webp" alt="">
                                </div>
                                <p>Tickets</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div> -->
    <div class="exp flex-c container" style="gap: 8rem; padding: 8rem 0">
        <div class="reviews">
            <div class="review-block">
                <img src="https://www.yimi.com.mx/img/Negocio/icons/review.svg" alt="">
                <p>“Súper fácil de usar”</p>
            </div>
            <div class="review-block">
                <img src="https://www.yimi.com.mx/img/Negocio/icons/review.svg" alt="">
                <p>“La mejor opción para POS”</p>
            </div>
            <div class="review-block">
                <img src="https://www.yimi.com.mx/img/Negocio/icons/review.svg" alt="">
                <p>“Recomendado para cualquier negocio”</p>
            </div>
            <div class="review-block">
                <img src="https://www.yimi.com.mx/img/Negocio/icons/review.svg" alt="">
                <p>“Me encanta su app”</p>
            </div>
        </div>
        <div class="cont-50 d-flex ai-center">
            <div class="text-50 d-flex fd-column">
                <h3>Comodidad y rapidez a tus clientes</h3>
                <div class="check-list">
                    <div>
                        <img src="https://www.yimi.com.mx/img/Negocio/icons/Check.svg" alt="">
                        <p>Dale a tus clientes libertad de elegir</p>
                    </div>
                    <div>
                        <img src="https://www.yimi.com.mx/img/Negocio/icons/Check.svg" alt="">
                        <p>Recomienda productos</p>
                    </div>
                    <div>
                        <img src="https://www.yimi.com.mx/img/Negocio/icons/Check.svg" alt="">
                        <p>Ofrece opciones de pago sin contacto</p>
                    </div>
                </div>
                <a class="yellow-button" href="/es/contacto.php?Kioscos">Contactarme con ventas</a>
            </div>
            <div><img src="../assets-landings/assets-kioscos/comfort.png" alt="Reach more users"></div>
        </div>
        <div class="cont-50 d-flex ai-center">
            <div class="text-50 d-flex fd-column">
                <h3>Comodidad y rapidez en el negocio</h3>
                <div class="check-list">
                    <div>
                        <img src="https://www.yimi.com.mx/img/Negocio/icons/Check.svg" alt="">
                        <p>Control dinamico de tu menú</p>
                    </div>
                    <div>
                        <img src="https://www.yimi.com.mx/img/Negocio/icons/Check.svg" alt="">
                        <p>Aumenta la productividad de tus empleados</p>
                    </div>
                    <div>
                        <img src="https://www.yimi.com.mx/img/Negocio/icons/Check.svg" alt="">
                        <p>Amenta tu ticket promedio</p>
                    </div>
                </div>
                <a class="yellow-button" href="/es/contacto.php?Kioscos">Contactarme con ventas</a>
            </div>
            <div><img src="../assets-landings/assets-kioscos/orderhere.webp" alt="Reach more users"></div>
        </div>
        <div class="cont-50 d-flex ai-center">
            <div class="text-50 d-flex fd-column">
                <h3>Integrado con el POS más potente</h3>
                <div class="check-list">
                    <div>
                        <img src="https://www.yimi.com.mx/img/Negocio/icons/Check.svg" alt="">
                        <p>Control en tiempo real</p>
                    </div>
                    <div>
                        <img src="https://www.yimi.com.mx/img/Negocio/icons/Check.svg" alt="">
                        <p>Suite de administración de tu restaurante</p>
                    </div>
                    <div>
                        <img src="https://www.yimi.com.mx/img/Negocio/icons/Check.svg" alt="">
                        <p>Gestión de inventario</p>
                    </div>
                </div>
                <a class="yellow-button" href="/es/contacto.php?Kioscos">Contactarme con ventas</a>
            </div>
            <div><img src="../assets-landings/assets-kioscos/pos.webp" alt="Reach more users"></div>
        </div>
    </div>
    <div class="exp flex-c">
        <section class="exp flex-c container" style="padding-bottom: 6rem;">
            <h1 style="max-width: 80rem;">Diseño para cualquier empresa</h1>
            <h2 style="max-width: 80rem;">Acepta cobros <b>en tarjeta o en efectivo</b>, muestra información, publicidad y monitorea tus dispositivos, en cualquier lugar y en todo momento.</h2>
            <div class="available-countries">
                <p>Disponible en: </p>
                <img src="/assets-landings/assets-kioscos/hkioscos/flag-mex.svg" alt="">
                <img src="/assets-landings/assets-kioscos/hkioscos/flag-arg.svg" alt="">
                <img src="/assets-landings/assets-kioscos/hkioscos/flag-bra.svg" alt="">
                <img src="/assets-landings/assets-kioscos/hkioscos/flag-per.svg" alt="">
                <img src="/assets-landings/assets-kioscos/hkioscos/flag-chi.svg" alt="">
                <img src="/assets-landings/assets-kioscos/hkioscos/flag-col.svg" alt="">
            </div>
            <div class="kiosk3" style="max-width: 72rem;">
                <div class="kiosk3-block">
                    <div class="kiosk3-img">
                        <img src="/assets-landings/assets-kioscos/kiosk-x-24-yimi.png" alt="">
                        <p class="new-model premiado">Diseño premiado</p>
                    </div>
                    <div class="kiosk3-text">
                        <p class="kiosk3-header">Kiosco X-24</p>
                        <p class="kiosk-cobro azul">Cobro con Tarjeta</p>
                        <div class="kiosk3-content">
                            <div class="kiosk3-list">
                                <div>
                                    <img src="/assets-landings/assets-kioscos/check-green.svg" alt="">
                                    <p>Pantalla touch 24" Full HD</p>
                                </div>
                                <div>
                                    <img src="/assets-landings/assets-kioscos/check-green.svg" alt="">
                                    <p>Vinil personalizado</p>
                                </div>
                                <div>
                                    <img src="/assets-landings/assets-kioscos/check-green.svg" alt="">
                                    <p>Cámara 1080 HD</p>
                                </div>
                                <div>
                                    <img src="/assets-landings/assets-kioscos/check-green.svg" alt="">
                                    <p>Lector de QR/Barras</p>
                                </div>
                                <div>
                                    <img src="/assets-landings/assets-kioscos/check-green.svg" alt="">
                                    <p>Impresora de recibos</p>
                                </div>
                                <div>
                                    <img src="/assets-landings/assets-kioscos/check-green.svg" alt="">
                                    <p>Teclado antivandálico</p>
                                </div>
                            </div>
                            <a class="yellow-button" href="/es/contacto.php?Kiosco X-24">Desde $73,397 MXN</a>
                            <a class="a-simple" target="_blank" href="/es/brochures/KIOSCOX-24.pdf">Ver detalles</a>
                        </div>
                    </div>
                </div>
                <div class="kiosk3-block">
                    <div class="kiosk3-img">
                        <img src="/assets-landings/assets-kioscos/kiosk-x-140-yimi.png" alt="">
                        <p class="new-model">Nuevo modelo</p>
                    </div>
                    <div class="kiosk3-text">
                        <p class="kiosk3-header">Cajero X-140</p>
                        <p class="kiosk-cobro verde">Cobro con Tarjeta y Efectivo</p>
                        <div class="kiosk3-content">
                            <div class="kiosk3-list">
                                <div>
                                    <img src="/assets-landings/assets-kioscos/check-green.svg" alt="">
                                    <p>Pantalla touch 32" Full HD</p>
                                </div>
                                <div>
                                    <img src="/assets-landings/assets-kioscos/check-green.svg" alt="">
                                    <p>Vinil personalizado</p>
                                </div>
                                <div>
                                    <img src="/assets-landings/assets-kioscos/check-green.svg" alt="">
                                    <p>Validador y dispensador de efectivo</p>
                                </div>
                                <div>
                                    <img src="/assets-landings/assets-kioscos/check-green.svg" alt="">
                                    <p>Lector de QR/Barras</p>
                                </div>
                                <div>
                                    <img src="/assets-landings/assets-kioscos/check-green.svg" alt="">
                                    <p>Impresora de recibos</p>
                                </div>
                                <div>
                                    <img src="/assets-landings/assets-kioscos/check-green.svg" alt="">
                                    <p>Teclado antivandálico</p>
                                </div>
                            </div>
                            <a class="yellow-button" href="/es/contacto.php?Cajero X-140">Cotizar ahora</a>
                            <a class="a-simple" target="_blank" href="/es/brochures/CAJEROX140.pdf">Ver detalles</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="flex-c">
        <section class="formu container flex-c" style="margin-left: 2rem; margin-right: 2rem;box-shadow: 0px 3px 20px 3px rgba(0, 0, 0, 0.06);">
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
    

    <div style="background-color: #F8f8fb;">
        <?php  include_once '../includes/templates/footer.php'?>
    </div>
    <script>
        var vh = (self.innerHeight * 0.7);
        window.onscroll = function() {
            scrollFunction()
        };

        function myFunction(x) {
            x.classList.toggle("change");
        }

        function scrollFunction() {
            if (document.body.scrollTop > vh || document.documentElement.scrollTop > vh) {
                document.getElementById("kioscos").style.borderRadius = "0rem";
            } else {
                document.getElementById("kioscos").style.borderRadius = "30rem 30rem 0rem 0rem";
            }

        }

        $(".adapt-tab-button").click(function() {
            var id = $(this).parent().data('id');
            var tabnum = $(this).index();
            var container = $(`#${id}`);
            var tabs = container.children().length;

            $(".adapt-tab-button").removeClass('active');
            $(this).toggleClass('active');

            container.attr('style', `width: ${container.children().length}00%;transform: translateX(-${tabnum * (100/tabs)}%)`);
            container.children(tabnum).children(0).removeClass('tab-not-shown');
            container.children().each(function(index) {
                if (index == tabnum) {
                    $(this).children(0).removeClass('tab-not-shown');
                } else {
                    $(this).children(0).addClass('tab-not-shown');
                }
            });

            console.log(tabnum);
            console.log(tabs);

            

            if (window.screen.width <= ($(this).parent().get(0).clientWidth + 60)) {
                $('.adapt-tab-selector').addClass('flex-start')
                if (tabnum == 0) {
                    $('.adapt-tab-selector').attr('style', `transform: translateX(0%)`)
                } else if (tabnum == tabs - 1) {
                    $('.adapt-tab-selector').attr('style', `transform: translateX(${-$(this).parent().get(0).clientWidth + window.screen.width - 0}px)`)
                } else {
                    $('.adapt-tab-selector').attr('style', `transform: translateX( calc(${window.screen.width / 2}px - ${$(this).get(0).clientWidth / 2}px - ${$(this).get(0).offsetLeft}px - 15px) )`);
                }
            }

            $(this).parent().find('.back-slide').attr('style', `width: ${$(this).get(0).clientWidth}px; left: ${$(this).get(0).offsetLeft}px`);
        });
        document.getElementById('tabsPdvApp').addEventListener('touchstart', handleTouchStart, {passive: true});
        document.getElementById('tabsPdvApp').addEventListener('touchmove', handleTouchMove, {passive: true});

        function changeTabSwipe(sentido) {
            var currentTab = parseInt($('.adapt-tab-button.active').index());
            var tabs = $('.adapt-tab-button').length;
            switch (sentido) {
                case 'next':
                    if (currentTab < (tabs - 1)) {
                        $('.adapt-tab-button').get(currentTab + 1).click();
                    } else {
                        var currentStyle = $('#tabsPdvApp').attr('style');
                        var currentPercent = currentStyle.split('(').pop().split(')')[0];
                        var newPercent = `${parseFloat(currentPercent.replace('%', '')) - 1}%`
                        $('#tabsPdvApp').attr('style', currentStyle.replace(currentPercent, newPercent));
                        setTimeout(() => {
                            $('#tabsPdvApp').attr('style', currentStyle);
                        }, 300);
                    }
                    break;
                case 'prev':
                    if (currentTab != 0) {
                        $('.adapt-tab-button').get(currentTab - 1).click();
                    } else {
                        var currentStyle = $('#tabsPdvApp').attr('style');
                        var currentPercent = currentStyle.split('(').pop().split(')')[0];
                        var newPercent = `${parseFloat(currentPercent.replace('%', '')) + 1}%`
                        $('#tabsPdvApp').attr('style', currentStyle.replace(currentPercent, newPercent));
                        setTimeout(() => {
                            $('#tabsPdvApp').attr('style', currentStyle);
                        }, 300);
                    }
                    break;
            }
        }

        var xDown = null;
        var yDown = null;

        function getTouches(evt) {
            return evt.touches || // browser API
                evt.originalEvent.touches; // jQuery
        }

        function handleTouchStart(evt) {
            const firstTouch = getTouches(evt)[0];
            xDown = firstTouch.clientX;
            yDown = firstTouch.clientY;
        };

        function handleTouchMove(evt) {
            if (!xDown || !yDown) {
                return;
            }

            var xUp = evt.touches[0].clientX;
            var yUp = evt.touches[0].clientY;

            var xDiff = xDown - xUp;
            var yDiff = yDown - yUp;

            if (Math.abs(xDiff) > Math.abs(yDiff)) { /*most significant*/
                if (xDiff > 0) {
                    /* right swipe */
                    changeTabSwipe('next');
                } else {
                    /* left swipe */
                    changeTabSwipe('prev');
                }
            }
            // else {
            //     if (yDiff > 0) {
            //         /* down swipe */
            //     } else {
            //         /* up swipe */
            //     }
            // }
            /* reset values */
            xDown = null;
            yDown = null;
        };

        function fadeSlow(index) {
            $('.kiosco-shown').eq(index).fadeIn('slow');
        }
        function classSlow(index) {
            $('.kiosco-shown').eq(index).addClass('active');
        }

        $(document).ready(function() {
            $('.contactar').attr('onclick', 'solution("Kioscos")');


            $('.kiosco-block').mouseenter(function() {
                clearTimeout(timeOut);

                // $('.kiosco-block').removeClass('active');
                // $(this).addClass('active');


                var index = $(this).index();
                var width = $(this).get(0).clientWidth;
                var tabs = $('.kiosco-block-container').children().length - 1;

                if (window.screen.width <= ($(this).parent().get(0).clientWidth + 60)) {
                    if (index <= 0) {
                        $('.kiosco-block-container').attr('style', `transform: translateX(0%)`)
                    } else if (index >= tabs - 1) {
                        if (window.screen.width <= 600) {
                            $('.kiosco-block-container').attr('style', `transform: translateX(${-$(this).parent().get(0).clientWidth + window.screen.width - 0}px)`)
                        } else {
                            $('.kiosco-block-container').attr('style', `transform: translateX(${-$(this).parent().get(0).clientWidth + window.screen.width - 60}px)`)
                        }
                    } else {
                        $('.kiosco-block-container').attr('style', `transform: translateX( calc(${window.screen.width / 2}px - ${$(this).get(0).clientWidth / 2}px - ${$(this).get(0).offsetLeft}px) )`);
                    }
                }
                $('.slide-element').attr('style', `transform: translateX(${index*width + index*20}px);`);
                $('.kiosco-shown').removeClass('active');
                var timeOut = setTimeout(classSlow(index), 600);
            });
            $('.adapt-tab-selector').children()[0].click();
        });
    </script>
    <script type="text/javascript" src="/script-landings.js"></script>
</body>

</html>