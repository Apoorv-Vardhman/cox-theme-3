<?php
global $wpdb;
$table_name = $wpdb->prefix . "cox_setting";
$isAboutEnable = false;
$home_youtube_link = "";
$home_title = "";
$home_detail_title = "";
$home_block_quote = "";
$home_content = "";

try{
    $sql = "select * from $table_name where type='home'";
    $homeResult = $wpdb->get_results( $wpdb->prepare($sql) );
    foreach ($homeResult as $item) {
        if($item->name == "home_about_enable"){
            if($item->value=="true"){
                $isAboutEnable = true;
            }else{
                $isAboutEnable = false;
            }
        }
        if($item->name == "home_content"){
            $home_content = $item->value;
        }
        if($item->name == "home_youtube_link"){
            $home_youtube_link = $item->value;
        }
        if($item->name == "home_title"){
            $home_title = $item->value;
        }
        if($item->name == "home_detail_title"){
            $home_detail_title = $item->value;
        }
        if($item->name == "home_block_quote"){
            $home_block_quote = $item->value;
        }
    }
}catch (Exception $exception){
    $isAboutEnable = false;
}

if($isAboutEnable):
    ?>
    <section class="about-section section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-12 pe-xl-0">
                    <div class="about-cover-bg bg-cover me-xl-5" >
                        <iframe title="Disasters Can Happen To Anyone" width="100%" height="608" src="<?php echo $home_youtube_link ?>"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-xl-6 mt-5 mt-lg-0 col-12">
                    <div class="block-contents">
                        <div class="section-title">
                            <span><?php echo $home_title; ?></span>
                            <h2><?php echo $home_detail_title ?></h2>
                        </div>
                        <blockquote><?php echo $home_block_quote; ?></blockquote>
                    </div>
                    <?php echo $home_content; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>