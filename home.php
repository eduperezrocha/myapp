<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>SanTa Homes — Your Space, Your Home</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&family=DM+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap"
    rel="stylesheet">
  <style>
    *,
    *::before,
    *::after {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    :root {
      --sand: #E8DFD4;
      --sand-light: #F4F0EB;
      --sand-dark: #C4B8A9;
      --charcoal: #1A1A1A;
      --charcoal-soft: #2D2D2D;
      --warm-white: #FDFBF8;
      --olive: #5C6B4F;
      --olive-light: #7A8C6A;
      --terracotta: #B8704A;
      --terracotta-light: #D4956E;
      --gold: #C9A96E;
      --gold-light: #DFC89A;
      --text-primary: #1A1A1A;
      --text-secondary: #6B6358;
      --text-light: #9A9188;
      --heading: 'Cormorant Garamond', Georgia, serif;
      --body: 'DM Sans', -apple-system, sans-serif;
      --nav-height: 80px;
    }

    html {
      scroll-behavior: smooth;
      font-size: 16px;
    }

    body {
      font-family: var(--body);
      color: var(--text-primary);
      background: var(--warm-white);
      -webkit-font-smoothing: antialiased;
      overflow-x: hidden;
    }

    /* ── NAV ── */
    .nav {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 100;
      height: var(--nav-height);
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 clamp(24px, 4vw, 60px);
      background: rgba(253, 251, 248, 0.92);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border-bottom: 1px solid rgba(26, 26, 26, 0.06);
    }

    .nav-logo {
      font-family: var(--heading);
      font-size: 1.5rem;
      font-weight: 600;
      color: var(--charcoal);
      text-decoration: none;
      letter-spacing: 0.02em;
    }

    .nav-logo span {
      color: var(--terracotta);
      font-weight: 300;
    }

    .nav-links {
      display: flex;
      gap: 32px;
      align-items: center;
    }

    .nav-links a {
      font-size: 0.8rem;
      font-weight: 500;
      text-decoration: none;
      color: var(--text-secondary);
      letter-spacing: 0.12em;
      text-transform: uppercase;
      transition: color 0.3s;
      position: relative;
    }

    .nav-links a::after {
      content: '';
      position: absolute;
      bottom: -4px;
      left: 0;
      width: 0;
      height: 1.5px;
      background: var(--terracotta);
      transition: width 0.3s ease;
    }

    .nav-links a:hover {
      color: var(--charcoal);
    }

    .nav-links a:hover::after {
      width: 100%;
    }

    .nav-links a.active {
      color: var(--charcoal);
    }

    .nav-links a.active::after {
      width: 100%;
    }

    .nav-lang {
      font-size: 0.7rem !important;
      padding: 5px 14px;
      border: 1px solid var(--sand-dark);
      border-radius: 20px;
      letter-spacing: 0.1em !important;
      transition: all 0.3s !important;
    }

    .nav-lang:hover {
      background: var(--charcoal);
      color: var(--warm-white) !important;
      border-color: var(--charcoal);
    }

    .nav-lang::after {
      display: none !important;
    }

    .nav-hamburger {
      display: none;
      flex-direction: column;
      gap: 5px;
      cursor: pointer;
      padding: 8px;
      background: none;
      border: none;
    }

    .nav-hamburger span {
      width: 22px;
      height: 2px;
      background: var(--charcoal);
      border-radius: 2px;
    }

    /* ── HERO ── */
    .hero {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      background: var(--charcoal);
      overflow: hidden;
    }

    .hero::before {
      content: '';
      position: absolute;
      inset: 0;
      background:
        radial-gradient(ellipse at 20% 80%, rgba(92, 107, 79, 0.15) 0%, transparent 60%),
        radial-gradient(ellipse at 80% 20%, rgba(184, 112, 74, 0.1) 0%, transparent 50%),
        linear-gradient(180deg, rgba(26, 26, 26, 0.3) 0%, transparent 40%, rgba(26, 26, 26, 0.5) 100%);
      z-index: 1;
    }

    .hero-bg-pattern {
      position: absolute;
      inset: 0;
      z-index: 0;
      opacity: 0.04;
      background-image:
        repeating-linear-gradient(0deg, transparent, transparent 80px, rgba(255, 255, 255, 0.5) 80px, rgba(255, 255, 255, 0.5) 81px),
        repeating-linear-gradient(90deg, transparent, transparent 80px, rgba(255, 255, 255, 0.5) 80px, rgba(255, 255, 255, 0.5) 81px);
    }

    .hero-content {
      position: relative;
      z-index: 2;
      text-align: center;
      padding: 0 24px;
      animation: heroFadeIn 1.2s ease-out;
    }

    @keyframes heroFadeIn {
      from {
        opacity: 0;
        transform: translateY(30px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .hero-eyebrow {
      font-family: var(--body);
      font-size: 0.75rem;
      font-weight: 500;
      letter-spacing: 0.3em;
      text-transform: uppercase;
      color: var(--gold);
      margin-bottom: 28px;
    }

    .hero h1 {
      font-family: var(--heading);
      font-size: clamp(3.5rem, 10vw, 8rem);
      font-weight: 300;
      line-height: 1.05;
      color: var(--warm-white);
      margin-bottom: 12px;
    }

    .hero h1 em {
      font-style: italic;
      font-weight: 400;
      color: var(--gold-light);
    }

    .hero-sub {
      font-family: var(--body);
      font-size: clamp(0.95rem, 1.5vw, 1.15rem);
      font-weight: 300;
      color: var(--sand-dark);
      max-width: 520px;
      margin: 28px auto 0;
      line-height: 1.7;
    }

    .hero-scroll {
      position: absolute;
      bottom: 40px;
      left: 50%;
      transform: translateX(-50%);
      z-index: 2;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 8px;
      color: var(--sand-dark);
      font-size: 0.65rem;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      animation: float 3s ease-in-out infinite;
    }

    .hero-scroll-line {
      width: 1px;
      height: 40px;
      background: linear-gradient(to bottom, var(--sand-dark), transparent);
    }

    @keyframes float {

      0%,
      100% {
        transform: translateX(-50%) translateY(0);
      }

      50% {
        transform: translateX(-50%) translateY(8px);
      }
    }

    /* ── SECTIONS ── */
    .section {
      padding: clamp(60px, 10vw, 120px) clamp(24px, 5vw, 80px);
    }

    .section-label {
      font-size: 0.7rem;
      font-weight: 600;
      letter-spacing: 0.25em;
      text-transform: uppercase;
      color: var(--terracotta);
      margin-bottom: 16px;
    }

    .section-title {
      font-family: var(--heading);
      font-size: clamp(2rem, 4vw, 3.2rem);
      font-weight: 400;
      line-height: 1.2;
      color: var(--charcoal);
      margin-bottom: 20px;
    }

    .section-desc {
      font-size: 1rem;
      color: var(--text-secondary);
      line-height: 1.7;
      max-width: 560px;
    }

    .section-header {
      text-align: center;
      max-width: 640px;
      margin: 0 auto 64px;
    }

    .section-header .section-desc {
      margin-left: auto;
      margin-right: auto;
    }

    /* ── SERVICES ── */
    .services {
      background: var(--warm-white);
    }

    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 32px;
      max-width: 1100px;
      margin: 0 auto;
    }

    .service-card {
      background: var(--sand-light);
      border-radius: 16px;
      padding: 40px 32px 36px;
      position: relative;
      overflow: hidden;
      transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .service-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 20px 60px rgba(26, 26, 26, 0.08);
    }

    .service-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 3px;
      background: linear-gradient(90deg, var(--terracotta), var(--gold));
      transform: scaleX(0);
      transform-origin: left;
      transition: transform 0.4s ease;
    }

    .service-card:hover::before {
      transform: scaleX(1);
    }

    .service-icon {
      width: 48px;
      height: 48px;
      border-radius: 12px;
      background: var(--warm-white);
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 24px;
      font-size: 1.3rem;
    }

    .service-card h3 {
      font-family: var(--heading);
      font-size: 1.5rem;
      font-weight: 500;
      margin-bottom: 12px;
      color: var(--charcoal);
    }

    .service-card p {
      font-size: 0.9rem;
      color: var(--text-secondary);
      line-height: 1.65;
      margin-bottom: 20px;
    }

    .service-card ul {
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .service-card li {
      font-size: 0.85rem;
      color: var(--text-secondary);
      padding-left: 20px;
      position: relative;
      line-height: 1.5;
    }

    .service-card li::before {
      content: '';
      position: absolute;
      left: 0;
      top: 7px;
      width: 6px;
      height: 6px;
      border-radius: 50%;
      background: var(--olive-light);
    }

    /* ── ENVIRONMENT ── */
    .environment {
      background: var(--sand-light);
    }

    .env-layout {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
      max-width: 1100px;
      margin: 48px auto 0;
    }

    .env-img {
      width: 100%;
      height: 340px;
      object-fit: cover;
      border-radius: 12px;
      transition: transform 0.5s ease;
    }

    .env-img-wrap {
      overflow: hidden;
      border-radius: 12px;
    }

    .env-img-wrap:hover .env-img {
      transform: scale(1.04);
    }

    /* ── HOUSES ── */
    .houses {
      background: var(--charcoal);
    }

    .houses .section-label {
      color: var(--gold);
    }

    .houses .section-title {
      color: var(--warm-white);
    }

    .houses .section-desc {
      color: var(--sand-dark);
    }

    .houses-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
      gap: 24px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .house-card {
      border-radius: 16px;
      overflow: hidden;
      background: var(--charcoal-soft);
      border: 1px solid rgba(255, 255, 255, 0.06);
      transition: transform 0.4s ease, border-color 0.4s ease, box-shadow 0.4s ease;
      text-decoration: none;
      color: inherit;
      display: block;
    }

    .house-card:hover {
      transform: translateY(-5px);
      border-color: rgba(255, 255, 255, 0.14);
      box-shadow: 0 24px 64px rgba(0, 0, 0, 0.3);
    }

    /* ─ House image area ─ */
    .house-img {
      width: 100%;
      height: 220px;
      background-size: cover;
      background-position: center;
      position: relative;
      overflow: hidden;
    }

    .house-img::after {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(to top, rgba(26, 26, 26, 0.5) 0%, transparent 50%);
    }

    .house-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.6s ease;
    }

    .house-card:hover .house-img img {
      transform: scale(1.06);
    }

    .house-num {
      position: absolute;
      top: 16px;
      left: 20px;
      z-index: 2;
      font-family: var(--heading);
      font-size: 0.85rem;
      font-weight: 600;
      color: rgba(255, 255, 255, 0.7);
      background: rgba(0, 0, 0, 0.3);
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
      padding: 4px 12px;
      border-radius: 20px;
      letter-spacing: 0.05em;
    }

    .house-status {
      position: absolute;
      top: 16px;
      right: 20px;
      z-index: 2;
      font-size: 0.65rem;
      font-weight: 600;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      padding: 5px 14px;
      border-radius: 20px;
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
    }

    .house-status.available {
      background: rgba(92, 107, 79, 0.6);
      color: #d4e8c4;
    }

    .house-status.unavailable {
      background: rgba(0, 0, 0, 0.35);
      color: rgba(255, 255, 255, 0.5);
    }

    /* ─ House info area ─ */
    .house-info {
      padding: 22px 24px 24px;
    }

    .house-name {
      font-family: var(--heading);
      font-size: 1.5rem;
      font-weight: 500;
      color: var(--warm-white);
      margin-bottom: 4px;
    }

    .house-location {
      font-size: 0.8rem;
      color: var(--sand-dark);
      letter-spacing: 0.03em;
      margin-bottom: 16px;
      display: flex;
      align-items: center;
      gap: 5px;
    }

    .house-location svg {
      width: 13px;
      height: 13px;
      opacity: 0.6;
    }

    .house-link {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-size: 0.8rem;
      color: var(--gold);
      text-decoration: none;
      font-weight: 500;
      letter-spacing: 0.05em;
      transition: gap 0.3s ease, color 0.3s ease;
    }

    .house-card:hover .house-link {
      color: var(--gold-light);
      gap: 12px;
    }

    .house-link svg {
      width: 16px;
      height: 16px;
      transition: transform 0.3s;
    }

    /* ─ Color placeholders ─
       Replace each background-image below with your actual house photo:
       e.g.  background-image: url('images/white-house.jpg');
    */
    .house-img--white {
      background: linear-gradient(135deg, #e8e4e0 0%, #d5cfc8 50%, #c2b9ad 100%);
    }

    .house-img--yellow {
      background: linear-gradient(135deg, #f0d98c 0%, #d4b85c 50%, #b89b3a 100%);
    }

    .house-img--brown {
      background: linear-gradient(135deg, #a68b6b 0%, #8b7355 50%, #6d583f 100%);
    }

    .house-img--black {
      background: linear-gradient(135deg, #4a4a4a 0%, #2d2d2d 50%, #1a1a1a 100%);
    }

    .house-img--orange {
      background: linear-gradient(135deg, #e8a064 0%, #cc7a3a 50%, #a85e24 100%);
    }

    .house-img--red {
      background: linear-gradient(135deg, #c4645a 0%, #a84a40 50%, #8c3630 100%);
    }

    .house-img--gray {
      background: linear-gradient(135deg, #a8a8a8 0%, #888888 50%, #6b6b6b 100%);
    }

    .house-img--blue {
      background: linear-gradient(135deg, #6a8caa 0%, #4d7292 50%, #355a78 100%);
    }

    .house-img--green {
      background: linear-gradient(135deg, #7a9c6a 0%, #5c7e4c 50%, #436336 100%);
    }

    .house-img--color {
      background: linear-gradient(135deg, #e8a064 0%, #c4645a 30%, #6a8caa 60%, #7a9c6a 100%);
    }

    /* ── FOOTER ── */
    .footer {
      background: var(--charcoal);
      border-top: 1px solid rgba(255, 255, 255, 0.06);
      padding: 48px clamp(24px, 5vw, 80px);
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 20px;
    }

    .footer-brand {
      font-family: var(--heading);
      font-size: 1.3rem;
      font-weight: 600;
      color: var(--warm-white);
    }

    .footer-brand span {
      color: var(--terracotta);
      font-weight: 300;
    }

    .footer-copy {
      font-size: 0.8rem;
      color: var(--text-light);
    }

    /* ── RESPONSIVE ── */
    @media (max-width: 768px) {
      .nav-links {
        display: none;
      }

      .nav-hamburger {
        display: flex;
      }

      .env-layout {
        grid-template-columns: 1fr;
      }

      .houses-grid {
        grid-template-columns: 1fr;
      }

      .hero h1 {
        font-size: 3rem;
      }

      .footer {
        flex-direction: column;
        text-align: center;
      }

      .house-img {
        height: 200px;
      }
    }
  </style>
</head>


<body>

  <?php require_once("./php/navbar.php") ?>
  <!-- HERO -->
  <section class="hero">
    <div class="hero-bg-pattern"></div>
    <div class="hero-content">
      <p class="hero-eyebrow">Aguascalientes, Mexico</p>
      <h1>Your space,<br><em>your home.</em></h1>
      <p class="hero-sub">A unique wooded environment with a public golf course, located at the south of the city —
        Rancho Santa Mónica.</p>
    </div>
    <div class="hero-scroll">
      Explore
      <div class="hero-scroll-line"></div>
    </div>
  </section>

  <!-- SERVICES -->
  <section class="section services">
    <div class="section-header">
      <p class="section-label">What We Offer</p>
      <h2 class="section-title">Find your ideal accommodation</h2>
      <p class="section-desc">San Ta Homes is a collection of 10 furnished houses in Aguascalientes, designed for
        executives who need a home away from home.</p>
    </div>
    <div class="services-grid">
      <div class="service-card">
        <div class="service-icon">&#9878;</div>
        <h3>Amenities</h3>
        <p>All services included for executives relocating to the city for work.</p>
        <ul>
          <li>Immediate repairs &amp; maintenance</li>
          <li>Comprehensive security across all houses</li>
          <li>Trusted cleaning &amp; upkeep team</li>
        </ul>
      </div>
      <div class="service-card">
        <div class="service-icon">&#9733;</div>
        <h3>Experience</h3>
        <p>We have hosted executives from national and international companies for more than 10 years.</p>
        <ul>
          <li>English-speaking staff</li>
          <li>Constant support to adapt to local life</li>
          <li>100+ satisfied clients</li>
        </ul>
      </div>
      <div class="service-card">
        <div class="service-icon">&#9960;</div>
        <h3>Our Houses</h3>
        <p>A spacious, independent place to live with modern design and comfort.</p>
        <ul>
          <li>Modern architecture &amp; stylish interiors</li>
          <li>Generous, comfortable living spaces</li>
          <li>Full security systems installed</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- ENVIRONMENT -->
  <section class="section environment">
    <div class="section-header">
      <p class="section-label">The Setting</p>
      <h2 class="section-title">Environment</h2>
      <p class="section-desc">Surrounded by nature, walking paths, and the tranquility of Rancho Santa Mónica's wooded
        landscape.</p>
    </div>
    <div class="env-layout">
      <div class="env-img-wrap">
        <img src="images/campo.jpg" alt="Golf course landscape" class="env-img">
      </div>
      <div class="env-img-wrap">
        <img src="images/caminito.jpg" alt="Walking path through trees" class="env-img">
      </div>
    </div>
  </section>

  <!-- HOUSES -->
  <section class="section houses" id="houses">
    <div class="section-header">
      <p class="section-label">Our Portfolio</p>
      <h2 class="section-title">10 Unique Residences</h2>
      <p class="section-desc">Each house has its own character, located across the finest neighborhoods south of the
        city.</p>
    </div>
    <div class="houses-grid">

      <!-- 01 White House -->
      <a href="pages/houses/white-house.html" class="house-card">
        <div class="house-img house-img--white">
          <!-- Replace the gradient with: <img src="images/white-house.jpg" alt="White House"> -->
          <span class="house-num">01</span>
          <span class="house-status unavailable">Not Available</span>
        </div>
        <div class="house-info">
          <h3 class="house-name">White House</h3>
          <p class="house-location">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg>
            Punta Santa Mónica
          </p>
          <span class="house-link">View details <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2">
              <path d="M5 12h14M12 5l7 7-7 7" />
            </svg></span>
        </div>
      </a>

      <!-- 02 Yellow House -->
      <a href="pages/houses/yellow-house.html" class="house-card">
        <div class="house-img house-img--yellow">
          <img src="images/CA1.jpg" alt="Yellow House">
          <span class="house-num">02</span>
          <span class="house-status unavailable">Not Available</span>
        </div>
        <div class="house-info">
          <h3 class="house-name">Yellow House</h3>
          <p class="house-location">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg>
            Montecarlo
          </p>
          <span class="house-link">View details <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2">
              <path d="M5 12h14M12 5l7 7-7 7" />
            </svg></span>
        </div>
      </a>

      <!-- 03 Brown House -->
      <a href="pages/houses/brown-house.html" class="house-card">
        <div class="house-img house-img--brown">
          <img src="images/brown-house/13.webp" alt="Brown House">
          <span class="house-num">03</span>
          <span class="house-status unavailable">Unavailable</span>
        </div>
        <div class="house-info">
          <h3 class="house-name">Brown House</h3>
          <p class="house-location">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg>
            Montecarlo
          </p>
          <span class="house-link">View details <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2">
              <path d="M5 12h14M12 5l7 7-7 7" />
            </svg></span>
        </div>
      </a>

      <!-- 04 Black House -->
      <a href="pages/houses/black-house.html" class="house-card">
        <div class="house-img house-img--black">
          <img src="images/black-house/9A4A5962-HDR.webp" alt="Black House">
          <span class="house-num">04</span>
          <span class="house-status unavailable">Not Available</span>
        </div>
        <div class="house-info">
          <h3 class="house-name">Black House</h3>
          <p class="house-location">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg>
            Providencia
          </p>
          <span class="house-link">View details <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2">
              <path d="M5 12h14M12 5l7 7-7 7" />
            </svg></span>
        </div>
      </a>

      <!-- 05 Orange House -->
      <a href="pages/houses/orange-house.html" class="house-card">
        <div class="house-img house-img--orange">
          <img src="images/DSC_7516.jpg" alt="Orange House">
          <span class="house-num">05</span>
          <span class="house-status unavailable">Not Available</span>
        </div>
        <div class="house-info">
          <h3 class="house-name">Orange House</h3>
          <p class="house-location">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg>
            Puerta Sur
          </p>
          <span class="house-link">View details <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2">
              <path d="M5 12h14M12 5l7 7-7 7" />
            </svg></span>
        </div>
      </a>

      <!-- 06 Red House -->
      <a href="pages/houses/red-house.html" class="house-card">
        <div class="house-img house-img--red">
          <img src="images/DSC_6072.jpg" alt="Red House">
          <span class="house-num">06</span>
          <span class="house-status unavailable">Not Available</span>
        </div>
        <div class="house-info">
          <h3 class="house-name">Red House</h3>
          <p class="house-location">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg>
            Punta Santa Mónica
          </p>
          <span class="house-link">View details <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2">
              <path d="M5 12h14M12 5l7 7-7 7" />
            </svg></span>
        </div>
      </a>

      <!-- 07 Gray House -->
      <a href="pages/houses/gray-house.html" class="house-card">
        <div class="house-img house-img--gray">
          <span class="house-num">07</span>
          <span class="house-status unavailable">Not Available</span>
        </div>
        <div class="house-info">
          <h3 class="house-name">Gray House</h3>
          <p class="house-location">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg>
            Punta Santa Mónica
          </p>
          <span class="house-link">View details <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2">
              <path d="M5 12h14M12 5l7 7-7 7" />
            </svg></span>
        </div>
      </a>

      <!-- 08 Blue House -->
      <a href="pages/houses/blue-house.html" class="house-card">
        <div class="house-img house-img--blue">
          <img src="images/DSC_8221.jpg" alt="Blue House">
          <span class="house-num">08</span>
          <span class="house-status unavailable">Not Available</span>
        </div>
        <div class="house-info">
          <h3 class="house-name">Blue House</h3>
          <p class="house-location">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg>
            Punta Santa Mónica
          </p>
          <span class="house-link">View details <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2">
              <path d="M5 12h14M12 5l7 7-7 7" />
            </svg></span>
        </div>
      </a>

      <!-- 09 Green House -->
      <a href="pages/houses/green-house.html" class="house-card">
        <div class="house-img house-img--green">
          <img src="images/green-house/9A4A2913-HDR.webp" alt="Green House">
          <span class="house-num">09</span>
          <span class="house-status Unavailable">Not Available</span>
        </div>
        <div class="house-info">
          <h3 class="house-name">Green House</h3>
          <p class="house-location">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg>
            Venetto
          </p>
          <span class="house-link">View details <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2">
              <path d="M5 12h14M12 5l7 7-7 7" />
            </svg></span>
        </div>
      </a>

      <!-- 10 Color House -->
      <a href="pages/houses/colors-house.html" class="house-card">
        <div class="house-img house-img--color">
          <span class="house-num">10</span>
          <span class="house-status unavailable">Not Available</span>
        </div>
        <div class="house-info">
          <h3 class="house-name">Color House</h3>
          <p class="house-location">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg>
            La Joya
          </p>
          <span class="house-link">View details <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2">
              <path d="M5 12h14M12 5l7 7-7 7" />
            </svg></span>
        </div>
      </a>

    </div>
  </section>

  <!-- FOOTER -->
  <footer class="footer">
    <div class="footer-brand">San<span>Ta</span> Homes</div>
    <p class="footer-copy">&copy; 2020 San Ta Homes. All rights reserved.</p>
  </footer>

</body>

</html>

<!-- Test -->