<!doctype html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Mathieu Large — Développeur & Webdesigner</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mathieu Large, développeur front-end et webdesigner chez Ingénie. Mon portfolio contient toutes mes réalisations.">
    <meta name="keywords" content="mathieu large,sensey,ssensey,ingenie,graphisme,graphiste,design,infographie,logo,website,webdesign,designer">
    <meta name="author" content="Mathieu Large">
    <link rel="stylesheet" href="app/ressources/css/bootstrap.min.css">
    <link rel="stylesheet" href="app/ressources/css/stylesheet.css">
    <link rel="stylesheet" href="app/ressources/fonts/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="57x57" href="app/ressources/img/favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="app/ressources/img/favicon/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="app/ressources/img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="app/ressources/img/favicon/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="app/ressources/img/favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="app/ressources/img/favicon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="app/ressources/img/favicon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="app/ressources/img/favicon/apple-touch-icon-152x152.png">
    <link rel="icon" type="image/png" sizes="32x32" href="app/ressources/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="app/ressources/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="app/ressources/img/favicon/manifest.json">
    <link rel="mask-icon" href="app/ressources/img/favicon/safari-pinned-tab.svg" color="#223a5e">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="app/ressources/img/favicon/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="google-site-verification" content="7abmRsIqlr-NoAYx87hSwQ8kIpT9iExzl0ZAetP5w2E" />
</head>

<body>
    <header class="header">
        <?php include 'app/templates/parts/header.php'; ?>
    </header>

    <main class="container-main">
        <?php
            $page = 'home';
            if( isset ($_GET['page']) ) {
                $page = $_GET['page'];
            }

            $file= 'app/templates/' . $page . '.php';
            if ($_GET['nom']) $file = "app/templates/projects/" . $_GET['nom'] . '.php';

            if(file_exists($file)) {
                include $file;
            } else {
                include 'app/templates/404.php';
            }
        ?>
    </main>

    <footer class="footer">
        <?php include 'app/templates/parts/footer.php'; ?>
    </footer>
    <script src="app/ressources/js/jquerry.js"></script>
    <script src="app/ressources/js/bootstrap.min.js"></script>
    <script src="app/ressources/js/isotope.pkgd.min.js"></script>
    <script src="app/ressources/js/anime.min.js"></script>
    <script src="app/ressources/js/script.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91211642-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-91211642-2');
    </script>
</body>
</html>