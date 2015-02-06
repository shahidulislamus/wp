<?php
add_action('init','moderna_theme_custom_post');
function moderna_theme_custom_post(){
    register_post_type('slider',array(
          'public' => true,
          'label'  => 'slides',
        'labels'=>array(
            'name'=>'slider',
            'singular_name'=>'slide',
            'add_new'=>'add new slide',
        ),
        'supports'=>array(
            'title','editor','thumbnail','excerpt','',
        ),
        ''=>'',
    ));
    
    
    register_post_type('service',array(
          'public' => true,
          'label'  => 'service',
        'labels'=>array(
            'name'=>'services',
            'singular_name'=>'service',
            'add_new'=>'add new service',
        ),
        'supports'=>array(
            'title','editor','custom-fields','excerpt',
        ),
        ''=>'',
    ));
    
    
    register_post_type('portfolio',array(
          'public' => true,
          'label'  => 'portfolio set',
        'labels'=>array(
            'name'=>'portfolios',
            'singular_name'=>'portfolio',
            'add_new'=>'add a new portfolio item',
        ),
        'supports'=>array(
            'title','thumbnail','excerpt','',
        ),
        'menu_icon'=>'dashicons-images-alt',
    ));
    
}
