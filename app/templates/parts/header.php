<div class="menutop">
    <div class="logo">
        <a href="/">
            <img src="app/ressources/img/logo.png" alt="Logo Mathieu Large">
        </a>
    </div>
    <div class="button-menu">
        <span class="menu-text">Menu</span>
        <span class="burger"></span>
    </div>
    <div class="menu-big">
        <ul class="link">
            <li><a href="?page=home" class="<?php echo (!isset($_GET['page']) || $_GET['page'] == 'home') ? '' : null; ?>">Accueil</a></li>
            <li><a href="?page=about" class="<?php echo (isset($_GET['page']) && $_GET['page'] == 'about' ) ? '' : null; ?>">A propos</a></li>
            <li><a href="?page=portfolio" class="<?php echo (isset($_GET['page']) && $_GET['page'] == 'about' ) ? '' : null; ?>">Porfolio</a></li>
            <li><a href="?page=contact" class="<?php echo (isset($_GET['page']) && $_GET['page'] == 'about' ) ? '' : null; ?>">Contact</a></li>
        </ul>
        <ul class="socials">
            <li><a class="fa-twitter" href="https://www.twitter.com/sssensey" target="_blank"></a></li>
            <li><a class="fa-codepen" href="https://codepen.io/sensey" target="_blank"></a></li>
            <li><a class="fa-github" href="https://github.com/SSENSEY" target="_blank"></a></li>
            <li><a class="fa-linkedin" href="https://www.behance.net/zarkrey3468" target="_blank"></a></li>
            <li><a class="fa-behance" href="https://www.linkedin.com/in/mathieu-large" target="_blank"></a></li>
        </ul>
    </div>
</div>