<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Docile
 */
$GLOBALS['docile_theme_options'] = docile_get_options_value();
global $docile_theme_options;
$enable_header = absint($docile_theme_options['docile_enable_top_header']);
$enable_menu   = absint($docile_theme_options['docile_enable_top_menu']);
$enable_social = absint($docile_theme_options['docile_enable_top_header_social']);
$enable_date = absint($docile_theme_options['docile_enable_top_date']);
$header_ads = absint($docile_theme_options['docile_enable_header_ads']);
$ads_image = esc_url($docile_theme_options['docile-header-ads-image']);
$ads_link = esc_url($docile_theme_options['docile-header-ads-image-link']);
$offcanvas = absint($docile_theme_options['docile_enable_offcanvas']);
$search_header = absint($docile_theme_options['docile_enable_search']);
$enable_main_trending = absint($docile_theme_options['docile_enable_trending_news_big']);
$logo_position = esc_attr($docile_theme_options['docile-logo-position']);
?>

<header class="header-1">
	<?php if( $enable_header == 1 ){ ?>
		<section class="top-bar-area">
			<div class="container">
				<div class="row">
					<?php if( $enable_menu == 1 ) { ?>
					<div class="col-lg-8 col-md-12 col-sm-12 align-self-center">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'top-menu',
							'menu_id'        => 'top-menu',
							'container' => 'ul',
							'menu_class'      => 'top-menu'
						));
						?>
					</div>
					<?php } ?>
					<div class="col-lg-4 col-md-12 col-sm-12 align-self-center">
						<div class="top_date_social">
							<?php if( $enable_date == 1 ) { ?>
								<div class="today-date">
									<p><?php echo date_i18n(__('l, F d, Y','docile')); ?></p>
								</div>
							<?php } ?>
							
							<?php if( $enable_social == 1 ){ ?>
								<div class="social-links">
									<?php
										wp_nav_menu( array(
											'theme_location' => 'social',
											'menu_id'        => 'social-menu',
											'menu_class'     => 'docile-social-menu',
										) );
									?>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php } ?>		
	<?php $header_image = esc_url(get_header_image());
	$header_class = ($header_image == "") ? '' : 'header-image';
	?>
	<section class="main-header <?php echo esc_attr($header_class); ?>" style="background-image:url(<?php echo esc_url($header_image) ?>); background-size: cover; background-position: center; background-repeat: no-repeat;">
		<div class="head_one clearfix <?php echo esc_attr($logo_position);?>">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 align-self-center">
						<div class="logo ">
							<?php
							the_custom_logo();
							if ( is_front_page() && is_home() ) :
								?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
							else :
							?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
							endif;
							$docile_description = get_bloginfo( 'description', 'display' );
							if ( $docile_description || is_customize_preview() ) :
								?>
								<p class="site-description"><?php echo $docile_description; /* WPCS: xss ok. */ ?></p>
							<?php endif; ?>
						</div><!-- .site-logo -->
					</div>
					<?php if(!empty($header_ads) && !empty($ads_image)){ ?>
						<div class="col-lg-8 align-self-center">
							<div class="banner1">
								<a href="<?php echo esc_url($ads_link);?>" target="_blank">
									<img src="<?php echo esc_url($ads_image);?>" alt="">
								</a>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</setion><!-- #masthead -->
	<div class="menu-area">
		<div class="container">
			<div class="row justify-content-between relative">					
				<nav id="site-navigation" class="col-lg-10 col-12 align-self-center">
					<button class="bar-menu">
						<span></span>
						<span></span>
						<span></span>
					</button>
					<div class="docile-home-icon">
						<a href="<?php echo esc_url(home_url('/')); ?>">
                    		<i class="fa fa-home"></i> 
                		</a>
                	</div>
					<div class="main-menu menu-caret">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'container' => 'ul',
							'menu_class'      => ''
						));
						?>
					</div>
				</nav><!-- #site-navigation -->
				<div class="col-lg-2 col-5 align-self-center mob-right">
					<div class="menu_right">
						<?php if( 1 == $offcanvas ){ ?>
						<a class="canvas-btn" href="javascript:void(0)">
							<span></span>
							<span></span>
							<span></span>
						</a>
						<?php } ?>
						<!-- Offcanvas Start-->
						<?php if( 1 == $offcanvas ){ ?>
							<div class="offcanvas__wrapper">
								<div class="canvas-header close-btn" data-focus="canvas-btn">
									<a href="javascript:void(0)"><i class="fa fa-close"></i></a>
								</div>
								<div  class="canvas-header offcanvas__block">
									<div class="canvas-header-block">
										<?php if ( is_active_sidebar('offcanvas') ) { ?>
											<div class="offcanvas-sidebar-area">
												<?php dynamic_sidebar('offcanvas'); ?>
											</div>
										<?php }else{ ?>	
										<div class="default-widgets">
											<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
											<div class="widget widget_categories">
												<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'docile' ); ?></h2>
												<ul>
													<?php
													wp_list_categories( array(
														'orderby'    => 'count',
														'order'      => 'DESC',
														'show_count' => 1,
														'title_li'   => '',
														'number'     => 10,
													) );
													?>
												</ul>
											</div>
										</div>
										<?php } ?>
									</div>
								</div>
							</div>
						<?php } ?>
						<!-- Offcanvas End-->
						<?php if( 1 == $search_header ){ ?>
						<div class="search-wrapper">					
							<div class="search-box">
								<a href="javascript:void(0);" class="s_click"><i class="fa fa-search first_click" aria-hidden="true" style="display: block;"></i></a>
								<a href="javascript:void(0);" class="s_click"><i class="fa fa-times second_click" aria-hidden="true" style="display: none;"></i></a>
							</div>
							<div class="search-box-text">
								<?php echo get_search_form(); ?>
							</div>				
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<?php  
    /*
    * Trending Section Hook
    */
    $show_hide = esc_attr($docile_theme_options['docile_enable_trending_news_big']);
    if($show_hide != 'hide-trending'){
        do_action('docile_action_trending');
    }
 ?>




