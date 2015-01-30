how to develope a bootstrap theme to wordpress theme

step 1. at first you have to over look all the markup of html 
step 2. firstly you have to rename index.html to index.php 
step 3. then you should daynamaic all static code
            such as this code |     lang="en"                    | =>          |   <?php language_attributes(); ?>                |
                              |     utf-8                        | =>          |   <?php bloginfo('charset'); ?>                  |
                              | middle of title tag              | =>          |  <?php wp_title('|', true, right); ?>            |
                              | to reach template directory      | =>          |  <?php echo get_template_directory_uri(); ?>     |
step 4. create style.css file in root directory and write details of the theme
            such as
                   /* |don't use white spece after attribute name|
                       Theme Name  : moderna
                       Theme URI   : http://shahidul.net/template/moderna
                       Author      : shahidul islam
                       Author URI  : http://shahidul.net
                       Description : Moderna is a multipurpuse theme for ever. you can use it as your blog as your portfolio website as whatever.
                                     i build it userful for mobile responsive i use all modern techonology for this theme such as html5, css3,
                                     letest virsion of bootstrap and compitible with wordpress 4.1 ..so all decition is depend on your wish. 
                                     thats all about my theme.
                       tags        : lack, blue, gray, pink, purple, white, yellow, dark, light, two-columns, left-sidebar, fixed-layout,
                                     responsive-layout, accessibility-ready, custom-background, custom-colors, custom-header, custom-menu,
                                     editor-style, featured-images, microformats, post-formats, rtl-language-support, sticky-post,
                                      threaded-comments, translation-ready
                   */
step 5. create a screenshot.png (600*450) which is contain your theme home page.
step 6. then check to sure that all contain are daynamic
step 7. then write before end of head tag <?php wp_head(); ?> and write <?php wp_footer(); ?> before the end of body tag.
step 8. then breake theme as header.php, footer.php and so on. and to get header.php you have to write <?php get_header(); ?> and 
        <?php get_footer(); ?> to get footer.
step 9. Usually wordpress use index to show blog but if you don't see the blog to your home page you have to create a welcome template
         named template-welcome.php
step 10. then you have to create daynamic menu following the system
                1. create functions.php
                2. then create 'inc' folder to keep all function file 
                3. and link to that file in functions.php file
                create function in function.php which is in inc/menus.php
                    function shahidul_theme_menus(){
                        register_nav_menus(array(
                            'header_menu'=>'This menu is going to header main menu',
                            'footer_menu'=>'this menu is going to footer'
                        ));
                    }
                    add_action('init','shahidul_theme_menus');
                4. then call this menu in header.php BY wp_nav_menu
                    <?php
                        wp_nav_menu(array(
                            'theme_location'=>'header_menu',
                            'menu_class'=>'nav navbar-nav',
                            'container_class'=>'navbar-collapse collapse',
                            'fallback_cb'=>'shahidul_fallback_cb'
                        ));
                    ?>
                5. and set fall back cb for befor setting manu in function php
                       //fallback cb when it can not find wp_nav_menu which is called from wp_nav_menu(); fallback_cb
                        function shahidul_fallback_cb(){
                            echo'<div class="navbar-collapse collapse "><ul class="nav navbar-nav">';
                            if('page' != get_option('show_on_front')){
                                echo '<li><a href="'.site_url().'">home</a></li>';
                            }
                            wp_list_pages('title_li=');
                            echo'</ul></div>';
                        }

step 11. then do some simple work 
                1. for this you have to define the default theme support
                   like as
                        add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat') );
                        add_theme_support( 'custom-background');
                        add_theme_support( 'custom-header' );
                        add_theme_support( 'post-thumbnails' );
                        add_theme_support( 'automatic-feed-links' );
                        add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
                        add_theme_support( 'title-tag' );
                2. you need some image size
                    Wordpress crop an image = 5 size. Sizes are given belo
                        thumbnail		Thumbnail (default 150px x 150px max)
                        medium 		Medium resolution (default 300px x 300px max)
                        large			Large resolution (default 640px x 640px max)
                        full			Original image resolution (unmodified
                        
                    But, if you need custom size, you can define sizes in functions.php
                    custom image size name, width, height hardcrop t/f
                        add_image_size('slider_image', 1024, 360, true );
                        add_image_size('portfolio_image', 300, 200, true );

                    
step 12. then daynamic the slider such as
               
               1. put this code in function php
                    function shahidul_custom_post_slider(){
                        register_post_type('slider_id',array(
                            'lable'=>'slider_lable',
                            'description'=>'this is description i am use all field to know all work of all function',
                            'public'=>true,
                            'labels'=>array(
                                'name'=>'slider name',
                                'menu_name'=>'slider',
                                'all_items'=>'view all ',
                                'singular_name'=>'add new slide',
                                'add_new'=>'add a new slide',
                            ),
                            'supports'=> array(
                                'title', 'editor', 'thumbnail', 'excerpt' ,'custom-fields'
                            )
                        ));
                    }
                    add_action('init','shahidul_custom_post_slider');
                2. then you have to query this post type
                       <?php
                            global $post;
                            $args = array( 'posts_per_page' => 6, 'post_type'=> 'slider_id' );
                            $myposts = get_posts( $args );
                            foreach( $myposts as $post ) : setup_postdata($post); ?>
                                          <li>
                                            <?php the_post_thumbnail('slider_image'); ?>
                                            <div class="flex-caption">
                                                <h3><?php the_title(); ?></h3> 
                                                <p><?php the_excerpt(excerpt_length); ?></p> 
                                                <a href="#" class="btn btn-theme">Learn More</a>
                                            </div>
                                          </li>
                        <?php endforeach; ?>
                3. there is a problem which is the_excerpt(); leangth if you control this leangth you have to use
                   the following code in function.php which is include essential_function.php

                            function custom_excerpt_length( $length ) {
                                return 30;
                            }
                            add_filter( 'excerpt_length', 'custom_excerpt_length');
                4. to use this control you have to use the_excerpt(excerpt_length);
step 13. now you have to daynamic the promotion area
                1. so create a custom post for promotion area
                        function shahidul_custom_post_promotion(){
                            register_post_type('promotion_id',array(
                                'lable'=>'promotion',
                                'description'=>'this is description i am use all field to know all work of all function',
                                'public'=>true,
                                'labels'=>array(
                                    'name'=>'promotions',
                                    'menu_name'=>'promotion',
                                    'all_items'=>'view all ',
                                    'singular_name'=>'add new promotion',
                                    'add_new'=>'add a new promotion',
                                ),
                                'supports'=> array(
                                    'title', 'editor', 'custom-fields'
                                )
                            ));
                        }
                        add_action('init','shahidul_custom_post_promotion');
                2. then you have to query this custom post but it is not simple as slider hear you have to work with custom-fields
                let me write the custom query with custom field use system
                        <?php
                        global $post;
                        $args = array( 'posts_per_page' => 4, 'post_type'=> 'promotion_id' );
                        $myposts = get_posts( $args );
                        foreach( $myposts as $post ) : setup_postdata($post); ?>

                        <?php 
                            $promotion_link= get_post_meta($post->ID, 'promotion_link', true); //hear you are seeing promotion_link it is custom-field id
                            $promotion_icon= get_post_meta($post->ID, 'promotion_icon', true); 
                        ?>
                    <div class="col-md-3 col-sm-6">
                        <div class="box">
                            <div class="box-gray aligncenter">
                                <h4><?php the_title(); ?></h4>
                                <div class="icon">
                                <i class="fa fa-<?php echo $promotion_icon; ?> fa-3x"></i>
                                </div>
                                <p><?php the_excerpt(excerpt_10); ?></p>

                            </div>
                            <div class="box-bottom">
                                <a href="<?php echo $promotion_link; ?>">Learn more</a>//hear $promotion_link; is variable which keep the custom-field id 
                            </div>
                        </div>
                    </div>

                        <?php endforeach; ?>
