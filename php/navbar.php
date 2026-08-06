<nav class="nav">
  <a href="/index.php">
    <img src="/images/branding/wordmark.webp" alt="SanTa Homes" class="nav-logo">
  </a>
  <div class="nav-links">
    <a href="/index.php" <?php echo($currentSite == "index" ? 'class="active"' : ""); ?> >Inicio</a>
    <a href="/pages/experience.php" <?php echo ($currentSite == "experience" ? 'class=active' : ""); ?> >Experience</a>
    <a href="/pages/contact.php"<?php echo ($currentSite == "contact" ? 'class=active' : ""); ?>> Contacto</a>
    <a href="/index.php" class="nav-lang">EN</a>
  </div>
  <button class="nav-hamburger" aria-label="Menú">
  </button>
</nav>
