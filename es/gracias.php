<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/iconos/favicon-xilion.svg">
    <title>¡Gracias!</title>
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
            document.getElementById('name').innerHTML = `¡Gracias ${name}!`;
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- End Google Tag Manager -->
</head>

<body style="background-color: #1a75cf;">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PNNQNVT"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php  include_once '../includes/templates/nav-wrap.php'?>
    <?php  include_once '../includes/templates/header.php'?>
    <nav class="nav-normal">
    </nav>
    <section class="header">
        <h1 id="name">¡Gracias!</h1>
        <p>Ya estamos trabajando en tu petición. Nos pondremos en contacto contigo en las próximas 24 horas para trabajar juntos.</p>
        <div class="butones">
            <a href="/es/index.php" class="buton volver">Volver a inicio</a>
            <!-- <a href="" class="buton brochure">Brochure corporativo</a> -->
        </div>
    </section>
    <script type="text/javascript" src="/script-landings.js"></script>
</body>

</html>