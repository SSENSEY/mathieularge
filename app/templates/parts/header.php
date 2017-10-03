
<a href="?page=home" class="<?php echo (!isset($_GET['page']) || $_GET['page'] == 'home') ? 'active' : null; ?>">Home</a>
<a href="?page=about" class="<?php echo (isset($_GET['page']) && $_GET['page'] == 'about' ) ? 'active' : null; ?>">About</a>