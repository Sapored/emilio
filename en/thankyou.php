<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/iconos/favicon-xilion.svg">
    <title>¡Thank you!</title>
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
        function setName() {
            var name;
            name = localStorage.getItem('NAME');
            document.getElementById('name').innerHTML = `¡Thank you ${name}!`;
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- End Google Tag Manager -->
</head>

<body style="background-color: #1a75cf;" onload="setName()">
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
                            <img src="/assets-landings/assets-kioscos/sol-software.svg" alt="Sofware Icon">
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
                            <img src="/assets-landings/assets-kioscos/arcosre.svg" alt="Archs Icon">
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
        <h1 id="name">Thank you!</h1>
        <p>We are already working on your request. In the meantime, feel free to look around other solutions that may help you out. </p>
        <div class="butones">
            <a href="/en/english.php" class="buton volver">Home page</a>
            <!-- <a href="" class="buton brochure">White paper</a> -->
        </div>
    </section>
    <script type="text/javascript" src="/script-landings.js"></script>
</body>

</html>