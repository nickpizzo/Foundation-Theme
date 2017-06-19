<div class="page-wrap">
  <header class="l-header" role="banner">

    <div class="l-branding">
      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="site-logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
      <?php endif; ?>
      <?php print render($page['branding']); ?>
    </div>

    <?php print render($page['navigation']); ?>

    <!-- Mobile Nav Bar -->
    <div class="off-canvas-content" data-off-canvas-content>
      <div class="title-bar">
        <div class="title-bar-left">
          <button class="menu-icon" type="button" data-toggle="offCanvas"></button>
          <span class="title-bar-title">Foundation title bar with top off-canvas</span>
        </div>
      </div>
    </div>

    <!-- Mobile Nav Hidden Menu -->
    <div class="off-canvas position-left" id="offCanvas" data-off-canvas>
      <!-- Close button -->
      <button class="close-button" aria-label="Close menu" type="button" data-close>
        <span aria-hidden="true">&times;</span>
      </button>
      <!-- Menu -->
      <?php print render($page['navigation']); ?>
    </div>
  </header>

  <?php print render($page['sidebar_first']); ?>
  <?php print render($page['sidebar_second']); ?>

  <div class="l-main">
    <div class="l-content" role="main">
      <?php print render($page['highlighted']); ?>
      <?php print $breadcrumb; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div>
  </div>

  <footer class="l-footer" role="contentinfo">
    <?php print render($page['footer']); ?>
  </footer>
</div>
