<?php 
global $wpdb;
$table_name = $wpdb->prefix . "cox_setting";
$isTestimonial = false;
$imageUrl = "";
try{
    $sql = "select * from $table_name where type='home' ";
    $homeResult = $wpdb->get_results( $wpdb->prepare($sql) );
    foreach ($homeResult as $item){
        if($item->name == "home_testimonial_enable"){
            if($item->value=="true"){
                $isTestimonial = true;
            }else{
                $isTestimonial = false;
            }
        }
        if($item->name == "home_testimonial_image_url"){
            $imageUrl = $item->value;
        }
    }

} catch (Exception $e) {
    $isTestimonial = false;
}

$args = array(
    'post_type'=>'testimonial',
    'order'=>'ASC'
);
$testimonials = new Wp_Query($args);
if($testimonials->have_posts() && $isTestimonial):
    ?>
    <section class="testimonial-wrapper section-padding pt-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-8 pe-xl-5 col-lg-6 mt-5 mt-lg-0 order-2 order-lg-1">
                    <div class="testimonial-carousel-list owl-carousel me-xl-5">
                        <?php
                        while ( $testimonials->have_posts() ) : $testimonials->the_post();
                            $person_name = get_field('name',get_the_ID());
                            $comment = get_field('comment',get_the_ID());
                            $designation = get_field('designation',get_the_ID());
                            ?>
                            <div class="single-testimonial-carousel">
                                <div class="icon">
                                    <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="" height="100">
                                </div>
                                <p><?php echo $comment; ?></p>
                                <span><b><?php echo $person_name; ?></b> <?php echo $designation; ?></span>
                            </div>
                        <?php
                        endwhile;
                        ?>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 order-1 order-lg-2">
                    <div class="testimonial-img-right">
                        <?php
                            if(isset($imageUrl) && $imageUrl!=""){ ?>
                            <img src="<?php echo $imageUrl ?>" alt="">
                        <?php    }else{  ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial.png" alt="">
                        <?php }
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php

endif;
?>