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
</body>
</html>