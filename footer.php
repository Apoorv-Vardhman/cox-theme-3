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
<footer class="footer-2 footer-wrap">
    <div class="footer-widgets-wrapper text-white">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 pe-xl-0 col-sm-6 col-12">
                    <div class="single-footer-wid site_info_widget">
                        <div class="wid-title">
                            <h3>Get In Touch</h3>
                        </div>
                        <div class="contact-us">
                            <div class="single-contact-info">
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="contact-info">
                                    <p><a href="tel:<?php echo $site_phone ?>"><?php echo $site_phone ?></a> </p>
                                </div>
                            </div>
                            <div class="single-contact-info">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="contact-info">
                                    <p><a href="mailto:<?php echo $site_email ?>" target="_blank"><?php echo $site_email ?></a> </p>
                                </div>
                            </div>
                            <div class="single-contact-info">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-info">
                                    <p><?php echo $site_address ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 offset-xl-1 col-xl-3 ps-xl-5 col-12">
                    <div class="single-footer-wid">
                        <div class="wid-title">
                            <h3>Quick Links</h3>
                        </div>
                        <?php
                        /*
                         * https://developer.wordpress.org/reference/functions/wp_nav_menu/
                         * */
                        wp_nav_menu(array(
                            'theme_location'=>'quick-links',
                            'menu_class'=>''
                        ))
                        ?>
                    </div>
                </div> <!-- /.col-lg-3 - single-footer-wid -->

                <div class="col-sm-6 col-xl-4 offset-xl-1 col-12">
                    <div class="single-footer-wid newsletter_widget">
                        <div class="wid-title">
                            <h3>Resources</h3>
                        </div>
                        <?php
                        /*
                         * https://developer.wordpress.org/reference/functions/wp_nav_menu/
                         * */
                        wp_nav_menu(array(
                            'theme_location'=>'resources',
                            'menu_class'=>''
                        ))
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-12 text-center text-md-start">
                    <div class="copyright-info">
                        <p>&copy; <?php echo date('Y') ?> Copyright By <a href="<?php echo bloginfo('url') ?>"><?php
                                bloginfo( 'name' );
                                ?></a>. All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="footer-menu mt-3 mt-md-0 text-center text-md-end">
                        <a href="https://coxalert.com" target="_blank">Cox Enterprises</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer() ?>
</body>

</html>