<?php
/**
 * Template Name: Home Page
 */
get_header(); ?>

<main>
	<section class="flex_center" id="section_one" style="background-image: url(<?php the_field('section_one_background'); ?>), linear-gradient(180deg, rgba(0,52,107,1) 0%, rgba(3,88,177,.7) 33%, rgba(233,35,0,1) 99%);;">
		<div class="section_one_content">
			<p class="site_tagline_top cursor" style="color: transparent"><?php the_field("section_one_tagline_1"); ?></p>
			<p class="site_tagline_bottom" style="color: transparent"><?php the_field("section_one_tagline_2"); ?></p>
		</div>
	</section>
	<section id="section_two">
		<div class="section_title_block">
			<h2><?php the_field("section_two_title"); ?></h2>
		</div>
		<div class="section_two_block">
			<div class="section_two_list_photo">
				<div class="section_two_list">
					<?php $education = get_field("section_two_repeater");
					if ($education) {
						foreach( $education as $institution ) {
							$institution_title = $institution['title'];
							$institution_description = $institution['description']; ?>
							<div class="section_two_list-item">
								<div class="section_two_subitems"><?php echo $institution_title; ?></div>
								<p class="section_two_description"><?php echo $institution_description; ?></p>
							</div>
						<?php }
					} ?>
				</div>
				<div class="section_two_photo">
				<?php $image = get_field('section_two_photo');
				if( !empty( $image ) ): ?>
    				<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
				</div>
			</div>
			<div class="section_two_current_job">
				<?php $job_group = get_field('section_two_current_job_group');
				if ($job_group) { ?>
				<div class="section_two_current_job-info">
					<div class="section_two_subitems"><?php echo esc_html($job_group['title']); ?></div>
					<p class="section_two_description"><?php echo esc_html($job_group['description']); ?></p>
				</div>
				<?php }
				$job_levels = get_field('section_two_current_job_levels_group');
				if ($job_levels) { ?>
				<div class="section_two_current_job-skills glazed">
					<div class="section_two_current_job-dev">
						<div class="section_two_current_job-title"><?php echo esc_html($job_levels['title_one']); ?></div>
						<div class="section_two_current_job-skills-items">
							<?php $lvls1 = $job_levels['lvls1'];
							if ($lvls1) {
								foreach( $lvls1 as $lvl1 ) {
									$lvl1_item = $lvl1['item'];
									$lvl1_lvl = $lvl1['lvl']; ?>
									<div class="current_job-skills-items-row">
										<div class="current_job-skills-items-title"><?php echo $lvl1_item; ?></div>
										<div class="current_job-skills-items-lvl" style="background: linear-gradient(90deg, rgb(0 162 232 / 100%) <?php echo $lvl1_lvl; ?>%, #302C3F <?php echo $lvl1_lvl; ?>%);"></div>
									</div>
								<?php }
							}	?>
						</div>
					</div>
					<div class="section_two_current_job-exp">
						<div class="section_two_current_job-title"><?php echo esc_html($job_levels['title_two']); ?></div>
						<div class="section_two_current_job-skills-items">
							<?php $lvls2 = $job_levels['lvls2'];
							if ($lvls2) {
								foreach( $lvls2 as $lvl2 ) {
									$lvl2_item = $lvl2['item'];
									$lvl2_lvl = $lvl2['lvl']; ?>
									<div class="current_job-skills-items-row">
										<div class="current_job-skills-items-title"><?php echo $lvl2_item; ?></div>
										<div class="current_job-skills-items-lvl" style="background: linear-gradient(90deg, rgb(0 162 232 / 100%) <?php echo $lvl2_lvl; ?>%, #302C3F <?php echo $lvl2_lvl; ?>%);"></div>
									</div>
								<?php }
							}	?>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<section id="section_three">
		<div class="section_title_block">
			<h2><?php the_field("section_three_title"); ?></h2>
		</div>
		<?php $works = get_field("section_three_repeater");
		if ($works) {
    	echo '<div class="section_three_slider_wrapper">';
    	foreach( $works as $work ) {
        $work_name = $work['name'];
				$about_description = $work['about_description'];
				$interestiog_description = $work['interestiog_description'];
				$dificults_description = $work['dificults_description'];
				$screenshots = $work['screenshots']; ?>
				<div class="section_three_work_block glazed">
					<div class="work_block-left">
						<div class="work_block-title"><?php echo $work_name; ?></div>
						<div class="work_block-information">
							<?php if($about_description) { ?>
								<div class="work_block-subtitle"><?php the_field("section_three_about_title"); ?></div>
								<p class="work_block-description"><?php echo $about_description; ?></p>
							<?php }
							if($interestiog_description) { ?>
								<div class="work_block-subtitle"><?php the_field("section_three_interesting_title"); ?></div>
								<p class="work_block-description"><?php echo $interestiog_description; ?></p>
							<?php } 
							if($dificults_description) { ?>
								<div class="work_block-subtitle"><?php the_field("section_three_dificults_title"); ?></div>
								<p class="work_block-description"><?php echo $dificults_description; ?></p>
							<?php } ?>
						</div>
					</div>
					<div class="work_block-right">
						<?php if( $screenshots ): ?>
    					<div class="work_block-gallery">
						<?php foreach( $screenshots as $image ): ?>
            				<div class="work_block-gallery-item">
								<a href="<?php echo esc_url($image['url']); ?>" data-fancybox="gallery">
                    				<img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                				</a>
							</div>
       					<?php endforeach; ?>
						</div>
						<?php endif; ?>
					</div>
					<button class="section_three_btn_prev"><?php the_field("section_three_btn_prev"); ?></button>
					<button class="section_three_btn_next"><?php the_field("section_three_btn_next"); ?></button>
				</div>
			<?php }
			echo '</div>';
			} ?>
		</div>
	</section>
	<section id="section_four">
		<div class="section_title_block">
			<h2><?php the_field("section_four_title"); ?></h2>
		</div>
		<p class="section_four_description"><?php the_field("section_four_description"); ?></p>
		<div class="solutions_wrapper">
			<?php
			$posts = get_posts( array(
				'numberposts' => 3,
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
		<div class="section_four_btns_wrapper">
			<?php $currLang = pll_current_language('slug'); 
			$solutionsUrl = '/solutions';
			if ($currLang != 'ru') {
				$solutionsUrl = '/' . $currLang . '/solutions';
			}
			?>
			<a class="section_four_btn" href="<?php echo $solutionsUrl; ?>"><span><?php the_field("section_four_btn"); ?></span></a>
		</div>
	</section>
</main>

<?php get_footer(); ?>
