<?php $args = array(
        'post_type' => 'post_type',
        'showposts' => 200,
        'orderby' => 'menu_order',
        'order' => 'ASC'
    );
    $customquery = new WP_Query( $args ); ?>


<?php
    $group = 0;
    while ( $customquery->have_posts() ) : $customquery->the_post();


    $ifGroup = ($group % 2) == 0;
    echo $containerStart = $ifGroup ? '<div class="post-group-of-2">' : ''; ?>

    <a href="#"><?php echo $post->post_name; ?></a>
    <p>Description</p>

    <?php echo $containerEND = $ifGroup ? '' : '<div class="clear"></div></div>';
    $group++;
    ?>
<?php endwhile; wp_reset_query(); ?>
