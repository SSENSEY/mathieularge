<div class="menutop">
    <div class="logo">
        <a href="/">
            <img src="logo.png" alt="LOGO">
        </a>
    </div>
    <div class="button-menu">
        <span class="menu-text">Menu</span>
        <span class="burger"></span> <!-- trait middle -->
        <!-- before et after pour cross -->
    </div>
    <div class="menu-big">
        <a href="?page=home" class="<?php echo (!isset($_GET['page']) || $_GET['page'] == 'home') ? 'active' : null; ?>">Accueil</a>
        <a href="?page=about" class="<?php echo (isset($_GET['page']) && $_GET['page'] == 'about' ) ? 'active' : null; ?>">A propos</a>
        <a href="?page=portfolio" class="<?php echo (isset($_GET['page']) && $_GET['page'] == 'about' ) ? 'active' : null; ?>">Porfolio</a>
        <a href="?page=contact" class="<?php echo (isset($_GET['page']) && $_GET['page'] == 'about' ) ? 'active' : null; ?>">Contact</a>
    </div>
</div>