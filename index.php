<!doctype html>
<html>
<head>
    <title>Mathieu Large — Développeur & Webdesigner</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>

<body>
    <header class="page-header">
        <?php include 'app/templates/parts/header.php'; ?>
    </header>

    <div class="main-container">
        <?php
            $page = 'home';
            if( isset ($_GET['page']) ) {
                $page = $_GET['page'];
            }

            $file= './app/templates/' . $page . '.php';
        ?>
    </div>

    <footer class="page-footer">
        <?php include 'app/templates/parts/footer.php'; ?>
    </footer>

    <script src="app/ressources/js/script.js"></script>
</body>
</html>