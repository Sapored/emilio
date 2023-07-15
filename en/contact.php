<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/iconos/favicon-xilion.svg">
    <title>Contact - Xilion</title>
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
    <script>
        function setEmail() {
            var email;
            email = localStorage.getItem('MAIL');
            document.getElementById('email').value = email;
        }
        function setSolution() {
            sol = localStorage.getItem('SOLUTION');
            if (sol === '') {
                return null;
            } else {
            document.getElementById('mensaje').value = "I'm interested in " + sol + " and I'd like to know more about.";
            }
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- End Google Tag Manager -->
</head>

<body style="background-color: #1A75CF;" onload="setEmail(); setSolution()">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PNNQNVT"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="nav-wrap">
        <nav id="nav-down">
            <div class="nav-bar">
                <div class="nav-left">
                    <a href="/en/english.php"><img class="plus" src="/assets-landings/xilion-b.svg" alt="Logo"></a>
                    <a href="/en/english.php"><img class="less" src="/assets-landings/xilion-b-simple.svg" alt="Logo"></a>
                </div>
                <div class="nav-center">
                    <div class="nave">
                        SOLUTIONS
                        <div class="soluciones">
                            <div class="sol">
                                <a href="software.php">
                                    <div class="solution">
                                        <img src="/assets-landings/assets-kioscos/sol-software.svg" alt="icono">
                                        <div class="sol-text">
                                            <div class="sol-subtitle">Software development</div>
                                            <div class="sol-p">Specialized solutions</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="kiosks-and-atms.php">
                                    <div class="solution">
                                        <img src="/assets-landings/assets-kioscos/kioscoy.svg" alt="icono">
                                        <div class="sol-text">
                                            <div class="sol-subtitle">Kiosks & ATM's</div>
                                            <div class="sol-p">Transactions</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="fleet-management.php">
                                    <div class="solution">
                                        <img src="/assets-landings/assets-kioscos/bus.svg" alt="icono">
                                        <div class="sol-text">
                                            <div class="sol-subtitle">Fleet management</div>
                                            <div class="sol-p">Full system control</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="archs.php">
                                    <div class="solution">
                                        <img src="/assets-landings/assets-kioscos/arcosre.svg" alt="icono">
                                        <div class="sol-text">
                                            <div class="sol-subtitle">REPUVE Archs</div>
                                            <div class="sol-p">License plate detection</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- <div class="sol">
                                <a href="archs.php">
                                    <div class="solution">
                                        <img src="/assets-landings/assets-kioscos/arcosre.svg" alt="icono">
                                        <div class="sol-text">
                                            <div class="sol-subtitle">Arcos REPUVE</div>
                                            <div class="sol-p">Deteccion de placas y chip REPUVE</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="">
                                    <div class="solution">
                                        <img src="/assets-landings/assets-kioscos/parking.svg" alt="icono">
                                        <div class="sol-text">
                                            <div class="sol-subtitle">Parking </div>
                                            <div class="sol-p">Entradas, salidas y cobros</div>
                                        </div>
                                    </div>
                                </a>
                            </div> -->

                        </div>
                    </div>
                    <div class="nave">
                        <a href="about.php">COMPANY</a>
                    </div>
                    <div class="nave">
                        <a href="portfolio.php">PORTFOLIO</a>
                    </div>
                </div>
                <div class="nav-right">
                    <div>
                        <a href="contact.php" class="contacto">
                            <div>
                                CONTACT US
                            </div>
                        </a>
                    </div>
                    <div class="language">
                        EN
                        <img src="/assets-landings/assets-kioscos/down-arrow.svg" alt="Arrow">
                        <div class="idioma">
                            <a href="/es/index.php">
                                <div class="idioma-select">Español</div>
                            </a>
                            <a href="/en/english.php">
                                <div class="idioma-select">English</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </nav>
    </div>
    <div id="nav-mobile">
        <nav id="nav-down">
            <div class="nav-bar">
                <div class="nav-left">
                    <div id="dropdown" class="container2" onclick="myFunction(this); leftNav()">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                    <a href="/es/index.php"><img class="plus" src="/assets-landings/xilion-b.svg" alt="Logo"></a>
                </div>
                <a href="contacto.php" class="nav-contacto" id="nav-contact">Contact us</a>
                <div class="lan-new" id="lanNew">
                    <div class="language" style="padding: 0; margin: 0; font-size: 1.4rem;">
                        ES
                        <img src="/assets-landings/assets-kioscos/down-arrow.svg" alt="Arrow">
                        <div class="idioma">
                            <a href="/es/index.php">
                                <div class="idioma-select">Español</div>
                            </a>
                            <a href="/en/english.php">
                                <div class="idioma-select" style="background-color: #F5F4F9;">English</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <section class="side-bar" id="sidebar">
        <div class="menu-content">
            <div class="menu-links">
                <div class="menu-section">
                    <h5>Solutions</h5>
                    <a href="software.php">
                        <div class="menu-href">
                            <div class="href-left">
                                <img src="/assets-landings/assets-kioscos/sol-software.svg" alt="Software Icon">
                                <div class="href-info">
                                    <div>Software development</div>
                                    <div>Specialized solutions</div>
                                </div>
                            </div>
                            <img src="/img/iconos/arrow-variants.svg" alt="Arrow" style="filter: saturate(0);">
                        </div>
                    </a>
                    <a href="kiosks-and-atms.php">
                        <div class="menu-href">
                            <div class="href-left">
                                <img src="/assets-landings/assets-kioscos/kioscoy.svg" alt="Kiosk Icon">
                                <div class="href-info">
                                    <div>Kiosks & ATM's</div>
                                    <div>Transactions</div>
                                </div>
                            </div>
                            <img src="/img/iconos/arrow-variants.svg" alt="Arrow" style="filter: saturate(0);">
                        </div>
                    </a>
                    <a href="fleet-management.php">
                        <div class="menu-href">
                            <div class="href-left">
                                <img src="/assets-landings/assets-kioscos/bus.svg" alt="Bus Icon">
                                <div class="href-info">
                                    <div>Fleet management</div>
                                    <div>Full system control</div>
                                </div>
                            </div>
                            <img src="/img/iconos/arrow-variants.svg" alt="Arrow" style="filter: saturate(0);">
                        </div>
                    </a>
                    <a href="archs.php">
                        <div class="menu-href">
                            <div class="href-left">
                                <img src="/assets-landings/assets-kioscos/arcosre.svg" alt="Achs Icon">
                                <div class="href-info">
                                    <div>REPUVE Archs</div>
                                    <div>License plate detection</div>
                                </div>
                            </div>
                            <img src="/img/iconos/arrow-variants.svg" alt="Arrow" style="filter: saturate(0);">
                        </div>
                    </a>
                </div>
                <div class="menu-section">
                    <h5>Meet Xilion</h5>
                    <a href="about.php">
                        <div class="menu-href">
                            <div class="href-left">
                                <div class="href-info">
                                    <div>Company</div>
                                    <div>Our principles and results</div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="portfolio.php">
                        <div class="menu-href">
                            <div class="href-left">
                                <div class="href-info">
                                    <div>Portfolio</div>
                                    <div>Get to know some of our projects</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <a href="contact.php" class="solicita">
                Request information
                <img src="/img/iconos/arrow-variants.svg" alt="Arrow" style="filter: brightness(0%) invert(1)">
            </a>
        </div>
        <div class="menu-blur" onclick="clickBlur()"></div>
    </section>
    <nav class="nav-normal">
        <div class="nav-bar">
            <div class="nav-left">
                <a href="/en/english.php"><img class="plus" src="/assets-landings/assets-kioscos/logo-xilion.svg" alt="Logo"></a>
                <a href="/en/english.php"><img class="less" src="/assets-landings/xilion-b-simple.svg" alt="Logo"></a>
            </div>
            <div class="nav-center">
                <div class="nave">
                    SOLUTIONS
                    <div class="soluciones">
                        <div class="sol">
                            <a href="software.php">
                                <div class="solution">
                                    <img src="/assets-landings/assets-kioscos/sol-software.svg" alt="icono">
                                    <div class="sol-text">
                                        <div class="sol-subtitle">Software development</div>
                                        <div class="sol-p">Specialized solutions</div>
                                    </div>
                                </div>
                            </a>
                            <a href="kiosks-and-atms.php">
                                <div class="solution">
                                    <img src="/assets-landings/assets-kioscos/kioscoy.svg" alt="icono">
                                    <div class="sol-text">
                                        <div class="sol-subtitle">Kiosks & ATM's</div>
                                        <div class="sol-p">Transactions</div>
                                    </div>
                                </div>
                            </a>
                            <a href="fleet-management.php">
                                <div class="solution">
                                    <img src="/assets-landings/assets-kioscos/bus.svg" alt="icono">
                                    <div class="sol-text">
                                        <div class="sol-subtitle">Fleet management</div>
                                        <div class="sol-p">Full system control</div>
                                    </div>
                                </div>
                            </a>
                            <a href="archs.php">
                                <div class="solution">
                                    <img src="/assets-landings/assets-kioscos/arcosre.svg" alt="icono">
                                    <div class="sol-text">
                                        <div class="sol-subtitle">REPUVE Archs</div>
                                        <div class="sol-p">License plate detection</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- <div class="sol">
                            <a href="archs.php">
                                <div class="solution">
                                    <img src="/assets-landings/assets-kioscos/arcosre.svg" alt="icono">
                                    <div class="sol-text">
                                        <div class="sol-subtitle">Arcos REPUVE</div>
                                        <div class="sol-p">Deteccion de placas y chip REPUVE</div>
                                    </div>
                                </div>
                            </a>
                            <a href="">
                                <div class="solution">
                                    <img src="/assets-landings/assets-kioscos/parking.svg" alt="icono">
                                    <div class="sol-text">
                                        <div class="sol-subtitle">Parking </div>
                                        <div class="sol-p">Entradas, salidas y cobros</div>
                                    </div>
                                </div>
                            </a>
                        </div> -->

                    </div>
                </div>
                <div class="nave">
                    <a href="about.php">COMPANY</a>
                </div>
                <div class="nave">
                    <a href="portfolio.php">PORTFOLIO</a>
                </div>
            </div>
            <div class="nav-right">
                <div>
                    <a href="contact.php" class="contacto">
                        <div>
                            CONTACT US
                        </div>
                    </a>
                </div>
                <div class="language">
                    EN
                    <img src="/assets-landings/assets-kioscos/down-arrow.svg" alt="Arrow">
                    <div class="idioma">
                        <a href="/es/index.php">
                            <div class="idioma-select">Español</div>
                        </a>
                        <a href="/en/english.php">
                            <div class="idioma-select">English</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <section class="header">
        <h1>How can we help you?</h1>
        <p>Fill out the form below and soon we'll be in touch with you.</p>
    </section>
    <div class="flex-c">
        <section class="formu container flex-c" style="margin-left: 2rem; margin-right: 2rem;">
            <div class="form-image"><img src="/assets-landings/assets-contacto/xilion_soporte.png" alt="image"></div>
            <div class="contactfield">
                <form action="thankyou.php">
                    <div>
                        <input type="text" id="nombre" required="" placeholder="Name">
                    </div>
                    <div>
                        <input type="email" id="email" pattern="/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" required="" placeholder="E-mail">
                    </div>
                    <div>
                        <input type="tel" id="telefono" placeholder="Phone (Optional)">
                    </div>
                    <div>
                        <textarea id="mensaje" placeholder="Describe us your project (Optional)"></textarea>
                    </div>
                    <input type="file" id="actual-btn" aria-label="Archivo" hidden/>
                    <label class="projectfileupload flex-c" for="actual-btn" id="project">Drag or select your file here</label>
                    <button id="enviarForm" type="submit" value="Enviar" class="boton-contacto">Submit</button>
                </form>
            </div>
        </section>
    </div>
    <section class="contact-buttons">
        <a href="mailto:sales@xilion.io?subject=REQUEST%20FOR%20QUOTATION%20XILION&body=Hello!%20I%20want%20information%20about%20your%20solutions!">
            <img src="/assets-landings/assets-contacto/contact-mail.svg" alt="Mail icon">
            <div class="cbutton-text">
                <p>Send email</p>
                <p>sales@xilion.io</p>
            </div>
        </a>
        <a href="tel:3334009635">
            <img src="/assets-landings/assets-contacto/contact-phone.svg" alt="Phone icon">
            <div class="cbutton-text">
                <p>Call us</p>
                <p>333 400 9635</p>
            </div>
        </a>
    </section>
    <div>
        <section class="footer flex-c" style="background: none;">
            <div class="footer-title">Let's work together</div>
            <div class="footer-p">We are excited to meet you and work together, contact us, we are at your service!</div>
            <div class="footer-contact flex-c">
                <form action="/en/contact.php">
                    <input class="footer-input" id="correo" type="email" placeholder="Email address" required>
                    <button href="/en/contact.php" class="footer-button" type="input" onclick="llevar()">Request a quote</button>
                </form>
            </div>
            <div class="footer-more container">
                <ul class="more-list">
                    <h5>Contact us</h5>
                    <li>
                        <a class="flex-c tel bottom-line" href="tel:3334009635"><img src="/assets-landings/assets-kioscos/phone.svg" alt="phone"> 333 400 9635</a>
                    </li>
                    <li>
                        <a class="flex-c tel bottom-line" href="mailto:sales@xilion.io?subject=REQUEST%20FOR%20QUOTATION%20XILION&body=Hello!%20I%20want%20information%20about%20your%20solutions!"><img src="/assets-landings/assets-kioscos/mail.svg" alt="mail"> sales@xilion.io</a>
                    </li>
                </ul>
                <ul class="more-list">
                    <h5>Products</h5>
                    <li class="pointer"><a class="bottom-line" href="software.php">Software</a></li>
                    <li class="pointer"><a class="bottom-line" href="fleet-management.php">Fleet management</a></li>
                    <li class="pointer"><a class="bottom-line" href="archs.php">REPUVE Archs</a></li>
                    <!-- <li class="pointer"><a class="bottom-line" href="">Parking</a></li> -->
                    <li class="pointer"><a class="bottom-line" href="kiosks-and-atms.php">Kiosks & ATM's</a></li>
                </ul>
                <ul class="more-list">
                    <h5>Company</h5>
                    <li class="pointer"><a class="bottom-line" href="/en/about.php">About us</a></li>
                    <li class="pointer"><a class="bottom-line" href="/en/portfolio.php">Portfolio</a></li>
                    <li class="pointer"><a class="bottom-line" href="/en/contact.php">Contact us</a></li>
                </ul>
                <ul class="more-list">
                    <h5>Support</h5>
                    <li><a class="bottom-line" href="">Privacy Policy</a></li>
                    <li><a class="bottom-line" href="">Terms & conditions</a></li>
                </ul>
            </div>
            <div class="footer-footer container" style="padding-left: 0!important; padding-right: 0!important;">
                <div class="flex-c logo">
                    <a href="/en/english.php"><img src="/assets-landings/assets-kioscos/logo-xilion.svg" alt="Xilion"></a>
                    <p>©2022 Xilion Co. All rights reserved</p>
                </div>
                <div class="flex-c socials">
                    <a target="_blank" href="https://api.whatsapp.com/send?phone=+523334009635&text=Hola!%20Quiero%20informacion%20sobre%20sus%20soluciones!"><img src="/assets-landings/assets-kioscos/whats-bco.svg" alt="WhatsApp"></a>
                    <!--  -->
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
        const actualBtn = document.getElementById('actual-btn');

        const fileChosen = document.getElementById('project');

        actualBtn.addEventListener('change', function() {
            fileChosen.innerHTML = this.files[0].name
        })
    </script>
    <script type="text/javascript" src="/script-landings.js"></script>
</body>

</html>