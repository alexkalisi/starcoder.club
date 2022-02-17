<?php
/**
 * Template Name: Solutions Page
 */
get_header(); ?>

<main class="solution_main">
    <section id="solutions_section">
		<div class="section_title_block">
			<h2><?php the_title(); ?></h2>
		</div>
		<p class="solutions_section_description"><?php the_field("solutions_section_description"); ?></p>
		<div class="solutions_wrapper">
			<?php
			$posts = get_posts( array(
				'numberposts' => 0,
				'category'    => 0,
				'orderby'     => 'date',
				'order'       => 'DESC',
				'include'     => array(),
				'exclude'     => array(),
				'meta_key'    => '',
				'meta_value'  =>'',
				'post_type'   => 'solutions',
				'suppress_filters' => true,
			) );	
			foreach( $posts as $post ){
			setup_postdata($post); ?>
				<div class="solutions_block glazed">
					<?php if (has_post_thumbnail()) { ?>
					<div class="solution_block-thumb"><?php the_post_thumbnail(); ?></div>
					<?php } ?>
					<div class="solution_block-info">
						<a href="<?php echo esc_url(get_permalink()); ?>" class="solution_block-href"><?php the_title(); ?></a>
						<p class="solution_block-description"><?php the_field("work_short_description"); ?></p>
					</div>
				</div>
			<?php }
			wp_reset_postdata(); ?>
		</div>
	</section>
</main>

<?php get_footer(); ?>