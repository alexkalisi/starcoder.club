<?php
/*
 * Template Name: Solutions template
 * Template Post Type: solution
 */
  
get_header();  ?>

<main class="work_template">
    
    <div class="work_block glazed">
        <div class="work_title-block">
            <h1><?php the_title(); ?></h1>
            <p class="work_p"><?php the_field("work_after_title"); ?></p>
        </div>
        <div class="work_block-top">
            <div class="work_block-smalldesc">
                <h2><?php the_field("work_title_one"); ?></h2>
                <p class="work_p"><?php the_field("work_description_one")?></p>
            </div>
        </div>
        <?php if (get_field("work_title_example")) { ?>
        <div class="work_block-examples">
            <h2><?php the_field("work_title_example"); ?></h2>
            <div><?php the_field("work_example"); ?></div>
        </div>
        <?php } ?>
        <div class="work_block-middle">
            <h2><?php the_field("work_title_two"); ?></h2>
            <p class="work_p"><?php the_field("work_description_two"); ?></p>
            <?php $work_codes = get_field("work_code");
				if ($work_codes) {
                    echo '<div class="work_block-codes">';
					foreach( $work_codes as $work_code ) {
						$title = $work_code['title']; ?>
						<div class="work_block-codes-item">
                            <h2><?php echo $title; ?></h2>
                            <div class="work_block-codes-wrapper"><?php echo $work_code['code']; ?></div>
                        </div>
                    <?php } 
                    echo '</div>';
				} ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>