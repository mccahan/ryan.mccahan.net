<!doctype html>
<html lang="en-US" class="no-js" prefix="og: http://ogp.me/ns#">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Ryan McCahan Development</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="style.css?<?php echo filemtime(__DIR__.'/style.css'); ?>">
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="" />
  <meta property="og:description" content="" />
  <meta property="og:url" content="" />
  <meta property="og:site_name" content="" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:description" content="" />
  <meta name="twitter:title" content="" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

  <section id="hero">
    <div class="section-content">
      <div class="info">
        <h1>Ryan <span class="tippy" data-tippy-content="Mick-Cann">McCahan</span></h1>
        <h2>CTO<br>Developer</h2>
        <a href="mailto:ryan@mccahan.net" class="hoverable" data-content="ryan@mccahan.net">ryan@mccahan.net</a>
        <ul class="social">
          <li><a href="https://github.com/mccahan" aria-label="Visit my GitHub" data-tippy-content="GitHub"><?php echo file_get_contents(__DIR__.'/dist/icon-github.svg'); ?></a></li>
          <li><a href="https://keybase.io/mccahan" aria-label="Visit my Keybase" data-tippy-content="Keybase"><?php echo file_get_contents(__DIR__.'/dist/icon-keybase.svg'); ?></a></li>
          <li><a href="https://twitter.com/mccahan" aria-label="Visit my Twitter" data-tippy-content="Twitter"><?php echo file_get_contents(__DIR__.'/dist/icon-twitter.svg'); ?></a></li>
          <li><a href="https://www.linkedin.com/in/ryanmccahan/" aria-label="Visit my LinkedIn" data-tippy-content="LinkedIn"><?php echo file_get_contents(__DIR__.'/dist/icon-linkedin.svg'); ?></a></li>
        </ul>
      </div>
      <div class="photo">
        <img src="dist/me.jpg" srcset="dist/me@2x.jpg 2x" alt="Ryan McCahan photo" width="270" height="270">
      </div>
    </div>
  </section>

  <?php /* The following line is used ONLY for development and can be removed in production */ ?>
  <?php if (php_sapi_name() == 'cli-server'): ?><script src="//localhost:35729/livereload.js"></script><?php endif; ?>
  <script src="dist/main.min.js?<?php echo filemtime(__DIR__.'/dist/main.min.js'); ?>"></script>
</body>
</html>
