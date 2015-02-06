<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta <?php bloginfo( 'charset' ); ?>>
<title>Moderna - Bootstrap 3 flat corporate template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!-- css -->
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?php echo get_template_directory_uri(); ?>/css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/jcarousel.css" rel="stylesheet" />
<link href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css" rel="stylesheet" />
<link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" />
<link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet" />


 
<link href="<?php echo get_template_directory_uri(); ?>/skins/default.css" rel="stylesheet" />

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php home_url(); ?>">
                        <?php $logo= ot_get_option( 'logo_id' );
                            echo $logo;
                        ?>
                    </a>
                </div>
                <div class="navbar-collapse collapse ">
                   <?php 
                        wp_nav_menu(array(
                            'theme_location'=>'header_menu',
                            'menu_class'=>'nav navbar-nav',
                            'fallback_cb'=>'moderna_fallback_menu',
                        ));
                    ?>
                </div>

                  <!--   <ul class="nav navbar-nav">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Features <b class=" icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="components.html">Components</a></li>
								<li><a href="pricingbox.html">Pricing box</a></li>
                            </ul>
                        </li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>-->
                
            </div>
        </div>
	</header>
	<!-- end header -->