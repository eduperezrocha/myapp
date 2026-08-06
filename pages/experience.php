<?php require_once("../php/i18n.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Experience — SanTa Homes</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&family=DM+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="../css/main.css">
  <style>
    /* ── EXPERIENCE PAGE ── */
    .exp-hero {
      min-height: 50vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: var(--charcoal);
      position: relative;
      overflow: hidden;
      padding-top: var(--nav-height);
    }

    .exp-hero::before {
      content: '';
      position: absolute;
      inset: 0;
      background:
        radial-gradient(ellipse at 30% 70%, rgba(92, 107, 79, 0.12) 0%, transparent 60%),
        radial-gradient(ellipse at 70% 30%, rgba(184, 112, 74, 0.08) 0%, transparent 50%);
    }

    .exp-hero-content {
      position: relative;
      z-index: 2;
      text-align: center;
      padding: 0 24px;
    }

    .exp-hero h1 {
      font-family: var(--heading);
      font-size: clamp(2.5rem, 6vw, 5rem);
      font-weight: 300;
      color: var(--warm-white);
      line-height: 1.1;
    }

    .exp-hero h1 em {
      font-style: italic;
      font-weight: 400;
      color: var(--gold-light);
    }

    /* ── ABOUT SECTION ── */
    .exp-about {
      background: var(--warm-white);
    }

    .exp-about-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 60px;
      max-width: 1100px;
      margin: 0 auto;
      align-items: center;
    }

    .exp-about-img {
      width: 100%;
      height: 400px;
      object-fit: cover;
      border-radius: 16px;
    }

    .exp-about-content h2 {
      font-family: var(--heading);
      font-size: clamp(1.8rem, 3vw, 2.5rem);
      font-weight: 400;
      color: var(--charcoal);
      margin-bottom: 24px;
      line-height: 1.2;
    }

    .exp-about-content p {
      font-size: 1rem;
      color: var(--text-secondary);
      line-height: 1.8;
      margin-bottom: 16px;
    }

    /* ── TESTIMONIALS ── */
    .testimonials {
      background: var(--sand-light);
    }

    .testimonials-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: 32px;
      max-width: 1100px;
      margin: 0 auto;
    }

    .testimonial-card {
      background: var(--warm-white);
      border-radius: 16px;
      padding: 36px 32px;
      position: relative;
    }

    .testimonial-card::before {
      content: '\201C';
      font-family: var(--heading);
      font-size: 5rem;
      color: var(--sand-dark);
      position: absolute;
      top: 12px;
      left: 24px;
      line-height: 1;
      opacity: 0.4;
    }

    .testimonial-text {
      font-size: 0.95rem;
      color: var(--text-secondary);
      line-height: 1.75;
      font-style: italic;
      margin-bottom: 24px;
      position: relative;
      z-index: 1;
    }

    .testimonial-author {
      font-family: var(--heading);
      font-size: 1.1rem;
      font-weight: 600;
      color: var(--charcoal);
    }

    .testimonial-origin {
      font-size: 0.8rem;
      color: var(--text-light);
      margin-top: 4px;
    }

    /* ── RESPONSIVE ── */
    @media (max-width: 768px) {
      .exp-about-grid {
        grid-template-columns: 1fr;
        gap: 32px;
      }

      .exp-about-img {
        height: 280px;
      }

      .testimonials-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>

<body>

<?php require_once("../php/navbar.php") ?>

  <!-- HERO -->
  <section class="exp-hero">
    <div class="exp-hero-content">
      <h1>Our <em>Experience</em></h1>
    </div>
  </section>

  <!-- ABOUT -->
  <section class="section exp-about">
    <div class="exp-about-grid">
      <img src="../images/Captura-de-pantalla-2020-09-11-a-las-12.54.44-p.m..png" alt="SanTa Homes property" class="exp-about-img">
      <div class="exp-about-content">
        <h2>More than renting a house, SanTa Homes is a lifestyle</h2>
        <p>The experience of living without worries about arrangements, payment of services, cleaning, attention to suppliers — we take care of that.</p>
        <p>Flexibility in short and mid-term contracts for executives who come for business projects. We adjust to your personal needs.</p>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS -->
  <section class="section testimonials">
    <div class="section-header">
      <p class="section-label">What They Say</p>
      <h2 class="section-title">Testimonials</h2>
      <p class="section-desc">Some comments from our clients</p>
    </div>
    <div class="testimonials-grid">

      <div class="testimonial-card">
        <p class="testimonial-text">"Let you know that we think the life in house was very comfortable with your kindly and quickly help even if there was some problem. And we appreciate your support always."</p>
        <p class="testimonial-author">Mr. Tomoaki</p>
        <p class="testimonial-origin">Japan, 2017</p>
      </div>

      <div class="testimonial-card">
        <p class="testimonial-text">"We definitely enjoyed our stay and would like to rent the house again when we come back."</p>
        <p class="testimonial-author">Molly & Robert V.H.</p>
        <p class="testimonial-origin">USA, 2017</p>
      </div>

      <div class="testimonial-card">
        <p class="testimonial-text">"La casa está en excelentes condiciones y tiene todo lo que necesitas para sentirte cómodo. Tania es muy amable y siempre pendiente de cualquier cosa que necesitemos. Recomiendo mucho esta casa!"</p>
        <p class="testimonial-author">Ana Laura</p>
        <p class="testimonial-origin">México, 2018 — Airbnb client</p>
      </div>

      <div class="testimonial-card">
        <p class="testimonial-text">"Because of your support and service I have spent very good time in Aguascalientes. When I come back to Aguascalientes in the future I'll contact you again!"</p>
        <p class="testimonial-author">Mr. Taku Mutoh</p>
        <p class="testimonial-origin">Japan, 2017</p>
      </div>

      <div class="testimonial-card">
        <p class="testimonial-text">"Me alegro de mi casa y mucha comodidad. ¡Gracias por su gran apoyo!"</p>
        <p class="testimonial-author">H. Sasaoka</p>
        <p class="testimonial-origin">Japón, 2018</p>
      </div>

      <div class="testimonial-card">
        <p class="testimonial-text">"La casa tiene todo lo necesario para sentirte como en tu hogar, cuenta con seguridad, el coto es muy bonito y los vecinos como el personal de servicio son muy amables. Esta bien ubicada, cerca de todas las avenidas importantes. ¡Excelente estancia!"</p>
        <p class="testimonial-author">Lilian</p>
        <p class="testimonial-origin">México, 2016 — Airbnb client</p>
      </div>

    </div>
  </section>

  <!-- FOOTER -->
  <?php require_once("../php/footer.php") ?>

</body>

</html>
