<?php
global $post;
$args = array( 'posts_per_page' => 10, 'post_type'=> 'put_hear_your_post_type_neme' );
$myposts = get_posts( $args );
foreach( $myposts as $post ) : setup_postdata($post); ?>

    <?php 
        $job_link= get_post_meta($post->ID, 'put_hear_custom_fields_variable', true); //custom fields
    ?>

	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
	<p><?php echo $job_link; ?></p>
<?php endforeach; ?>
