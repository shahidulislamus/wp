<?php 
//menus of this theme
include_once('inc/theme_menus.php');

//default supports
include_once('inc/default_suppports.php');

//customs post
include_once('inc/custom_posts.php');

//widget register

    add_action( 'widgets_init', 'my_moderna_theme_widget' );

    function my_moderna_theme_widget() {
        //widget_1
	register_sidebar( array(
		'name'          => 'footer widget coloum 1',
		'id'            => 'footer_widget_coloum1',
		'description'   => 'put hear a widget to view in footer 1',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="widgetheading">',
		'after_title'   => '</h5>',
	) );
        
        //widget_2
    register_sidebar( array(
		'name'          => 'footer widget coloum 2',
		'id'            => 'footer_widget_coloum2',
		'description'   => 'put hear a widget to view in footer 2',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="widgetheading">',
		'after_title'   => '</h5>',
	) );
    register_sidebar(array(
        'name'          =>'footer widget coloum 3',
        'id'            =>'footer3',
        'description'   =>'colum 3',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="widgetheading">',
		'after_title'   => '</h5>',
    ));
    register_sidebar(array(
        'name'          =>'footer widget coloum 4',
        'id'            =>'footer4',
        'description'   =>'colum 3',
		'before_widget' => '<div class="widget flickr_badge">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="widgetheading">',
		'after_title'   => '</h5>',
    ));
}
add_shortcode('btn','my_custom_shortcode');

function my_custom_shortcode($atts, $content=null){
    extract(shortcode_atts(array(
        'link'  =>'',
        'type'  =>'',
        'text'  =>'',
        'icon'  =>'',
    ),$atts) );
    return'<a href="'.$link.'" class="btn btn-'.$type.'" ><i class="fa fa-'.$icon.'"> </i> '.$text.'</a>';
}

add_shortcode('bar','my_custom_shortcode_bar');

function my_custom_shortcode_bar($atts, $content=null){
    extract(shortcode_atts(array(
        'value'  =>'',
        'active'  =>'',
        'text'  =>'',
        'icon'  =>'',
    ),$atts) );
    return'
<div class=" progress progress-striped '.$active.'">
  <div class="progress-bar" role="progressbar" aria-valuenow="'.$value.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$value.'%">
    <span class="sr-only">'.$value.'% Complete</span>
  </div>
</div>
  ';
}

function my_custom_shortcode_bar_p($atts, $content=null){
    extract(shortcode_atts(array(
        'heading_1'  =>  'aaa',         
        'heading_2'  =>  'pack', 
        'price'  =>  '$15.00 / Month',         
        'button'  =>  'Register now', 
        'feature1'  =>  'Register now', 
        'feature2'  =>  'Register now', 
        'feature3'  =>  'Register now', 
        'feature4'  =>  'Register now', 
        'feature5'  =>  'Register now', 
        'special_class'  =>  'Register now', 
    ),$atts) );

    return'
            <div class="col-lg-4">
				<div class="pricing-box-alt '.$special_class.'">
					<div class="pricing-heading">
						<h3>'.$heading_1.'<strong>'.$heading_2.'</strong></h3>
					</div>
					<div class="pricing-terms">
						<h6>'.$price.'</h6>
					</div>
					<div class="pricing-content">
						<ul>
							<li><i class="icon-ok"></i>'.$feature1.'</li>
							<li><i class="icon-ok"></i>'.$feature2.'</li>
							<li><i class="icon-ok"></i>'.$feature3.'</li>
							<li><i class="icon-ok"></i>'.$feature4.'</li>
							<li><i class="icon-ok"></i>'.$feature5.'</li>
						</ul>
					</div>
					<div class="pricing-action">
						<a href="#" class="btn btn-medium btn-theme"><i class="icon-bolt"></i>'.$button.'</a>
					</div>
				</div>
			</div>

  ';
}
add_shortcode('price_box','my_custom_shortcode_bar_p');




//mce 4.0
include_once('inc/mce.php');
//mce 4.0
include_once('inc/theme-options.php');





/**
 * Required: set 'ot_theme_mode' filter to true.
 */
add_filter( 'ot_theme_mode', '__return_true' );

/**
 * Required: include OptionTree.
 */
require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' ); 
