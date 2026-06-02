<!DOCTYPE html>
<html lang="en">
<head>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}

    // 1. Immediately check for existing consent
    const savedConsent = localStorage.getItem('cookieConsent');
    const initialStatus = savedConsent ? savedConsent : 'denied';

    gtag('consent', 'default', {
      'ad_storage': initialStatus,
      'ad_user_data': initialStatus,
      'ad_personalization': initialStatus,
      'analytics_storage': initialStatus,
      'wait_for_update': 500
    });

    // 2. Function to handle the button clicks
    function handleConsent(status) {
      gtag('consent', 'update', {
        'ad_storage': status,
        'ad_user_data': status,
        'ad_personalization': status,
        'analytics_storage': status
      });

      localStorage.setItem('cookieConsent', status);
      document.getElementById('cookieBar').style.display = 'none';
    }

    // 3. Only show the bar if they haven't decided yet
    window.addEventListener('DOMContentLoaded', () => {
      // Only show the bar if they haven't made a choice yet
      if (!localStorage.getItem('cookieConsent')) {
        document.getElementById('cookieBar').style.display = 'flex';
      }
    });
  </script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=G-78MD6JXLWY"></script>
  <script>
  if (window.location.hostname === 'sdg14asia.org' || window.location.hostname === 'www.sdg14asia.org') {
      gtag('js', new Date());
      gtag('config', 'G-78MD6JXLWY');
    }
  </script>

<script src="main.js" defer></script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($meta->title ?? 'SDG14 Asia'); ?></title>

  <?php if (!empty($meta->description)): ?>
  <meta name="description" content="<?php echo htmlspecialchars($meta->description); ?>">
  <?php endif; ?>

  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/styles.css">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
</head>
<body>


<!-- NAV -->
<nav>
  <div class="nav-logo">
<!--    <div class="logo-badge">-->
  <!--//TODO: shouldn't be a link if this is the home page-->

  <?php if ($_SERVER['REQUEST_URI'] === '/') { ?>
    <img src="/images/sdg14asia-logo.png" width="100" alt="SDG14Asia.org Logo" />
  <?php } else { ?>
    <a href="/" id="logo-link"><img src="/images/sdg14asia-logo.png" width="100" alt="SDG14Asia.org Logo" /></a>
  <?php } ?>

<!--    </div>-->
    SDG14 Asia Association
  </div>

  <!-- Desktop links -->
  <ul class="nav-links">
    <li><?= nav_link('/', 'Home') ?></li>
    <li><?= nav_link('/about-us', 'About') ?></li>
    <li><?= nav_link('/projects', 'Projects') ?></li>
    <li><?= nav_link('/membership', 'Membership') ?></li>

<!--
    <li><a href="#">Events</a></li>
    <li><a href="#">Stories</a></li>
  -->
    <li><a href="/forms/SDG14Asia-Membership-Application-Form.pdf" target="_blank">Donate</a></li>
    <li><a href="mailto:info@sdg14asia.org">Contact</a></li>
  </ul>

  <div class="nav-right">

  <!--
    <div class="lang-selector">
      <button class="lang-btn active" data-lang="en">EN</button>
      <button class="lang-btn" data-lang="th">TH</button>
      <button class="lang-btn" data-lang="fr">FR</button>
      <button class="lang-btn" data-lang="de">DE</but<script src="main.js"></script>ton>
      <button class="lang-btn" data-lang="es">ES</button>
      <button class="lang-btn" data-lang="zh">中文</button>
    </div>
  -->
    <button class="btn-donate" onclick="window.open('/donate')">Donate</button>
  </div>

  <!-- Hamburger (mobile only) -->
  <button class="hamburger" id="hamburger" aria-label="Toggle menu" aria-expanded="false">
    <span></span>
    <span></span>
    <span></span>
  </button>
</nav>

<!-- Mobile menu drawer -->
<ul class="mobile-menu" id="mobileMenu" role="navigation" aria-label="Mobile navigation">
  <li><a href="/">Home</a></li>
  <li><a href="/about">About</a></li>
  <li><a href="/projects">Projects</a></li>
  <li><a href="/membership">Membership</a></li>

  <!---
  <li><a href="#">Events</a></li>
  <li><a href="#">Stories</a></li>
-->  
  <li><a href="/forms/SDG14Asia-Membership-Application-Form.pdf" target="_blank">Membership</a></li>
  <li><a href="/forms/SDG14Asia-Membership-Application-Form.pdf" target="_blank">Donate</a></li>
  <li><a href="mailto:info@sdg14asia.org">Contact</a></li>
<!--
  <li class="mobile-bottom">
    <div class="lang-selector">
      <button class="lang-btn mobile-lang-btn active" data-lang="en">EN</button>
      <button class="lang-btn mobile-lang-btn" data-lang="th">TH</button>
      <button class="lang-btn mobile-lang-btn" data-lang="fr">FR</button>
      <button class="lang-btn mobile-lang-btn" data-lang="de">DE</button>
      <button class="lang-btn mobile-lang-btn" data-lang="es">ES</button>
      <button class="lang-btn mobile-lang-btn" data-lang="zh">中文</button>
    </div>
    <button class="btn-donate">Donate</button>
  </li>
  -->
</ul>
