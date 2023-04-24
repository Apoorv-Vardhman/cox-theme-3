<?php
$args = array(
    'post_type'=>'carousel',
    'order'=>'ASC'
);
$sliders = new Wp_Query($args);
?>
<section class="hero-wrapper hero-2">
    <div class="hero-slider-2 owl-carousel owl-theme">
        <?php
        if($sliders->have_posts()):
            while ( $sliders->have_posts() ) : $sliders->the_post();
                $heading = get_field('heading',get_the_ID());
                $content = get_field('content',get_the_ID());
                $button_link = get_field('button_link',get_the_ID());
                $button_text = get_field('button_text',get_the_ID());
                ?>
                <div class="single-slide bg-cover" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>)">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 pe-lg-5 col-xxl-7 col-lg-9">
                                <div class="hero-contents pe-lg-3">
                                    <h1 class="wow fadeInLeft animated" data-wow-duration="1.3s"><?php echo $heading; ?></h1>
                                    <p class="pe-lg-5 wow fadeInLeft animated" data-wow-duration="1.3s" data-wow-delay=".4s"><?php echo $content; ?></p>
                                    <a href="<?php echo $button_link ?>" class="theme-btn me-sm-4 wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay=".8s"><?php echo $button_text ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            endwhile;
        endif;
        ?>


    </div>

</section>