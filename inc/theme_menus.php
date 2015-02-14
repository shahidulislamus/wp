<?php

//register menu by the following way
function shahidul_menus(){
        register_nav_menus(array(
        'header_menu'=>'This menu is going to header',
        'footer_menu'=>'this menu is going to footer__this is for page',
    ));
}
add_action('init','shahidul_menus');







/**
 * Menu fallback. Link to the menu editor if that is useful.
 */
function shahidul_fallback_menu( $args )
{
    if ( ! current_user_can( 'manage_options' ) )
    {
        return;
    }

    // see wp-includes/nav-menu-template.php for available arguments
    extract( $args );

    $link = $link_before
        . '<a href="' .admin_url( 'nav-menus.php' ) . '">' . $before . 'Add a menu' . $after . '</a>'
        . $link_after;

    // We have a list
    if ( FALSE !== stripos( $items_wrap, '<ul' )
        or FALSE !== stripos( $items_wrap, '<ol' )
    )
    {
        $link = "<li>$link</li>";
    }

    $output = sprintf( $items_wrap, $menu_id, $menu_class, $link );
    if ( ! empty ( $container ) )
    {
        $output  = "<$container class='$container_class' id='$container_id'>$output</$container>";
    }

    if ( $echo )
    {
        echo $output;
    }

    return $output;
}








//you can call menu in index or header php by the following way 
/*
<?php 
	wp_nav_menu(array(
		'theme_location'=>'header_menu',
		'menu_class'=>'nav',
		'fallback_cb'=>'shahidul_fallback_menu',
	));
?>
*/









//another fall back menu.. this function call page list but hear is some problem when it find huge page

/*
function moderna_fallback_menu(){
    echo '<ul class="nav navbar-nav">';
    if('page' != get_option('show_on_front')){
        echo '<li><a href="'. site_url() . '/">Home</a></li>';
    }
    wp_list_pages('title_li=');
    echo'</ul>';
}
*/
