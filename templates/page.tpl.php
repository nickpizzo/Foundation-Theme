<?php drupal_add_library('system', 'ui.accordion'); ?>
<div class="page-wrap">
	<header class="header" role="banner">

		<!-- Header Top bar -->
		<div id="header-top-bar-wrap">
			<div class="container">
				<div class="row align-middle align-justify">
					<div id="header-top-left">
	                  <?php print render($page['header-top-left']); ?>
	                  <?php print render($page['header-search']); ?>
					</div>
					<div id="header-top-right">
	                  <?php print render($page['header-top-right']); ?>
					</div>
				</div>
			</div>
		</div>

		<!-- Mobile Nav Bar -->
		<div class="off-canvas-content" data-off-canvas-content>
			<div class="title-bar">
				<div class="title-bar-left">
					<div class="mobile-buttons-left">
						<button class="menu-icon" type="button"
						        data-toggle="offCanvas"></button>
						<button data-toggle="mobile-search-dropdown"><i
							  class="fa fa-search"></i></button>
                      <?php print render($page['header-top-left']); ?>
					</div>
					<div class="mobile-buttons-right">
						<a href="/user"><i class="fa fa-user"></i></a>
						<a href="/cart"><i
							  class="fa fa-shopping-cart"></i></a>
					</div>
				</div>

			</div>
			<!-- Mobile Search Dropdown -->
			<div class="mobile-nav-search-wrap">
				<div class="dropdown-pane" id="mobile-search-dropdown"
				     data-dropdown data-auto-focus="true">
                  <?php print render($page['header-top-left']); ?>
				</div>
			</div>
		</div>

		<!-- Desktop Logo & Nav Bar -->
		<div id="logo-wrap">
			<div class="row align-middle align-center">
              <?php if ($logo): ?>
				  <a href="<?php print $front_page; ?>"
				     title="<?php print t('Home'); ?>" rel="home"
				     class="site-logo"><img src="<?php print $logo; ?>"
				                            alt="<?php print t('Home'); ?>"
				                            id="main-logo"/></a>
              <?php endif; ?>

			</div>

			<div id="nav-wrap" class="row align-middle align-center">
              <?php print render($page['navigation']); ?>
			</div>
		</div>

	</header>

  <?php if (drupal_is_front_page()): ?>
	  <div id="frontpage-banner">
        <?php print render($page['frontpage-banner']); ?>
	  </div>

	  <div id="mounting-brackets-wrap">
        <?php print render($page['mounting-brackets']); ?>
	  </div>

	  <div id="led-lighting-wrap">
		  <div class="row">
            <?php print render($page['led-lighting']); ?>
		  </div>
	  </div>

  <?php endif; ?>

  <?php if (!drupal_is_front_page()): ?>
	  <div id="interior-banner-wrap">
        <?php print render($page['interior-banner']); ?>
	  </div>
  <?php endif; ?>


	<!-- Mobile Nav Hidden Menu -->
	<div class="off-canvas position-left" id="offCanvas" data-off-canvas
	     data-transition="overlap">
		<!-- Close button -->
		<button class="close-button" aria-label="Close menu" type="button"
		        data-close>
			<span aria-hidden="true">&times;</span>
		</button>
		<a href="<?php print $front_page; ?>">
			<img src="/sites/all/themes/Foundation-Theme/images/image.png" alt="">
		</a>
		<!-- Menu -->
      <?php print render($page['navigation']); ?>
	</div>


	<div id="main" class="container">
      <?php print $messages; ?>
      <?php print render($page['highlighted']); ?>
		<!--      --><?php //print $breadcrumb; ?>
      <?php print render($title_suffix); ?>

		<div class="main-content-wrap" role="main">
			<div id="sidebar">
              <?php print render($page['sidebar_first']); ?>
              <?php print render($page['sidebar_second']); ?>
			</div>

			<!--Mobile products filter-->
			<div id="mobile-sidebar-wrapper">
				<button id="filter-button">Filter Catalog<i
					  class="fa fa-caret-down" aria-hidden="true"></i></button>
				<div id="sidebar-first-collapsible" class="filter-products">
                  <?php print render($page['sidebar_first']); ?>
				</div>
			</div>

			<div id="title-bar">
              <?php print render($title_prefix); ?>
              <?php if ($title): ?>
				  <h1><?php print $title; ?></h1>
              <?php endif; ?>
			</div>

			<div id="main-content">
              <?php print render($tabs); ?>
              <?php print render($page['help']); ?>
              <?php if ($action_links): ?>
				  <ul
					class="action-links"><?php print render($action_links); ?></ul>
              <?php endif; ?>
              <?php print render($page['content']); ?>
              <?php print $feed_icons; ?>
			</div>
		</div>

	</div>
	
	<?php if (drupal_is_front_page()): ?>

	<?php endif; ?>

	<footer id="footer-wrap">
		<div class="container">
		<div class="row">
          <?php print render($page['footer_first']); ?>
          <?php print render($page['footer_second']); ?>
          <?php print render($page['footer_third']); ?>
		</div>
		<div id="credits-wrap" class="row">
			<div id="credits">
              <?php print('&copy;' . date('Y') . ' '); ?>
              <?php if (!empty(variable_get('site_name'))): ?>
                <?php print variable_get('site_name'); ?>
              <?php endif; ?>
				<br/>Website designed by <a
				  href="http://www.completewebsol.com">Complete Web
					Solutions</a>
			</div>
		</div>
		</div>
	</footer>
</div>
