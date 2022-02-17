<?php
/** Header */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- Set up Meta -->
<!-- Meta add comments from facebook-->
<meta property='fb:app_id' content='373857973771120' />

<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=yes">
<!-- Remove Microsoft Edge's & Safari phone-email styling -->
<meta name="format-detection" content="telephone=no,email=no,url=no">
<!-- Add external fonts below (GoogleFonts / Typekit) -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/wp-content/themes/starcoder/fancybox/fancybox.css">
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="/wp-content/themes/starcoder/slick/slick.css"/>
<link rel='stylesheet' id='starcoder-css' href='/wp-content/themes/starcoder/starcoder.css' type='text/css' media='all' />
</head>
<body <?php body_class('no-outline'); ?>>
<?php wp_body_open(); ?>

<!-- BEGIN of header -->
<header>
	<div class="container">
		<?php $currLang = pll_current_language('slug'); 
		$homeUrl = '/';
		if ($currLang != 'ru') {
			$homeUrl = '/' . $currLang . '/';
		}
		?>
		<a href="<?php echo $homeUrl; ?>">
			<div class="logo">
				<?php include 'wp-content/themes/starcoder/parts/logo.php'; ?>
				<?php include 'wp-content/themes/starcoder/parts/starcoder.php'; ?>
			</div>
		</a>
		<div class="header__menu">
			<div class="menu_btn"><?php include 'wp-content/themes/starcoder/parts/menu.php'; ?></div>
		</div>
	</div>
</header>
<div class="menu_wrapper">
		<?php if ( has_nav_menu( 'header-menu' ) ) :
			wp_nav_menu( array(
				'theme_location'  => 'header-menu',
				'menu'            => 'Header Menu',
				'container'       => 'nav',
				'container_class' => 'menu',
				'container_id'    => 'main-menu',
				'menu_class'      => 'menu_list',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 0,
			) );
		endif; ?>
		<ul class="header_menu_languages"><?php pll_the_languages(); ?></ul>
		<div class="menu_close_btn">
			<svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46" fill="none">
				<path d="M4 4L42 42M42 4L4 42" stroke="white" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"/>
			</svg></div>
	</div>
<!-- END of header -->
