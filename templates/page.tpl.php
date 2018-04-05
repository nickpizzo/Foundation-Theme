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
		
		<!-- Mobile Nav Top Bar -->
		<div class="off-canvas-content" data-off-canvas-content>
			<div class="title-bar">
				<div class="title-bar-left">
					<div class="mobile-buttons-left">
						<button class="menu-icon" id="menu-toggle" type="button"
						        data-toggle="offCanvas"></button>
						<h6>MENU</h6>
											<?php print render($page['header-top-left']); ?>
					</div>
					<div class="mobile-buttons-right">
						<a href="/user"><i class="fa fa-user-circle"></i></a>
						<a href="/cart"><i class="fa fa-shopping-cart"></i></a>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Desktop Logo & Nav Bar -->
		<div id="logo-wrap">
					<?php if ($logo): ?>
						<?php print render($page['logo-left']); ?>
			  <a href="<?php print $front_page; ?>"
			     title="<?php print t('Home'); ?>" rel="home"
			     class="site-logo"><img src="<?php print $logo; ?>"
			                            alt="<?php print t('Home'); ?>"
			                            id="main-logo"/></a>
						<?php print render($page['logo-right']); ?>
					<?php endif; ?>
			
			<div id="mobile-search-wrap">
							<?php print render($page['searchbar-right']); ?>
			</div>
			
			<div id="nav-wrap" class="row align-middle align-center">
							<?php print render($page['navigation']); ?>
			</div>
			
			<div id="header-callout-wrap">
				<div class="container">
									<?php print render($page['header-callout']); ?>
				</div>
			</div>
		
		</div>
		
		<!-- Mobile Choose vehicle -->
		<ul class="vertical menu accordion-menu" data-accordion-menu>
			<li>
				<a class="choose-vehicle-trigger" href="#"><h5>Choose
						Vehicle</h5></a>
				<ul class="menu vertical nested">
					<div class="mobile-filters-wrap">
					
					</div>
				</ul>
			</li>
		</ul>
		
		<!--Mega Menu dropdowns-->
		<div class="mega-menu">
			<div class="dropdown-pane bottom"
			     id="shop-parts-dropdown" data-dropdown
			     data-options="closeOnClick:true; hover: true; hoverPane: true; vOffset:11">
				<div class="container">
									<?php print render($page['parts-dropdown']); ?>
				</div>
			
			</div>
		</div>
	
	</header>
	
	<?php if (drupal_is_front_page()): ?>
	  <div id="frontpage-banner">
				<?php print render($page['frontpage-banner']); ?>
	  </div>
	  
	  <div id="searchbar-wrap">
		  <div class="container">
						<?php print render($page['searchbar-left']); ?>
						<?php print render($page['searchbar-right']); ?>
		  </div>
	  </div>
	
	<?php endif; ?>
	
	<?php if (!drupal_is_front_page()): ?>
	  <div id="interior-banner-wrap">
				<?php print render($page['interior-banner']); ?>
	  </div>
	  
	  <div id="searchbar-wrap">
		  <div class="container">
						<?php print render($page['searchbar-left']); ?>
						<?php print render($page['searchbar-right']); ?>
		  </div>
	  
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
	  <div id="frontpage-about-wrap" class="container">
				<?php print render($page['frontpage-about']); ?>
	  </div>
	  
	  <div class="container">
				<?php print render($page['frontpage-categories']); ?>
	  </div>
	  
	  <div class="container">
				<?php print render($page['frontpage-top-sellers']); ?>
	  </div>
	  
	  <div id="our-services-wrap">
		  <div class="container">
						<?php print render($page['frontpage-our-services']); ?>
		  </div>
	  </div>
	
	
	
	<?php endif; ?>
	
	<div id="dream-jeeps-wrap">
			<?php print render($page['frontpage-dream-jeeps']); ?>
	</div>
	
	<div id="pre-footer-wrap">
		<div class="container">
		   <?php print render($page['pre_footer_left']); ?>
		   <?php print render($page['pre_footer_right']); ?>
		</div>
	</div>
	
	<footer id="footer-wrap">
		<div class="container">
			<div class="row">
			   <?php print render($page['footer_first']); ?>
			   <?php print render($page['footer_second']); ?>
			   <?php print render($page['footer_third']); ?>
			</div>
			<div class="row">
							<?php print render($page['footer_fourth']); ?>
			</div>
			<div id="credits-wrap" class="row">
				<div id="credits">
									<?php print('&copy;' . date('Y') . ' '); ?>
									<?php if (!empty(variable_get('site_name'))): ?>
										<?php print variable_get('site_name'); ?>
									<?php endif; ?>
					<br/>Website designed by <a
					  href="http://www.completewebsol.com" href="_blank">Complete Web
						Solutions</a>
				</div>
			</div>
		</div>
	</footer>
</div>
