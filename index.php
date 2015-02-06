<?php get_header(); ?>
	<section id="featured">
	<!-- start slider -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
 <?php query_posts( array(
    'post_type'=>'slider',
    'posts_per_page'=>5,
) ); ?> 

<?php while ( have_posts() ) : the_post(); ?> 
              <li>
                <?php the_post_thumbnail('slider_image'); ?>
                <div class="flex-caption">
                    <h3><?php the_title(); ?></h3> 
					<p><?php the_excerpt(); ?></p> 
					<a href="#" class="btn btn-theme">Learn More</a>
                </div>
              </li>
<?php  endwhile; ?> 

<?php    wp_reset_query(); ?> 


            </ul>
        </div>
	<!-- end slider -->
			</div>
		</div>
	</div>	
	
	

	</section>
	<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="big-cta">
					<div class="cta-text">
						<h2><span>Moderna</span> HTML Business Template</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
<!--
--hear is quary of service
-->
<?php
global $post;
$args = array( 'posts_per_page' => 4, 'post_type'=> 'service' );
$myposts = get_posts( $args );
foreach( $myposts as $post ) : setup_postdata($post); ?>

    <?php 
        $service_icon = get_post_meta($post->ID, 'service_icon', true); 
    ?>

<div class="col-md-3">
    <div class="box">
        <div class="box-gray aligncenter">
            <h4><?php the_title(); ?></h4>
            <div class="icon">
            <i class="fa fa-<?php echo $service_icon; ?> fa-3x"></i>
            </div>
            <p>
            <?php the_excerpt(); ?>
            </p>

        </div>
        <div class="box-bottom">
            <a href="#">Learn more</a>
        </div>
    </div>
</div>
<?php endforeach; ?>


				</div>
			</div>
		</div>
		<!-- divider -->
		<div class="row">
			<div class="col-md-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		<!-- end divider -->
		<!-- Portfolio Projects -->
		<div class="row">
			<div class="col-md-12">
				<h4 class="heading">Recent Works</h4>
				<div class="row">
					<section id="projects">
					<ul id="thumbs" class="portfolio">
						<!-- Item Project and Filter Name -->
<?php
global $post;
$args = array( 'posts_per_page' => 4, 'post_type'=> 'portfolio' );
$myposts = get_posts( $args );
foreach( $myposts as $post ) : setup_postdata($post); ?>

    <?php 
        $image_variable = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'small' ); 
    ?>
<li class="col-md-3 design" data-id="id-0" data-type="web">
<div class="item-thumbs">

<!-- Fancybox - Gallery Enabled - Title - Full Image -->
<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?php the_excerpt(); ?>" href="<?php echo $image_variable[0]; ?>">
<span class="overlay-img"></span>
<span class="overlay-img-thumb font-icon-plus"></span>
</a>
<!-- Thumb Image and Description -->
<?php the_post_thumbnail('portfolio_image'); ?>
</div>
</li>
<?php endforeach; ?>

						<!-- End Item Project -->
					</ul>
					</section>
				</div>
			</div>
		</div>

	</div>
	</section>
	<?php get_footer(); ?>