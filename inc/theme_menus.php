<?php


function moderna_menus(){
        register_nav_menus(array(
        'header_menu'=>'This menu is going to header',
        'footer_menu'=>'this menu is going to footer__this is for page',
    ));
}
add_action('init','moderna_menus');



function moderna_fallback_menu(){
    echo '<ul class="nav navbar-nav">';
    if('page' != get_option('show_on_front')){
        echo '<li><a href="'. site_url() . '/">Home</a></li>';
    }
    wp_list_pages('title_li=');
    echo'</ul>';
}