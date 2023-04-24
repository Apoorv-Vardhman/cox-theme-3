<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Pooja Sinha">
    <title>
        <?php
        bloginfo( 'name' );
        wp_title();
        if(is_front_page())
        {
            echo " | ";
            bloginfo('description');
        }
        ?>
    </title>
    <?php wp_head() ?>

</head>

<body class="body-wrapper" <?php body_class(); ?>  >

<header class="header-wrap header-2">
    <?php
        global $wpdb;
        $table_name = $wpdb->prefix . "cox_setting";
        $sql = "select * from $table_name where type='info' or type='social'";
        $result = $wpdb->get_results( $wpdb->prepare($sql) );
        $site_email = "";
        $site_address = "";
        $site_phone = "";
        $facebook = "";
        $twitter = "";
        $linked_in = "";
        $instagram = "";
        $youtube = "";
        foreach ($result as $item){
            if($item->name=="youtube"){
                $youtube = $item->value;
            }else if($item->name=="instagram"){
                $instagram = $item->value;
            }else if($item->name=="linked_in"){
                $linked_in = $item->value;
            }else if($item->name=="twitter"){
                $twitter = $item->value;
            }else if($item->name=="facebook"){
                $facebook = $item->value;
            }else if($item->name=="address"){
                $site_address = $item->value;
            }else if($item->name=="email"){
                $site_email = $item->value;
            }else if($item->name=="phone"){
                $site_phone = $item->value;
            }

        }
    ?>
    <?php
        if(isset($site_email) && isset($site_address) ){ ?>
            <div class="header-top-bar text-white d-none d-sm-block">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-9 col-sm-9">
                            <ul class="top-left-content">
                                <?php
                                if($site_email):
                                    ?>
                                    <li><a href="mailto:<?php echo $site_email; ?>" target="_blank"><i class="fas fa-envelope"></i> <?php echo $site_email; ?></a> </li>
                                <?php
                                endif;
                                ?>
                                <?php
                                if($site_address):
                                    ?>
                                    <li><i class="fas fa-map-marker-alt"></i> <?php echo $site_address; ?></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-sm-3 text-end">
                            <div class="top-social-icons">
                                <?php
                                if($facebook): ?>
                                    <a href="<?php echo $facebook ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <?php
                                endif;
                                ?>
                                <?php
                                if($twitter): ?>
                                    <a href="<?php echo $twitter ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                                <?php
                                endif;
                                ?>
                                <?php if($instagram): ?>
                                    <a href="<?php echo $instagram ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                                <?php endif; ?>
                                <?php if($linked_in): ?>
                                    <a href="<?php echo $linked_in; ?>"><i class="fab fa-linkedin-in"></i></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
     <?php }
    ?>

    <div class="main-header-wrapper">
        <div class="container-fluid align-items-center justify-content-between d-flex">
            <div class="logo">
                <a href="<?php echo site_url(); ?>">
                    <?php
                    $logo = get_header_image();
                    ?>
                    <?php
                    if($logo)
                    { ?>
                        <img src="<?php echo $logo ?>">
                    <?php   }
                    else { ?>
                        <h1>
                            <?php
                            bloginfo( 'name' );
                            ?>
                        </h1>
                    <?php  }
                    ?>

                </a>
            </div>
            <div class="main-menu d-none d-lg-block">
                <?php
                /*
                 * https://developer.wordpress.org/reference/functions/wp_nav_menu/
                 * */
                wp_nav_menu(array(
                    'theme_location'=>'primary-menu',
                    'menu_class'=>''
                )) ?>
            </div>
            <div class="d-inline-block d-lg-none">
                <div class="mobile-nav-wrap">
                    <div id="hamburger">
                        <i class="fas fa-bars"></i>
                    </div>
                    <!-- mobile menu - responsive menu  -->
                    <div class="mobile-nav">
                        <button type="button" class="close-nav">
                            <i class="fas fa-times-circle"></i>
                        </button>
                        <nav class="sidebar-nav">
                            <ul class="metismenu" id="mobile-menu">
                                <?php
                                /*
                                 * https://developer.wordpress.org/reference/functions/wp_nav_menu/
                                 * */
                                wp_nav_menu(array(
                                    'theme_location'=>'mobile-menu',
                                    'menu_class'=>''
                                ))
                                ?>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="overlay"></div>
            </div>
            <div class="right-elements d-none d-xl-flex d-flex align-items-center">
                <div class="search-icon">
                    <a href="#" class="search-btn"><i class="fas fa-search"></i></a>
                    <div class="search-box">
                        <?php
                        get_search_form( );
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

