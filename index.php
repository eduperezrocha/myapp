<?php
  declare(strict_types=1);
  require_once($_SERVER['DOCUMENT_ROOT'] . '/php/i18n.php');
  $currentSite="index";
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>SanTa Homes — Tu Espacio, Tu Hogar</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&family=DM+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="./css/main.css">
</head>

<body>

<?php require_once("./php/navbar.php") ?>

  <!-- HERO -->
  <section class="hero">
    <div class="hero-bg-pattern"></div>
    <div class="hero-content">
      <p class="hero-eyebrow">Aguascalientes, México</p>
      <h1>Tu espacio,<br><em>tu hogar.</em></h1>
      <p class="hero-sub">En un entorno único y muy arbolado con campo de golf público al sur de la ciudad — Rancho
        Santa Mónica.</p>
    </div>
    <div class="hero-scroll">
      Explorar
      <div class="hero-scroll-line"></div>
    </div>
  </section>

  <!-- SERVICIOS -->
  <section class="section services">
    <div class="section-header">
      <p class="section-label">Lo Que Ofrecemos</p>
      <h2 class="section-title">Encuentra tu alojamiento ideal</h2>
      <p class="section-desc">San Ta Homes es un grupo de 10 casas amuebladas en Aguascalientes, diseñadas para
        ejecutivos que necesitan un hogar lejos de casa.</p>
    </div>
    <div class="services-grid">
      <div class="service-card">
        <div class="service-icon">&#9878;</div>
        <h3>Servicios</h3>
        <p>Con todos los servicios incluidos para ejecutivos que vienen a la ciudad de trabajo.</p>
        <ul>
          <li>Arreglos inmediatos</li>
          <li>Amplia seguridad en todas las casas</li>
          <li>Un equipo de confianza en limpieza y mantenimiento</li>
        </ul>
      </div>
      <div class="service-card">
        <div class="service-icon">&#9733;</div>
        <h3>Experiencia</h3>
        <p>Experiencia de recibir a ejecutivos de empresas nacionales e internacionales de más de 10 años.</p>
        <ul>
          <li>Se habla el idioma inglés</li>
          <li>Constante apoyo para una rápida inserción al estilo de vida local</li>
          <li>+150 clientes satisfechos</li>
        </ul>
      </div>
      <div class="service-card">
        <div class="service-icon">&#9960;</div>
        <h3>Nuestras Casas</h3>
        <p>Un lugar amplio e independiente donde vivir con diseño moderno y confort.</p>
        <ul>
          <li>Arquitectura moderna e interiores con estilo</li>
          <li>Espacios amplios y muy cómodos</li>
          <li>Casas con todos los sistemas de seguridad</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- ENTORNO -->
  <section class="section environment">
    <div class="section-header">
      <p class="section-label">El Entorno</p>
      <h2 class="section-title">Entorno</h2>
      <p class="section-desc">Rodeado de naturaleza, senderos y la tranquilidad del paisaje arbolado de Rancho Santa
        Mónica.</p>
    </div>
    <div class="env-layout">
      <div class="env-img-wrap">
        <img src="images/campo.jpg" alt="Paisaje del campo de golf" class="env-img">
      </div>
      <div class="env-img-wrap">
        <img src="images/caminito.jpg" alt="Sendero entre árboles" class="env-img">
      </div>
    </div>
  </section>

  <!-- CASAS -->
  <section class="section houses" id="casas">
    <div class="section-header">
      <p class="section-label">Nuestro Portafolio</p>
      <h2 class="section-title">10 Residencias Únicas</h2>
      <p class="section-desc">Cada casa tiene su propio carácter, ubicadas en los mejores fraccionamientos al sur de la
        ciudad.</p>
    </div>
    <div class="houses-grid">

      <!-- 01 Casa Blanca -->
      <a href="pages/houses/casa-azul.html" class="house-card">
        <div class="house-img house-img--white">
          <span class="house-num">01</span>
          <span class="house-status unavailable">No Disponible</span>
        </div>
        <div class="house-info">
          <h3 class="house-name">Casa Blanca</h3>
          <p class="house-location">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg>
            Punta Santa Mónica
          </p>
          <span class="house-link">Más información <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2">
              <path d="M5 12h14M12 5l7 7-7 7" />
            </svg></span>
        </div>
      </a>

      <!-- 02 Casa Amarilla -->
      <a href="pages/houses/casa-amarilla.html" class="house-card">
        <div class="house-img house-img--brown">
          <img src="images/brown-house/13.webp" alt="Brown House">
          <span class="house-num">03</span>
          <span class="house-status unavailable">No disponible</span>
        </div>
        <div class="house-info">
          <h3 class="house-name">Casa Amarilla</h3>
          <p class="house-location">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg>
            Montecarlo
          </p>
          <span class="house-link">Más información <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2">
              <path d="M5 12h14M12 5l7 7-7 7" />
            </svg></span>
        </div>
      </a>

      <!-- 03 Casa Café -->
      <a href="pages/houses/casa-cafe.html" class="house-card">
        <div class="house-img house-img--brown">
          <span class="house-num">03</span>
          <span class="house-status unavailable">No Disponible</span>
        </div>
        <div class="house-info">
          <h3 class="house-name">Casa Café</h3>
          <p class="house-location">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg>
            Montecarlo
          </p>
          <span class="house-link">Más información <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2">
              <path d="M5 12h14M12 5l7 7-7 7" />
            </svg></span>
        </div>
      </a>

      <!-- 04 Casa Negra -->
      <a href="pages/houses/casa-negra.html" class="house-card">
        <div class="house-img house-img--black">
          <span class="house-num">04</span>
          <span class="house-status unavailable">No Disponible</span>
        </div>
        <div class="house-info">
          <h3 class="house-name">Casa Negra</h3>
          <p class="house-location">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg>
            Providencia
          </p>
          <span class="house-link">Más información <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2">
              <path d="M5 12h14M12 5l7 7-7 7" />
            </svg></span>
        </div>
      </a>

      <!-- 05 Casa Naranja -->
      <a href="pages/houses/casa-naranja.html" class="house-card">
        <div class="house-img house-img--orange">
          <span class="house-num">05</span>
          <span class="house-status unavailable">No Disponible</span>
        </div>
        <div class="house-info">
          <h3 class="house-name">Casa Naranja</h3>
          <p class="house-location">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg>
            Puerta Sur
          </p>
          <span class="house-link">Más información <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2">
              <path d="M5 12h14M12 5l7 7-7 7" />
            </svg></span>
        </div>
      </a>

      <!-- 06 Casa Roja -->
      <a href="pages/houses/casa-roja.html" class="house-card">
        <div class="house-img house-img--red">
          <span class="house-num">06</span>
          <span class="house-status unavailable">No Disponible</span>
        </div>
        <div class="house-info">
          <h3 class="house-name">Casa Roja</h3>
          <p class="house-location">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg>
            Punta Santa Mónica
          </p>
          <span class="house-link">Más información <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2">
              <path d="M5 12h14M12 5l7 7-7 7" />
            </svg></span>
        </div>
      </a>

      <!-- 07 Casa Gris -->
      <a href="pages/houses/casa-gris.html" class="house-card">
        <div class="house-img house-img--gray">
          <span class="house-num">07</span>
          <span class="house-status unavailable">No Disponible</span>
        </div>
        <div class="house-info">
          <h3 class="house-name">Casa Gris</h3>
          <p class="house-location">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg>
            Punta Santa Mónica
          </p>
          <span class="house-link">Más información <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2">
              <path d="M5 12h14M12 5l7 7-7 7" />
            </svg></span>
        </div>
      </a>

      <!-- 08 Casa Azul -->
      <a href="pages/houses/casa-azul-santahomes.html" class="house-card">
        <div class="house-img house-img--blue">
          <span class="house-num">08</span>
          <span class="house-status unavailable">No Disponible</span>
        </div>
        <div class="house-info">
          <h3 class="house-name">Casa Azul</h3>
          <p class="house-location">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg>
            Punta Santa Mónica
          </p>
          <span class="house-link">Más información <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2">
              <path d="M5 12h14M12 5l7 7-7 7" />
            </svg></span>
        </div>
      </a>

      <!-- 09 Casa Verde -->
      <a href="pages/houses/casa-verde.html" class="house-card">
        <div class="house-img house-img--green">
          <span class="house-num">09</span>
          <span class="house-status unavailable">No Disponible</span>
        </div>
        <div class="house-info">
          <h3 class="house-name">Casa Verde</h3>
          <p class="house-location">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg>
            Venetto
          </p>
          <span class="house-link">Más información <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2">
              <path d="M5 12h14M12 5l7 7-7 7" />
            </svg></span>
        </div>
      </a>

      <!-- 10 Casa Colores -->
      <a href="pages/houses/casa-colores.html" class="house-card">
        <div class="house-img house-img--color">
          <span class="house-num">10</span>
          <span class="house-status unavailable">No Disponible</span>
        </div>
        <div class="house-info">
          <h3 class="house-name">Casa Colores</h3>
          <p class="house-location">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg>
            La Joya
          </p>
          <span class="house-link">Más información <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
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
    <p class="footer-copy">&copy; 2022 San Ta Homes. Derechos Reservados.</p>
  </footer>

</body>

</html>
