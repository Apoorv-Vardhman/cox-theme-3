<?php 
global $wpdb;
$table_name = $wpdb->prefix . "cox_setting";
$isCard = false;
try{
    $sql = "select * from $table_name where type='home'";
    $homeResult = $wpdb->get_results( $wpdb->prepare($sql) );
    foreach ($homeResult as $item){
        if($item->name == "home_card_enable"){
            if($item->value=="true"){
                $isCard = true;
            }else{
                $isCard = false;
            }
        }
    }

} catch (Exception $e) {
    $isCard = false;
}

$args=array('post_type' => 'home_card');
$query= new WP_Query($args);
if($query->have_posts() && $isCard):
    ?>
    <div class="container">
        <div class="row">
            <?php
            while ($query->have_posts()):
                $query->the_post();
                // Retrieves the ID of the current item in the WordPress Loop.
                $heading = get_field('heading',get_the_ID());
                $content = get_field('content',get_the_ID());
                $image = get_the_post_thumbnail_url();
                ?>
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-services-box sb1">
                        <?php
                        if($image):
                            ?>
                            <div class="icon">
                                <img src="<?php echo $image; ?>" alt="">
                            </div>
                        <?php endif; ?>
                        <div class="content">
                            <h3><?php echo $heading; ?></h3>
                            <p><?php echo $content; ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile;  ?>
        </div>

    </div>
<?php
endif;
?>