<?php
/**
 * Footer
 */
?>
<!-- BEGIN of footer -->
<footer id="footer">
	<section class="footer_top">
		<div class="footer_left_section">
			<div class="footer_title"><?php the_field("footer_title", pll_current_language()); ?></div>
			<div class="footer_mail_block">
				<p><?php the_field("footer_above_mail", pll_current_language()); ?></p>
				<a href="<?php the_field("mail", pll_current_language()); ?>"><?php the_field("mail", pll_current_language()); ?></a>
			</div>
		</div>
		<div class="footer_right_section">
			<div class="footer_developer_block">
				<div class="footer_developer_img">
					<?php $image = get_field("footer_developer_photo", pll_current_language());
					if( !empty( $image ) ): ?>
    					<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
				</div>
				<div class="footer_developer_info">
					<div class="footer_developer_name"><?php the_field("footer_developer", pll_current_language()); ?></div>
					<p class="footer_ander_developer"><?php the_field("footer_ander_developer", pll_current_language()); ?></p>
				</div>
			</div>
			<div class="footer_media_block">
				<?php $media_urls = get_field("media_repeater", pll_current_language());
				if ($media_urls) {
					foreach( $media_urls as $media_url ) {?>
						<a href="<?php echo esc_attr($media_url['url']); ?>" target="_blank"><div class="footer_media_ico"><?php echo $media_url['ico']; ?></div></a>
					<?php }
				} ?>
			</div>
		</div>
	</section>
	<section class="footer_bottom">
		<div class="footer_powered">
			<p>© <?php echo date("Y") . ' ' . get_field("footer_ander", pll_current_language()); ?></p>
		</div>
		<div class="footer_menu_wrapper">
            <?php if ( has_nav_menu( 'header-menu' ) ) :
			wp_nav_menu( array(
				'theme_location'  => 'header-menu',
				'menu'            => 'Header Menu',
				'container'       => 'nav',
				'container_class' => 'menu',
				'container_id'    => 'footer-menu',
				'menu_class'      => 'footer_menu_list',
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
            </div>
	</section>
</footer>

<!-- END of footer -->

<?php //wp_footer(); ?>

<script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/starcoder/fancybox/fancybox.js"></script>
<script type="text/javascript" src="/wp-content/themes/starcoder/starcoder.js"></script>
<script type="text/javascript" src="/wp-content/themes/starcoder/slick/slick.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/starcoder/slick.init.js"></script>
</body>
</html>
