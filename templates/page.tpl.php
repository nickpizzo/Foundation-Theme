<div class="page-wrap">
  <header class="header" role="banner">

	  <!-- Desktop Nav Bar -->
    <div class="branding">
      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="site-logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
      <?php endif; ?>
      <?php print render($page['branding']); ?>
    </div>
  </header>

	<div id="main-nav">
    <?php print render($page['navigation']); ?>
	</div>

  <!-- Mobile Nav Bar -->
  <div class="off-canvas-content" data-off-canvas-content>
    <div class="title-bar">
      <div class="title-bar-left">
        <button class="menu-icon" type="button" data-toggle="offCanvas"></button>
<!--          <span class="title-bar-title">Foundation title bar with top off-canvas</span>-->
      </div>
    </div>
  </div>

  <!-- Mobile Nav Hidden Menu -->
  <div class="off-canvas position-left" id="offCanvas" data-off-canvas data-transition="overlap">
    <!-- Close button -->
    <button class="close-button" aria-label="Close menu" type="button" data-close>
      <span aria-hidden="true">&times;</span>
    </button>
    <!-- Menu -->
    <?php print render($page['navigation']); ?>
  </div>


  <?php print $messages; ?>
  <?php print render($page['highlighted']); ?>
	<!--      --><?php //print $breadcrumb; ?>
  <?php print render($title_suffix); ?>

	<div class="main">
		<div class="row content" role="main">
			<div id="top-content">
        <?php print render($page['sidebar_first']); ?>
        <?php print render($page['sidebar_second']); ?>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?>
					<h1><?php print $title; ?></h1>
        <?php endif; ?>
			</div>

			<div id="main-content">
        <?php print render($tabs); ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
					<ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
        <?php print render($page['content']); ?>
        <?php print $feed_icons; ?>
			</div>

		</div>
	</div>

	<footer id="footer-wrap">
		<div class="row">
      <?php print render($page['footer_first']); ?>
      <?php print render($page['footer_second']); ?>
      <?php print render($page['footer_third']); ?>
		</div>
		<div id="credits-wrap" class="row">
			<div id="credits">
        <?php print('&copy;' . date('Y') . ' ');?>
        <?php if (!empty(variable_get('site_name'))):?>
          <?php print variable_get('site_name');?>
        <?php endif;?>
				<br/>Website designed by <a href="http://www.completewebsol.com">Complete Web Solutions</a>
			</div>
		</div>
	</footer>
</div>
