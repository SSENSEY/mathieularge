<div class="menutop">
    <div class="logo">
        <a href="/">
            <img src="logo.png" alt="LOGO">
        </a>
    </div>
    <div class="button-menu">
        <span class="menu-text">Menu</span>
        <span class="burger"></span>
    </div>
    <div class="menu-big">
        <ul>
            <li><a href="?page=home" class="<?php echo (!isset($_GET['page']) || $_GET['page'] == 'home') ? 'active' : null; ?>">Accueil</a></li>
            <li><a href="?page=about" class="<?php echo (isset($_GET['page']) && $_GET['page'] == 'about' ) ? 'active' : null; ?>">A propos</a></li>
            <li><a href="?page=portfolio" class="<?php echo (isset($_GET['page']) && $_GET['page'] == 'about' ) ? 'active' : null; ?>">Porfolio</a></li>
            <li><a href="?page=contact" class="<?php echo (isset($_GET['page']) && $_GET['page'] == 'about' ) ? 'active' : null; ?>">Contact</a></li>
        </ul>
    </div>
</div>