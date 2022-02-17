<?php
add_action('wp_enqueue_scripts', 'load_posts');
function load_posts()
{
    $arg_posts = [
        'post_type' => 'project', /*<-- Enter name of Custom Post Type here*/
        'order' => 'DESC',
        'orderby' => 'date',
        'posts_per_page' => 6,
        'paged' => 1,
    ];
    $args = [
        'url' => admin_url('admin-ajax.php'),
        'query' => $arg_posts,
    ];
    wp_localize_script('global', 'posts', $args);
}
add_action('wp_ajax_load_posts', 'loadPosts');
add_action('wp_ajax_nopriv_load_posts', 'loadPosts');
function loadPosts(){
    ob_start();
    $args = $_POST['query'];
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <?php $item = get_post(); ?>
            <?php $desktop = get_field('desktop',$item); ?>
            <?php $tablet = get_field('tablet', $item); ?>
            <?php $mobile = get_field('mobile',$item); ?>
            <div class="large-4 medium-6 cell" >
                <a href="<?php echo get_the_permalink($item) ?>">
                    <div class="home__projects-item">
                        <div class="home__projects-item-top-triangle">
                            <?php display_svg(IMAGES_FOLDER . 'triangle-border.svg'); ?>
                        </div>
                        <div class="home__projects-item-bottom-triangle">
                            <?php display_svg(IMAGES_FOLDER . 'trian-bottom.svg'); ?>
                        </div>
                        <div class="home__projects-item-right-triangle">
                            <?php display_svg(IMAGES_FOLDER . 'trian-bottom.svg'); ?>
                        </div>
                        <div class="home__projects-item-desktop">
                            <?php echo wp_get_attachment_image($desktop['id'],'full'); ?>
                        </div>
                        <div class="home__projects-item-mobile">
                            <?php echo wp_get_attachment_image($mobile['id'],'full'); ?>
                        </div>
                        <div class="home__projects-item-tablet">
                            <?php echo wp_get_attachment_image($tablet['id'],'full'); ?>
                        </div>
                    </div>
                </a>
            </div>
        <?php endwhile; ?>
    <?php endif;
    $info['full'] = $the_query->max_num_pages == $args['paged'] ? true : false;
    wp_reset_query();
    $data = ob_get_clean();
    $info['data'] = $data;
    wp_send_json_success($info);
    wp_die();
}
