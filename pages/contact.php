<?php require_once("../php/i18n.php") ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>Contacto — SanTa Homes</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&family=DM+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="../css/main.css">
  <style>
    /* ── CONTACT PAGE ── */
    .contact-hero {
      min-height: 40vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: var(--charcoal);
      position: relative;
      overflow: hidden;
      padding-top: var(--nav-height);
    }

    .contact-hero::before {
      content: '';
      position: absolute;
      inset: 0;
      background:
        radial-gradient(ellipse at 30% 70%, rgba(184, 112, 74, 0.12) 0%, transparent 60%),
        radial-gradient(ellipse at 70% 30%, rgba(92, 107, 79, 0.08) 0%, transparent 50%);
    }

    .contact-hero-content {
      position: relative;
      z-index: 2;
      text-align: center;
      padding: 0 24px;
    }

    .contact-hero h1 {
      font-family: var(--heading);
      font-size: clamp(2.5rem, 6vw, 5rem);
      font-weight: 300;
      color: var(--warm-white);
      line-height: 1.1;
    }

    .contact-hero h1 em {
      font-style: italic;
      font-weight: 400;
      color: var(--terracotta-light);
    }

    /* ── CONTACT CONTENT ── */
    .contact-section {
      background: var(--warm-white);
    }

    .contact-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 60px;
      max-width: 1100px;
      margin: 0 auto;
      align-items: start;
    }

    .contact-info h2 {
      font-family: var(--heading);
      font-size: clamp(1.8rem, 3vw, 2.5rem);
      font-weight: 400;
      color: var(--charcoal);
      margin-bottom: 32px;
    }

    .contact-item {
      margin-bottom: 28px;
    }

    .contact-item-label {
      font-size: 0.7rem;
      font-weight: 600;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      color: var(--terracotta);
      margin-bottom: 8px;
    }

    .contact-item-value {
      font-size: 1.1rem;
      color: var(--text-primary);
    }

    .contact-item-value a {
      color: var(--text-primary);
      text-decoration: none;
      border-bottom: 1px solid var(--sand-dark);
      transition: border-color 0.3s, color 0.3s;
    }

    .contact-item-value a:hover {
      color: var(--terracotta);
      border-color: var(--terracotta);
    }

    /* ── MAP ── */
    .contact-map {
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 8px 32px rgba(26, 26, 26, 0.08);
    }

    .contact-map iframe {
      display: block;
      width: 100%;
      height: 400px;
      border: 0;
    }

    /* ── RESPONSIVE ── */
    @media (max-width: 768px) {
      .contact-grid {
        grid-template-columns: 1fr;
        gap: 40px;
      }

      .contact-map iframe {
        height: 300px;
      }
    }
  </style>
</head>

<body>

<?php require_once("../php/navbar.php") ?>

  <!-- HERO -->
  <section class="contact-hero">
    <div class="contact-hero-content">
      <h1><em>Contact.</em></h1>
    </div>
  </section>

  <!-- CONTACT INFO + MAP -->
  <section class="section contact-section">
    <div class="contact-grid">
      <div class="contact-info">
        <h2>Contáctanos</h2>

        <div class="contact-item">
          <p class="contact-item-label">Teléfono (Sólo WhatsApp)</p>
          <p class="contact-item-value"><a href="tel:4492229800">449.222.98.00</a></p>
        </div>

        <div class="contact-item">
          <p class="contact-item-label">E-mail</p>
          <p class="contact-item-value"><a href="mailto:taniaro@msn.com">taniaro@msn.com</a></p>
        </div>

        <div class="contact-item">
          <p class="contact-item-label">Ubicación</p>
          <p class="contact-item-value">Rancho Santa Mónica, Aguascalientes, México</p>
        </div>
      </div>

      <div class="contact-map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7406.935051473447!2d-102.32349867565286!3d21.839495042259344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429ec43ceb33609%3A0x10d24d2817670465!2sRancho%20Santa%20Monica%2C%2020286%20Aguascalientes%2C%20Ags.!5e0!3m2!1ses-419!2smx!4v1601317830588!5m2!1ses-419!2smx"
          width="600" height="450" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <?php require_once("../php/footer.php") ?>

</body>

</html>
