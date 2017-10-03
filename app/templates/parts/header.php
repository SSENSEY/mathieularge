
<a href="?page=home" class="menu_items <?php echo (!isset($_GET['page']) || $_GET['page'] == 'home') ? 'active' : null; ?>">à propos</a>
<a href="?page=about" class="menu_items <?php echo (isset($_GET['page']) && $_GET['page'] == 'about' ) ? 'active' : null; ?>">About</a>